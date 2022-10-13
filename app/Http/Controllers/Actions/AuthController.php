<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

/**
 * Class AuthController
 * @package App\Http\Controllers\Actions
 */
class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|JsonResponse|RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:3|max:30',
        ]);

        if ($validator->fails()) {
            if ($validator->errors()->first('email')) {
                $error = 'Email обязательное поле';
            } elseif ($validator->errors()->first('password')) {
                $error = 'Пароль обязательное поле';
            } else {
                $error = 'Произошла ошибка, попробуйте еще раз';
            }
            return $this->respondWithStatusAndMessage('error', $error, 200);
        }

        if (User::where('email', $request->email)->first()) {
            return response()->json([
                'status' => 'error',
                'data' => [
                    'message' => 'Указанный e-mail уже зарегестрирован.'
                ]
            ], 200);
        }

        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('auth'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|JsonResponse|RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:3|max:30',
        ]);

        if ($validator->fails()) {
            if ($validator->errors()->first('email')) {
                $error = 'Email обязательное поле';
            } elseif ($validator->errors()->first('password')) {
                $error = 'Пароль обязательное поле';
            } else {
                $error = 'Произошла ошибка, попробуйте еще раз';
            }
            return $this->respondWithStatusAndMessage('error', $error, 200);
        }

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return $this->respondWithStatusAndMessage('error', 'Не удалось авторизоваться. Проверьте правильность логина и пароля.', 200);
        }

        return redirect(route('index'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect(route('auth'));
    }
}

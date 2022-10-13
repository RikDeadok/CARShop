<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     *
     * @param $data
     * @param int $statusCode
     * @param array $headers
     * @return JsonResponse
     */
    protected function respond($data, $statusCode = 200, $headers = [])
    {
        return response()->json($data, $statusCode, $headers);
    }

    /**
     *
     * @param $status
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    protected function respondWithStatusAndMessage($status, $message, $code)
    {
        $data = [
            'status' => $status,
            'data' =>[
                'message' => $message
            ]
        ];
        return $this->respond($data, $code);
    }
}

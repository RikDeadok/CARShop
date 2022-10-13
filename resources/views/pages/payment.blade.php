@extends('layouts.base')

@section('title', ': Подтверждение')

@section('body')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-4">
                <form>
                    <h1>Подтвердите заказ:</h1>
                    <p>Общая стоимость заказа: <span>71245р.</span></p>
                    <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с Вами связаться</p>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-25">Ваше имя</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="Имя">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-25">Телефон</span>
                        <input type="tel" aria-label="Phone" class="form-control" placeholder="+7-987-111-15-15">
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

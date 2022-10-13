@extends('layouts.base')

@section('title', ': Регистрация')

@section('body')
    <div class="container mt-3">
        <div class="row">

            <div class="col-4">
            </div>

            <div class="col-4">
                <form class="row g-3 mt-3" action="{{route('auth.registration')}}" method="GET">
                    <h3 class="mt-5">Пожалуйста зарегистрируйтесь</h3>
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">

                        <label for="inputPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <label for="inputName1" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="inputName1" name="name1">

                        <label for="inputName2" class="form-label">Отчество</label>
                        <input type="text" class="form-control" id="inputName2" name="name2">

                        <label for="inputName3" class="form-label">Фамилия</label>
                        <input type="text" class="form-control" id="inputName3" name="name3">
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <label for="inputStreet" class="form-label">Улица</label>
                        <input type="text" class="form-control" id="inputStreet" name="street" placeholder="ул. Мира">

                        <label for="inputAddress1" class="form-label">Дом</label>
                        <input type="text" class="form-control" id="inputAddress1" name="address1" placeholder="20/1">

                        <label for="inputAddress2" class="form-label">квартира</label>
                        <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="54">

                        <label for="inputCity" class="form-label">Город</label>
                        <input type="text" class="form-control" id="inputCity" name="city">

                        <label for="inputRegion" class="form-label">Область</label>
                        <input type="text" class="form-control" id="inputRegion" name="region">

                        <label for="inputZip" class="form-label">Почтовый индекс</label>
                        <input type="text" class="form-control" id="inputZip" name="zip">
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" checked id="formAgreement" name="agreement" class="">
                        <label for="formAgreement" class="form__label"><span>Я даю свое согласие на обработку персональных данных в соответствие с <a href="{{route('documents')}}">Условиями</a>*</span></label>
                    </div>

                    <button type="submit" class="btn btn-primary mb-5">Зарегистрироваться</button>
                    @csrf
                </form>
            </div>

            <div class="col">
            </div>

        </div>
    </div>
@endsection

@extends('layouts.base')

@section('title', ': Продукт')

@section('body')
    <div class="container mt-3">
        <div class="row mt-4">
            <div class="col">
                <h1>{{$product->name}}</h1>
            </div>
            <small>art: {{$product->article}}</small>
        </div>

        <div class="row mt-5">
            <div class="col-6">
                @if($product->first_photo)
                <img src="{{$product->first_photo->photo}}" class="img-fluid  border" alt="...">
                @else
                    <div class="no-photo-large"></div>
                @endif
            </div>
            <div class="col ms-5">
                <h1>${{$product->price}}</h1>
                <button type="button" class="btn btn-primary btn-lg mt-3">Добавить в корзину</button>
                <p class="mt-3">Доставка: 3 - 7 дней</p>
                <p class="mt-3">Продавец: Валентин</p>
            </div>
            <h1 class="mt-5">Описание</h1>
            <p>{{$product->description}}</p>
        </div>
    </div>
@endsection

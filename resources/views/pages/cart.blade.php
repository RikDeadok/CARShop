@extends('layouts.base')

@section('title', ': Корзина')

@section('body')
    <div class="container mt-3">
        <table class="table table-hover">
            <caption>ИТОГО:</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Стоимость</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">1</th>
                    @if($product->first_photo)
                    <td><img src="{{$product->first_photo->photo}}" class="card-img-top" style="width: 3rem; height: 3rem" alt="...">{{$product->name}}</td>
                    @else
                    <td>{{$product->name}}</td>
                    @endif
                    <td>1</td>
                    <td>${{$product->price}}</td>
                    <td>${{$product->price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{route('payment')}}" role="button">Оформить заказ</a>
    </div>
@endsection

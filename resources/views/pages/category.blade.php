@extends('layouts.base')

@section('title', ': Категории')

@section('body')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-2 border-end">
                <div class="position-sticky" style="top: 1.5rem;">

                @foreach($categories as $category)

                    @include('includes.categorymenu')

                @endforeach

                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-wrap">

                    @foreach($products as $product)

                        @include('includes.productcard')

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

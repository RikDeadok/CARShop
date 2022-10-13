@extends('layouts.base')

@section('title', ': Главная')

@section('body')
    <div class="container mt-3">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/main.jpg" class="img-fluid w-100 h-fix">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Двигатель</h1>
                            <p>Большой выбор двигателей внутреннего сгорания</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Подробнее...</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/main2.jpg" class="img-fluid w-100 h-fix">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Шины</h1>
                            <p>Шины для Вашего автомобиля на любой сезон</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Подробнее...</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/main3.jpg" class="img-fluid w-100 h-fix">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Оптика</h1>
                            <p>Придайте своему автомобилю агрессивности с новой оптикой</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Подробнее...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="section">

        </div>
    </div>
@endsection

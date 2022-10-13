<header>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start small mt-1">
            <div class="pe-3 p border-end">
                <i class="bi-geo-alt pe-2" style="font-size: 1rem;"></i>
                Тольятти
            </div>
            <div class="px-3 border-end">
                Адрес
            </div>
            <div class="ps-3 me-lg-auto">
                <i class="bi-telephone pe-2" style="font-size: 1rem;"></i>
                8-(987)900-50-50
            </div>
            <ul class="nav d-flex flex-wrap align-items-center justify-content-center">
                @if(Auth::check())
                    <h5 class="ms-3 mb-0">
                        Здравствуйте, Сергей!
                    </h5>
                    <div class="dropdown text-end ms-3">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                            <li><a class="dropdown-item" href="{{route(('profile'))}}"><i class="bi-gear pe-2" style="font-size: 1rem;"></i>Профиль</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route(('auth.logout'))}}"><i class="bi-box-arrow-right pe-2" style="font-size: 1rem;"></i>Выйти</a></li>
                        </ul>
                    </div>
                @else
                    <li class="nav-item"><a href="{{route(('registration'))}}" class="nav-link link-dark px-2">Регистрация</a></li>
                    <li class="nav-item"><a href="{{route('auth')}}" class="btn btn-dark btn-sm px-2"><i class="bi-person pe-2" style="font-size: 1rem;"></i>Войти</a></li>
                @endif
            </ul>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{route('index')}}" class="d-flex align-items-center mb-2 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-1">CARShop</span>
            </a>
            @if(Auth::check())
            <ul class="nav">
                <li class="nav-item ms-3">
                    <a href="{{route('wishlist')}}" class="btn btn-outline-dark position-relative">
                        <i class="bi-heart pe-2" style="font-size: 1rem;"></i>
                        Желаемое
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            5
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a href="{{route('cart')}}" class="btn btn-outline-dark position-relative">
                        <i class="bi-cart3 pe-2" style="font-size: 1rem;"></i>
                        Моя корзина
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            2
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            </ul>
            @endif
        </div>
    </div>

    <div class="bg-gradient bg-dark text-white border-top border-secondary border-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0">
                    <li><a href="{{route('category', ['slug' => 'tables'])}}" class="nav-link link-light me-5 ps-0"><i class="bi-list pe-2" style="font-size: 1rem;"></i>Каталог</a></li>
                    <li><a href="{{route('garage')}}" class="nav-link link-light me-5"><i class="bi-house pe-2" style="font-size: 1rem;"></i>В гараж</a></li>
                    <li><a href="{{route('forum')}}" class="nav-link link-light me-5"><i class="bi-people pe-2" style="font-size: 1rem;"></i>Форум</a></li>
                    <li><a href="{{route('club')}}" class="nav-link link-light me-5"><i class="bi-speedometer2 pe-2" style="font-size: 1rem;"></i>Клуб</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

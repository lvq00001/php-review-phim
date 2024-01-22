<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đánh giá Phim</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
        <div class="container-fuild">
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow mb-2 px-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-film" viewBox="0 0 16 16">
                            <path
                                d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z" />
                        </svg>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="me-2 mt-2" action="{{url('search-movies')}}" method="get">
                            {{csrf_field()}}
                            <div class="input-group input-group-sm">
                                <input type="text" name="title" class="form-control" placeholder="Tìm theo tên phim"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="input-group-text" id="basic-addon2" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav me-lg-5 mt-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('intro')}}">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('policies')}}">Chính sách</a>
                            </li>
                        </ul>
                        <div class="home_page-logout">
                            <ul class="navbar-nav mt-2 me-auto">
                                <li class="nav-item">
                                    @if (Auth::check())
                                    <a class="nav-link text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ Auth::user()->name }}
                                        <span class="text-danger">
                                            (Đăng xuất)
                                        </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @else
                                    <a class="nav-link text-primary" href="/login">Đăng Nhập / Đăng ký</a>
                                    @endif
                                </li>
                            </ul>
                        </div>




                    </div>

                </div>
            </nav>
            </header>
        </div>
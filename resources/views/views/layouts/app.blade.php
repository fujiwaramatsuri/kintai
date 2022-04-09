<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    /* ログインテキストボックス */
.form-control {
    display: block;
    appearance: none;
    outline: 0;
    border: 1px solid fade(white, 40%);
    background-color: fade(white, 20%);
    width: 250px;
    border-radius: 3px;
    padding: 10px 15px;
    margin: 0 auto 10px auto;
    display: block;
    text-align: center;
    font-size: 18px;
    }
    /* ログインタイトル */
.card-header {
        text-align:center;
        margin-top:130px;
        margin-bottom:20px;
    }
    /* ボタン */
.btn-primary {
        display: flex;
        margin:auto;
		appearance:none;
		outline: 0;
		background-color:;
		border: 0;
		padding: 10px 15px;
		color: @prim;
		border-radius: 3px;
		width: 250px;
		cursor: pointer;
		font-size: 18px;
		transition-duration: 0.25s;
        justify-content: center;
    }
.nav-item{
    /* display: block; */
    text-align:center;
    }
    /* ヘッダー */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    padding: 0 30px;
    background-color: #fff;
    position: sticky;
    left: 0;
    top: 0;
    z-index: 1;
}
.header-nav {
    /* display: flex; */
    text-align: right;
    margin: 0 0 0 auto;
}

.header-nav-list {
    /* display: flex; */
    font-weight: bold;
    text-align: right;
    /* margin: 0 0 0 auto; */
    /* border:1px solid red !important; */
}


.header-nav-item {
    /* display: flex; */
    /* margin: 0  0 0 auto; */
    margin-right: 30px;
}
.nav-linkA {
    text-align: center;
}

/* ホームボタン */
.card-body-home{
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    width: 900px;
    height: 500px;
    padding: 10px 15px;
}
.home-btn {
    width: 40%;
    height: 45%;
	margin: auto;
    font-size: 30px;
}
 * {
 /* border:1px solid red !important; */
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <!-- <li class="nav-item"> -->
                                    <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                                <!-- </li> -->
                            @endif

                            @if (Route::has('register'))
                                <!-- <li class="nav-item"> -->
                                    <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
                                <!-- </li> -->
                            @endif

                        @else
<!-- header -->
<heder class="heder">
    <nav class="heder-nav">
        <ul class="header-nav-list">
            <span class="header-nav-item">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    ホーム
                </a>
            </span>
            <!-- 日付一覧　行先ログアウト状態 -->
            <span class="header-nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    日付一覧
                </a>
            </span>
            <span class="header-nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    ログアウト
                </a>
            </span>
        </ul>
    </nav>
</header>
                            <!-- <li class="nav-item dropdown"> -->
                                <p id="navbarDropdown" class="nav-linkA dropdown-toggle" href="#" role="text" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->name}}さんお疲れ様です!
                                </a>

                                <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                    <!-- <a class="dropdown-item" href="{{ route('logout') }}" -->
                                       <!-- onclick="event.preventDefault(); -->
                                                     <!-- document.getElementById('logout-form').submit();"> -->
                                        <!-- {{ __('Logout') }} -->
                                    <!-- </a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

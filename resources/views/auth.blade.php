<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Авторизация</title>
    <link href="{{ asset('css/style/tabler.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style/tabler-flags.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style/tabler-payments.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style/tabler-vendors.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style/demo.min.css?1684106062') }}" rel="stylesheet"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body  class=" d-flex flex-column">
<script src="{{asset('jss/demo-theme.js')}}"></script>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Авторизация</h2>
                <form action="{{ route('login') }}" method="post" autocomplete="off" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email адрес</label>
                        <input type="email" name="email" class="form-control" placeholder="your@mail.ru" autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Пароль
                            <span class="form-label-description">
                                <a href="{{route('forgot-password')}}">Забыл пароль</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password" class="form-control"  placeholder="Ваш пароль"  autocomplete="off">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Показать пароль" data-bs-toggle="tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                </a>
                            </span>

                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input"/>
                            <span class="form-check-label">Запомнить это устройство</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Авторизоваться</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center text-muted mt-3">
            Нету аккаунта? <a href="{{route('registration')}}" tabindex="-1">Зарегестрироваться</a>
        </div>
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{asset('jss/tabler.min.js')}}" defer></script>
<script src="{{asset('jss/demo.min.js')}}" defer></script>
</body>
</html>

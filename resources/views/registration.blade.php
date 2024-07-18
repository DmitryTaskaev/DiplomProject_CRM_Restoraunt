<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Регистрация</title>
    <!-- CSS files -->
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
        <form class="card card-md" action="{{ route('registration') }}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Создание нового аккаунта</h2>
                <div class="mb-3">
                    <label class="form-label">Имя</label>
                    <input type="text" name="name" class="form-control" placeholder="Введите имя">
                </div>
                <div class="mb-3">
                    <label class="form-label">Фамилия</label>
                    <input type="text" name="family" class="form-control" placeholder="Введите фамилию">
                </div>
                <div class="mb-3">
                    <label class="form-label">Номер телефона</label>
                    <input type="text" name="phone" class="form-control" data-mask="0 (000) 0000-000" data-mask-visible="true" placeholder="(00) 0000-0000" autocomplete="off" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email адрес</label>
                    <input type="email" name="email" class="form-control" placeholder="Введите email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Пароль</label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password" class="form-control"  placeholder="Пароль"  autocomplete="off">
                        <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Показать пароль" data-bs-toggle="tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                  </a>
                </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Повтор пароля</label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password_confirmation" class="form-control"  placeholder="Повтор пароля"  autocomplete="off">
                        <span class="input-group-text">
                  </a>
                </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Согласен с <a href="./terms-of-service.html" tabindex="-1">условиями и политикой</a>.</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Зарегестрироваться</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            У вас уже есть аккаунт? <a href="{{route('login')}}" tabindex="-1">Авторизация</a>
        </div>
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{asset('jss/tabler.min.js')}}" defer></script>
<script src="{{asset('jss/demo.min.js')}}" defer></script>
</body>
</html>

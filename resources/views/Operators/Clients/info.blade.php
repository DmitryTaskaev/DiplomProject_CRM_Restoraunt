@extends('master')

@section('content')
    <?php

        $date;
        $count;
    ?>
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Информация о {{ $client->name }}
                        </h2>
                    </div>
                    <!-- Page title actions -->
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Информация</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Имя клиента</div>
                                <div class="datagrid-content">{{ $client->name }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Номер телефона клиента</div>
                                <div class="datagrid-content">{{ $client->phone }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Бонусный баланс</div>
                                <div class="datagrid-content">{{ $client->bonus_balance }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Адресс</div>
                                <div class="datagrid-content">–</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Количество заказов</div>
                                <div class="datagrid-content">{{ $client->orders->count() }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Дата регистрации</div>
                                <div class="datagrid-content">{{ $client->created_at->format('d.m.Y') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Общая сумма заказов</div>
                                <div class="datagrid-content">{{ $client->orders->sum('price') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Последний заказ</div>
                                <div class="datagrid-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Последние заказы
                            </h2>
                        </div>
                        <!-- Page title actions -->
                    </div>
                </div>
            </div>
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                    <tr>
                                        <th>Адресс</th>
                                        <th>Дата</th>
                                        <th>Сумма</th>
                                        <th class="w-1"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($orders as $order)
                                            @if($order->client_id == $client->id)
                                                <?php
                                                    $date = $order->created_at->format('d.m.Y');
                                                ?>
                                                <tr>
                                                    <td>{{ $order->adress }}</td>
                                                    <td class="text-muted">
                                                        {{ $order->created_at->format('d.m.Y') }}
                                                    </td>
                                                    <td class="text-muted"><a href="#" class="text-reset">{{ $order->price }}</a></td>
                                                    <td>
                                                        <a href="#">Информация</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Комментарии к клиенту</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

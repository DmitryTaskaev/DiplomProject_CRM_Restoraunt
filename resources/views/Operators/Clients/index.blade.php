@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Список клиентов
                        </h2>
                    </div>
                    <!-- Page title actions -->
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Список всех клиентов</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Показать
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                                    </div>
                                    клиентов
                                </div>
                                <div class="ms-auto text-muted">
                                    Поиск:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Бонусный баланс</th>
                                    <th>Последний заказ</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $cli)
                                    <tr>
                                        <td>{{$cli->name}}</td>
                                        <td class="text-muted">
                                            {{$cli->phone}}
                                        </td>
                                        <td class="text-muted"><a href="#" class="text-reset">{{$cli->bonus_balance}}</a></td>
                                        <td class="text-muted">
                                            Date
                                        </td>
                                        <td>
                                            <a href="{{ route('client.show', $cli->id) }}">Информация</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

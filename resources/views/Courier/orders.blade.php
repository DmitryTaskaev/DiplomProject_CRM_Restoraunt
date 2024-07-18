@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Список моих заказов
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Заказы</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                <tr>
                                    <th>Адресс</th>
                                    <th>Оплата</th>
                                    <th>Статус</th>
                                    <th>Сумма</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->orders as $order)
                                    <tr>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $order->adress }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $order->payment }}
                                        </td>
                                        <td>
                                            @if($order->status == 1)
                                                <span class="badge bg-secondary me-1"></span> Не принят
                                            @elseif($order->status == 2)
                                                <span class="badge bg-warning me-1"></span> Готовится
                                            @elseif($order->status == 3)
                                                <span class="badge bg-warning me-1"></span> Передан курьеру
                                            @elseif($order->status == 4)
                                                <span class="badge bg-success me-1"></span> Доставлен
                                            @endif
                                        </td>
                                        <td>
                                            {{$order->price}}
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

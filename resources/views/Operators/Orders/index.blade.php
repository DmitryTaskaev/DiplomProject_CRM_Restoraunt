@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Активные заказов
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <a href="{{route('orders.create')}}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                            Создать заказ
                        </a>
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
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Показать
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                                    </div>
                                    продуктов
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
                            <table class="table table-vcenter card-table">
                                <thead>
                                <tr>
                                    <th>Имя клиента</th>
                                    <th>Адрес</th>
                                    <th>Статус</th>
                                    <th>Курьер</th>
                                    <th>Сумма заказа</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar me-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium"><a href="{{ route('client.show', $order->client->id) }}" class="text-reset">{{ $order->client->name }}</a></div>
                                                    <div class="text-muted">{{ $order->client->phone }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>{{ $order->adress }}</div>
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
                                        <td class="text-muted">
                                            @if($order->courier == NULL)
                                                Не определен
                                            @else
                                                {{ $order->courier->name }} {{ $order->courier->family }}
                                            @endif
                                        </td>
                                        <td>
                                            <div>{{ $order->price }} р</div>
                                        </td>
                                        <td>
                                            <a href="{{ route('orders.show', $order->id) }}">Информация</a>
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

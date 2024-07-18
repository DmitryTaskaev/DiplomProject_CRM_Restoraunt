@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="row">
                        <h2 class="page-title">
                            Заказ #{{$order->id}}
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
                                <div class="datagrid-title">Адресс доставки</div>
                                <div class="datagrid-content">{{ $order->adress }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Курьер</div>
                                <div class="datagrid-content">
                                    @if($order->courier == NULL)
                                        Не определен
                                    @else
                                        {{ $order->courier->name }} {{ $order->courier->family }}
                                    @endif</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Дата заказа</div>
                                <div class="datagrid-content">{{ $order->created_at->format('d.m.Y') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Сумма заказа</div>
                                <div class="datagrid-content">{{ $order->products->sum('price') }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Оплата</div>
                                @if($order->payment == 1)
                                    <div class="datagrid-content">Картой при получении</div>
                                @elseif($order->payment == 2)
                                    <div class="datagrid-content">Наличкой</div>
                                @elseif($order->payment == 3)
                                    <div class="datagrid-content">Оплачен</div>
                                @endif

                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Дата регистрации</div>
                                <div class="datagrid-content"></div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Общая сумма заказов</div>
                                <div class="datagrid-content"></div>
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
                                Блюда
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
                                        <th>Название</th>
                                        <th>Количество</th>
                                        <th>Сумма</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->products as $prod)
                                            <tr>
                                                <td>{{ $prod->name }}</td>
                                                <td>{{ $prod->pivot->count }}</td>
                                                <td class="text-muted"><a href="#" class="text-reset">{{ $prod->price }}</a></td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Карточка клиента</h3>
                                <dl class="row">
                                    <dt class="col-5">Имя клиента</dt>
                                    <dd class="col-7">{{ $order->client->name }}</dd>
                                    <dt class="col-5">Номер телефона</dt>
                                    <dd class="col-7">{{ $order->client->phone }}</dd>
                                    <dt class="col-5">Дата регистрации:</dt>
                                    <dd class="col-7">{{ $order->client->created_at->format('d.m.Y') }}</dd>
                                    <dt class="col-5">Бонусный баланс</dt>
                                    <dd class="col-7">{{ $order->client->bonus_balance }}</dd>
                                    <dt class=" text-muted"><a href="{{ route('client.show', $order->client->id) }}" class="text-reset">Информация о клиенте</a></dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

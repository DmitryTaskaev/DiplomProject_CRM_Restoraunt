@extends('master')

@section('content')

        <div class="page-wrapper">
            <!-- Page header -->
            <form action="{{route('orders.store')}}" method="POST">
                @csrf
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <h2 class="page-title">
                                    Добавление заказа
                                </h2>
                            </div>
                            <!-- Page title actions -->
                            <div class="col-auto ms-auto d-print-none">
                                <button type="submit" class="btn btn-primary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                                    Добавить
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page body -->
                <div class="page-body">
                    <div class="container-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <h1>Основные параметры</h1>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Введите адресс</label>
                                            <div>
                                                <input type="text" name="adress" class="form-control" aria-describedby="emailHelp" placeholder="Введите адресс">
                                                <small class="form-hint">Необходимо ввести адресс</small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-label">Выберете курьера</div>
                                            <div>
                                                <select class="form-select" name="courier">
                                                    <option>Не выбрано</option>
                                                    @foreach($couriers as $cur)
                                                        @if($cur->role_id == 2)
                                                            <option value="{{ $cur->id }}">{{ $cur->name }} {{ $cur->family }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                                <small class="form-hint">Необходимо выбрать курьера</small>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Выберете клиента</label>
                                            <select class="form-select" name="client">
                                                <option>Не выбрано</option>
                                                @foreach($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                @endforeach

                                            </select>
                                            <small class="form-hint">Необходимо выбрать клиента</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Выбрать тип оплаты</label>
                                            <select class="form-select" name="payment">
                                                <option value="1">Картой при получении</option>
                                                <option value="1">Наличными</option>
                                                <option value="1">Оплачен</option>
                                            </select>
                                            <small class="form-hint">Необходимо выбрать тип оплаты</small>
                                        </div>
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
                                        Добавление блюд в заказ
                                    </h2>
                                </div>
                                <!-- Page title actions -->
                            </div>
                        </div>
                    </div>
                    <div class="container-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-4" id="productList">
                                    <div class="row g-4">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <div class="form-label">Выберете блюдо</div>
                                                <div>
                                                    <select class="form-select" name="product[1][product_id]">
                                                        @foreach($products as $prod)
                                                            <option value="{{ $prod->id }}">{{ $prod->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Указать количество позиций в чеке</label>
                                                <input type="text" class="form-control" name="product[1][count]" placeholder="Введите количество">
                                                <small class="form-hint">Если ничего не указать, по умолчанию будет одна позиция</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <p onclick="addProduct()" class="form-hint" style="cursor: pointer">Добавить товар</p>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>

<script>

    var i = 2;
    function addProduct() {
        var str = '<div class="form-row">\n' +
            '                        <div class="form-group col-md-6">\n' +
            '                                <label class="form-label">Товар</label>\n' +
            '                                <select name="product['+i+'][product_id]" class="form-control">\n' +
            '                                        @foreach($products as $product)<option value="{{$product->id}}">{{$product->name}}</option> @endforeach' +
            '                                    </select>\n' +
            '                            </div>\n' +
            '                        <div class="form-group col-md-6">\n' +
            '                                <label  class="form-label">Количество</label>\n' +
            '                                <input class="form-control" name="product['+i+'][count]" type="text">\n' +
            '                            </div>\n' +
            '                    </div>';

            var str1 = '<div class="row g-4" style="margin-top: 0px;">\n' +
                '<div class="col-sm-6 col-md-6">\n' +
                '<div class="mb-3">\n' +
                '<div class="form-label">Выберете блюдо</div>\n' +
                '<div>\n' +
                '<select class="form-select" name="product['+i+'][product_id]">\n' +
                ' @foreach($products as $prod) <option value="{{ $prod->id }}">{{ $prod->name }}</option> @endforeach' +
                '</select>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="col-sm-6 col-md-6">\n' +
                '<div class="mb-3">\n' +
                '<label class="form-label">Указать количество позиций в чеке</label>\n' +
                '<input type="text" class="form-control" name="product['+i+'][count]" placeholder="Введите количество">\n' +
                '<small class="form-hint">Если ничего не указать, по умолчанию будет одна позиция</small>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n';
        document.getElementById("productList").insertAdjacentHTML("beforeend", str1);
        i++;
    }
</script>
@endsection

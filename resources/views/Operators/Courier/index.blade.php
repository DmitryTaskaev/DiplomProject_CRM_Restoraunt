@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Список курьеров
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
                            <h3 class="card-title">Курьеры</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                <tr>
                                    <th>Имя курьера</th>
                                    <th>Заказов за всё время</th>
                                    <th>Статус</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex py-1 align-items-center">
                                            <span class="avatar me-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">Виталий кузька</div>
                                                <div class="text-muted"><a href="#" class="text-reset">89226171353</a></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        22
                                    </td>
                                    <td>
                                        <span class="badge bg-success me-1"></span> В смене
                                    </td>
                                    <td>
                                        <a href="#">Информация</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

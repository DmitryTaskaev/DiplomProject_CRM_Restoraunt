@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Список категорий
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <a href="{{route('category.create')}}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                            Добавить категорию
                        </a>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 15px;">
                        <div class="d-flex">
                            <div>
                                <h4 class="alert-title">Супер!</h4>
                                <div class="text-secondary">{{ session('success') }}</div>
                            </div>
                        </div>
                        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                @endif
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                <tr>
                                    <th>Номер категории</th>
                                    <th>Название категории</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $cat)
                                    <tr>
                                        <td data-label="Name">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="text-muted">{{$cat->id}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Title">
                                            <div>{{$cat->name}}</div>
                                        </td>
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Дейсвтие
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <a class="dropdown-item" href="{{ route('category.edit', $cat->id) }}">
                                                            Редактировать
                                                        </a>
                                                            <a type="submit" class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-danger{{$cat->id}}">
                                                                Удалить
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal modal-blur fade" id="modal-danger{{$cat->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-status bg-danger"></div>
                                                <div class="modal-body text-center py-4">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                                                    <h3>Вы уверены?</h3>
                                                    <div class="text-muted">Вы действительно хотите удалить данную категорию?</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="w-100">
                                                        <div class="row">
                                                            <form action="{{ route('category.destroy', $cat->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="col">
                                                                    <a href="#" class="btn w-100" data-bs-dismiss="modal">
                                                                        Отмена
                                                                    </a>
                                                                </div>
                                                                <div class="col">
                                                                    <button type="submit" href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                                                    Удалить
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

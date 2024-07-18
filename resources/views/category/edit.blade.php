@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Редактирование категории: {{ $category->name }}
                        </h2>
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
                <div class="card">
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-12">
                                <h1>Основные параметры</h1>
                            </div>
                            <div class="mb-3">
                                <form action="{{ route('category.update', $category->id ) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <label class="form-label">Название категории</label>
                                    <div>
                                        <input type="name" name="name" value="{{ $category->name }}" class="form-control" placeholder="Введите название категории" required>
                                        <small class="form-hint">Необходимо ввести название категории</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" style="margin-top: 10px;">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

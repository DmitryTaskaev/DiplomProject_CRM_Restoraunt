@extends('master')

@section('content')
    <div class="page-wrapper">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Добавление продукта
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <button type="submit" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                            Сохранить
                        </button>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Название блюда</label>
                                    <div>
                                        <input type="name" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Введите название блюда">
                                        <small class="form-hint">Необходимо указать название будущего блюда</small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">Выберете категорию</div>
                                    <div>
                                        <select class="form-select" name="category_id">
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-hint">Необходимо выбрать категорию блюда, если нету в списке, то добавить</small>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-label">Выбрать изоброжение</div>
                                        <div>
                                            <input type="file" class="form-control" name="image">
                                            <small class="form-hint">Необходимо выбрать изображение для отображения на странице заказа</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Указать стоимость порции</label>
                                    <div>
                                        <input type="text" class="form-control" name="price" placeholder="Введите стоимость">
                                        <small class="form-hint">Необходимо указать стоимость будущего блюда</small>
                                    </div>
                                </div>
                                    <div class="mb-3">
                                        <label class="form-label">Указать количество в порции</label>
                                        <input type="text" class="form-control" name="count_in" placeholder="Введите количество">
                                        <small class="form-hint">Необходимо указать количество в порции в шт.</small>
                                    </div>
                                </div>
                            <div class="col-12">
                                <h1>Описание, подача блюда</h1>
                            </div>


                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Ккал</label>
                                    <div>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" name="kkal" placeholder="Ввести количество Ккал">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Белки</label>
                                    <div>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" name="squirrels" placeholder="Ввести количество белков">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Жиры</label>
                                    <div>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" name="fats" placeholder="Ввести количество жиров">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Углеводы</label>
                                    <div>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" name="carbohydrates" placeholder="Ввести количество углеводов">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Введите описание</label>
                                    <textarea class="form-control" name="comment" rows="6" placeholder="Введите описание"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Введите состав</label>
                                    <textarea class="form-control" name="structure" rows="6" placeholder="Введите состав"></textarea>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection

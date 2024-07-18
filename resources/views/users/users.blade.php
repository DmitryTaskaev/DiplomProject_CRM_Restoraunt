@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Список всех продуктов
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <a href="#" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                            Добавить продукты
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
                            <h3 class="card-title">Продукты</h3>
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
                            <table class="table table-vcenter card-table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Maryjo Lebarree</td>
                                    <td class="text-muted">
                                        Civil Engineer, Product Management
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                                    <td class="text-muted">
                                        User
                                    </td>
                                    <td>
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Egan Poetz</td>
                                    <td class="text-muted">
                                        Research Nurse, Engineering
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                                    <td class="text-muted">
                                        Admin
                                    </td>
                                    <td>
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kellie Skingley</td>
                                    <td class="text-muted">
                                        Teacher, Services
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                                    <td class="text-muted">
                                        User
                                    </td>
                                    <td>
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Christabel Charlwood</td>
                                    <td class="text-muted">
                                        Tax Accountant, Engineering
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">ccharlwood8@nifty.com</a></td>
                                    <td class="text-muted">
                                        Owner
                                    </td>
                                    <td>
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Haskel Shelper</td>
                                    <td class="text-muted">
                                        Staff Scientist, Legal
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">hshelper9@woothemes.com</a></td>
                                    <td class="text-muted">
                                        Admin
                                    </td>
                                    <td>
                                        <a href="#">Edit</a>
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

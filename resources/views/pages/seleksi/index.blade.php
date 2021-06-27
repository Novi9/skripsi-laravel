@extends('layouts.app')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Seleksi
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">PERHITUNGAN DAN SELEKSI</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">

        </div>
    </div>
</div>
<div class="content-body">
    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="card p-2">
            <div class="row justify-content-between">
                <div class="col-2">
                    <fieldset class="">
                        <select class="custom-select" id="customSelect">
                            <option selected="">Filter By</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-2">
                    <fieldset class="position-relative has-icon-left input-divider-left">
                        <input type="text" class="form-control" id="iconLeft3" placeholder="Search">
                        <div class="form-control-position">
                            <i class="feather icon-search"></i>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive" style="overflow-x: hidden;">
                            <table id="datatable" class="table zero-configuration table-striped table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Nilai Akhir</th>
                                        <th>Peringkat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> Novita Pratiwi </td>
                                        <td> Test 123 </td>
                                        <td> Pertama (1) </td>
                                        <td>
                                                <button type="button" class="btn btn-icon btn-warning btn-relief-warning mr-1 mb-1 waves-effect waves-light editBtn" data-toggle="modal" data-target="#editBarang">
                                                    <i class="feather icon-eye"></i>
                                                </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td> Novita Pratiwi </td>
                                        <td> Test 123 </td>
                                        <td> Kedua (2) </td>
                                        <td>
                                                <button type="button" class="btn btn-icon btn-warning btn-relief-warning mr-1 mb-1 waves-effect waves-light editBtn" data-toggle="modal" data-target="#editBarang">
                                                    <i class="feather icon-eye"></i>
                                                </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td> Novita Pratiwi </td>
                                        <td> Test 123 </td>
                                        <td> Ketiga (3) </td>
                                        <td>
                                                <button type="button" class="btn btn-icon btn-warning btn-relief-warning mr-1 mb-1 waves-effect waves-light editBtn" data-toggle="modal" data-target="#editBarang">
                                                    <i class="feather icon-eye"></i>
                                                </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
</div>
@endsection

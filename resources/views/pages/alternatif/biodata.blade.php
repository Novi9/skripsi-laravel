@extends('layouts.app')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Alternatif
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">DATA ALTERNATIF</h2>

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
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive" style="overflow-x: hidden;">
                                <table id="datatable" class="table zero-configuration table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Alternatif</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Novita Pratiwi </td>
                                            <td> Test 123 </td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-warning btn-relief-warning mr-1 mb-1 waves-effect waves-light editBtn" data-toggle="modal" data-target="#editBarang">
                                                    <i class="feather icon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-danger btn-relief-danger mr-1 mb-1 waves-effect waves-light hapusBtn" data-toggle="modal" data-target="#hapusBarang">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> Novita Pratiwi </td>
                                            <td> Test 123 </td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-warning btn-relief-warning mr-1 mb-1 waves-effect waves-light editBtn" data-toggle="modal" data-target="#editBarang">
                                                    <i class="feather icon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-danger btn-relief-danger mr-1 mb-1 waves-effect waves-light hapusBtn" data-toggle="modal" data-target="#hapusBarang">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> Novita Pratiwi </td>
                                            <td> Test 123 </td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-warning btn-relief-warning mr-1 mb-1 waves-effect waves-light editBtn" data-toggle="modal" data-target="#editBarang">
                                                    <i class="feather icon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-danger btn-relief-danger mr-1 mb-1 waves-effect waves-light hapusBtn" data-toggle="modal" data-target="#hapusBarang">
                                                    <i class="feather icon-trash-2"></i>
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
        </div>
    </section>

    <!--/ Zero configuration table -->
</div>
@endsection
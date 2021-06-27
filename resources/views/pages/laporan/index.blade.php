@extends('layouts.app')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Laporan
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">LAPORAN SELEKSI</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">

        </div>
    </div>
</div>
<div class="card p-2">
    <div class="row justify-content-end">
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

<div class="card">
    <div class="card-content">
        <div class="card-body card-dashboard">
            <div class="table-responsive" style="overflow-x: hidden;">
                <table id="datatable" class="table zero-configuration table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelamar</th>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> Novita Pratiwi </td>
                            <td> Test 123 </td>
                            <td>Tidak Ada</td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> Novita Pratiwi </td>
                            <td> Test 123 </td>
                            <td>Tidak Ada</td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> Novita Pratiwi </td>
                            <td> Test 123 </td>
                            <td>Tidak Ada</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <button type="button" class="btn btn-relief-success mr-1 mb-1">Download</button>
        <button type="button" class="btn btn-relief-success mr-1 mb-1">Print</button>
    </div>
</div>
@endsection

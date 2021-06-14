@extends('layouts.guest')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Home
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Home</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">
        </div>
    </div>
</div>

<section id="flat-buttons">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">SELAMAT DATANG ADMIN</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-flat-primary mr-1 mb-1">Home</button>
                                <button type="button" class="btn btn-flat-success mr-1 mb-1">Success</button>
                                <button type="button" class="btn btn-flat-info mr-1 mb-1">Info</button>
                                <button type="button" class="btn btn-flat-warning mr-1 mb-1">Warning</button>
                                <button type="button" class="btn btn-flat-danger mr-1 mb-1">Danger</button>
                                <button type="button" class="btn btn-flat-light mr-1 mb-1">Light</button>
                                <button type="button" class="btn btn-flat-dark mr-1 mb-1">Dark</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content-body">
    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-3">
                        <h4 class="card-title justify-content-center">SELAMAT DATANG ADMIN</h4>
                        <p class="mb-0">Penerapan Metode AHP dan TOPSIS Pada Seleksi Penerimaan Karyawan Baru Pada Ma'had Abu Ubaidah Bin Al-Jarrah Medan</p>
                    </div>

                </div>
            </div>
        </div>
    </section>



</div>
@endsection

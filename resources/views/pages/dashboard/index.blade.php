@extends('layouts.app')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Dashboard
@endsection

@section('content')

<div class="content-body">
    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-4">
                        <div class="row text-center">
                            <div class="col-12">
                                <h2 class="card-title text-uppercase">SELAMAT DATANG {{ auth()->user()->nama ?? " User" }}</h2>
                            </div>
                            <div class="col-12 mt-2">
                                <h4>Penerapan Metode AHP dan TOPSIS Pada Seleksi Penerimaan Karyawan Baru Pada Ma'had Abu Ubaidah Bin Al'Jarrah Medan</h4>
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

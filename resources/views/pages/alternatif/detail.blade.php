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
                <h2 class="content-header-title float-left mb-0">Home</h2>

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
                            <div class="row">
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Nama</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Nama" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Email</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Email" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">No.Handphone</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="No.Handphone" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Data Of Birth</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Data Of Birth" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Place Of Birth</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Place Of Birth" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Gender</label>
                                        <select class="custom-select" disabled="disabled" id="customSelect">
                                            <option selected="">Male</option>
                                            <option value="IT">Female</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Status</label>
                                        <select class="custom-select" disabled="disabled" id="customSelect">
                                            <option selected="">Married</option>
                                            <option value="IT">Single</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Address</Address></label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Alamat" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Education</label>
                                        <select class="custom-select" disabled="disabled" id="customSelect">
                                            <option selected="">Strata-1</option>
                                            <option value="IT">Diploma-3</option>
                                            <option value="IT">SMA/SMK</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Experience</Address></label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Pengalaman Kerja" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Majors</Address></label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Jurusan Anda" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">IPK</Address></label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan IPK" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Language</Address></label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Bahasa Yang Dikuasai" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">KTP</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload File KTP</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Pas Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload Pas Foto</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Ijazah</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload Ijazah</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Transkip Nilai</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload Transkip Nilai</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Portofolio</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload Portofolio</label>
                                        </div>
                                    </fieldset>
                                </div>
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

@extends('layouts.app')

@section('custom_styles')

@endsection

@section('prepend_script')

@endsection

@section('append_script')

@endsection

@section('title')
    Contoh UI
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Contoh UI</h2>

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
                    <div class="card-header pb-3">
                        <h4 class="card-title mb-2">Selamat Datang <span class="font-weight-bold"> Novita Pratiwi Binti Purwanto</span></h4>
                        <p class="mb-0">Ini ya contoh contoh ui nya aku buatin, semangat ngerjain nya biar cepat selesainya terus lulus wisuda abis itu nikah :-), kalau ada yg gak paham langsung tanya ya</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <!--/ Zero configuration table -->
</div>


<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Ini Contoh Table</h2>

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
                                            <th>Nama</th>
                                            <th>Alternatif</th>
                                            <th>Test</th>
                                            <th>Apalagi ya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Novita Pratiwi </td>
                                            <td> Test 123 </td>
                                            <td> Test Lagi </td>
                                            <td> Isi lah nanti sendiri mau apa </td>
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
                                            <td> Test Lagi </td>
                                            <td> Isi lah nanti sendiri mau apa </td>
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
                                            <td> Test Lagi </td>
                                            <td> Isi lah nanti sendiri mau apa </td>
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


<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Ini Contoh Inputan Textbox dan Input File</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">

        </div>
    </div>
</div>

<div class="content-body">
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Inputs</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Basic Input</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                    </fieldset>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="helpInputTop">Input text with help</label>
                                        <small class="text-muted">eg.<i>someone@example.com</i></small>
                                        <input type="text" class="form-control" id="helpInputTop">
                                    </fieldset>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="disabledInput">Disabled Input</label>
                                        <input type="text" class="form-control" id="disabledInput" disabled>
                                    </fieldset>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="helperText">With Helper Text</label>
                                        <input type="text" id="helperText" class="form-control" placeholder="Name">
                                        <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                                    </fieldset>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="disabledInput">Readonly Input</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't update me :P">
                                    </fieldset>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="disabledInput">Static Text</label>
                                        <p class="form-control-static" id="staticInput">email@pixinvent.com</p>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

    <!-- Input Style start -->
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Styles</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>To set rounded border to input box, use <code>.round</code> class and
                                        to set square border to input box, use <code>.sqaure</code> class alongwith <code>.form-control</code> class.</p>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="roundText">Rounded Input</label>
                                        <input type="text" id="roundText" class="form-control round" placeholder="Rounded Input">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="squareText">Square Input</label>
                                        <input type="text" id="squareText" class="form-control square" placeholder="square Input">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Style end -->

    <!-- Floating Label Inputs start -->
    <section id="floating-label-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Floating Label Inputs</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>For Flating Label Inputs, need to use <code>.form-label-group</code> class & add attribute <code>disabled</code> for disabled Floating Label Input.</p>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control" id="floating-label1" placeholder="Label-placeholder">
                                        <label for="floating-label1">Label-placeholder</label>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control" id="floating-label-disable" placeholder="Label-placeholder" disabled>
                                        <label for="floating-label-disable">Disabled-placeholder</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Floating Label Inputs end -->

    <!-- Basic File Browser start -->
    <section id="input-file-browser">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <label class="card-title">File input</label>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Simple File Input</label>
                                        <input type="file" class="form-control-file" id="basicInputFile">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">With Browse button</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
    <!-- Basic File Browser end -->

    <!-- validations start -->
    <section class="validations" id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Validation States</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>You can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="valid-state">Valid State</label>
                                    <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid" value="Valid" required>
                                    <div class="valid-feedback">
                                        This is valid state.
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="invalid-state">Invalid State</label>
                                    <input type="text" class="form-control is-invalid" id="invalid-state" placeholder="Invalid" value="Invalid" required>
                                    <div class="invalid-feedback">
                                        This is invalid state.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- validations end -->

    <!-- Tooltip validations start -->
    <section class="tooltip-validations" id="tooltip-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Validation States with Tootltips</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p><code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 col-12 mb-3">
                                        <label for="validationTooltip01">First name</label>
                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <label for="validationTooltip02">Last name</label>
                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 mb-3">
                                        <label for="validationTooltip03">City</label>
                                        <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tooltip validations end -->

    <!-- Input with Icons start -->
    <section id="input-with-icons">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input with Icons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>For Input Box with left side icon, use class <code>.has-icon-left</code> and for use divider between icon and input text box use <code>.input-divider-left</code> or <code>.input-divider-right</code> for left and right divider respectively.</p>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Left Icon
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="text" class="form-control" id="iconLeft1" placeholder="Icon Left, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-phone"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Right Icon
                                    </div>
                                    <fieldset class="form-group position-relative">
                                        <input type="text" class="form-control" id="iconLeft2" placeholder="Icon Right, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Left Icon with Divider
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left input-divider-left">
                                        <input type="text" class="form-control" id="iconLeft3" placeholder="Icon Left, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-phone"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Right Icon with divider
                                    </div>
                                    <fieldset class="form-group position-relative input-divider-right">
                                        <input type="text" class="form-control" id="iconLeft4" placeholder="Icon Right, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Floating Label Input with Icons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-2">
                                        Left Icon
                                    </div>
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="text" class="form-control" id="iconLabelLeft" placeholder="Icon Left, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-phone"></i>
                                        </div>
                                        <label for="iconLabelLeft">Icon Left, Default Input</label>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-2">
                                        Right Icon
                                    </div>
                                    <fieldset class="form-label-group form-group position-relative">
                                        <input type="text" class="form-control" id="iconLabelRight" placeholder="Icon Right, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
                                        </div>
                                        <label for="iconLabelRight">Icon Right, Default Input</label>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-2">
                                        Left Icon with Divider
                                    </div>
                                    <fieldset class="form-label-group form-group position-relative has-icon-left input-divider-left">
                                        <input type="text" class="form-control" id="iconLeftDivider" placeholder="Icon Left, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-phone"></i>
                                        </div>
                                        <label for="iconLeftDivider">Icon Left, Default Input</label>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="text-bold-600 font-medium-2 mb-2">
                                        Right Icon with divider
                                    </div>
                                    <fieldset class="form-label-group form-group position-relative input-divider-right">
                                        <input type="text" class="form-control" id="iconRightDivider" placeholder="Icon Right, Default Input">
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
                                        </div>
                                        <label for="iconRightDivider">Icon Right, Default Input</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input with Icons end -->

    <!-- Input Sizing start -->
    <section id="input-sizing">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Control Sizing Option</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp; <code>.form-control-sm</code> for Large, Small input box.</p>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Large
                                    </div>
                                    <input class="form-control form-control-lg" type="text" placeholder="Large Input">
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 my-2">
                                        Default
                                    </div>
                                    <input class="form-control" type="text" placeholder="Default Input">
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 my-2">
                                        Small
                                    </div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Small Input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Label Control Sizing Option</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp; <code>.form-control-sm</code> for Large, Small input box.</p>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Large
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control form-control-lg" id="label-large" placeholder="Large Input">
                                        <label for="label-large">Large Input</label>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Default
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control" id="label-default" placeholder="Default Input">
                                        <label for="label-default">Default Input</label>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Small
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control form-control-sm" id="label-small" placeholder="Small Input">
                                        <label for="label-small">Small Input</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Sizing end -->

</div>


<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Ini Contoh Select Box (Dropdown)</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">

        </div>
    </div>
</div>

<div class="content-body">
    <section class="bootstrap-select">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bootstrap Select</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="text-bold-600 font-medium-2">
                                        Basic Select
                                    </div>
                                    <p>Use <code>.form-control</code> class for basic select control.</p>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-bold-600 font-medium-2">
                                        Custom Select
                                    </div>
                                    <p>Use <code>.custom-select</code> class for Custom Select control.</p>
                                    <fieldset class="form-group">
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Open this menu</option>
                                            <option value="IT">IT</option>
                                            <option value="Blade Runner">Blade Runner</option>
                                            <option value="Thor Ragnarok">Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-bold-600 font-medium-2">
                                        Multiple Select
                                    </div>
                                    <p>Use <code>multiple</code> attribute for Multiple select control.</p>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="countrySelect" multiple="multiple">
                                            <option selected="selected">Square</option>
                                            <option>Rectangle</option>
                                            <option selected="selected">Rombo</option>
                                            <option>Romboid</option>
                                            <option>Trapeze</option>
                                            <option>Triangle</option>
                                            <option selected="selected">Polygon</option>
                                            <option>Regular polygon</option>
                                            <option>Circumference</option>
                                            <option>Circle</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="text-bold-600 font-medium-2">
                                        Disabled Select
                                    </div>
                                    <p>Use <code>disabled</code> attribute for disabled select control.</p>
                                    <fieldset class="form-group">
                                        <select class="form-control" disabled="disabled" id="disabledSelect">
                                            <option>Green</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Ini Contoh Tombol (Button)</h2>

            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">

        </div>
    </div>
</div>
<div class="content-body">
    <!-- Filled Buttons start -->
    <section id="basic-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Filled</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    <!-- basic buttons -->
                                    <button type="button" class="btn btn-primary mr-1 mb-1">Primary</button>
                                    <button type="button" class="btn btn-success mr-1 mb-1">Success</button>
                                    <button type="button" class="btn btn-info mr-1 mb-1">Info</button>
                                    <button type="button" class="btn btn-warning mr-1 mb-1">Warning</button>
                                    <button type="button" class="btn btn-danger mr-1 mb-1">Danger</button>
                                    <button type="button" class="btn btn-light mr-1 mb-1">Light</button>
                                    <button type="button" class="btn btn-dark mr-1 mb-1">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Filled Buttons end -->

    <!-- Outline Buttons start -->
    <section id="outline-button">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Border</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Use a class <code>.btn-outline-{color}</code> to quickly create a outline button.</p>
                                    <!-- Outline buttons -->
                                    <button type="button" class="btn btn-outline-primary mr-1 mb-1">Primary</button>
                                    <button type="button" class="btn btn-outline-success mr-1 mb-1">Success</button>
                                    <button type="button" class="btn btn-outline-info mr-1 mb-1">Info</button>
                                    <button type="button" class="btn btn-outline-warning mr-1 mb-1">Warning</button>
                                    <button type="button" class="btn btn-outline-danger mr-1 mb-1">Danger</button>
                                    <button type="button" class="btn btn-outline-light mr-1 mb-1">Light</button>
                                    <button type="button" class="btn btn-outline-dark mr-1 mb-1">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Outline Buttons end -->

    <!-- Flat Buttons start -->
    <section id="flat-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Flat</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Use <code>.btn-flat-{color}</code> to create a flat button</p>
                                    <button type="button" class="btn btn-flat-primary mr-1 mb-1">Primary</button>
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
    <!-- Flat Buttons end -->

    <!-- Gradient Buttons Start -->
    <section id="gradient-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gradient</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>use <code>bg-gradient-{color}</code> create gradient buttons</p>
                                    <!-- basic buttons -->
                                    <button type="button" class="btn bg-gradient-primary mr-1 mb-1">Primary</button>
                                    <button type="button" class="btn bg-gradient-success mr-1 mb-1">Success</button>
                                    <button type="button" class="btn bg-gradient-info mr-1 mb-1">Info</button>
                                    <button type="button" class="btn bg-gradient-warning mr-1 mb-1">Warning</button>
                                    <button type="button" class="btn bg-gradient-danger mr-1 mb-1">Danger</button>
                                    <button type="button" class="btn bg-gradient-dark mr-1 mb-1">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gradient Buttons End -->

    <!-- Relief Buttons start -->
    <section id="relief-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Relief</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Use <code>.btn-relief-{color}</code> to create a relief button</p>
                                    <button type="button" class="btn btn-relief-primary mr-1 mb-1">Primary</button>
                                    <button type="button" class="btn btn-relief-success mr-1 mb-1">Success</button>
                                    <button type="button" class="btn btn-relief-info mr-1 mb-1">Info</button>
                                    <button type="button" class="btn btn-relief-warning mr-1 mb-1">Warning</button>
                                    <button type="button" class="btn btn-relief-danger mr-1 mb-1">Danger</button>
                                    <button type="button" class="btn btn-relief-light mr-1 mb-1">Light</button>
                                    <button type="button" class="btn btn-relief-dark mr-1 mb-1">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Relief Buttons end -->

    <!-- Square Buttons start -->
    <section id="square-outline-button">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Square buttons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Use a class <code>.square</code> with outline button class to create square outline button.</p>
                                    <!-- Square buttons -->
                                    <button type="button" class="btn btn-outline-primary square mr-1 mb-1">Primary</button>
                                    <button type="button" class="btn btn-outline-success square mr-1 mb-1">Success</button>
                                    <button type="button" class="btn btn-outline-info square mr-1 mb-1">Info</button>
                                    <button type="button" class="btn btn-outline-warning square mr-1 mb-1">Warning</button>
                                    <button type="button" class="btn btn-outline-danger square mr-1 mb-1">Danger</button>
                                    <button type="button" class="btn btn-outline-light square mr-1 mb-1">Light</button>
                                    <button type="button" class="btn btn-outline-dark square mr-1 mb-1">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Square Buttons end -->

    <!-- Round Buttons start -->
    <section id="round-outline-button">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Round buttons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Use a class <code>.round</code> with outline button class to create round outline button.</p>
                                    <!-- Round buttons -->
                                    <button type="button" class="btn btn-outline-primary round mr-1 mb-1">Primary</button>
                                    <button type="button" class="btn btn-outline-success round mr-1 mb-1">Success</button>
                                    <button type="button" class="btn btn-outline-info round mr-1 mb-1">Info</button>
                                    <button type="button" class="btn btn-outline-warning round mr-1 mb-1">Warning</button>
                                    <button type="button" class="btn btn-outline-danger round mr-1 mb-1">Danger</button>
                                    <button type="button" class="btn btn-outline-light round mr-1 mb-1">Light</button>
                                    <button type="button" class="btn btn-outline-dark round mr-1 mb-1">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Round Buttons end -->


    <!-- Text Color Buttons start -->
    <section id="text-color-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Text Color </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p> You can change the font color of buttons, using <code>.text-{color}</code></p>
                                    <!-- text color buttons -->
                                    <button type="button" class="btn btn-flat-primary border-primary text-primary mr-1 mb-1">
                                        Primary
                                    </button>
                                    <button type="button" class="btn btn-flat-primary border-primary text-success mr-1 mb-1">
                                        Success
                                    </button>
                                    <button type="button" class="btn btn-flat-primary border-primary text-info mr-1 mb-1">
                                        Info
                                    </button>
                                    <button type="button" class="btn btn-flat-primary border-primary text-warning mr-1 mb-1">
                                        Warning
                                    </button>
                                    <button type="button" class="btn btn-flat-primary border-primary text-danger mr-1 mb-1">
                                        Danger
                                    </button>
                                    <button type="button" class="btn btn-flat-primary border-primary text-light mr-1 mb-1">
                                        Light
                                    </button>
                                    <button type="button" class="btn btn-flat-primary border-primary text-dark mr-1 mb-1">
                                        Dark
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Text Color Buttons end -->

    <!-- Basic Button Icon start -->
    <section id="basic-button-icons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Icon </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Buttons with Icon -->
                                    <button type="button" class="btn btn-outline-primary mr-1 mb-1"><i class="feather icon-home"></i> Home</button>
                                    <button type="button" class="btn btn-warning mr-1 mb-1"><i class="feather icon-star"></i> Star</button>
                                    <button type="button" class="btn btn-flat-success mr-1 mb-1"><i class="feather icon-check"></i>
                                        Done</button>
                                    <button type="button" class="btn btn-outline-primary mr-1 mb-1" disabled><i class="feather icon-home"></i>
                                        Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Button Icon end -->

    <!-- Icon Buttons start -->
    <section id="icon-only-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Icon Only</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>You can use <code>.btn-icon</code>. you can create a rounded button by using
                                <code>.rounded-circle</code> with <code>.btn-icon</code>. You can only use <code>.btn-icon</code> when
                                you only want icon in your button</p>
                            <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1"><i class="feather icon-search"></i></button>
                            <button type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="feather icon-inbox"></i></button>
                            <button type="button" class="btn btn-icon btn-flat-success mr-1 mb-1"><i class="feather icon-camera"></i></button>
                            <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1" disabled>
                                <i class="feather icon-search"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-search"></i></button>
                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning mr-1 mb-1"><i class="feather icon-inbox"></i></button>
                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1"><i class="feather icon-camera"></i></button>
                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-primary mr-1 mb-1" disabled>
                                <i class="feather icon-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon Buttons end -->

    <!-- Basic Button group start -->
    <section id="basic-button-group">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Button group</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Group a series of buttons together on a single line with the button group. Wrap a series of buttons
                                with <code>.btn</code> in <code>.btn-group</code>.</p>
                            <!-- button group -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-1">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Left</button>
                                        <button type="button" class="btn btn-danger">Middle</button>
                                        <button type="button" class="btn btn-info">Right</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-1">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary"><i class="feather icon-facebook"></i></button>
                                        <button type="button" class="btn btn-outline-danger"><i class="feather icon-twitter"></i></button>
                                        <button type="button" class="btn btn-outline-info"><i class="feather icon-instagram"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Button group end -->

    <!-- Sizes start -->
    <section id="sizes-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sizes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy larger or smaller buttons size.</p>
                                    <!-- simple sizes -->
                                    <button type="button" class="btn mr-1 mb-1 btn-primary btn-lg">Large</button>
                                    <button type="button" class="btn mr-1 mb-1 btn-primary">Default</button>
                                    <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm">Small</button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> with <code>.btn-outline-*</code> for outline btn in
                                        diffrent sizes</p>
                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-lg">Large</button>
                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary">Default</button>
                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-sm">Small</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sizes end -->

    <!-- Block level buttons start -->
    <section id="block-level-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Block level buttons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Block level buttons -->
                            <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn mb-1 btn-primary btn-lg btn-block">Block level button</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!-- Block level buttons with icon -->
                                    <div class="form-group">
                                        <button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block">Block level
                                            button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Block level buttons end -->

    <!-- Button tags start -->
    <section id="button-tags">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Button tags</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- anchor, button tag, input button, input submit Tags -->
                            <p>The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element.
                                However, you can
                                also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements.</p>
                            <a class="btn btn-primary mr-1 mb-1" href="https://pixinvent.com/" role="button" target="_blank">Link</a>
                            <button class="btn btn-primary mr-1 mb-1" type="submit">Button</button>
                            <input class="btn btn-primary mr-1 mb-1" type="button" value="Input">
                            <input class="btn btn-primary mr-1 mb-1" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button tags end -->

    <!-- Vertical variation start -->
    <section id="vertical-variation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical variation</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <p class="mt-1">Make a set of buttons appear vertically.</p>
                                    <!-- Vertical variation -->
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="btn btn-primary">Button</button>
                                        <button type="button" class="btn btn-primary">Button</button>
                                        <button type="button" class="btn btn-primary">Button</button>
                                        <button type="button" class="btn btn-primary">Button</button>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary">
                                                Button
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <p class="mt-1">Vertical variation with different colors</p>
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <div class="btn-group" role="group">
                                        </div>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop6" type="button" class="btn btn-info">
                                                Info
                                            </button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop7" type="button" class="btn btn-warning">
                                                Warning
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <p class="mt-1">Vertical variation with Outlines</p>
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="btn btn-outline-primary">Button</button>
                                        <button type="button" class="btn btn-outline-secondary">Button</button>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-outline-warning">
                                                Button
                                            </button>
                                        </div>
                                        <button type="button" class="btn btn-outline-success">Button</button>
                                        <button type="button" class="btn btn-outline-danger">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vertical variation end -->

</div>
@endsection

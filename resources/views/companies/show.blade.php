@extends('layouts.newApp')
@section('content')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Default
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Company Data</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Home card-->
            <div class="card">
                <div class="card-body p-lg-17">
                    <form action="{{ route('update_company') }}" method="POST">
                        @csrf
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Company Name</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="name" placeholder="Company Name" class="form-control bg-transparent" value="{{ old('name',$company->name)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="company_email" placeholder="Email" class="form-control bg-transparent" value="{{ old('company_email',$company->company_email)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Description</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <textarea type="textarea" name="description" class="form-control bg-transparent" id="">{{ $company->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Company Name</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="name" placeholder="Company Name" class="form-control bg-transparent" value="{{ old('name',$company->name)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">LEI</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="lei" placeholder="LEI" class="form-control bg-transparent" value="{{ old('lei',$company->lei)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">LEI Status</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <select name="lei_status" class="form-control" id="lei_status">
                                    <option value="">Lei Status</option>
                                    <option value="1" @if (old('lei_status')=="1" || $company->lei_status==1 ) {{ 'selected' }} @endif>Active</option>
                                    <option value="0" @if (old('lei_status')=="0" || $company->lei_status==0 ) {{ 'selected' }} @endif>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Managing Lou</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="managing_lou" placeholder="Managing Lou" class="form-control bg-transparent" value="{{ old('managing_lou',$company->managing_lou)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Registration Number</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="registration_number" placeholder="Company Name" class="form-control bg-transparent" value="{{ old('registration_number',$company->registration_number)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="address" placeholder="Address" class="form-control bg-transparent" value="{{ old('address',$company->address)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Country</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="country" placeholder="Company Name" class="form-control bg-transparent" value="{{ old('country',$company->country)}}" id="">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label for="" class="col-lg-4 col-form-label required fw-semibold fs-6">Number Of Employies</label>
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="number_of_employies" placeholder="Number Of Employies" class="form-control bg-transparent" value="{{ old('number_of_employies',$company->number_of_employies)}}" id="">
                            </div>
                        </div>
                        <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor" />
                                    <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Save Company Details
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content wrapper-->
@endsection
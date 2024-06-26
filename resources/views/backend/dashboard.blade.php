@extends('backend.layouts.admin')

@section('title') {{'Dashboard - Location Management System'}} @endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"><i class='bx bxs-dashboard'></i> Location Management System Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex">                                    
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="text-muted">
                                            <p class="mb-2">Welcome to Dashboard!</p>
                                            <h5 class="mb-1"><i class='bx bx-user'></i> {{ Auth::user()->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 align-self-center">
                                <div class="text-lg-center mt-4 mt-lg-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Total States</p>
                                                <h5 class="mb-0">{{ $totalStates }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Total Cities</p>
                                                <h5 class="mb-0">{{ $totalCities }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>
                                                <p class="text-muted text-truncate mb-2">Total Pincodes</p>
                                                <h5 class="mb-0">{{ $totalPincodes }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="clearfix mt-4 mt-lg-0">
                                    <div class="dropdown float-end">
                                        <a class="btn btn-primary shadow-lg" href="{{ route('change-password') }}"><i class="bx bx-wrench"></i> <span key="t-settings"> Change Password</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card overflow-hidden shadow">
                    <div class="bg-info bg-soft shadow">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-dark p-3">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('admin/images/profile-img.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
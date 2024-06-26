@extends('backend.layouts.admin')

@section('title') {{'Change Your Password'}} @endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Change Your Password</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12 mx-auto">
                <div class="card border">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0"><i class='bx bxs-lock' ></i> Change Password</h4>
                    </div>                                     
                    <div class="card-body">
                        <div class="col-sm-6">
                            <div class="row justify-content-center">                        
                                <form action="{{ route('update-password') }}" class="rounded-2" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="oldPasswordInput" class="form-label">Enter Your Old Password</label>
                                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                                placeholder="Old Password">
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="newPasswordInput" class="form-label">New Password</label>
                                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                                placeholder="New Password">
                                            @error('new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput" placeholder="Confirm New Password">
                                            @error('new_password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>                                        

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-success"><i class='bx bxs-key'></i> Change Password</button>
                                        </div>
            
                                    </div>                                    
            
                                </form>
                            </div>

                        </div>                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
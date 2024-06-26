@extends('backend.layouts.admin')

@section('title', 'Edit Pincode - Location Management System')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row mt-4">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"><i class='bx bx-edit'></i> Edit Pincode Details</h4>
                    <div class="d-flex">
                        <a href="{{ route('pincodes.index') }}" class="btn btn-secondary"><i class='bx bx-arrow-back'></i> Back to List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pincodes.update', $pincode->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="code" class="form-label">Pincode</label>
                                <input type="text" id="code" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ $pincode->code }}" required>
                                @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="city_id" class="form-label">City</label>
                                <select id="city_id" name="city_id" class="form-select @error('city_id') is-invalid @enderror" required>
                                    <option value="">Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" {{ $pincode->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Update Pincode</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
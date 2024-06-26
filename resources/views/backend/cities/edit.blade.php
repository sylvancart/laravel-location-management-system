@extends('backend.layouts.admin')

@section('title'){{ 'Edit City - Location Management System' }}@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"><i class='bx bx-map'></i> Edit City</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('cities.update', $city->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">City Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $city->name }}" placeholder="Enter City Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="state_id" class="form-label">Select State</label>
                                <select class="form-select" id="state_id" name="state_id">
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}" {{ $state->id == $city->state_id ? 'selected' : '' }}>{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                @error('state_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('cities.index') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
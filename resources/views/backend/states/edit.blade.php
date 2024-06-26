@extends('backend.layouts.admin')

@section('title'){{'Edit State - Location Management System'}}@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"><i class='bx bx-task'></i> Edit State</h4>
                    <div class="d-flex">
                        <a href="{{ route('states.index') }}" class="btn btn-secondary waves-effect"><i class='bx bx-arrow-back'></i> Back to Manage States</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('states.update', $state->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-sm-12 mt-2">
                                    <label for="name" class="form-label">State Name</label>
                                    <input type="text" name="name" value="{{ $state->name }}" class="form-control">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                    <div class="form-group">
                                        <label for="status">Set Status:</label>
                                        <div class="form-check form-switch" style="font-size: 32px;">
                                            <input class="form-check-input" type="checkbox" name="status" id="statusSwitch" {{ $state->status == 'visible' ? 'checked' : '' }}>
                                        </div>
                                        <input type="hidden" name="status" id="statusInput" value="{{ $state->status }}">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            const statusSwitch = document.getElementById("statusSwitch");
                                            const statusInput = document.getElementById("statusInput");

                                            statusSwitch.addEventListener("change", function() {
                                                if (statusSwitch.checked) {
                                                    statusInput.value = "visible";
                                                } else {
                                                    statusInput.value = "hidden";
                                                }
                                            });
                                        });
                                    </script>

                                    <div class="mt-4">
                                        <small class="text-muted"><span class="text-danger">Note:</span> Toggle the switch to set the State status. If the switch is toggled off, the State will be hidden.</small>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('states.index') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
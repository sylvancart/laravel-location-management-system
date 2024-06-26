@extends('backend.layouts.admin')

@section('title'){{'Manage States - Location Management System'}}@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"><i class='bx bx-map'></i> Manage States</h4>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class='bx bx-plus'></i> Add New State</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped border" style="width:100%">
                            <thead class="text-center mx-auto">

                                <tr>
                                    <th class="text-center">S.No</th>
                                    <th class="text-center">State Name</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach ($states as $state)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $state->name }}</td>
                                        <td>{{ $state->status }}</td>
                                        <td>
                                            <a href="{{ route('states.edit', $state->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('states.destroy', $state->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this state?')">Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewStateModal" onclick="viewState({{ $state }})">View</button>
                                        </td>                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ADD NEW State --}}

@include('backend.states.modal.add-state-modal')


{{-- VIEW State Modal --}}

@include('backend.states.modal.view-state-modal')

@endsection

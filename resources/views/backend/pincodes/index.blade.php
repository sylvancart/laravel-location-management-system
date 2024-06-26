@extends('backend.layouts.admin')

@section('title'){{'Manage Pincodes - Location Management System'}}@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"><i class='bx bx-map'></i> Manage Pincodes</h4>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class='bx bx-plus'></i> Add New Pincode</button>
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
                                    <th class="text-center">Pincode</th>
                                    <th class="text-center">City Name</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach ($pincodes as $pincode)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pincode->code }}</td>
                                        <td>{{ $pincode->city->name }}</td>
                                        <td>
                                            <a href="{{ route('pincodes.edit', $pincode->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('pincodes.destroy', $pincode->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this pincode?')">Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewPincodeModal" onclick="viewPincode({{ $pincode }})">View</button>
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

{{-- ADD NEW Pincode --}}

@include('backend.pincodes.modal.add-pincode-modal')


{{-- VIEW Pincode Modal --}}

@include('backend.pincodes.modal.view-pincode-modal')

@endsection

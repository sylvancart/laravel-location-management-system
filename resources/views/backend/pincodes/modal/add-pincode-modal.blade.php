<div class="modal fade bs-example-modal-lg" id="addPincodeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel"><i class='bx bx-plus'></i> Add New Pincode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pincodes.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-sm-12">
                            <label for="city_id" class="form-label">Select City</label>
                            <select name="city_id" class="form-select">
                                <option selected disabled>Select City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-sm-12 mt-3">
                            <label for="code" class="form-label">Enter Pincode</label>
                            <input type="text" name="code" class="form-control" placeholder="Enter Pincode">
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>                        

                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

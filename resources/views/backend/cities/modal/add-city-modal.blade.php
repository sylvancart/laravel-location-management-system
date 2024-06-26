<div class="modal fade bs-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel"><i class='bx bx-plus'></i> Add New City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cities.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-sm-12 mt-2">
                            <label for="state_id" class="form-label">State</label>
                            <select name="state_id" class="form-select">
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            @error('state_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-sm-12 mt-3">
                            <label for="name" class="form-label">City Name</label>
                            <input type="text" name="name" placeholder="Enter City Name" class="form-control">
                            @error('name')
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

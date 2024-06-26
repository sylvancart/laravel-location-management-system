<div class="modal fade bs-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel"><i class='bx bx-plus'></i> Add New State</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('states.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-sm-12 mt-2">
                            <label for="name" class="form-label">State Name</label>
                            <input type="text" name="name" placeholder="Enter State Name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <div class="form-group">
                                <label for="status">Set Status:</label>
                                <div class="form-check form-switch" style="font-size: 32px;">
                                    <input class="form-check-input" type="checkbox" name="status" id="statusSwitch" checked>
                                </div>
                                <input type="hidden" name="status" id="statusInput" value="visible">
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
                        <button type="submit" class="btn btn-primary">Create</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
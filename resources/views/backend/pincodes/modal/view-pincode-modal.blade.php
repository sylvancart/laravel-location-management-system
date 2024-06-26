<div class="modal fade" id="viewPincodeModal" tabindex="-1" aria-labelledby="viewPincodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewPincodeModalLabel">View Pincode Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewPincodeCode" class="form-label">Pincode</label>
                            <input type="text" id="viewPincodeCode" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewCityName" class="form-label">City Name</label>
                            <input type="text" id="viewCityName" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewPincodeCreatedAt" class="form-label">Created At</label>
                            <input type="text" id="viewPincodeCreatedAt" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewPincodeUpdatedAt" class="form-label">Updated At</label>
                            <input type="text" id="viewPincodeUpdatedAt" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function viewPincode(pincode) {
        document.getElementById('viewPincodeCode').value = pincode.code;
        document.getElementById('viewCityName').value = pincode.city.name;

        const createdDate = new Date(pincode.created_at);
        const formattedCreatedDate = createdDate.toLocaleString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        });
        document.getElementById('viewPincodeCreatedAt').value = formattedCreatedDate;

        const updatedDate = new Date(pincode.updated_at);
        const formattedUpdatedDate = updatedDate.toLocaleString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        });
        document.getElementById('viewPincodeUpdatedAt').value = formattedUpdatedDate;
    }
</script>

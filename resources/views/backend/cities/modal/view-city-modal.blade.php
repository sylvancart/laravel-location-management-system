<div class="modal fade" id="viewCityModal" tabindex="-1" aria-labelledby="viewCityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewCityModalLabel">View City Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewCityName" class="form-label">City Name</label>
                            <input type="text" id="viewCityName" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewStateName" class="form-label">State Name</label>
                            <input type="text" id="viewStateName" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="viewCityCreatedDate" class="form-label">Created At</label>
                            <input type="text" id="viewCityCreatedDate" class="form-control" readonly>
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
    function viewCity(city) {
        document.getElementById('viewCityName').value = city.name;
        document.getElementById('viewStateName').value = city.state.name;

        const createdDate = new Date(city.state.created_at);
        const formattedDate = createdDate.toLocaleString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        });

        document.getElementById('viewCityCreatedDate').value = formattedDate;
    }
</script>

<div class="modal fade" id="viewStateModal" tabindex="-1" role="dialog" aria-labelledby="viewStateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewStateModalLabel"><i class='bx bx-show'></i> View State Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 mt-3">
                        <label for="viewStateName" class="form-label">State Name</label>
                        <input type="text" id="viewStateName" class="form-control" readonly>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                        <div class="form-group">
                            <label for="viewStateStatus">Status</label>
                            <input type="text" id="viewStateStatus" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                        <div class="form-group">
                            <label for="viewStateCreatedDate">Created At</label>
                            <input type="text" id="viewStateCreatedDate" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function viewState(state) {
        document.getElementById('viewStateName').value = state.name;
        document.getElementById('viewStateStatus').value = state.status;

        const createdDate = new Date(state.created_at);
        const formattedDate = createdDate.toLocaleString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        });

        document.getElementById('viewStateCreatedDate').value = formattedDate;
    }
</script>
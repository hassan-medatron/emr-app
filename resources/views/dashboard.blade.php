<x-app-layout>

    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 breadcrum-control-left">
                <x-breadcrumb title="" />
            </div>
            <div class="col-md-8 col-lg-8 col-sm-8 breadcrum-control-right">
                <div class="btn-toolbar demo-inline-spacing" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Today
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Last 7 Days
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Last 30 Days
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="tf-icons bx bx-time"></i> Last 90 Days
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/patient.png" alt="chart success" class="rounded" />
                            </div>
                            <a href="#"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                        <span class="fw-semibold d-block mb-1">New Pateint</span>
                        <h3 class="card-title mb-2">$628</h3>
                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                            data-bs-placement="top" data-bs-html="true" title=""
                            data-bs-original-title="<span>Number of New Patients</span>">50</span> <small
                            class="fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/active-patients.png" alt="chart success"
                                    class="rounded" />
                            </div>
                            <a href="#"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                        <span class="fw-semibold d-block mb-1">Active Patients</span>
                        <h3 class="card-title mb-2">$787</h3>
                        <span class="badge bg-label-danger me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                            data-bs-placement="top" data-bs-html="true" title=""
                            data-bs-original-title="<span>Number of Active Patients</span>">18</span> <small
                            class="fw-semibold"><i class="bx bx-down-arrow-alt"></i> -12.80%</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/doctors.png" alt="chart success" class="rounded" />
                            </div>
                            <a href="#"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                        <span class="fw-semibold d-block mb-1">Referring Providers</span>
                        <h3 class="card-title mb-2">$781</h3>
                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                            data-bs-placement="top" data-bs-html="true" title=""
                            data-bs-original-title="<span>Number of Referring Providers</span>">285</span>
                        <small class="fw-semibold"><i class="bx bx-up-arrow-alt"></i> +312.80%</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/insurance.png" alt="chart success" class="rounded" />
                            </div>
                            <a href="#"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                        <span class="fw-semibold d-block mb-1">Payers</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                            data-bs-placement="top" data-bs-html="true" title=""
                            data-bs-original-title="<span>Number of Payers</span>">19</span> <small
                            class="fw-semibold"><i class="bx bx-up-arrow-alt"></i> +19.80%</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/orders.png" alt="chart success" class="rounded" />
                            </div>
                            <a href="#"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                        <span class="fw-semibold d-block mb-1">New Orders</span>
                        <h3 class="card-title mb-2">$9028</h3>
                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                            data-bs-placement="top" data-bs-html="true" title=""
                            data-bs-original-title="<span>Number of orders</span>">652</span> <small
                            class="fw-semibold"><i class="bx bx-up-arrow-alt"></i> +312.80%</small>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/revenue.png" alt="chart success"
                                    class="rounded" />
                            </div>
                            <a href="#"><i class="bx bx-right-arrow-circle"></i></a>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total Revenue</span>
                        <h3 class="card-title mb-2">$156,628</h3>
                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                            data-bs-placement="top" data-bs-html="true" title=""
                            data-bs-original-title="<span>Number of Transections</span>">18</span> <small
                            class="fw-semibold"><i class="bx bx-up-arrow-alt"></i> +360.80%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

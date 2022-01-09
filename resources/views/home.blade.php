@extends('layouts.app')

@section('title', 'Админ панель')

@section('content')
    <div class="row">
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <p class="mb-4">Today’s Bookings</p>
                    <p class="fs-30 mb-2">4006</p>
                    <p>10.00% (30 days)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4">Total Bookings</p>
                    <p class="fs-30 mb-2">61344</p>
                    <p>22.00% (30 days)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-light-blue">
                <div class="card-body">
                    <p class="mb-4">Number of Meetings</p>
                    <p class="fs-30 mb-2">34040</p>
                    <p>2.00% (30 days)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-light-danger">
                <div class="card-body">
                    <p class="mb-4">Number of Clients</p>
                    <p class="fs-30 mb-2">47033</p>
                    <p>0.22% (30 days)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Pending Requests</h4>
                                    <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                                </div>
                            </div>
                            <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                        </th>
                                        <th>Customer</th>
                                        <th>Company</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="/assets/images/faces/face1.jpg" alt="">
                                                <div>
                                                    <h6>Brandon Washington</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">79%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="/assets/images/faces/face2.jpg" alt="">
                                                <div>
                                                    <h6>Laura Brooks</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="/assets/images/faces/face3.jpg" alt="">
                                                <div>
                                                    <h6>Wayne Murphy</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="/assets/images/faces/face4.jpg" alt="">
                                                <div>
                                                    <h6>Matthew Bailey</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="badge badge-opacity-danger">Pending</div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="/assets/images/faces/face5.jpg" alt="">
                                                <div>
                                                    <h6>Katherine Butler</h6>
                                                    <p>Head admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                    <p class="text-success">65%</p>
                                                    <p>85/162</p>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">Completed</div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title card-title-dash">Top Performer</h4>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="/assets/images/faces/face1.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="/assets/images/faces/face2.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="/assets/images/faces/face3.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="/assets/images/faces/face4.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="/assets/images/faces/face5.jpg" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                    <small class="text-muted mb-0">Alaska, USA</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div>
    <x-slot name="title">
        User - Dashboard
    </x-slot>
    <div class="container-fluid">
        <h1 class="mt-1">DASHBOARD</h1>
        <div class="w-100 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addSchoolYearModal">
                Add School Year
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addSchoolYearModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="addSchoolYearLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Add School Year Form -->
                        <form action="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSchoolYearLabel">Add School Year</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            School Year
                                        </span>
                                        <select name="" id="" class="form-select">
                                            @for($i = date("Y") + 10; $i > date("Y") - 10; $i--)
                                                @if (date("Y") == $i)
                                                <option value="" selected>{{ $i }}</option>
                                                @else
                                                <option value="">{{ $i }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">

                <!-- Student Document -->
                <div class="card" style="width: 30rem;">

                    <div class="card-body fs-6">
                        <div class="row mb-2">
                            <span class="fs-5 fw-bold d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                </svg>
                                Student Data 2020
                            </span>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <select name="" id="" class="form-select">
                                    @for ($i = 1; $i <= 10; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                                &nbsp;<span>Entries per page</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Last Name</th>
                                            <th>First Name<< /th>
                                            <th>Middle Initial</th>
                                            <th>Date of Birth</th>
                                            <th>Blood Type</th>
                                            <th>View details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hagos</td>
                                            <td>Paolo</td>
                                            <td>C.</td>
                                            <td>Oct 19, 2000</td>
                                            <td>O+</td>
                                            <td>
                                                <button class="btn btn-primary">View</button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">Footer</div>
                </div>


            </div>
            <div class="col">
                <div class="card" style="width: 30rem;">

                    <div class="card-body fs-6">
                        <div class="row mb-2">
                            <span class="fs-5 fw-bold d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                </svg>
                                Student Data 2021
                            </span>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <select name="" id="" class="form-select">
                                    @for ($i = 1; $i <= 10; $i++) <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                                &nbsp;<span>Entries per page</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Initial</th>
                                            <th>Date of Birth</th>
                                            <th>Blood Type</th>
                                            <th>View details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hagos</td>
                                            <td>Paolo</td>
                                            <td>C.</td>
                                            <td>Oct 19, 2000</td>
                                            <td>O+</td>
                                            <td>
                                                <button class="btn btn-primary">View</button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">Footer</div>
                </div>
            </div>
        </div>
    </div>
</div>
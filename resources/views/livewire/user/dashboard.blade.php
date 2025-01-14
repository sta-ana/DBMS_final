<div>
    <x-slot name="title">
        User - Dashboard
    </x-slot>
    <div class="container-fluid">
        <h1 class="mt-2">Student Data</h1>
        <div class="w-100 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                data-bs-target="#addSchoolYearModal">
                Add School Year
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addSchoolYearModal" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="addSchoolYearLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">


                        <!-- Add School Year Form -->
                        <form action="{{route('user.schoolyear.add')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSchoolYearLabel">Add School Year</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            School Year
                                        </span>
                                        <select name="school_year" id="school_year" class="form-select">
                                            @for($i = date("Y") + 10; $i > date("Y") - 10; $i--)
                                            @if (date("Y") == $i)
                                            <option value="{{$i}}" selected>{{ $i }}</option>
                                            @else
                                            <option value="{{$i}}">{{ $i }}</option>
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
            @if (isset($school_years))
            @foreach ($school_years as $school_year)
            <div class="col">


                <!-- Student Document card -->
                <div class="card shadow mb-3" style="width: 30rem; ">
                    <div class="card-body fs-6">
                        <div class="mb-3 d-flex justify-content-between ">
                            <div>
                                <span class="fs-5 fw-bold d-flex align-items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                    </svg>              
                                    Student Data {{$school_year->school_year}}
                                </span>
                            </div>
                            
                        </div>
                        <div class="row mb-3">
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
                                    <thead class="text-nowrap">
                                        <tr>
                                            <th>Last Name</th>
                                            <th>First name</th>
                                            <th>Middle Name</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Blood Type</th>
                                            <th>Coure</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-nowrap">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary " style: w-25
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    View
                                                </button>

                                                <!-- Modal For Student Profile-->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header ">
                                                                <h5 class="modal-title" id="exampleModalLabel">Student
                                                                    Profile</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body" style="min-height: 70vh;">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="text-end mt-3">


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Upload File
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload Student File</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <!-- file upload  -->
                                        <div class="modal-body text-start">
                                            <input type="file" class="form-control" accept=".csv" id="customFile"
                                                upload_max_filesize=10M />
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">Footer
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
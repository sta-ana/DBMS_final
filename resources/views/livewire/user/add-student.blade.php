@section('page-title')
Add Student
@endsection

@section('content')


<div class="row p-5 justify-content-center fs-7 ">
    <form action="" class="p-5 border shadow-lg  rounded-2 w-50 ">
        <div class="row mb-2">
            <div class="text-center">
                <label class="fs-4 fw-bold mt-lg-0 mb-3" >INPUT STUDENT DATA</label>
            </div>
            <!-- firstname -->
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="form-floating ms-3" style="width: 10cm;">
                        <input type="text" id="firstName" name="firstName" placeholder="enter firstName"
                            class="form-control">
                        <label for="firstName">First Name</label>
                    </div>
                </div>
            </div>
            <!-- middlename -->
            <div class="row justify-content-center mt-1 ">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="text" id="middleName" name="middleName" placeholder="enter middlename"
                            class="form-control">
                        <label for="MiddleName">Middle Name</label>
                    </div>
                </div>
            </div>
            <!-- lastname -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="text" id="lastname" name="lastname" placeholder="enter lastname"
                            class="form-control">
                        <label for="lastname">Last Name</label>
                    </div>
                </div>
            </div>
            <!-- birthdate -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="date" id="birthDate" name="birthday" placeholder="enter birthday"
                            class="form-control">
                        <label for="birthday">Birthdate</label>
                    </div>
                </div>
            </div>

            <!-- Gender -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="text" id="gender" name="gender" placeholder="enter gender" class="form-control">
                        <label for="gender">Gender</label>
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="text" id="address" name="address" placeholder="enter address" class="form-control">
                        <label for="address">Address</label>
                    </div>
                </div>
            </div>

            <!-- Blood Type -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="text" id="bloodtype" name="bloodtype" placeholder="enter bloodtype" class="form-control">
                        <label for="bloodtype">Bloodtype</label>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="text" id="course" name="course" placeholder="enter course" class="form-control">
                        <label for="course">Course</label>
                    </div>
                </div>
            </div>
            <!-- Student Profile Picture -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating ms-3 " style="width: 10cm;">
                        <input type="file" class="form-control" accept=".png" id="customFile" upload_max_filesize=10M />
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center mt-1 text-sm-center ">
            <div class="col-auto">
                <div class="form-floating mt-2 " style="width: 10cm;">
                    <button type="button" class="btn btn-primary" style = "width: 7cm;" >Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('page-title')
Add Student
@endsection

@section('content')


<div class="row p-5 justify-content-center ">
    <form action="" class="p-5 border shadow-lg  rounded-2 w-75 ">
        <div class="row mb-2">
            <div class="text-center">
                <label class="fs-3 fw-bold ">INPUT STUDENT DATA</label>
            </div>
            <!-- firstname -->
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="form-floating" style="width: 12cm;">
                        <input type="text" id="firstName" name="firstName" placeholder="enter firstName"
                            class="form-control">
                        <label for="firstName">First Name</label>
                    </div>
                </div>
            </div>
            <!-- middlename -->
            <div class="row justify-content-center mt-1 ">
                <div class="col-auto">
                    <div class="form-floating" style="width: 12cm;">
                        <input type="text" id="middleName" name="middleName" placeholder="enter middlename"
                            class="form-control">
                        <label for="MiddleName">Middle Name</label>
                    </div>
                </div>
            </div>
            <!-- lastname -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating" style="width: 12cm;">
                        <input type="text" id="lastname" name="lastname" placeholder="enter lastname"
                            class="form-control">
                        <label for="lastname">Last Name</label>
                    </div>
                </div>
            </div>
            <!-- birthdate -->
            <div class="row justify-content-center mt-1">
                <div class="col-auto">
                    <div class="form-floating" style="width: 12cm;">
                        <input type="date" id="birthDate" name="birthday" placeholder="enter birthday"
                            class="form-control">
                        <label for="birthday">Birthdate</label>
                    </div>
                </div>
            </div>
            <!-- Gender -->
            <!-- <div class="row justify-content-center mt-1">
                <div class="input-group mb-3" style="width: 12cm;">
                    <select class="form-select" id="inputGroupSelect01" >
                        <option selected>Choose...</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
            </div> -->
            <!-- Address -->

            <!-- Blood Type -->

            <!-- Course -->
        </div>
    </form>
</div>
@endsection
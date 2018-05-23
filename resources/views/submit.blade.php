@extends('layouts.app')
@section('content')
    <div class="container form-style">
        <div id="accordion">
            <form action="/" onsubmit="return check(this)" method="post" name="RegForm">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                {!! csrf_field() !!}
            <div class="card">
                <div class="card-header form-rounded" id="headingOne">
                    <h5 class="mb-0">
                        <button type="button" class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Step 1: Your details
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control form-rounded" id="fname" name="fname" placeholder="First name" value="{{ old('fname') }}">
                                    @if($errors->has('fname'))
                                        <span class="help-block">{{ $errors->first('fname') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control form-rounded" id="lname" name="lname" placeholder="Last name" value="{{ old('lname') }}">
                                    @if($errors->has('lname'))
                                        <span class="help-block">{{ $errors->first('lname') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="text" class="form-control form-rounded" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button type="button" class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Step 2: More Comments
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control form-rounded" id="mobile" name="mobile" value="+44">
                                    @if($errors->has('mobile'))
                                        <span class="help-block">{{ $errors->first('mobile') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control form-rounded" id="dob" name="dob" placeholder="DD/MM/YYYY" value="{{ old('dob') }}">
                                    @if($errors->has('dob'))
                                        <span class="help-block">{{ $errors->first('dob') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender"  id="gender">Gender<br/>
                            <label class="radio-inline control-label"><input type="radio" name="gender" value="male" value="{{ old('gender') }}" > Male</label>
                            <label class="radio-inline control-label"><input type="radio" name="gender" value="female" value="{{ old('gender') }}"> Female</label>
                            <label class="radio-inline control-label"><input type="radio" name="gender" value="other" value="{{ old('gender') }}"> Other</label>
                            </label>
                            @if($errors->has('gender'))
                                <span class="help-block">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button type="button" class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Step 3: Final Comments
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                            <label for="comments">Comments</label>
                            <textarea class="form-control form-rounded" id="comments" name="comments" placeholder="comments">{{ old('comments') }}</textarea>
                            @if($errors->has('comments'))
                                <span class="help-block">{{ $errors->first('comments') }}</span>
                            @endif
                        </div>
                        <input type="submit" class="btn btn-outline-danger" name="Submit"/>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script>
        function check(form)
        {
            var fname = document.forms["RegForm"]["fname"];
            var lname = document.forms["RegForm"]["lname"];
            var email = document.forms["RegForm"]["email"];
            var mobile =  document.forms["RegForm"]["mobile"];
            var dob = document.forms["RegForm"]["dob"];
            var gender = document.forms["RegForm"]["gender"];

            if (fname.value == ""){
                window.alert("Please enter your first name.");
                name.focus();
                return false;
            }

            if (lname.value == ""){
                window.alert("Please enter your last name.");
                name.focus();
                return false;
            }

            if (email.value == "")
            {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (mobile.length != 11){
                window.alert("Please enter a valid mobile number.");
                name.focus();
                return false;
            }

            if (gender.value == ""){
                window.alert("Please select a gender.");
                name.focus();
                return false;
            }

            if (validateEmail(email) == false){
                window.alert("Please enter a valid email address.");
                name.focus();
                return false;
            }

            if (validateDob(dob) == false){
                window.alert("Please enter a valid Date of Birth.");
                name.focus();
                return false;
            }

            if(mobile.includes("+44", 0) == false){
                window.alert("Please include the region code +44");
                name.focus();
                return false;
            }
        }

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function validateDob(dob){
            var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
            return re.test (dob);
        }
    </script>
@endsection
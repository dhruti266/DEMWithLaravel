@extends('layout')
@section('title', 'Home Page')

@section('content')
        <div class="row error">
            <div class="col-lg-6 col-lg-offset-3">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4" id="login">
                <h3 class="col-lg-offset-4 col-md-offset-4">Sign In</h3>
                <br>
                <form role="form" class="col-lg-offset-1" method="POST">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-12 col-lg-10 col-md-10 col-md-offset-1 col-lg-offset-1">
                                <div class="form-group">
                                    <!-- Username -->
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                        <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="forgot_password.php">Forgot password ?</a>
                                    <input type="submit" class="btn btn-md pull-right" name="submit" value="Sign in">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="col-lg-8 col-sm-8" id="register">
                <h3 class="col-lg-offset-2 col-md-offset-3">Create a New Account</h3>
                <br>
                <form role="form" class="col-lg-offset-1 border" action="#" method="POST">
                    <div class="form-group row">
                        <label class="col-md-3 col-lg-2 col-sm-3 col-xs-12 control-label" for="Name">Name</label>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <input id="fName" name="firstName" type="text" value="" placeholder="First Name" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <input id="lName" name="lastName" type="text" value="" placeholder="Last Name" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-3 col-lg-4 col-sm-3 col-xs-12" id="nameError"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-lg-2 col-sm-3 control-label" for="username">Username</label>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <input id="username" name="username" type="text" value="" placeholder="Username" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-3 col-lg-4 col-sm-3" id="usernameError"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-lg-2 col-sm-3 control-label" for="security">Security PIN</label>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <input id="security" name="pin" type="text" value="" placeholder="Enter 4-digit security PIN..." class="form-control input-md" required="">
                        </div>
                        <div class="col-md-3 col-lg-4 col-sm-3" id="pinError"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-lg-2 col-sm-3 control-label" for="passwordinput">Password</label>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <input id="password" name="password" type="password" placeholder="Enter minimum 8 character long password.." class="form-control input-md" required="">
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3" id="passwordError"></div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group row">
                        <label class="col-md-3 col-lg-2 col-sm-3 control-label" for="confirm_password">Confirm</label>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-type password" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3" id="cPasswordError"></div>
                    </div>
                    <div class="form-group col-md-9 col-lg-8 col-sm-9">
                        <input type="submit" class="btn btn-md pull-right btn-success" name="signup" value="Sign Up">
                    </div>
                </form>
            </div>

        </div>
@endsection
@extends('front-end.master')
@section('title')
    Checkout | Look Care
@endsection
@section('bodyContent')
    <main class="container">

        <section>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">You have to login to complete your valuable order.If you are not registerd then please register first.</h3>
                    </div>
                </div>
            </div>
            <div class="signuppanel">

                <div class="row">

                    <div class="col-md-6">

                        {{Form::open(['route'=>'new-customer','method'=>'POST'])}}

                            <h3 class="nomargin">Sign Up</h3>
                            <p class="mt5 mb20">Already a member?<strong>If you are already member then You may login.</strong></p>
                            <label class="control-label">Name</label>
                            <div class="row mb10">
                                <div class="col-sm-6">
                                    <input type="text" name="first_name" class="form-control" placeholder="Firstname" required />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Lastname" required />
                                </div>
                            </div>

                            <div class="mb10">
                                <label class="control-label">Email Address</label>
                                <input type="email" name="email_address" class="form-control" required />
                            </div>

                            <div class="mb10">
                                <label class="control-label">Password</label>
                                <input type="password" name="password" class="form-control" required />
                            </div>

                            <div class="mb10">
                                <label class="control-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" required />
                            </div>

                            <div class="mb10">
                                <label class="control-label">Address</label>
                                <textarea name="address"  class="form-control" id="" cols="30" rows="10" required></textarea>
                            </div>
                            <br />

                            <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                        {{Form::close()}}
                    </div><!-- col-sm-6 -->
                    <div class="col-md-6">

                        {{Form::open(['route'=>'customer-login','method'=>'POST',])}}
                            <h3 class="nomargin">Sign In</h3>
                            <p class="mt5 mb20">Login to access your account.</p>
                            <h4 class="text-center text-warning">{{Session::get('message')}}</h4>
                            <div class="mb-20">
                                <input type="email" name="email_address" class="form-control uname" placeholder="Email Address" required />
                            </div>
                            <div class="mb-20">
                                <input type="password" name="password" class="form-control pword" placeholder="Password" required />
                            </div>
                            <a href="#"><small>Forgot Your Password?</small></a>
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>

                        {{Form::close()}}

                    </div><!-- col-sm-6 -->
                </div><!-- row -->

            </div><!-- signuppanel -->

        </section>
    </main>
@endsection

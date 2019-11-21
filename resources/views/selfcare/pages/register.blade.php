@extends('selfcare.layouts.main_pages_layout')
@section('main_content')
<div class="sc-landing container">
    <div class="row">
        <div class="col-md-4 sc-landing-sidebar">
            <div class="welcome-container text-center">
                <h1>Welcome to XOX Self Care</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row">
                <ul>
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="selfcare-register.html">Create New Account</a></li>
                    <li><a href="selfcare-reset.html">Reset Password</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 sc-landing-main d-flex flex-1">
            <div class="p-4 d-flex flex-column text-center">
                <img class="login-icon" src="images/person-24px.svg" />
                <h1 class="login-title">LOGIN</h1>
                <div class="mt-4">
                    <div class="form-group">
                        <input type="text" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Password" />
                    </div>
                    <div class="form-group mt-4">
                        <a class="button" href="selfcare-dashboard.html">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
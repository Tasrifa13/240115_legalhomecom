<<<<<<< HEAD
login.blade.php
=======
@extends('master.master')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="login">
                <div class="wrapper">
                    <div class="title">
                        Login Form
                    </div>
                    <form action="#">
                        <div class="field">
                        <input type="text" required>
                        <label>Email Address</label>
                        </div>
                        <div class="field">
                        <input type="password" required>
                        <label>Password</label>
                        </div>
                        <div class="content">
                        <div class="checkbox">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div>
                        </div>
                        <div class="field">
                        <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">
                        Not a member? <a href="#">Signup now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col4"></div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
>>>>>>> 1611dd2ff5d0114fa44fd5e958b1a4d1cea6dd53

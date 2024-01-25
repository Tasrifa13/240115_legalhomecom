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
                        Register
                    </div>
                    <form action="#">
                        <div class="field">
                        <input type="text" required>
                        <label>Name</label>
                        </div>
                        <div class="field">
                        <input type="text" required>
                        <label>Email Address</label>
                        </div>
                        <div class="field">
                        <input type="password" required>
                        <label>Password</label>
                        </div>
                        <div class="field">
                        <input type="password" required>
                        <label>Confirm Password</label>
                        </div>
                        <div class="field">
                        <input type="submit" value="Register">
                        </div>
                        <div class="signup-link">
                        Do You Have Account? <a href="#">Sign in now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
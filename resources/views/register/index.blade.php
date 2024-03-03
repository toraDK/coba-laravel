@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
            <form>
                <div class="form-floating">
                    <input type="text" name="name" id="name" class="form-control rounded-top" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" id="username" class="form-control" placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" id="password" class="form-control rounded-bottom" placeholder="Password">
                    <label for="password">Password</label>
                </div>
        
                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now</a></small>
        </main>
    </div>
</div>
    
@endsection
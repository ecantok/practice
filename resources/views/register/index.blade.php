@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration">
                <form>
                    <div class="d-flex justify-content-center">
                        <i class="bi bi-person-circle" style="font-size: 4rem"></i>
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
        
                    <div class="form-floating">
                        <input type="name" class="form-control rounded-top" id="name" placeholder="Name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="username" class="form-control" id="username" placeholder="Username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small><a class="d-block mt-3 text-center" role="button" href="/register">Log in</a></small>
            </main>
        </div>
    </div>
@endsection

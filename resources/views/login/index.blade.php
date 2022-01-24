@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <main class="form-login">
                <form>
                    <div class="d-flex justify-content-center">
                        <i class="bi bi-person-circle" style="font-size: 4rem"></i>
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
        
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small><a class="d-block mt-3 text-center btn btn-outline-primary" role="button" href="/register">Create account</a></small>
            </main>
        </div>
    </div>
@endsection

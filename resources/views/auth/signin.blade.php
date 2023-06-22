@extends('layouts/main')
@section('title', 'Login to Your Account')

@section('main')
<main class="container d-flex flex-column justify-content-center align-items-center vh-100 vw-100">
        <div class="d-flex flex-column cust-card form-card">
            <h1 class="text-center mb-4">Login:</h1>
            <form action="{{ route('signin.custom') }}" method="post"  autocomplete="off">
              @csrf
                <div class="d-flex flex-column">
                  <div class="form-floating mb-4">
                    <input type="email" class="form-control rounded-pill px-4" name="email" id="emailLogin" placeholder="email@example.com">
                    <label for="emailLogin" class="px-4">Email address</label>
                    @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" class="form-control rounded-pill px-4" name="password" id="passwordLogin" placeholder="Password">
                    <label for="passwordLogin" class="px-4">Password</label>
                    @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill fw-bold fs-5 py-2 px-4 w-50 align-self-center mb-4">Login</button>
                  <p class="text-center">Haven't got an account yet? <a class="text-decoration-none fw-bold" href="/register">Register Now</a></p>
                </div>
            </form>
        </div>  
</main>
@endsection
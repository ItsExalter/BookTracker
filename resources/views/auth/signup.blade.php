@extends('layouts/main')
@section('title', 'Register Account')

@section('main')
<main class="container d-flex flex-column justify-content-center align-items-center vh-100 vw-100">
        <div class="d-flex flex-column cust-card form-card">
            <h1 class="text-center mb-4">Register:</h1>
            <form action="{{ route('user.registration') }}" method="POST" autocomplete="off">
              @csrf
                <div class="d-flex flex-column">
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control rounded-pill px-4" id="usernameRegister" name="name" placeholder="myUsername" required>
                    <label for="usernameRegister" class="px-4">Username</label>
                    @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                  <div class="form-floating mb-4">
                    <input type="email" class="form-control rounded-pill px-4" id="emailRegister" name="email" placeholder="email@example.com" required>
                    <label for="emailRegister" class="px-4">Email address</label>
                    @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" class="form-control rounded-pill px-4" id="passwordRegister" name="password" placeholder="Password" required>
                    <label for="passwordRegister" class="px-4">Password</label>
                    @if ($errors->has('password'))
                     <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary rounded-pill fw-bold fs-5 py-2 px-4 w-50 align-self-center mb-4">Register</button>
                  <p class="text-center">Already have account? <a class="text-decoration-none fw-bold" href="/login">Login Now</a></p>
                </div>
            </form>
        </div>  
</main>
@endsection
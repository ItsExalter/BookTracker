@extends('layouts/main')
@section('title', 'Welcome to Book Tracker')

@section('main')
<main class="container d-flex flex-column justify-content-center align-items-center vh-100 vw-100">
      <div class="d-flex flex-column w-50 cust-card">
          <h1 class="text-center mb-3">Book Tracker</h1>
          <h5 class="text-center fw-thinner mb-4"`>Keep track of your books that you read more easily</h5>
          <p class="text-center fs-5 mb-4 fst-italic">"The more you read, the more you think. the more you learn, the more you realize that you know nothing." - Voltaire</p>
          <a role="button" class="btn btn-primary align-self-center rounded-pill fw-bold fs-5 py-2 px-4" href="/login">Let's Start</a>
      </div>
</main>
@endsection('main')
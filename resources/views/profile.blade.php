@extends('layouts/user-layout')
@section('title', 'Your Profile')

@section('main')
    <main>
        <div class="profile">
            <div class="left-side">
                <div class="d-flex flex-column align-items-center">
                    <h2 class="text-white mb-2">About You:</h2>
                    <h3 class="text-white">{{$user->name}}</h2>
                    <p class="text-white">{{$user->email}}</p>
                </div>
                <a href="{{ route('logout') }}" role="button" class="btn btn-danger rounded-pill w-75 p-2 fs-5 text-white fw-bold">Log Out</a>
            </div>
            <div class="center-side">
                <div class="d-flex flex-column align-items-center w-100">
                    <h2>All Book:</h2>
                    @foreach($bookData as $book)
                    <h4>{{$book->book_name}}</h4>
                    @endforeach
                </div>
            </div>
            <div class="right-side px-3">
                <div class="cust-card">
                <h1>About Booktracker.</h1>
                <p>Final Project for SSIP Subject <br><br>
                Created by: <br> Mochammad Arrafie <br> Kadek Nola Arista Putri</p>
                </div>
            </div>
        </div>
    </main>
@endsection('main')
@section('javascript-addon')
    <script>
        const editImage = document.querySelector('.edit-image');
    </script>
@endsection
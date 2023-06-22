@extends('layouts/user-layout')
@section('title', 'On-Going') <!--Change Depends on Status-->

@section('main')
    <main>
        @php
            $onGoing = 0;
        @endphp
        <div class="container show-all-list">
            <div class="center-title">
                <h1 class="text-center">List of On-Going Books:</h1>
            </div>
            <div class="book-list all-list">
                @foreach($bookData as $book)  
                    @if($book->book_status == 'onGoing')
                    <a class="text-decoration-none text-black" href="/bookDetails/{{$book->id}}">
                        <div class="show-book">
                          <img class="book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                          <h1 class="">{{$book->book_name}}</h1>
                        </div>
                    </a>
                    @php
                        ++$onGoing;
                    @endphp
                    @endif
                @endforeach
                @if($onGoing == 0)
                    <div class="d-flex w-100 h-100 justify-content-center align-items-center">
                        <h3>Not Available</h3>
                    </div>
                @endif
            </div>

        </div>
    </main>
@endsection
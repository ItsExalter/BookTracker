<!doctype html>
@foreach($books as $book)
<html lang="en">
<head>
  <title>Details Book: {{$book->book_name}}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- Custom Styling -->
  <link rel="stylesheet" href="../assets/styles/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-user fixed-top">
      <div class="container py-2">
        <a class="navbar-brand fw-bolder fs-3 text-white">Book Tracker.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a role="button" class="nav-link fw-bold text-white" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link fw-bold dropdown-toggle text-white" href="#" id="statusList" role="button" data-bs-toggle="dropdown" aria-expanded="false">Book Status</a>
                    <ul class="dropdown-menu" aria-labelledby="statusList">
                        <li><a class="dropdown-item" href="/allBooks">All Books</a></li>
                        <li><a class="dropdown-item" href="/planToRead">Plan to Read</a></li>
                        <li><a class="dropdown-item" href="/completed">Completed</a></li>
                        <li><a class="dropdown-item" href="/onGoing">On-going</a></li>
                        <li><a class="dropdown-item" href="/onHold">On Hold</a></li>
                        <li><a class="dropdown-item" href="/dropped">Dropped</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a role="button" class="px-3 nav-link fw-bold text-white btn btn-primary rounded-pill"  href="/profile">Profile</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    <main class="container p-5">
        <div class="container d-flex justify-content-center p-5 w-100">
            <div class="container d-flex justify-content-center p-3 w-100">
                <div class="d-flex flex-column">
                    <img class="detail-book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                    <h2 class="">{{$book->book_name}}</h2>
                    <h5>{{$book->book_author}}, {{$book->book_year}}</h5>
                    <p><span class="fw-bold">Book Description:</span><br>{{$book->book_details}}</p>
                    <p><span class="fw-bold">Book Status:</span><br>
                        @if($book->book_status == 'planToRead')
                        <span class="fw-bold text-secondary">Plan to Read</span>
                        @elseif($book->book_status == 'completed')
                        <span class="fw-bold text-success">Completed</span>
                        @elseif($book->book_status == 'onGoing')
                        <span class="fw-bold text-primary">On-Going</span>
                        @elseif($book->book_status == 'onHold')
                        <span class="fw-bold text-warning">On-Hold</span>
                        @elseif($book->book_status == 'dropped')
                        <span class="fw-bold text-danger">Dropped</span>
                        @endif
                    </p>
                </div>
                <div class="d-flex flex-column px-5 mx-3 w-50">
                    <form action="/updateBook/{{$book->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <h4>Edit Book Detail:</h4>
                    <div class="form-floating mb-3">
                        <input type="Text" class="form-control" id="bookTitle" name="bookTitle" placeholder="Book Title" value="{{$book->book_name}}"> 
                        <label for="bookTitle">Book Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="Text" class="form-control" id="bookAuthor" name="bookAuthor" placeholder="Book Author" value="{{$book->book_author}}">
                        <label for="bookAuthor">Book Author</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" min="1800" max="2999" class="form-control" id="bookYear" name="bookYear" placeholder="Book Year" value="{{$book->book_year}}">
                        <label for="bookYear">Book Year</label>
                    </div>
                    <div class="mb-3">
                        <label for="bookDetails" class="form-label">Book Details</label>
                        <textarea class="form-control" id="bookDetails" rows="3" name="bookDetails">{{$book->book_details}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="bookStatus">Book Status</label>
                        <select id="bookStatus" class="form-select" aria-label="Default select example" name="bookStatus"> 
                            <!-- Getting Select Value to the dropdown -->
                            @if($book->book_status == 'planToRead')
                            <option disabled>Select Book Status</option>
                            <option value="planToRead" selected>Plan to Read</option>
                            <option value="completed">Completed</option>
                            <option value="onGoing">On Going</option>
                            <option value="onHold">On Hold</option>
                            <option value="dropped">Dropped</option>
                            @elseif($book->book_status == 'completed')
                            <option disabled>Select Book Status</option>
                            <option value="planToRead">Plan to Read</option>
                            <option value="completed" selected>Completed</option>
                            <option value="onGoing">On Going</option>
                            <option value="onHold">On Hold</option>
                            <option value="dropped">Dropped</option>
                            @elseif($book->book_status == 'onGoing')
                            <option disabled>Select Book Status</option>
                            <option value="planToRead" >Plan to Read</option>
                            <option value="completed">Completed</option>
                            <option value="onGoing" selected>On Going</option>
                            <option value="onHold">On Hold</option>
                            <option value="dropped">Dropped</option>
                            @elseif($book->book_status == 'onHold')
                            <option disabled>Select Book Status</option>
                            <option value="planToRead" >Plan to Read</option>
                            <option value="completed">Completed</option>
                            <option value="onGoing">On Going</option>
                            <option value="onHold" selected>On Hold</option>
                            <option value="dropped">Dropped</option>
                            @elseif($book->book_status == 'dropped')
                            <option disabled>Select Book Status</option>
                            <option value="planToRead" >Plan to Read</option>
                            <option value="completed">Completed</option>
                            <option value="onGoing">On Going</option>
                            <option value="onHold">On Hold</option>
                            <option value="dropped" selected>Dropped</option>
                            @else
                            <option disabled selected>Select Book Status</option>
                            <option value="planToRead" >Plan to Read</option>
                            <option value="completed">Completed</option>
                            <option value="onGoing">On Going</option>
                            <option value="onHold">On Hold</option>
                            <option value="dropped">Dropped</option>
                            @endif
                        </select>
                    </div>
                      <a role="button" class="btn btn-danger w-25" href="/deleteBook/{{$book->id}}">Delete</a>
                      <button type="submit" class="btn btn-primary w-25">Update</button>
                </form>
                </div>
            </div>
        </div>
    </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
@endforeach
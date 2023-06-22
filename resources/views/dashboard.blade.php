@extends('layouts/user-layout')
@section('title', 'Your Dashboard')

@section('main')
    <main class="dash-section">
        @php
            $planToRead = 0;
            $completed = 0;
            $onGoing = 0;
            $onHold = 0;
            $dropped = 0;
            $total = 0;
        @endphp
        <!-- Add Chart Section -->
        <div class="chart-section">
            <div class="chart">
                <h2 class="text-white">Your Read Statistic:</h2>
                <canvas class="p-3" id="ChartSection"></canvas>
                <button class="btn btn-success w-50 rounded-pill p-2 fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">Add New Book</button>
            </div>
        </div>
        <!-- Add Book Section -->
        <div class="book-section">
            <!-- Show All Books  -->
            <div class="book-status">
                <div class="sub-title">
                    <h2>All Books</h2>
                    <a href="/allBooks" class="text-decoration-none fw-bold">See All</a>
                </div>
                <div class="book-list">
                    @foreach($bookData as $book)  
                    <a class="text-decoration-none text-black" href="/bookDetails/{{$book->id}}">
                        <div class="show-book">
                          <img class="book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                          <h1 class="">{{$book->book_name}}</h1>
                        </div>
                    </a>
                    @php
                    ++$total;
                    @endphp
                    @endforeach
                    @if($total == 0)
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center">
                            <h3>Not Available</h3>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Show Plan to Read -->
            <div class="book-status">
                <div class="sub-title">
                    <h2>Plan to Read</h2>
                    <a href="/planToRead" class="text-decoration-none fw-bold">See All</a>
                </div>
                <div class="book-list">
                        @foreach($bookData as $book)  
                            @if($book->book_status == 'planToRead')
                            <a class="text-decoration-none text-black {{$book->book_status}}" href="/bookDetails/{{$book->id}}">
                                <div class="show-book">
                                  <img class="book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                                  <h1 class="">{{$book->book_name}}</h1>
                                </div>
                            </a>
                            @php
                            ++$planToRead;
                            @endphp
                            @endif
                        @endforeach
                    @if($planToRead == 0)
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center">
                            <h3>Not Available</h3>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Show Completed -->
            <div class="book-status">
                <div class="sub-title">
                    <h2>Completed</h2>
                    <a href="/completed" class="text-decoration-none fw-bold">See All</a>
                </div>
                <div class="book-list">
                        @foreach($bookData as $book)  
                            @if($book->book_status == 'completed')
                            <a class="text-decoration-none text-black {{$book->book_status}}" href="/bookDetails/{{$book->id}}">
                                <div class="show-book">
                                  <img class="book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                                  <h1 class="">{{$book->book_name}}</h1>
                                </div>
                            </a>
                            @php
                            ++$completed;
                            @endphp
                            @endif
                        @endforeach
                    @if($completed == 0)
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center">
                            <h3>Not Available</h3>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Show On Going -->
            <div class="book-status">
                <div class="sub-title">
                    <h2>On-Going</h2>
                    <a href="/onGoing" class="text-decoration-none fw-bold">See All</a>
                </div>
                <div class="book-list">
                        @foreach($bookData as $book)  
                            @if($book->book_status == 'onGoing')
                            <a class="text-decoration-none text-black {{$book->book_status}}" href="/bookDetails/{{$book->id}}">
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
            <!-- Show On Hold -->
            <div class="book-status">
                <div class="sub-title">
                    <h2>On-Hold</h2>
                    <a href="/onGoing" class="text-decoration-none fw-bold">See All</a>
                </div>
                <div class="book-list">
                        @foreach($bookData as $book)  
                            @if($book->book_status == 'onHold')
                            <a class="text-decoration-none text-black {{$book->book_status}}" href="/bookDetails/{{$book->id}}">
                                <div class="show-book">
                                  <img class="book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                                  <h1 class="">{{$book->book_name}}</h1>
                                </div>
                            </a>
                            @php
                            ++$onHold;
                            @endphp
                            @endif
                        @endforeach
                    @if($onHold == 0)
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center">
                            <h3>Not Available</h3>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Show Dropped -->
            <div class="book-status">
                <div class="sub-title">
                    <h2>Dropped</h2>
                    <a href="/dropped" class="text-decoration-none fw-bold">See All</a>
                </div>
                <div class="book-list">
                        @foreach($bookData as $book)  
                            @if($book->book_status == 'dropped')
                            <a class="text-decoration-none text-black {{$book->book_cover}}" href="/bookDetails/{{$book->id}}">
                                <div class="show-book">
                                  <img class="book-cover" src="{{$book->book_cover}}" alt="Book Cover">
                                  <h1 class="">{{$book->book_name}}</h1>
                                </div>
                            </a>
                            @php
                            ++$dropped;
                            @endphp
                            @endif
                        @endforeach
                    @if($dropped == 0)
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center">
                            <h3>Not Available</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Modal Add Book-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add New Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('addBook.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="Text" class="form-control" id="bookTitle" name="bookTitle" placeholder="Book Title" required>
                        <label for="bookTitle">Book Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="Text" class="form-control" id="bookAuthor" name="bookAuthor" placeholder="Book Author" required>
                        <label for="bookAuthor">Book Author</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" min="1800" max="2999" class="form-control" id="bookYear" name="bookYear" placeholder="Book Year" required>
                        <label for="bookYear">Book Year</label>
                    </div>
                    <div class="mb-3">
                        <label for="bookCover" class="form-label">Book Cover</label>
                        <input class="form-control" type="file" id="bookCover" name="bookCover" required>
                    </div>
                    <div class="mb-3">
                        <label for="bookDetails" class="form-label">Book Details</label>
                        <textarea class="form-control" id="bookDetails" rows="3" name="bookDetails" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="bookStatus">Book Status</label>
                        <select id="bookStatus" class="form-select" aria-label="Default select example" name="bookStatus" required>
                            <option disabled selected>Select Book Status</option>
                            <option value="planToRead">Plan to Read</option>
                            <option value="completed">Completed</option>
                            <option value="onGoing">On Going</option>
                            <option value="onHold">On Hold</option>
                            <option value="dropped">Dropped</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </main>
@endsection('main')
@section('javascript-addon')

    <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const chartSection = document.getElementById('ChartSection');
    const planToRead = document.querySelectorAll('.planToRead').length;
    const completed = document.querySelectorAll('.completed').length;
    const onGoing = document.querySelectorAll('.onGoing').length;
    const onHold = document.querySelectorAll('.onHold').length;
    const dropped = document.querySelectorAll('.dropped').length;
    let total = planToRead + completed + onGoing + onHold + dropped;
    if (total != 0) {
        new Chart(chartSection, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        // Change it with the Sum of Data
                        planToRead, 
                        dropped,
                        onGoing, 
                        onHold,
                        completed, 
                    ],
                    borderWidth: 1
                }],
                labels: ['Plan to Read', 'Dropped', 'On-Going', 'On-Hold', 'Completed'],
            },
            options: {
                color: '#fff',
                plugins: {
                  legend: {
                    position:'bottom',
                    labels: {
                        padding: 40,
                        font: {
                            size: 16,
                        }
                    }
                  }
                },
            },
        });
    } else {
        chartSection.innerHTML = '<h2 class="text-white">No Data</h2>'
    }
  </script>
@endsection('javascript-addon')
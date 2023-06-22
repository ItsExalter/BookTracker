<!doctype html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/styles/style.css">
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
    @yield('main')
    @yield('footer')
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  @yield('javascript-addon')
</body>

</html>
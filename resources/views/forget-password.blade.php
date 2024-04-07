<!doctype html>
<html lang="en">

<head>
    <title>Forget Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
    body {
      background-color: #ffffff;
    }
    .form-container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .form-container h2 {
      color: #f57224;
    }

    .btn-orange{
        background-color: #fb6b49;
    }

    .btn-orange:hover{
        background-color: orange;
    }
  </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="form-container">
        <h2 class="text-center mb-4">Forget Password</h2>
        @if(Session::has('Success'))
        <div class="alert alert-success">{{Session::get('Success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        <form class="form" action="{{route('forget-password')}}" method="post">
            @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{old('email')}}">
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-orange btn-lg text-white">Reset Password</button>
          </div>
        </form>
        {{-- <p class="text-center mt-3">Forgot Password? <a href="{{route('forget-password')}}">Click Here</a></p> --}}
      </div>
    </div>
  </div>
</div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
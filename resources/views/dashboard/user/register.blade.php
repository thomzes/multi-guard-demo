<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>

<body>
    <div class="container">
        <div class="row">
            <h2 style="margin-top: 30px">User Registration</h2>
            <div class="col-md-5">

                <form action="{{ route('user.create') }}" method="post" >
                    @csrf

                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                    @endif

                    <div class="mb-3">
                      <label for="name" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name..." value="{{ old('name') }}">
                      <span class="text-danger">
                          @error('name')
                              {{ $message }}
                          @enderror
                      </span>
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address..." value="{{ old('email') }}">
                      <span class="text-danger">
                          @error('email')
                              {{ $message }}
                          @enderror
                      </span>
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password..." >
                      <span class="text-danger">
                          @error('password')
                              {{ $message }}
                          @enderror
                      </span>
                    </div>

                    <div class="mb-3">
                      <label for="cpassword" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password...">
                      <span class="text-danger">
                          @error('cpassword')
                              {{ $message }}
                          @enderror
                      </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <label for="">Already Registered? <a href="{{ route('user.login') }}">Login here!</a></label>
                
                  </form>

            </div>
        </div>


    </div>



    
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>
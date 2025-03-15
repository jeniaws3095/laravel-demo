<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">Registration Form</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{ route('person.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" 
                            placeholder="Enter your name" value="{{$person->name}}">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                            placeholder="Enter your email" value="{{$person->email}}">
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Contact Number Field -->
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" name="contact" id="contact" 
                            placeholder="Enter your contact number" value="{{$person->contact}}">
                        <div class="text-danger">
                            @error('contact')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" 
                            placeholder="Enter your password">
                        <div class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>

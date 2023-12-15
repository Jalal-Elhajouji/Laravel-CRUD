<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white mt-5">
    <div class="container text-center d-grid col-6">
        <div class="">
            <h1>Students management</h1>
            <hr><br>
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
            @endforeach
        </ul>
        <div class="row">
            <div class="col ">
                <h1>Update student</h1>

                <form action="/update/treatment" method="POST">
                    @csrf

                    <input type="text" name="id" value="{{ $student->id }}" style="display: none;">
                    <div class="mb-4">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control bg-dark text-light" name="fname" value="{{ $student->first_name }}">
                    </div>
                    <div class="mb-4">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" class="form-control bg-dark text-light" name="lname" value="{{ $student->last_name }}">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control bg-dark text-light" name="email" value="{{ $student->email }}">
                    </div>
                    <div class="d-flex gap-1 mx-auto col-12">
                        <a href="/student" class="btn btn-secondary col-6">Cancel</a>
                        <button type="submit" class="btn btn-info col-6">Update</button>
                    </div>

                </form>

            </div>

        </div>
        <a href="/" class="btn btn-warning mt-2">Back to home page</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

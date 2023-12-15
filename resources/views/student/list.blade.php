<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Students management</h1>
                <hr>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif 
                @if (session('updated')) 
                <div class="alert alert-success">
                    {{ session('updated') }}
                </div>
                @endif
                @if (session('deleted')) 
                <div class="alert alert-success">
                    {{ session('deleted') }}
                </div>
                @endif

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach($students as $student)
                        <tr>
                            <td>{{$ide}}</td>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>
                                <a href="/update-student/{{$student->id}}" class="btn btn-secondary mx-1">Update</a>
                                <a href="/delete-student/{{$student->id}}" class="btn btn-danger" onclick="return confirm('Do you really want to delete this student?')">Delete</a>
                            </td>
                        </tr>
                        @php
                            $ide++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                {{ $students->links()}}
            </div>
        </div>
        <a href="/add" class="btn btn-info col-12">Add new student</a>
        <a href="/" class="btn btn-warning col-12 mt-2">Back to home page</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
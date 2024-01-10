<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        @isset($user)
            <div class="card">
                <div class="card-header">
                    User Details
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Name:</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <td>Section:</td>
                            <td>{{$user->section}}</td>
                        </tr>
                        <tr>
                            <td>Image:</td>
                            <td>
                                <img src="{{ asset('storage/' . $user->image) }}" class="img-fluid rounded-top" alt="User Image" width="100" height="100">
                            </td>
                        </tr>
                    </table>
                    <a href="{{route('employees.index')}}">liste de employees</a>
                </div>
            </div>
        @endisset
    </div>
</body>
</html>
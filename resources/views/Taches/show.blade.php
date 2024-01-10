<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Tache Details</title>
</head>
<body>
    <div class="container mt-5">
        @isset($tache)
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Tache Details</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <td>{{ $tache->id }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $tache->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $tache->description }}</td>
                        </tr>
                        <tr>
                            <th>Employees</th>
                            <td>
                                <ul>
                                    @foreach($employees as $employee)
                                        <li>{{ $employee->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('taches.index')}}" class="btn btn-primary">Taches Liste</a>
                </div>
            </div>
        @endisset
    </div>
</body>
</html>

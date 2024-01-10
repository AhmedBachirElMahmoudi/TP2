<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        @isset($project)
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Project Details
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>ID :</td>
                            <td>{{$project->id}}</td>
                        </tr>
                        <tr>
                            <td>Title :</td>
                            <td>{{$project->title}}</td>
                        </tr>
                        <tr>
                            <td>Description :</td>
                            <td>{{$project->description}}</td>
                        </tr>
                        <tr>
                            <td>Employees :</td>
                            <td>
                                <ul class="list-unstyled">
                                    @foreach ($project->employees as $employee)
                                        <li>{{$employee->name}}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <a href="{{route('projects.index')}}" class="btn btn-primary">List Projects</a>
                </div>
            </div>
        @endisset
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

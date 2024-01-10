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
    @isset($user)
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center">Edit Employé</h1>
                            <form action="{{ route('employee.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nom">Nom :</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone :</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="section">Section :</label>
                                    <input type="text" class="form-control" id="section" name="section" value="{{$user->section}}">
                                </div>
                                <div class="form-group" style="margin: 12px 0;">
                                    <label for="photo">Photo :</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    <img id="image-preview" src="{{ asset('storage/' . $user->image) }}" alt="Preview" class="mt-2" style="max-width: 100%; max-height: 200px; display: block;">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var input = document.getElementById('image');
            input.addEventListener('change', previewImage);
    
            function previewImage() {
                var preview = document.getElementById('image-preview');
    
                if (input.files && input.files[0]) {
                    preview.src = URL.createObjectURL(input.files[0]);
                    preview.style.display = 'block';
                } else {
                    preview.src = "";
                    preview.style.display = 'none';
                }
            }
        });
    </script>
    
</body>
</html>
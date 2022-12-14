<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
    <div class="container">
        <div class="row">
            <h4 class="text-center">{{ $title }}</h4>
            {{ session()->get('formTitle') }}
            <div class="col-md-12"> 
                <div class="d-flex justify-content-between my-2">
                    <h5>Post Lists</h5>
                    <a href="{{ url('/posts/create')}}" class="btn btn-primary">Add New</a>
                    <!-- url = same with route on web.php  -->
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>content</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>
                                    <a href="" class="btn btn-info">edit</a>
                                    <a href="" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
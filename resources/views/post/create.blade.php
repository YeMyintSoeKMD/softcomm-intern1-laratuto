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
   
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h5>Post Create Form</h5>
                <a href="{{ url('/posts')}}" class="btn btn-secondary">Back</a>
            </div>
            <form action="{{ url('/posts') }}" method="post">
                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{csrf_field()}} --}}
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Content</label>
                    <textarea rows="4" name="content" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
   
</body>
</html>
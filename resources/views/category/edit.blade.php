<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="card">
        <div class="card-body">
          <form action="{{route('category.update',$category->_id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                <input type="text" name="cat_name" value="{{$category->cat_name}}" class="form-control" id="exampleFormControlInput1" placeholder="Category Name">
                <div class="text-danger">
                  @error('cat_name')
                      {{$message}}
                  @enderror
              </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Image</label>
                <input type="file" name="cat_pic" class="form-control" id="exampleFormControlInput1" placeholder="Category Image">
                <div class="text-danger">
                  @error('cat_pic')
                      {{$message}}
                  @enderror
              </div>
              </div>
              <button type="submit" class="btn btn-outline-dark">update Category</button>
          </form>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
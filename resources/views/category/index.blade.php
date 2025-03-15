<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="{{ route('category.create') }}" class="btn btn-outline-dark my-3 mx-3">Add Category</a>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->cat_name }}</td>
                    <td><img src="/image/{{ $item->cat_pic }}" height="100" width="100" alt=""></td>
                    <td><a href="{{ route('category.edit', $item->id) }}"
                            class="btn btn-outline-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('category.destroy', $item->_id) }}" method="post">
                            @csrf

                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (Session::get('success'))
<script>
    Swal.fire({
  icon: "success",
  title: "{{Session::get('success')}}",
  showConfirmButton: false,
  timer: 1500
});

</script>
@endif

</html>

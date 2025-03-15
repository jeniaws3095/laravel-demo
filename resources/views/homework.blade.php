<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Fruit Names:</h1>

    @php
        print_r($fruits);
    @endphp

    <br><br>
    <label for="">Fruits:</label>
    <select name="fruits" id="">
        @foreach ($fruits as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <i><h1>This is Practice Controller....🥱</h1></i>
    <h2>My name is {{ $name }} .</h2>

    <label for="">Select the Color </label>
    <select name="color" id="">
        @foreach ($arr as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach

    </select>
    <br>
    <br>
    
    @php
        print_r($arr);
    @endphp
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

@php
$cities = ["ha noi", "da nang", "ho chi minh"];
@endphp
@foreach($cities as $key_city => $city)
    {{ $key_city }} - {{ $city }}
@endforeach

</body>
</html>
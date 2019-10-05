<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

@php
    $records = 5;
@endphp
@isset($records)
    {{ $records }}
@endisset

</body>
</html>
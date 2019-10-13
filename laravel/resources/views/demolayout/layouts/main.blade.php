<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/demolayoutassets/demolayout.css") }}">

</head>
<body>

<div class="container">

    @include("demolayout.partials.header")

    @include("demolayout.partials.navigation")


    <div class="row">
        @include("demolayout.partials.sidebar")
        <div id="main-content" class="col-md-8">
            @yield("content")
        </div>
    </div>
    @include("demolayout.partials.footer")


</div>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/demolayoutassets/demolayout.css") }}">

</head>
<body>

<div class="container">

    @include("demolayout.partials.header")

    @include("demolayout.partials.navigation")


    <div class="row">
        <div id="main-content" class="col-md-12">
            <h3>Nội dung chính của trang sẽ thay đổi</h3>
        </div>
    </div>
    @include("demolayout.partials.footer")


</div>



</body>
</html>
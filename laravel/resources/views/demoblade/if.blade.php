<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
echo date("H");
if (date("H") > 12) {
    echo "<br> buổi chiều";
} else {
    echo "<br> buổi sáng";
}
?>

<h1>demo if trong file blade</h1>
@if(date("H") > 12)
    <br> buổi chiều
    @else
    <br> buổi sáng
@endif

</body>
</html>
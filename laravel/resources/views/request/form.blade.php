<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="demolayout.css">

</head>
<body>

<div class="container">


    <div id="header" class="row">
        <h1>Header</h1>
    </div>
    <div id="navigation" class="row">
        <nav id="main-nav">
            <ul class="nav">
                <li class="nav-link"><a href="">Trang chủ</a></li>
                <li class="nav-link"><a href="">Tin tức</a></li>
                <li class="nav-link"><a href="">Liên hệ</a></li>
                <li class="nav-link"><a href="">Tin nội bộ</a></li>
                <li class="nav-link"><a href="">Tin hot</a></li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div id="footer" class="row">
        <h1>Footer</h1>
    </div>
</div>



</body>
</html>
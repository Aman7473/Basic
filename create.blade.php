<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <title></title>
</head>

<body>
    <center>
        <h2> Form Details </h2>
    </center>
    <hr>
    <div class="container"style="background-color:#FD9A85">
        <form class="row g-3" action="/detail" method="post">



            @csrf()
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}

            </div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}

            </div>
        @endif
            <div class="col-md-12">

                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="name"required="">
            </div>
            <br>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="inputEmail4" name="phone"required="">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email"required="">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password"required="">
            </div>
            <div class="col-12">
            <center>    <button type="submit" class="btn btn-primary">Submit</button></center>
            </div>
        </form>
    </div>

</body>

</html>

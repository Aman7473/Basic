<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <center><h1 style="background-color:rgb(255, 247, 0)"> Form Details </h1></center>
    <hr>
    <div class="container"style="background-color: aqua">  
    <form class="row g-3" action="/detail" method="post"enctype="multipart/form-data" >


      
        @csrf()
        <div class="col-md-6">
            <label for="inputName4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName4" name="name">
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4"  name="password">
        </div>
        <div class="col-12">
           <label for="inputstate4" class="form-label">State</label>
          <input type="text" class="form-control" id="inputstate4" placeholder="" name="state"> 

          
        </div>
        
        <div class="col-md-6">
          <label for="inputCity4" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity4" name="city">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Profile Pic</label>
          <input class="form-control" type="file" id="formFile" name="image">
          {{-- <img src ="{{asset('uploads/employee/'.$d->image)}}"width="100px"alt="image"> --}}
        </div>
        
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    
</body>
</html>
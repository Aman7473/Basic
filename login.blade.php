<br><br>
@extends('layout.main')
@section('main')
    <style>
        #z {
            position: relative;
            right: -50%;
        }


        .h {
            position: relative;
            left: -0%;
            top: -80%;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
   
    <div class="container">
        <div class="row">
            
          <center>

            <div class="col-lg-6">

           

                <form action="/AdminZone"method="post"class="p-4 p-md-5 border rounded-3 bg-light">
                    @csrf
                    @if (Session::has('sucess'))
                        <div class="alert alert-sucess">
                            {{ Session::get('sucess') }}

                        </div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}

                        </div>
                    @endif
                   
                    <h3><b>Coding Clave</b> </h3>
                    <hr>

                    <div class="form-floating mb-3 mt-5 ">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="email@.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-3 mt-5">
                        <input type="password"name="password"class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <hr class="my-4">
                   
                   
                </form>
              </center>

            </div>




        </div>
    
    @endsection()

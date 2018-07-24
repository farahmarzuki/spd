 @extends('frontend.layout')
   @section('content')

    <!-- Page Content -->
    <br>
    <br>
    <p align="center">Register New User</p>
    <section class="py-5">
      <div class="container">
      	<form>
      	  <div class="form-group row">
      	    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
      	    <div class="col-sm-10">
      	      <input text="email"input type="email" class="form-control" id="inputEmail3" placeholder="Nama">
      	    </div>
      	  </div>
      	  <div class="form-group row">
      	    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
      	    <div class="col-sm-10">
      	      <input text="password" input type="password" class="form-control" id="inputPassword3" placeholder="abc@email.com">
      	    </div>
      	  </div>
      	  <div class="form-group row">
      	    <label for="inputPassword3" class="col-sm-2 col-form-label">IC no</label>
      	    <div class="col-sm-10">
      	      <input text="icno" input type="icno" class="form-control" id="inputPassword3" placeholder="121212-12-1232">
      	    </div>
      	  </div>
      	  <div class="form-group row">
      	    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      	    <div class="col-sm-10">
      	      <input text="password" input type="password" class="form-control" id="inputPassword3">
      	    </div>
      	  </div>
      	    <div class="form-group row">
      	    <div class="col-sm-10">
      	      <button type="submit" class="btn btn-primary">Register</button>
      	    </div>
      	  </div>
      	</form>

      </div>
    </section>


    @endsection
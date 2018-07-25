 @extends('frontend.layout')
   @section('content')

    <!-- Page Content --> 
    <section class="py-5">
      <div class="container">
      	<h1>Register New User<br></h1><br>

      	@include('common.alert')

      	@include('common.form_error')

      	<form method="POST" action="{{route('user.register.post')}}">
      		@csrf
      	  <div class="form-group row">
      	    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
      	    <div class="col-sm-10">
      	      <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{old('name')}}">
      	    </div>
      	  </div>
      	  <div class="form-group row">
      	    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
      	    <div class="col-sm-10">
      	      <input type="email" name="email" class="form-control" id="email" placeholder="abc@email.com" value="{{old('email')}}"> <!--untuk remembered kt form-->
      	    </div>
      	  </div>
      	  <div class="form-group row">
      	    <label for="inputPassword3" class="col-sm-2 col-form-label">IC no</label>
      	    <div class="col-sm-10">
      	      <input type="text" name="ic" class="form-control" id="ic" placeholder="IC No without dash (-)" value="{{old('icno')}}">
      	    </div>
      	  </div>
      	  <div class="form-group row">
      	    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      	    <div class="col-sm-10">
      	      <input type="password" name="password" class="form-control" id="inputPassword3">
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
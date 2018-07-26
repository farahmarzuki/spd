 @extends('backend.layout')
  @section('content')

  <h1>Show Sesi:{{$sesi->name}} <br></h1><br><br>
	
	<p>Nama:{{$sesi->name}}</p>
	<p>Status:{{$sesi->status ? 'open' : 'close'}}</p>
	<p>Pingat:{{$sesi->pingat}}</p>

 <a href="{{url()->previous()}}">Back to Senarai</a>


@endsection
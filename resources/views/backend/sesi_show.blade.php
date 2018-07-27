 @extends('backend.layout')
  @section('content')
  <br>

  <h1>Show Sesi:{{$sesi->name}} <br></h1><br><br>
	
	<p>Nama:{{$sesi->name}}</p>
	<p>Status:{{$sesi->status ? 'open' : 'close'}}</p>
	<p>Pingat:{{$sesi->pingat}}</p>

 <a href="{{url()->previous()}}">Back to Senarai</a>


@endsection

@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('js')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
@endpush
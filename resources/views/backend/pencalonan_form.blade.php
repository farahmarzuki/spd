	@csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Sesi</label>
    <div class="col-sm-10">
      <select name="sesi_id" class="form-control">
        @foreach($sesis as $sesi)
        @if(isset($calon->sesi->id) && old('sesi_id', $sesi->id) == $calon->sesi->id)
        <option value="{{ $sesi->id }}" selected> {{$sesi->name}} </option>
        @else
        <option value="{{ $sesi->id }}" selected> {{$sesi->name}} </option>
        @endif
        @endforeach 
      </select>
    </div>
  </div>
  <fieldset>
    <legend>Calon</legend>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Calon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="{{old('name', $calon->name)}}">
      <!--untuk remembered kt form/if else statement if status true checked if not biar kosong-->
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">NO IC </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ic" class="form-control"  placeholder="Nombor ic" value="{{old('ic', $calon->ic)}}">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email </label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control"  placeholder="email@yahoo.com" value="{{old('email', $calon->email)}}">
    </div>
  </div>
  </fieldset>
  

   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Asas</label>
    <div class="col-sm-10">
      <textarea name ="asas" class="form-control">{{old('asas', $calon->asas)}}</textarea>
    </div>
  </div>


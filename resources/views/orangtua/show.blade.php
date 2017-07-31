@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Orang Tua
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>



	<div class="panel-body">
		
			

	<div class="form-group">
	<label class="control-lable">Nama ayah</label>
	  <input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" readonly="" >
	  </div>


	<div class="form-group">
		<label class="control-lable">Nama ibu</label>
		<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" readonly="" >
	</div>

	<div class="form-group">
		<label class="control-lable">Umur ayah</label>
		<input type="number" name="c" value="{{$ortu->umur_ayah}}" class="form-control" readonly="" >
	</div>

	<div class="form-group">
		<label class="control-lable">Umur ibu</label>
		<input type="number" name="d" value="{{$ortu->umur_ibu}}" class="form-control" readonly="" >
	</div>

	<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea class="form-control" rows="10" name="e" readonly="">
		{{$ortu->alamat}}</textarea>
	</div>

	
	</form>
	</div>
	</div>
	</div>
	@endsection




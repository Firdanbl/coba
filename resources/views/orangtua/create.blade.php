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
		<form action="{{route('orangtua.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<label class="control-lable">Nama ayah</label>
			<input type="text" name="a" class="form-control" required="">
	</div>

	<div class="form-group">
		<label class="control-lable">Nama ibu</label>
		<input type="text" name="b" class="form-control" required="">
	</div>

	<div class="form-group">
		<label class="control-lable">Umur ayah</label>
		<input type="number" name="c" class="form-control" required="">
	</div>

	<div class="form-group">
		<label class="control-lable">Umur ibu</label>
		<input type="number" name="d" class="form-control" required="">
	</div>

	<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea class="form-control" rows="10" name="e" required=""></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
	</form>
	</div>
	</div>
	</div>
	@endsection




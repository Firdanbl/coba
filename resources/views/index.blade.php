@extends('layouts.master')
@section('isi')
		@foreach($ortu as $key)<hr>
		Nama ibu  	:{{$key->nama_ibu}}<br>
		Nama ayah 	:{{$key->nama_ayah}}<br>
		Umur ibu    :{{$key->umur_ibu}}<br>
		Umur ayah   :{{$key->umur_ayah}}<br>
		Nama anak   :
		@foreach($key->siswa as $data)
		<li>{{$data->nama}}</li>
		@endforeach
		<hr>
		@endforeach
@endsection
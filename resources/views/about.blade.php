@extends('layouts.master')
@section('isi')
		@foreach($ortu as $key)<hr>
		Nama ibu  	: {{$key->nama_ibu}}<br>
		Nama ayah 	:{{$key->nama_ayah}}<br>
		Umur ibu    :{{ $key->umur_ibu}}<br>
		Umur ayah   :{{$key->umur_ayah}}<br>
		Nama anak   :
		@foreach($data->siswa as $key)
		<li>{{$key->nama}}</li>
		@endforeach
		<hr>
		@endforeach
		
@endsection
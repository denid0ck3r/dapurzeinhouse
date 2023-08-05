@extends('layout.main')

@section('container')
<h1>Halaman || {{$halaman}}</h1>

@foreach ($users as $user)
<h5>Nama: {{$user->name}}, Email: {{$user->email}}</h5>
@endforeach
@endsection
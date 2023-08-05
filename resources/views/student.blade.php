@extends('layout.main')

@section('container')
<h1>Halaman || {{$halaman}}</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Nip</th>
        <th scope="col">Major</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($student as $data)
    <tbody>
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->nip}}</td>
        <td>{{$data->major}}</td>
        <td><a href="studentinfo/{{$data->slug}}" class="text-decoration-none">Show Posts</a></td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
@endsection
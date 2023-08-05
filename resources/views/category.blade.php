@extends('layout.main')

@section('container')
<h1>Halaman {{$halaman}}</h1><br>
@foreach ($category as $ctg)
<article class="mb-3 border-bottom pb-4">


   <h2>{{$ctg->id}} : <a href="categoryinfo/{{$ctg->slug}}" class="text-decoration-none">{{$ctg->category}}</a></h2>
   
   
</article>
@endforeach
@endsection
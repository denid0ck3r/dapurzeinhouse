@extends('layout.main')

@section('container')
<h1>Halaman {{$halaman}}</h1>
@foreach ($categories as $ctg)
<article class="mb-5 border-bottom pb-4">


   <h2>Category : {{$ctg->category}}</h2>
   
   
</article>
@endforeach
@endsection
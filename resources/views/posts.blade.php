@extends('layout.main')

@section('container')
<h1>Halaman || {{$halaman}}</h1><br><br>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">


   <h2>Judul Post: {{$post->title}}</h2>
   <h3>Category Article: <a href="categoryinfo/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->category}}</a></h3>
   <h3>By: <a href="studentinfo/{{$post->student->slug}}" class="text-decoration-none">{{$post->student->name}}</a></h3>
   <p>Excerpt: {{$post->excerpt}}</p>
   <a href="/posts/{{$post->slug}}"" class="text-decoration-none">Read more..</a>
   
</article>
@endforeach
@endsection
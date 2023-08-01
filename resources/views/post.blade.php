
@extends('layout.main')

@section('container')
<h1>Halaman {{$halaman}}</h1>
<form>
    <div class="mb-3">
<article class="mb-7">
    <h2>Title : {{$post->title}}</h2>
    <h4>By: {{$post->student->name}}</a></h4>
    <p>{{$post->body}}</p>
</article>
    </div>
</form>
<a href="/posts"><--Back</a>
@endsection
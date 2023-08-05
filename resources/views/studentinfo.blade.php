@extends('layout.main')

@section('container')
<h1>Halaman || {{$halaman}}</h1><br>
<form>
    <div class="mb-3">
<article>
    <h3>Student Name : {{$student->name}}</h3>
    <h3>Student Major : {{$student->major}}</h3>
    <h3>Student NIP : {{$student->nip}}</h3>
    @foreach ($posts as $post)
    <h4>- Post ke {{$post->id}} : <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a></h4>
    @endforeach
</article>
    </div>
</form>
<a href="/posts"><--Back</a>
@endsection
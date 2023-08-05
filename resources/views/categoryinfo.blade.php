@extends('layout.main')

@section('container')
<h1>Category || {{$halaman}}</h1><br>
<form>
    <div class="mb-5">

   
    @foreach ($posts as $post)
    <h4>Posts ke {{$post->id}} : <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a>, By: {{$post->student->name}} </h4>
    @endforeach

    </div>
</form>
<a href="javascript:history.go(-1)"><--Back to Category</a>
@endsection
@extends('layout.main')

@section('container')
<h1>Halaman || {{$halaman}}</h1>
<form>
    <div class="mb-3">
<article>
    <h2>Student Name : {{$student->name}}</h2>
    <h2>Student Major : {{$student->major}}</h2>
    <h2>Student NIP : {{$student->nip}}</h2>
</article>
    </div>
</form>
<a href="/posts"><--Back</a>
@endsection
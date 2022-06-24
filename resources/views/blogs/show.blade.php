@extends('layouts/layout')

@section('content')
<div class="content">
    <h1>{{ $blog -> titel }}</h1>
    <p>{{ $blog -> tekst }}</p>
    <img class="blog-foto" src="{{ asset('fotos/' . $blog->image_path )}}" alt="">
    <br>
    <a href="/" class="terug"><- Terug naar alle blogs</a>
    <form action="/blogs/{{$blog->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="bttn-verwijder">Verwijder Blog</button>
        <a href="edit/{{$blog->id}}" class="bttn-update">Edit</a>
    </form>
</div>




@endsection
        
        
        


@extends('layouts/layout')

@section('content')

<div class="content">
    <p class="geplaatst">{{ session('geplaatst') }}</p>
    <p class="verwijderd">{{ session('verwijderd') }}</p>
    <h2> Nieuwste blogs</h2>
    @foreach($blogs as $blog)

            <img class="blog-foto" src="{{ asset('fotos/' . $blog->image_path )}}" alt="">
            <div class="blog-titel"> 
                <a href="/blogs/{{$blog->id}}"> {{$blog->titel}}</a>
            </div>
            <div class="div blog-datum">
                {{$blog->created_at}}
            </div>
            <div class="div blog-tekst">
                <p>{{$blog->tekst}}</p>
            </div>
            @endforeach
</div>
@endsection
        
        
        


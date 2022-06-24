@extends('layouts/layout')

@section('content')

<div class="blog-maken">
    <h1>Maak een nieuwe blog</h1>
    <form action="/blogs" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" id="foto" name="foto">
        <br>
        <label for="titel">Blog titel:</label>
        <br>
        <input type="text" id="titel" name="titel" required>
        <br>
        <label for="tekst">Blog tekst:</label>
        <br>
        <textarea type="textarea" id="tekst" name="tekst"></textarea required>
        <br>
        <input type="submit" value="Blog Plaatsen">
    </form>
</div>



@endsection
        
        
        


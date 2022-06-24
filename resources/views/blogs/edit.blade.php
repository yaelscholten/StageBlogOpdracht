<h1>Update Member</h1>
<form action="/edit" methode="POST">
    @csrf
<input type="hidden" name="id" value="{{ $blog['id'] }}">
<input type="text" id="titel" name="titel" value="{{ $blog['titel'] }}">
<input type="textarea" id="tekst" name="tekst" value="{{ $blog['tekst'] }}"></input>
<button type="submit">Update</button>
</form>
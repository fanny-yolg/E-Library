@extends('layout.main')

@section('title', 'Form Update Book')

@section('container')
<div class="container">
<div class = "row">
<div class = "col-10"> 
    <h1 class="mt-3">Please Fill the form to update a book</h1>
    <form method="POST" action="/books/{{ $book->id }}">
    @method("put")
    @csrf

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name ="title" placeholder="Please insert the title" value="{{ $book->Title }}">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" placeholder="Please insert the author..." name="Author" value="{{ $book->Author }}">
  </div>
  <div class="form-group">
    <label for="Synopsis">Synopsis</label>
    <input type="text" class="form-control" id="synopsis" placeholder="Please insert the synopsis..." name="Synopsis" value="{{ $book->Synopsis }}">
  </div>

  <button type="submit" class="btn btn-primary my-3">Edit Book..?</button>
</form>

   
    </div>
    </div>
</div>
@endsection
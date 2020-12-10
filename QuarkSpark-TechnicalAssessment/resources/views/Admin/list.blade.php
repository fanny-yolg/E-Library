@extends('layout.main')

@section('title', 'Admin Editor')

@section('container')
<div class="container">
<div class = "row">
<div class = "col-8"> 
    <h1 class="mt-3">Book Databases</h1>
    
    <ul class="list-group">
    @foreach($books as $book)
        <li class="list-group-item d-flex justify-content-between align-items-center">
           {{ $book->Title }}
        <a href="/books/{{$book->id}}">detail</a>

        </li>
    @endforeach
    </ul>

    </div>
    </div>
</div>
@endsection

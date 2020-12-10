@extends('layout.main')

@section('title', 'Detail Book')

@section('container')
<div class="container">
<div class = "row">
<div class = "col-8"> 
    <h1 class="mt-3">Book Detail</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->Title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $book->Author }}</h6>
            <p class="card-text">{{$book->Synopsis}}</p>

            <a href="{{ $book->id }}/edit" class="btn btn-primary">Edit</button></a>

            <form action="/book/{{ $book->id }}" method="POST" class='display d-inline'>
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <a href="/book/admin" class="card-link">Back to list</a>
        </div>
    </div>

    </div>
    </div>
</div>
@endsection
@extends('layouts.master')


@section('title')
  All books
@endsection

@section('content')
  <h1>All books</h1>

  @foreach($books as $title => $book)
    <div class='book'>

        <h2>{{ $title }}</h2>
        Authored by {{ $book ['author'] }}

    </div>

  @endforeach

@endsection

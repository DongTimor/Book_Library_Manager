@extends('welcome')

@section('content')
<div>
    <div>
        <h1>Admin create book</h1>
    </div>

    <form action="{{ route('admin.books.store') }}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="title" placeholder="Title">
        <select name="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <button type="submit" >Create</button>
    </form>
</div>
@endsection

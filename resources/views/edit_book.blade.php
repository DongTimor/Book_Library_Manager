@extends('welcome')

@section('content')
<form action="{{ route('admin.books.update', $book->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="container">
        <h1>Edit Book {{ $book->id }}</h1>
        <div style="display: flex; flex-direction: column; gap: 10px; background-color: #f0f0f0; padding: 10px;">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $book->title }}">
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px; background-color: #f0f0f0; padding: 10px;">
            <label for="author_id">Author</label>
            <select name="author_id">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </div>
</form>
@endsection

@extends('admin')

@section('content')
    {{-- {{ dd($book->categoryBooks->contains('id', 1)) }} --}}
    {{-- {{ dd($book) }} --}}
    <form action="{{ route('admin.books.update', $book) }}" method="post">
        @csrf
        @method('PUT')

        <h2>Edit book : {{ $book->title }}</h2>

        <label for="title">Title</label>
        <x-adminlte-input type="text" name="title" value="{{ $book->title }}" />


        <label for="author_id">Author</label>
        <x-adminlte-select name="author_id">
            @foreach ($authors as $author)
                @if ($author->id === $book->authorBook->id)
                    <option selected value="{{ $author->id }}">{{ $author->name }}</option>
                @else
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endif
            @endforeach
        </x-adminlte-select>
        <label for="category_id">Categories</label>
        <x-adminlte-select class='select2' name="category_id[]" id="category_id" multiple>
            @foreach ($categories as $category)
                @if ($book->categoryBooks->contains('id', $category->id))
                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </x-adminlte-select>
        <x-adminlte-button label="Update" type="submit" />

    </form>
@endsection

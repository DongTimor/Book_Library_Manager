@extends('admin')

@section('content')
    <div>
        <div>
            <h2>Admin create book</h2>


            <form action="{{ route('admin.books.store') }}" method="post">
                @csrf
                @method('POST')
                <label>Name</label>
                <x-adminlte-input type="text" name="title" placeholder="Title" />
                <label>Author</label>
                <x-adminlte-select class="" name="author_id">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </x-adminlte-select>
                <label>Categories</label>
                <x-adminlte-select class='select2' name="category_id[]" id="category_id" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-adminlte-select>


                <x-adminlte-button type="submit" label="Create"></x-adminlte-button>
            </form>
        </div>
    @endsection

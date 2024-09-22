@extends('welcome')

@section('content')
<div>
    <div>
        <h1>Admin get all of Books</h1>
        <form action={{ route('admin.books.search') }} >
            @csrf
            <input id='search' name='search' placeholder="Enter keywords..."/>
            <button>search</button>
        </form>

    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->authorBook->name }}</td>
                <td>
                    <a href="{{ route('admin.books.edit', $book->id) }}">Edit</a>
                    <a href="{{ route('admin.books.delete', $book->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
        <a href="{{ route('admin.books.create') }}">Add Book</a>
        </tbody>
    </table>
</div>
@endsection()

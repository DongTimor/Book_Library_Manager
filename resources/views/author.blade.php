@extends('welcome')

@section('content')
<div>
    <div>
        <h1>Admin get all of Authors</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th style="border: 1px solid black">ID</th>
                <th style="border: 1px solid black">Author</th>
                <th style="border: 1px solid black">Books</th>
            </tr>
        </thead>
        <tbody> <!-- Thêm tbody để chứa các hàng -->
        @foreach ($authors as $author)
            <tr>
                <td style="border: 1px solid black">{{ $author->id }}</td>
                <td style="border: 1px solid black">{{ $author->name }}</td>
                <div class="flex flex-col">
                    @foreach ($author->books as $book)
                        <td style="color: blue">{{ $book->title }}</td>
                        <br>
                    @endforeach
                </div>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

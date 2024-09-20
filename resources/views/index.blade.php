<div>
    <div>
        <h1>Admin get all of Books</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody> <!-- Thêm tbody để chứa các hàng -->
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td> <!-- Sửa ở đây -->
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

@extends('admin')


@section('content')

<x-adminlte-profile-widget name="{{ $author->name }}" desc="Author" theme="teal"
    img="https://picsum.photos/id/1/100">
    <x-adminlte-profile-col-item title="email" text="{{ $author->email }}" url="#"/>
    <x-adminlte-profile-col-item title="Information" text="{{ $author->infor }}" url="#"/>
    <x-adminlte-profile-col-item title="Books" text="{{ $author->authorBooks->count() }}" url="#"/>
</x-adminlte-profile-widget>
<h4 class="collection-title" style="margin-top: 40px">Books</h4>

<x-adminlte-datatable id="2" :heads="['Name', 'Categories', 'Author', 'Date', 'Action', 'Action']">
    @foreach ($author->authorBooks as $book)
        <tr>
            <td><a href="{{ route('admin.books.show', $book) }}">
                    {{ $book->title }}</a></td>
            <td class="cell-/7eo">
                <div style="display: flex; flex-wrap: wrap">
                    @foreach ($book->categoryBooks as $category)
                        <span
                            style="background-color: rgb(221, 106, 94);
                            width: fit-content;
                            color: rgb(174, 233, 233);
                            border-radius: 5px;
                            margin: 3px;
                            padding-left: 10px;
                            padding-right: 10px">{{ $category->name }}</span>
                    @endforeach
                </div>

            </td>
            <td class="cell-qNw_">{{ $book->authorBook->name }}</td>
            <td class="cell-?ex+"><time>{{ $book->created_at }}</time></td>
            <td class="cell-`zz5">

                <a href="{{ route('admin.books.edit', $book) }}">edit</a>

            </td>
            <td class="cell-)Y7&quot;">

                <a href="{{ route('admin.books.delete', $book) }}">delete</a>

            </td>
        </tr>
    @endforeach

</x-adminlte-datatable>

@endsection()

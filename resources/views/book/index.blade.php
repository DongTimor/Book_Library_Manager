@extends('admin')

@section('content')
    <div>
        <div>
            <h2>Book's Manager</h1>
            <label>Filter by categories</label>
            <select id="categorySelect" class="form-control select2" style="margin-bottom: 20px " multiple>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-adminlte-button id="btn-create-book" label='Create new book' class="btn btn-primary" style="margin-top: 20px " />
            <h4 class="collection-title" style="margin-top: 20px">Books</h4>

            <x-adminlte-datatable id="table1" :heads="['Name', 'Categories', 'Author', 'Date', 'Action', 'Action']">
                @foreach ($books as $book)
                    <tr data-category-id="{{ $book->categoryBooks->pluck('id')->implode(',') }}">
                        <td><a href="{{ route('admin.books.show', $book) }}">{{ $book->title }}</a></td>
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
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#categorySelect').select2();

            $('#categorySelect').on('change', function() {
                var selectedCategoryIds = $(this).val();
                var rows = document.querySelectorAll('#table1 tr');

                rows.forEach(function(row) {
                    var categoryIds = String(row.getAttribute('data-category-id'));
                    // console.log(categoryIds, "---------------", selectedCategoryIds);

                    var categories = categoryIds.split(',').map(id => id.trim());

                    if (selectedCategoryIds.length === 0 || selectedCategoryIds.some(id =>
                            categories.includes(id))) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    </script>
@endsection

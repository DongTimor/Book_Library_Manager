@extends('admin')

@section('js')
    <script>
        $(document).ready(function() {

            $('#author-select').on('change', function() {
                var authorId = $(this).val();
                var bookSelect = $('#book-select');

                bookSelect.empty();
                // console.log(bookSelect)
                if (authorId) {
                    $.ajax({
                        url: "{{ route('test.getBooks', '') }}/" + authorId,
                        success: function(data) {
                            console.log(data)
                            bookSelect.append(
                                '<option value="-1">---Select the book---</option>');

                            data.forEach(function(book) {
                                bookSelect.append('<option value="' + book.id + '">' +
                                    book.title + '</option>');
                            });
                        },
                        error: function(xhr) {
                            bookSelect.append(
                                '<option value="-1">---Select the author---</option>');
                        }
                    });
                } else {
                    bookSelect.prop('disabled', true);
                }
            })
        });
    </script>
@stop

@section('content')
    <x-adminlte-select id="author-select" name="author-select">
        <option value="-1">--Select Author--</option>

        @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-select id="book-select" name="book-select">

        <option value="-1">--Select the Author First--</option>

    </x-adminlte-select>
@endsection

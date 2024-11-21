@extends('adminlte::page')

@section('title', 'Create User')

@section('content_header')

@stop
@section('js')

    <script>
        $(document).ready(function() {
            $('.select2').select2();

            // Gán sự kiện cho nút tạo tác giả
            $('#btn-create-author').on('click', function() {
                window.location.href = "{{ route('admin.authors.create') }}";
            });

            // Gán sự kiện cho nút tạo sách
            $('#btn-create-book').on('click', function() {
                window.location.href = "{{ route('admin.books.create') }}";
            });

            $('#btn-create-category').on('click', function() {
                window.location.href = "{{ route('admin.categories.create') }}";
            });

            // Khởi tạo DataTable
            $('.usersTable').DataTable();
        });
    </script>
@stop
@section('content')

@stop

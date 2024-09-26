@extends('admin')

@section('content')
    {{-- {{ dd($book) }} --}}
    <form action="{{ route('admin.categories.update', $category) }}" method="post">
        @csrf
        @method('PUT')

        <h2>Edit Category's Information</h2>

        <label>Name</label>
        <x-adminlte-input type="text" name="name" value="{{ $category->name }}" />
        <x-adminlte-button label="Update" type="submit" />

    </form>
@endsection

@extends('admin')

@section('content')
    {{-- {{ dd($book) }} --}}
    <form action="{{ route('admin.authors.update', $author) }}" method="post">
        @csrf
        @method('PUT')
        <h2>Edit Author's Information : {{ $author->name }}</h2>
        <label>Name</label>
        <x-adminlte-input type="text" name="name" value="{{ $author->name }}" />
        <label>Email</label>
        <x-adminlte-input type="text" name="email" value="{{ $author->email }}" />
        <label>Information</label>
        <x-adminlte-input type="text" name="infor" value="{{ $author->infor }}" />
        <x-adminlte-button label="Update" type="submit" />
    </form>
@endsection

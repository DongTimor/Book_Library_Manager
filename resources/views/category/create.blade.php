
@extends('admin')

@section('content')
<div>
    <div>
        <h2>Admin create category</h2>


    <form action="{{ route('admin.categories.store') }}" method="post">
        @csrf
        @method('POST')
        <label>Name</label>
        <x-adminlte-input type="text" name="name" placeholder="Name.."/>
        <x-adminlte-button type="submit" label="Create" ></x-adminlte-button>
    </form>
</div>
@endsection

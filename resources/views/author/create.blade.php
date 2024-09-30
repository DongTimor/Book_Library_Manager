@extends('admin')

@section('content')
    <div>
        <div>
            <h2>Admin create author</h2>
            <form action="{{ route('admin.authors.store') }}" method="post">
                @csrf
                @method('POST')
                <label>Name</label>
                <x-adminlte-input type="text" name="name" placeholder="Name.." />
                <label>Email</label>
                <x-adminlte-input type="text" name="email" placeholder="Email.." />
                <label>Information</label>
                <x-adminlte-input type="text" name="infor" placeholder="Information.." />
                <x-adminlte-button type="submit" label="Create"></x-adminlte-button>
            </form>
        </div>
    @endsection

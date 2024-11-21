@extends('admin')

@section('content')
    <form action="{{ route('admin.users.update', auth()->user()) }}" method="POST">
        @csrf
        @method('PUT')
        <label>new Password</label>
        <x-adminlte-input  type="password" name="password"></x-adminlte-input>

        <label>Confirm</label>
        <x-adminlte-input  type="password" name="password_confirmation"></x-adminlte-input>

        <x-adminlte-button label='change' type='submit'/>


    </form>
@endsection()

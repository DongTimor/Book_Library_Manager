@extends('admin')

@section('content')
<x-adminlte-profile-widget name="Alice Viorich" desc="Community Manager" theme="purple"
    img="https://picsum.photos/id/454/100" footer-class="bg-gradient-pink">
    <x-adminlte-profile-col-item icon="fab fa-2x fa-instagram" text="Instagram" badge="purple" size=4/>
    <x-adminlte-profile-col-item icon="fab fa-2x fa-facebook" text="Facebook" badge="purple" size=4/>
    <x-adminlte-profile-col-item icon="fab fa-2x fa-twitter" text="Twitter" badge="purple" size=4/>
</x-adminlte-profile-widget>
@endsection()

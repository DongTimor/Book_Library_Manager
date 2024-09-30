@extends('admin')

@section('content')
    <div>
        <div>
            <h2>Category 's manager</h1>

        </div>
        <x-adminlte-button id="btn-create-category" label='Create new category' class="btn btn-primary" />
        <h4 class="collection-title" style="margin-top: 20px">Categories</h4>

        <x-adminlte-datatable id="2" :heads="['STT', 'Categories', 'Date', 'Action', 'Action']">
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="{{ route('admin.categories.edit', $category) }}">
                            {{ $category->name }}</a></td>
                    <td class="cell-?ex+"><time>{{ $category->created_at }}</time></td>
                    <td class="cell-`zz5">

                        <a href="{{ route('admin.categories.edit', $category) }}">edit</a>

                    </td>
                    <td class="cell-)Y7&quot;">

                        <a href="{{ route('admin.categories.delete', $category) }}">delete</a>

                    </td>
                </tr>
            @endforeach

        </x-adminlte-datatable>

    </div>
@endsection()

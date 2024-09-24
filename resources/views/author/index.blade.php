@extends('admin')

@section('content')
    <div>
        <div>
            <h2 style="margin-bottom: 20px">Authors Manager</h2>
        </div>
        <x-adminlte-button id="btn-create-author" label='Create new author' class="btn btn-primary" />
        <x-adminlte-datatable id="datatable" :heads="['STT', 'Name', 'Email', 'Information', 'Action', 'Action']">
            @foreach ($authors as $author)
                <tr>
                    <td>
                        {{ $author->id }}
                    </td>
                    <td>
                        <a href="{{ route('admin.authors.show', $author) }}">{{ $author->name }}</a>
                    </td>
                    <td>
                        {{ $author->email }}
                    </td>
                    <td>
                        {{ $author->infor }}
                    </td>
                    <td class="cell-`zz5">

                        <a href="{{ route('admin.authors.edit', $author) }}">edit</a>

                    </td>
                    <td class="cell-)Y7&quot;">

                        <a href="{{ route('admin.authors.delete', $author) }}">delete</a>

                    </td>
                </tr>
            @endforeach

        </x-adminlte-datatable>

    </div>
@endsection

@extends('admin')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .book-container {

            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-title {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .book-author {
            color: #555;
            margin-bottom: 20px;
        }

        .book-content {
            line-height: 1.6;
            color: #a3214d
        }

        .book-categories {
            display: flex;
            flex-wrap: wrap;

            .category {
                color: #cf0b2b;
                padding-left: 5px;
                padding-right: 5px;
                background-color: #61e0b6;
                border-radius: 5px;
                border: 1px;
                margin: 10px;


            }

        }
    </style>
    <x-adminlte-card title="Info Card" theme="info" icon="fas fa-lg fa-bell" maximizable>
        <div class="book-container">
            <h1 class="book-title">
                {{ $book->title }}
            </h1>
            <p class="book-author">by <a
                    href="{{ route('admin.authors.show', $book->authorBook) }}">{{ $book->authorBook->name }}</a></p>
            <div class="book-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae libero bibendum tincidunt.
                    Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <p>Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec
                    tellus sed augue semper porta.</p>
            </div>
            <div class="book-categories">
                @foreach ($book->categoryBooks as $category)
                    <div class="category">{{ $category->name }}</div>
                @endforeach

            </div>
        </div>

    </x-adminlte-card>
@endsection()

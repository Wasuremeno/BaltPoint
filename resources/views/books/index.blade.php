@extends('layout')

@section('title', 'Books List')

@section('content')
<div class="flex mb-4">
    <h2>Books List</h2>
    <a href="{{ route('books.create') }}" class="btn">Add New Book</a>
</div>

@if($books->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Category</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>
                    <strong>{{ $book->title }}</strong>
                    @if($book->description)
                        <div class="text-muted">{{ Str::limit($book->description, 50) }}</div>
                    @endif
                </td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>
                    @if($book->category)
                        <span class="badge">{{ $book->category->name }}</span>
                    @else
                        <span class="text-muted">No category</span>
                    @endif
                </td>
                <td>{{ $book->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <p><strong>Total books:</strong> {{ $books->count() }}</p>
        <p><strong>Latest addition:</strong> {{ $books->first()->created_at->diffForHumans() }}</p>
    </div>
@else
    <div class="text-center mt-4">
        <p>No books found. <a href="{{ route('books.create') }}">Add your first book</a></p>
    </div>
@endif
@endsection
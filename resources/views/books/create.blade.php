@extends('layout')

@section('title', 'Add Book')

@section('content')
<div class="flex mb-4">
    <h2>Add New Book</h2>
    <a href="{{ route('books.index') }}" class="btn secondary">Back to List</a>
</div>

<form method="POST" action="{{ route('books.store') }}">
    @csrf
    
    <div class="form-group">
        <label for="title">Book Title *</label>
        <input type="text" 
               id="title" 
               name="title" 
               value="{{ old('title') }}"
               class="{{ $errors->has('title') ? 'error-input' : '' }}"
               required>
        @error('title')
            <div class="error-text">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="author">Author *</label>
        <input type="text" 
               id="author" 
               name="author" 
               value="{{ old('author') }}"
               class="{{ $errors->has('author') ? 'error-input' : '' }}"
               required>
        @error('author')
            <div class="error-text">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select id="category_id" name="category_id">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="publication_year">Publication Year</label>
        <input type="number" 
               id="publication_year" 
               name="publication_year" 
               value="{{ old('publication_year') }}"
               min="1900" 
               max="{{ date('Y') }}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
    </div>

    <button type="submit" class="btn mt-3">Add Book</button>
</form>
@endsection
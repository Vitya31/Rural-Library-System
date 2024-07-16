@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Create A New Borrow Record</h1>
    <form method="POST" action="{{ route('borroweds.store') }}">
        @csrf
        <div class="mb-3">
            <label for="book_id" class="form-label">Book:</label>
            <select name="book_id" id="book_id" class="form-select" required>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="member_id" class="form-label">Member:</label>
            <select name="member_id" id="member_id" class="form-select" required>
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="borrow_date" class="form-label">Borrow Date:</label>
            <input type="date" name="borrow_date" id="borrow_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="return_date" class="form-label">Return Date (optional):</label>
            <input type="date" name="return_date" id="return_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Record</button>
    </form>
</div>
@endsection

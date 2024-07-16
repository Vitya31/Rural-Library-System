@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Borrowed Records</h1>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <form action="{{ route('borroweds.index') }}" method="GET">
            <input type="text" name="search" placeholder="Enter Book ID or Member's IC Number" style="width: 290px;" required>
            <button type="submit">Search</button>
        </form>

        <div>
            <a href="{{ route('borroweds.create') }}" class="btn btn-success" style="margin-right: 10px;">Add New Borrowing Book</a>
            <a href="{{ route('volunteer.index') }}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Member Name</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($borroweds as $borrowing)
            <tr>
                <td>{{ $borrowing->book->title }}</td>
                <td>{{ $borrowing->member->name }}</td>
                <td>{{ $borrowing->borrow_date }}</td>
                <td>{{ $borrowing->return_date ?? 'Not Returned' }}</td>
                <td>
                    <a href="{{ route('borroweds.edit', $borrowing) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No borrowed book record found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {!! $borroweds->links()!!}
</div>
@endsection

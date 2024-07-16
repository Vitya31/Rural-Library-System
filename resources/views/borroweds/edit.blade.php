@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Borrow Record</h1>

    <form action="{{ route('borroweds.update', $borrowed->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="return_date">Return Date:</label>
            <input type="date" class="form-control" name="return_date" id="return_date" value="{{ $borrowed->return_date ?? old('return_date') }}" required>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('borroweds.index') }}" class="btn btn-secondary ml-2">Cancel</a>
        </div>
    </form>
</div>
@endsection

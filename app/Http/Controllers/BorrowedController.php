<?php

namespace App\Http\Controllers;

use App\Models\Borrowed;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Member;

class BorrowedController extends Controller
{
    public function index(Request $request)
    {
        $query = Borrowed::with(['book', 'member']);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->whereHas('book', function ($q) use ($search) {
                $q->where('id', $search);
            })->orWhereHas('member', function ($q) use ($search) {
                $q->where('ic_number', $search);
            });
        }

        $borroweds = $query->paginate(20);
        return view('borroweds.index', compact('borroweds'));
    }

    public function create()
    {
        // Fetch all books and members to populate select dropdowns
        $books = Book::all();
        $members = Member::all();
        return view('borroweds.create', compact('books', 'members'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'member_id' => 'required|exists:members,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date'
        ]);

        Borrowed::create($validated);
        return redirect()->route('borroweds.index')->with('success', 'New borrowed record created successfully.');
    }

    public function show(Borrowed $borrowed)
    {
        //
    }

    public function edit(Borrowed $borrowed)
    {
        return view('borroweds.edit', compact('borrowed'));
    }

    public function update(Request $request, Borrowed $borrowed)
    {
        $validated = $request->validate([
            'return_date' => 'required|date|after_or_equal:borrow_date'
        ]);
    
        $borrowed->update($validated);
        return redirect()->route('borroweds.index')->with('success', 'Return date updated successfully.');
    }

    public function destroy(Borrowed $borrowed)
    {
        //
    }
}

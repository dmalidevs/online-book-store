<div class="container">
    <h1 class="mb-4">All Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Create</a>
    @forelse ($books as $book)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">by {{ $book->author }}</p>
                <p class="card-text">the price of this book is {{ $book->author }}</p>
            </div>
        </div>
    @empty
        <p class="text-muted">No books found.</p>
    @endforelse
</div>
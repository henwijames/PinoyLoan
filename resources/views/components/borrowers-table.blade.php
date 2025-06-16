@props(['borrowers'])

<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>Name</th>
        <th>Amount Borrowed</th>
        <th>Balance</th>
        <th>Status</th>
        <th>Date Borrowed</th>
        <th>Due Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @forelse ($borrowers as $borrower)
        <tr>
          <td>{{ $borrower->first_name }} {{ $borrower->middle_name }} {{ $borrower->last_name }}</td>
          <td>₱{{ number_format($borrower->amount_borrowed, 2) }}</td>
          <td>₱{{ number_format($borrower->balance, 2) }}</td>
          <td class="badge {{ $borrower->status === 'unpaid' ? 'badge-error text-white' : 'badge-success' }} capitalize">
            {{ $borrower->status }}
          </td>
          <td>{{ $borrower->date_borrowed }}</td>
          <td>{{ $borrower->due_date }}</td>
          <td class="flex gap-2">
            <a href="/borrowers/{{ $borrower->id }}" class="btn btn-sm btn-info">View</a>
            <a href="/borrowers/{{ $borrower->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
            <form action="/borrowers/{{ $borrower->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-error text-white">Delete</button>
            </form>
          </td>
        </tr>

      @empty
        <tr>
          <td colspan="7" class="text-center">No Borrowers found</td>
        </tr>
      @endforelse

    </tbody>
  </table>
</div>

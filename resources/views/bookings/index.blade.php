@extends('master.layout')

@section('content')

<section class="section" id="bookings">

  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>My Bookings</h2>
      <p>View and manage your reservations</p>
    </div>

    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Pax</th>
            <th>Date</th>
            <th>Package</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>

        <tbody>
          @forelse($bookings as $booking)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $booking->name }}</td>
              <td>{{ $booking->email }}</td>
              <td>{{ $booking->phone }}</td>
              <td>{{ $booking->pax }}</td>
              <td>{{ $booking->date->format('d M Y') }}</td>
              <td>
                @if($booking->package_id == 1) Package A
                @elseif($booking->package_id == 2) Package B
                @else Package C
                @endif
              </td>
              <td>{{ $booking->address }}</td>
              <td>
                <a href="{{ route('bookings.edit', $booking) }}" class="btn-action btn-action-sm mb-1">Edit</a>

                <form action="{{ route('bookings.destroy', $booking) }}" method="POST" class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                          class="btn-delete"
                          onclick="return confirm('Are you sure you want to delete this booking?')">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="9" class="text-center text-muted py-4">
                No bookings found
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

  </div>

</section>

@endsection
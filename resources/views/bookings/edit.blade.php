<!-- edit.blade.php -->

@extends('master.layout')
@section('content')

<section id="book" class="book-a-table section">

  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-12" data-aos="fade-up" data-aos-delay="400">
        <div class="reservation-form-wrapper">
          <div class="form-header">
            <h3>Edit Booking</h3>
            <p>Please update your booking details below</p>
          </div>

          <form action="{{ route('bookings.update', $booking) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row gy-4">
              <div class="col-lg-4 form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ $booking->name }}" required>
              </div>

              <div class="col-lg-4 form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ $booking->email }}" required>
              </div>

              <div class="col-lg-4 form-group">
                <input type="text" name="phone" class="form-control" placeholder="Your Phone" value="{{ $booking->phone }}" required>
              </div>

              <div class="col-lg-4 form-group">
                <input type="date" name="date" class="form-control" value="{{ $booking->date->format('Y-m-d') }}" required>
              </div>

              <div class="col-lg-4 form-group">
                <input type="number" name="pax" class="form-control" placeholder="Number of Pax" value="{{ $booking->pax }}" required>
              </div>

              <div class="col-lg-4 form-group">
                <select name="package_id" class="form-select" required>
                  <option value="">Select Package</option>
                  <option value="1" {{ $booking->package_id == 1 ? 'selected' : '' }}>Package A</option>
                  <option value="2" {{ $booking->package_id == 2 ? 'selected' : '' }}>Package B</option>
                  <option value="3" {{ $booking->package_id == 3 ? 'selected' : '' }}>Package C</option>
                </select>
              </div>

              <div class="col-12 form-group">
                <textarea class="form-control" name="address" rows="3" placeholder="Address">{{ $booking->address }}</textarea>
              </div>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking was updated successfully.</div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn-book-table">Update Booking</button>
              <a href="{{ route('bookings.index') }}" class="btn btn-secondary ms-2">Cancel</a>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>

</section>

@endsection
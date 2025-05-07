@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Booking #{{ $booking->id }}</h2>
    <div class="card mb-3">
        <div class="card-body">
            <strong>User:</strong> {{ $booking->user->name ?? '-' }} ({{ $booking->user->email ?? '' }}) <br>
            <strong>Date:</strong> {{ $booking->booking_date }} <br>
            <strong>Time:</strong> {{ $booking->start_time }} - {{ $booking->end_time }} <br>
            <strong>Status:</strong> {{ ucfirst($booking->status) }} <br>
            <strong>Service:</strong> {{ $booking->service_type }} <br>
            <strong>Location:</strong> {{ $booking->location ?? '-' }} <br>
            <strong>Price:</strong> {{ $booking->price }} JD <br>
            <strong>Notes:</strong> {{ $booking->notes ?? '-' }} <br>
            <strong>Created At:</strong> {{ $booking->created_at->format('Y-m-d H:i') }}
        </div>
    </div>
    <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection

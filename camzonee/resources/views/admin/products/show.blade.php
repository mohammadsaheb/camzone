@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Product Details</h2>
    <div class="mb-3">
        <strong>Name:</strong> {{ $product->name }} <br>
        <strong>Category:</strong> {{ $product->category->name ?? '-' }} <br>
        <strong>Brand:</strong> {{ $product->brand }} <br>
        <strong>Price:</strong> {{ $product->price }} JD <br>
        <strong>Quantity:</strong> {{ $product->quantity }} <br>
        <strong>Description:</strong>
        <div class="border rounded p-2">{{ $product->description }}</div>
        <strong>Status:</strong> {{ $product->is_active ? 'Active' : 'Inactive' }} <br>
        <strong>Featured:</strong> {{ $product->is_featured ? 'Yes' : 'No' }} <br>
    </div>
    <h4>Product Images</h4>
    <div class="row">
        @forelse($product->images as $image)
            <div class="col-md-3 mb-3">
                <img src="{{ asset('storage/'.$image->image_path) }}" class="img-fluid rounded border" alt="">
            </div>
        @empty
            <div class="text-muted">No images for this product.</div>
        @endforelse
    </div>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <p>Total Products: {{ $totalProducts }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-blue">Manage Products</a>
</div>
@endsection

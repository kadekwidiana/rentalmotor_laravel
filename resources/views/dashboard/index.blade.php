@extends('layouts.main')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="mb-4 text-white card bg-primary">
            <div class="card-body"><b>{{ $car }} Motor</b></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="{{ route('car.index') }}">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="mb-4 text-white card bg-secondary">
            <div class="card-body"><b>{{ $user }} Pelanggan</b></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="{{ route('user.index') }}">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="mb-4 text-white card bg-success">
            <div class="card-body"><b>{{ $transaction }} Transaksi</b></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="{{ route('transaction.index') }}">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
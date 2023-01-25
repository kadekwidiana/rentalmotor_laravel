@extends('layouts.main')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="mb-4 breadcrumb">
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="mt-3 justify-content-center">
    <div class="card">
        <div class="card-body">
            <img src="{{ asset('storage/' . $transaction->car->image) }}" width="350" alt="">
            <p>Pelanggan : {{ $transaction->user->name }}</p>
            <p>Alamat : {{ $transaction->user->alamat }}</p>
            <p>Motor : {{ $transaction->car->name }}</p>
            <p>Plat Nomor : {{ $transaction->car->plat }}</p>
            <p>Tanggal Pinjam : {{ $transaction->date_start }}</p>
            <p>Tanggal Kembali : {{ $transaction->date_end }}</p>
            <p>Total : Rp. {{ number_format($transaction->total) }}</p>
            <p>Catatan : {{ $transaction->note }}</p>
        </div>
    </div>
    <a href="{{ route('transaction.create') }}" class="btn btn-danger">Print Transaksi</a>
</div>

@endsection
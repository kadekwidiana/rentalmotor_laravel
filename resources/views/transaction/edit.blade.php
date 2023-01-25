@extends('layouts.main')

@section('content')
<h1 class="mt-4">Transaksi</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Edit Transaksi</li>
</ol>
<form action="{{ route('transaction.update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
    @csrf()
    @method('PUT')
  <div class="mb-3">
    <label for="user_id" class="form-label">Nama Peminjam</label>
    <select class="form-select" id="user_id" name="user_id">
    @foreach($users as $user)
    <option {{ (old('user_id', $transaction->user_id) == $user->id ? 'selected' : '') }} value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
    </select>
    @error('user_id')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Pilih Motor</label>
    <select class="form-select" id="status" name="car_id">
    @foreach($cars as $car)
    <option {{ (old('car_id', $transaction->car_id) == $car->id ? 'selected' : '') }} value="{{ $car->id }}">{{ $car->name }}</option>
    @endforeach
    </select>
    @error('car_id')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="date_end" class="form-label">Tanggal Pinjam</label>
    <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_start" id="date_start" value="{{ old('date_start', $transaction->date_start) }}">
    @error('date_start')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="date_end" class="form-label">Tanggal Kembali</label>
    <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_end" id="date_end" value="{{ old('date_end', $transaction->date_end) }}">
    @error('date_end')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="note" class="form-label">Note</label>
    <textarea name="note" id="note" class="form-control @error('note') @enderror">{{ old('note', $transaction->note) }}</textarea>
    @error('note')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
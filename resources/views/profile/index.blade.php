@extends('layouts.main')

@section('content')
<h1 class="mt-4">Profile</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Ubah Profile</li>
</ol>
<form action="{{ route('profile.change') }}" method="POST" enctype="multipart/form-data">
    @csrf()
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $data->name) }}">
    @error('name')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" required class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $data->email) }}">
    @error('email')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <a href="{{ route('change-password') }}">Change password?</a>
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success">Update</button>
  </div>
</form>
@endsection


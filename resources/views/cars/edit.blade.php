@extends('layouts.main')

@section('content')
<h1 class="mt-4">Motor</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Edit Motor {{ $car->name }}</li>
</ol>
<form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
    @csrf()
    @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $car->name) }}">
    @error('name')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  {{-- Plat --}}
  <div class="mb-3">
    <label for="plat" class="form-label">Plat</label>
    <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" id="plat" value="{{ old('plat', $car->plat) }}">
    @error('plat')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  {{-- Warna --}}
  <div class="mb-3">
    <label for="warna" class="form-label">Warna</label>
    <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" id="warna" value="{{ old('warna', $car->warna) }}">
    @error('warna')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  {{-- tahun --}}
  <div class="mb-3">
    <label for="tahun" class="form-label">Tahun</label>
    <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" value="{{ old('tahun', $car->tahun) }}">
    @error('tahun')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  {{-- tipe --}}
  <div class="mb-3">
    <label for="tipe" class="form-label">Tipe Motor</label>
    <select class="form-select" id="tipe" name="tipe">
    <option {{ ($car->tipe == 1) ? 'selected' : '' }} value="1" >YAMAHA</option>
    <option {{ ($car->tipe == 0) ? 'selected' : '' }} value="0">HONDA</option>
    </select>
  </div>
  {{-- CC motor --}}
  <div class="mb-3">
    <label for="cc" class="form-label">CC Motor</label>
    <input type="text" class="form-control @error('cc') is-invalid @enderror" name="cc" id="cc" value="{{ old('cc', $car->cc) }}">
    @error('cc')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Gambar</label>
    <input type="hidden" name="oldImage" value="{{ $car->image }}">
    @if($car->image)
      <img src="{{ asset('storage/' . $car->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt=""> 
    @else
      <img src="" class="img-preview img-fluid mb-3 col-sm-5" alt="">
    @endif
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value="{{ old('image', $car->image) }}">
    @error('image') 
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Harga</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price', $car->price) }}">
    @error('price')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" class="form-control @error('description') @enderror">{{ old('description', $car->description) }}</textarea>
    @error('description')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Kondisi</label>
    <select class="form-select" id="status" name="status">
    <option {{ ($car->status == 1) ? 'selected' : '' }} value="1" >Bagus</option>
    <option {{ ($car->status == 0) ? 'selected' : '' }} value="0">Kurang Bagus</option>
    </select>
  </div>
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success">Update</button>
  </div>
</form>

<script>
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection
@extends('layouts.main')

@section('content')
<h1 class="mt-4">Motor</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Tambah Motor</li>
</ol>
<form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
    @csrf()
  

  {{-- input grup MEREK, TIPE, DAN CC --}}
  <div class="row">
    <div class="col">
      <label for="name" class="form-label">Merek</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Merek Motor">
      @error('name')
      <span class="invalid-feedback">{{ $message }}</span>
      @enderror
    </div>
    <div class="col">
      <label for="tipe" class="form-label">Tipe</label>
      <select class="form-select" id="tipe" name="tipe">
      <option value="1">YAMAHA</option>
      <option value="0">HONDA</option>
      <option value="2">SUZUKI</option>
      </select>
    </div>
    <div class="col">
      <label for="cc" class="form-label">CC Motor</label>
      <div class="input-group mb-3">
      <input type="text" class="form-control @error('cc') is-invalid @enderror" name="cc" id="cc" value="{{ old('cc') }}" placeholder="1000">
      <span class="input-group-text">CC</span>
      @error('cc')
      <span class="invalid-feedback">
        {{ $message }}
      </span>
      @enderror
    </div>
    </div>
  </div>
  {{-- input warna motor --}}
  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="warna" class="form-label">Warna</label>
    </div>
    <div class="col-auto">
      <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" id="warna" value="{{ old('warna') }}" placeholder="Warna motor">
    @error('warna')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
    </div>
  </div>
  {{-- Input grup plat, tahun --}}
  <div class="row">
    <div class="col">
      <label for="plat" class="form-label">Plat</label>
    <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" id="plat" value="{{ old('plat') }}" placeholder="DK 0000 ??">
    @error('plat')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
    </div>
    <div class="col">
      <label for="tahun" class="form-label">Tahun</label>
    <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" value="{{ old('tahun') }}" placeholder=" 2000">
    @error('tahun')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
    </div>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Foto Motor</label>
    <img src="" class="mb-3 img-preview img-fluid col-sm-5" alt="">
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image') 
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  {{-- grup harga dan kondisi --}}
  <div class="row">
    <div class="col">
      <label for="price" class="form-label">Harga</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Rp.</span>
    
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" placeholder="00000..">
    @error('price')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
    </div>
    </div>
    <div class="col">
      <label for="status" class="form-label">Kondisi</label>
    <select class="form-select" id="status" name="status">
    <option selected value="1">Bagus</option>
    <option value="0">Kurang Bagus</option>
    </select>
    </div>
  </div>

  <br>
  <div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" class="form-control @error('description') @enderror" placeholder="Masukan deskripsi">{{ old('description') }}</textarea>
    @error('description')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Submit</button>
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
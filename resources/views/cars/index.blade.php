@extends('layouts.main')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="mb-4 breadcrumb">
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="d-flex">
  <a href="{{ route('car.create') }}" class="btn btn-primary">Tambah Motor</a>
</div>
<div class="mt-3 justify-content-center">
  <form action="{{ route('car.index') }}" method="GET">
    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <input type="text" value="{{ Request::input('search') }}" class="form-control" placeholder="Cari data motor...." name="search">
        </div>
      </div>
      <div class="col-1">
      <button class="btn btn-outline-primary" type="submit">Cari</button>
      </div>
    </div>
  </form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Merek</th>
      <th scope="col">Gambar</th>
      <th scope="col">Plat</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($cars as $car)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $car->name }}</td>
      <td><img src="{{ asset('storage/' . $car->image) }}" width="100" alt=""></td>
      <td>{{ $car->plat }}</td>
      <td>
        @if($car->status == 1)
        <span class="badge bg-success">Bagus</span>
        @else
        <span class="badge bg-danger">Kurang Bagus</span>
        @endif
      </td>
      <td>Rp.{{ number_format($car->price ) }}/Hari</td>
      <td>
        <form class="d-inline" action="{{ route('car.destroy', $car->id) }}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger" onclick="return confirm('Hapus data mobil ini?')">Hapus</button>
        </form>
        <a href="{{ route('car.edit', $car->id) }}" class="btn btn-success">Edit</a>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detail{{ $car->id }}">
          Detail
        </button>
        <!-- <a href="#" class="btn btn-info">Detail</a> -->
      </td>
      <!-- Detail Motor -->
      <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="detail{{ $car->id }}" tabindex="-1" aria-labelledby="detail{{ $car->id }}Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>Detail Motor</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>
                <center><img src="{{ asset('storage/' . $car->image) }}" width="350" alt=""></center>
              </p>
              <p>Merek : <b>{{ $car->name }}</b> {{ $car->cc }}cc</p>
              <p>Plat : {{ $car->plat }}</p>
              <p>Warna : {{ $car->warna }}</p>
              <p>Tahun : {{ $car->tahun }}</p>
              <p>Tipe : @if($car->tipe == 1)
                <span>YAMAHA</span>
                @else
                <span>HONDA</span>
                @endif
              </p>
              <p>Harga : Rp. {{ number_format($car->price ) }}/Hari</p>
              <p>Kondisi : @if($car->status == 1)
                <span class="badge bg-success">Bagus</span>
                @else
                <span class="badge bg-danger">Kurang Bagus</span>
                @endif
              </p>
              <p>Keterangan : {{ $car->description }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </tr>

    @empty
    <tr>
      <td colspan="7" class="text-center">
        Belum ada data
      </td>
    </tr>
    @endforelse
    {{ $cars->links() }}
  </tbody>
</table>
@endsection
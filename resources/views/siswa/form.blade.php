@extends('layouts.app')

@section('title', 'Form Siswa')

@section('contents')
  <form action="{{ isset($siswa) ? route('siswa.tambah.update', $siswa->id) : route('siswa.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($siswa) ? 'Form Edit Data' : 'Form Tambah Data' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nis">Nis</label>
              <input type="number" class="form-control" id="nis" name="nis" value="{{ isset($siswa) ? $siswa->nis : '' }}">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($siswa) ? $siswa->nama : '' }}">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="custom-select" value="{{ isset($siswa) ? $siswa->jenis_kelamin : '' }}">
								<option value="lakilaki">Laki-laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
            </div>
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ isset($siswa) ? $siswa->tempat_lahir : '' }}">
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ isset($siswa) ? $siswa->tanggal_lahir : '' }}">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="{{ isset($siswa) ? $siswa->alamat : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection

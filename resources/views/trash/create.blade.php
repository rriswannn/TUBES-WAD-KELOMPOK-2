@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card animated fadeInDown" style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-header" style="background-color: #28a745; color: #fff;">Tambah Sampah Baru</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('trash.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group animated fadeInUp">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group animated fadeInUp">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Kolom Jarak -->
                            <div class="form-group animated fadeInUp">
                                <label for="jarak">Jarak Lokasi Anda dari Telkom University(km)</label>
                                <input type="text" class="form-control @error('jarak') is-invalid @enderror" id="jarak" name="jarak" value="{{ old('jarak') }}" required>
                                @error('jarak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- End Kolom Jarak -->

                            <div class="form-group animated fadeInUp">
                                <label for="jenis_sampah">Jenis Sampah</label>
                                <input type="text" class="form-control @error('jenis_sampah') is-invalid @enderror" id="jenis_sampah" name="jenis_sampah" value="{{ old('jenis_sampah') }}" required>
                                @error('jenis_sampah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group animated fadeInUp">
                                <label for="tanggal_penjemputan">Tanggal Penjemputan</label>
                                <input type="date" class="form-control @error('tanggal_penjemputan') is-invalid @enderror" id="tanggal_penjemputan" name="tanggal_penjemputan" value="{{ old('tanggal_penjemputan') }}" required>
                                @error('tanggal_penjemputan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group animated fadeInUp">
                                <label for="waktu_penjemputan">Waktu Penjemputan</label>
                                <input type="time" class="form-control @error('waktu_penjemputan') is-invalid @enderror" id="waktu_penjemputan" name="waktu_penjemputan" value="{{ old('waktu_penjemputan') }}" required>
                                @error('waktu_penjemputan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group animated fadeInUp">
                                <label for="kendaraan">Kendaraan</label>
                                <select class="form-control @error('kendaraan') is-invalid @enderror" id="kendaraan" name="kendaraan" required>
                                    <option value="mobil" {{ old('kendaraan') == 'mobil' ? 'selected' : '' }}>Mobil</option>
                                    <option value="motor" {{ old('kendaraan') == 'motor' ? 'selected' : '' }}>Motor</option>
                                </select>
                                @error('kendaraan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    <br>

                            <div class="form-group animated fadeInUp">
                                <button type="submit" class="btn btn-success">Tambah Sampah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>
@endsection

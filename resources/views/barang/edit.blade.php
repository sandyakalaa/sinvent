@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
		<div class="pull-left">
		    <h2>EDIT BARANG</h2>
		</div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.update',$rsetBarang->id) }}" method="POST" enctype="multipart/form-data">                    
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">MERK BARANG</label>
                                <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ old('merk',$rsetBarang->merk) }}" placeholder="Masukkan Merk Barang">
                           
                                <!-- error message untuk merk -->
                                @error('merk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SERI BARANG</label>
                                <input type="text" class="form-control @error('seri') is-invalid @enderror" name="seri" value="{{ old('seri',$rsetBarang->seri) }}" placeholder="Masukkan Seri Barang">
                           
                                <!-- error message untuk seri -->
                                @error('seri')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">SPESIFIKASI BARANG</label>
                                <input type="text" class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" value="{{ old('spesifikasi',$rsetBarang->spesifikasi) }}" placeholder="Masukkan Spesifikasi Barang">
                           
                                <!-- error message untuk spesifikasi -->
                                @error('spesifikasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">STOK BARANG</label>
                                <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok',$rsetBarang->stok) }}" placeholder="Masukkan Stok Barang" disabled>
                           
                                <!-- error message untuk stok -->
                                @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KATEGORI</label>
                                <select class="form-control" name="kategori_id" aria-label="Default select example">
                                    <option value="blank">Pilih Deskripsi</option>
                                    @foreach ($akategori as $rowkategori)
                                        @if ($selectedKategori && $selectedKategori->id == $rowkategori->id)
                                            <option value="{{ $rowkategori->id }}" selected>{{ $rowkategori->deskripsi }}</option>
                                        @else
                                            <option value="{{ $rowkategori->id }}">{{ $rowkategori->deskripsi }}</option>
                                        @endif
                                    @endforeach
                                </select>
                               
                                <!-- error message untuk kategori -->
                                @error('kategori_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- <div class="form-group">
                                <label class="font-weight-bold">FOTO</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"> -->
                           
                                <!-- error message untuk foto -->
                                <!-- @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> -->

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <a href="{{ route('barang.index') }}" class="btn btn-md btn-primary">Back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
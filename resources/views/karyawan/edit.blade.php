<x-app-layout>
    <div class="card-header">
        <h3>Ubah Data Pelanggan</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('karyawan.update',$karyawan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" value="{{ $karyawan->no_induk }}" name="no_induk" id="no_induk" type="text" placeholder="Masukkan Nomor Reservasi" />
                        <label for="no_induk">Nomor Reservasi</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" value="{{ $karyawan->nama }}" name="nama" id="nama" type="text" placeholder="Masukkan Nama Lengkap" />
                        <label for="nama">Nama Lengkap</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" value="{{ $karyawan->alamat }}" name="alamat" id="alamat" type="text" placeholder="Masukkan Alamat" />
                <label for="alamat">Alamat</label>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" value="{{ $karyawan->tgl_lahir }}" name="tgl_lahir" id="tgl_lahir" type="date" placeholder="Masukkan Tanggal Lahir" />
                        <label for="tgl_lahir">Tanggal Lahir</label>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Pelanggan</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
<x-app-layout>
    <div class="card-header">
        <h3>Tambah Data Reservasi Pelanggan</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cuti.update', $cuti->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <select class="form-control" name="karyawan_id" id="karyawan1" onchange="pilihKaryawan()">
                            <option value="">{{ $cuti->karyawan->nama }}</option>
                            @foreach ($karyawan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        <label for="karyawan_id">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" value="{{ $cuti->karyawan->no_induk }}" name="no_induk" id="no_induk" type="text" placeholder="Masukkan Nomor Induk" />
                        <label for="no_induk">Nomor Reservasi</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="tgl_cuti" id="tgl_cuti" type="date" placeholder="Masukkan Tanggal Mulai Cuti" />
                        <label for="tgl_cuti">Tanggal Mulai Pesan</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="akhir_cuti" id="akhir_cuti" type="date" placeholder="Masukkan Tanggal Selesai Cuti" />
                        <label for="akhir_cuti">Tanggal Selesai Pesan</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" value="{{ $cuti->keterangan }}" name="keterangan" id="keterangan" type="text" placeholder="Masukkan Keterangan" />
                <label for="keterangan">Keterangan</label>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid">
                    <button class="btn btn-primary btn-block" type="submit">Ubah Data Reservasi Pelanggan</button>
                </div>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            function pilihKaryawan() {
                var id = $('#karyawan1').val();
                console.log(id);
                $.ajax({
                    url: '{{ route('getKaryawan') }}',
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        console.log(response)
                        $('#no_induk').val(response.no_induk);
                    }
                });
            }
        </script>
    @endpush
</x-app-layout>
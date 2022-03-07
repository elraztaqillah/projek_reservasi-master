<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Reservasi Pelanggan</h1>
        
    @if($message = session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses</strong> {{$message}}
            </button>
        </div>
    @endif
    @if($message = session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> {{$message}}
            </button>
        </div>
    @endif
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nomor Reservasi</th>
                            <th>Nama</th>
                            <th>Tanggal Mulai Pesan</th>
                            <th>Tanggal Akhir Pesan</th>
                            <th>Lama Pesan</th>
                            <th>Keterangan</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cuti as $item)
                            <tr>
                                <td>{{ $item->karyawan->no_induk }}</td>
                                <td>{{ $item->karyawan->nama }}</td>
                                <td>{{ $item->tgl_cuti }}</td>
                                <td>{{ $item->akhir_cuti }}</td>
                                <td>{{ $item->lama_cuti }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a href="{{ route('cuti.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                                        Edit
                                    </button> --}}
                                    <form action="{{ route('cuti.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
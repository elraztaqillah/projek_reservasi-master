<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Pelanggan</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nomor Reservasi</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Registrasi</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $item)
                            <tr>
                                <td>{{ $item->no_induk }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('karyawan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                                        Edit
                                    </button> --}}
                                    <form action="{{ route('karyawan.destroy', $item->id) }}" method="POST">
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
<x-app-layout>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Data Cuti Karyawan Lebih dari 1 Kali</h3>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nomor Induk</th>
                            <th>Nama</th>
                            <th>Total Pengambilan Cuti</th>
                            <th>Lama Cuti</th>
                            <th>Tanggal Cuti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($total as $item)
                            <tr>
                                <td>{{ $item->karyawan->no_induk }}</td>
                                <td>{{ $item->karyawan->nama }}</td>
                                <td>{{ $item->total}} Kali</td>
                                <td>{{ $item->lama_cuti }} Hari</td>
                                <td>
                                    <ul>
                                        @foreach ($item->karyawan->cuti as $item1)
                                            <li>{{ $item1->tgl_cuti }} </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
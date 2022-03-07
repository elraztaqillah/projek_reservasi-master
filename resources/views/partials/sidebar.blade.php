<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            
            <div class="sb-sidenav-menu-heading">Pelanggan</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#karyawan" aria-expanded="false" aria-controls="karyawan">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Data Pelanggan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="karyawan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('karyawan.index') }}">Data Pelanggan</a>
                    <a class="nav-link" href="{{ route('karyawan.create') }}">Tambah Pelanggan</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Reservasi</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cuti" aria-expanded="false" aria-controls="cuti">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Data Reservasi 
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="cuti" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('cuti.index') }}">Data Reservasi Pelanggan</a>
                    
                    <a class="nav-link" href="{{ route('cuti.create') }}">Tambah Reservasi Pelanggan</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>
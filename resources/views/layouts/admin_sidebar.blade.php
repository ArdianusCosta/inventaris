<a href="#" class="brand-link">
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Inventaris RPL</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="inventaris" class="nav-link {{ request()->is('inventaris') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-laptop"></i>
                    <p>Inventaris</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="jurnal_laboratorium" class="nav-link {{ request()->is('jurnal_laboratorium') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-warehouse"></i>
                    <p>Jurnal Laboratorium</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="kerusakan_alat" class="nav-link {{ request()->is('kerusakan_alat') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-hammer"></i>
                    <p>Kerusakan Alat</p>
                </a>
            </li>
            <li class="nav-header">3P</li>
            <li class="nav-item">
                <a href="peminjaman" class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>Peminjaman</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pengembalian" class="nav-link {{ request()->is('pengembalian') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-stopwatch"></i>
                    <p>Pengembalian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="perbaikan" class="nav-link {{ request()->is('perbaikan') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tools"></i>
                    <p>Perbaikan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="stok_bahan" class="nav-link {{ request()->is('stok_bahan') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>Stok Bahan</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>

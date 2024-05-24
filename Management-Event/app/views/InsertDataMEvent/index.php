<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li >
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/MEvent">
                        <i class="fas fa-table"></i>
                        <span>Data</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= BASEURL ?>/InsertDataMEvent">
                        <i class="fas fa-table-columns"></i>
                        <span>Tambah Data </span>
                    </a>
                </li>
                <li class="logout">
                    <a href="<?= BASEURL ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

    <div class="main--content">
            

            <form action="<?= BASEURL; ?>/MEvent/tambahMEvent" method="post" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label for="nama_event" class="form-label">Nama Event</label>
                    <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                </div>
                
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="alamat_event" class="form-label">Alamat Event</label>
                    <input type="text" class="form-control" id="alamat_event" name="alamat_event" required>
                </div>
                
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="peserta_event" class="form-label">Peserta</label>
                    <input type="text" class="form-control" id="peserta_event" name="peserta_event" required>
                </div>
                
                <div class="mb-3">
                    <label for="tanggal_event" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" required>
                </div>

                    <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>

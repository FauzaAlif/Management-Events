<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li >
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= BASEURL ?>/MEvent">
                        <i class="fas fa-table"></i>
                        <span>Data</span>
                    </a>
                </li>
                <li>
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
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Management Event</h2>
            </div>
            <div class="user--info">
                <img src="../assets/background.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Event</h3>
            <div class="table-container">
                


<div class="row">

    <?php foreach ( $data["MEvent"] as $MEvent) : ?>
    <div class="card mb-3 col-lg-6 me-3" style="max-width: 540px;">
        <div class="row g-0">   
            <div class="col-md-4">

            </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?= $MEvent['nama_event']; ?></h5>
            <p class="card-text"><?= $MEvent['alamat_event']; ?></p>
            <p class="card-text">Peserta: <?= $MEvent['peserta_event']; ?></p>
            <p class="card-text"><small class="text-body-secondary"><?= $MEvent['tanggal_event']; ?></small></p>
            <td>
                <a href="<?= BASEURL; ?>/MEvent/editMEvent/<?= $MEvent['id_event']; ?>" class="badge text-bg-success float-center tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModalMEvent" data-id="<?= $MEvent['id_event']; ?>">Edit</a> 
                <a href="<?= BASEURL; ?>/MEvent/hapusMEvent/<?= $MEvent['id_event']; ?>" class="badge text-bg-danger float-center" onclick="return confirm('Apakah anda yakin?')">Hapus</a></td>
        </div>
        </div>
    </div>
</div>
    <?php endforeach ?>

</div>


            </div>
        </div>
    </div>



    <div class="modal fade" id="formModalMEvent" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/MEvent/editMEvent" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_event" id="id_event">

                            <div class="mb-3">
                                <label for="nama_event" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat_event" class="form-label">Alamat Event</label>
                                <input type="text" class="form-control" id="alamat" name="alamat_event" required>
                            </div>

                            <div class="mb-3">
                                <label for="peserta_event" class="form-label">Jumlah Peserta</label>
                                <input type="text" class="form-control" id="peserta_event" name="peserta_event" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_event" class="form-label">Tanggal Event</label>
                                <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Edit Data</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

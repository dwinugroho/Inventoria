<div class="row">

    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <?php if ($this->session->flashdata('gagal_input_tempo')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('gagal_input_tempo') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                Barang
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nama barang</label>
                        <br>
                        <select name="inventory_id" class="chosen-select">
                            <option value="" selected disabled>--pilih barang--</option>
                            <?php foreach ($barang as $b) : ?>
                                <option value="<?= $b['id'] ?>"><?= $b['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group jumlah_barang">
                        <label for="">Jumlah Barang</label>
                        <input type="text" class="form-control form-control-sm" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Keluar</label>
                        <input type="number" name="jumlah_keluar" class="form-control form-control-sm" autocomplete="off" placeholder="jumlah keluar">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm float-right" name="submit" type="submit">tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--div class="col-md-auto">
        <div class="card">
            <div class="card-header">
                <?php if ($this->session->flashdata('gagal_input_tempo')) : ?>
                                                                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                                                    <?= $this->session->flashdata('gagal_input_tempo') ?>
                                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                <?php endif ?>
                <h5>Barang</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th>Jumlah</th>
                                <th>Jumlah Masuk</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1;
                            foreach ($barang as $barang) : ?>
                                                                                                            <tr>
                                                                                                                <th scope="row"><?= $nomor ?></th>
                                                                                                                <td><?= $barang['nama'] ?></td>
                                                                                                                <td><?= $barang['jumlah'] ?></td>
                                                                                                                <form action="" method="post">
                                                                                                                    <td>
                                                                                                                        <input class="form-control form-control-sm" name="jumlah_keluar" type="number" autocomplete="off">
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <input name="inventory_id" type="hidden" value="<?= $barang['id'] ?>">
                                                                                                                        <button class="btn btn-primary btn-sm" name="submit" type="submit">tambah</button>
                                                                                                                    </td>
                                                                                                                </form>
                                                                                                            </tr>
                                                                                                            <?php $nomor++;
                                                                                                        endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div-->

    <div class="col">

        <div class="card">
            <div class="card-header">
                <h5>Barang Keluar</h5>
            </div>
            <div class="card-body">

                <?php if ($this->session->flashdata('addSuccess')) : ?>
                    <div class="alert alert-success alert-dismissible fade show col-lg-auto" role="alert">
                        <?= $this->session->flashdata('addSuccess') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($tempo_keluar as $x) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $x['nama']; ?>( <strong><?= $x['kode'] ?></strong> )</td>
                                <td><?= $x['jml']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Barang_keluar/hapus/<?= $x['id_tempo_keluar'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>

                </table>

                <br>
                <?php if ($total_tempo > 0) : ?>
                    <form action="<?= base_url() ?>Barang_keluar/simpan" method="post">
                        <div class="form-group">
                            <label for="penerima">Penerima</label>
                            <input type="text" name="penerima" id="penerima" class="form-control" placeholder="Penerima barang" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Keperluan</label>
                            <textarea name="keperluan" id="keperluan" rows="2" class="form-control" placeholder="tulis keperluan disini..."></textarea>
                        </div>
                        <button type="submit" name="submit" class="float-right btn btn-primary btn-sm">Simpan Data</button>
                    </form>
                <?php endif ?>

            </div>
        </div>
    </div>
</div>
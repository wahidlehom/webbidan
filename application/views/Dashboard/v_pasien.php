<div class="content-wrapper">
    <section class="content-header">
        <h1>
            PASIEN
            <small>Data Pasien</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo base_url() . 'dashboard/pasien_tambah'; ?>" class="btn btn btn-primary">Tambah Data Pasien</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pasien</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>Nama Istri</th>
                                    <th>NIK Istri</th>
                                    <th>Pendidikan Istri</th>
                                    <th>Gol Darah Istri</th>
                                    <th>Pekerjaan Istri</th>
                                    <th>No Telpon Istri</th>
                                    <th>Nama Suami</th>
                                    <th>NIK Suami</th>
                                    <th>Pendidikan Suami</th>
                                    <th>Gol Darah Suami</th>
                                    <th>Pekerjaan Suami</th>
                                    <th>No Telpon Suami</th>                                    
                                    <th width="20%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pasien as $pas) {

                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>Ny. <?php echo $pas->nama_istri; ?></td>
                                        <td><?php echo $pas->nik_istri; ?></td>
                                        <td><?php echo $pas->pendidikan_istri; ?></td>
                                        <td><?php echo $pas->golDarah_istri; ?></td>
                                        <td><?php echo $pas->pekerjaan_istri; ?></td>
                                        <td><?php echo $pas->noTelpon_istri; ?></td>
                                        <td>Tn. <?php echo $pas->nama_suami; ?></td>
                                        <td><?php echo $pas->nik_suami; ?></td>
                                        <td><?php echo $pas->pendidikan_suami; ?></td>
                                        <td><?php echo $pas->golDarah_suami; ?></td>
                                        <td><?php echo $pas->pekerjaan_suami; ?></td>
                                        <td><?php echo $pas->noTelpon_suami; ?></td>
                                       
                                        <td>
                                            <a href="<?php echo base_url() . 'dashboard/pasien_edit/' . $pas->id_pasien; ?>" class="btn btn-warning btn sm"> <i class="fa fa-pencil"></i> </a>
                                            <a href="<?php echo base_url() . 'dashboard/pasien_hapus/' . $pas->id_pasien; ?>" class="btn btn-danger btn sm"> <i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Catatan KB
            <small>Data Catatan KB Pasien</small>
        </h1>
    </section>

    <section class="content">
        <?php if ($this->session->flashdata('success')): ?>
            <div id="success-alert" class="alert alert-success" role="alert" style="transition: opacity 0.5s ease;">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo base_url() . 'dashboard/catatanKb_tambah'; ?>" class="btn btn btn-primary"><i class="fa fa-plus"></i><span>   Tambah Data Pasien</span></a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pasien</h3>
                    </div>
                    <div class="box-body">
                        <table class="display table table-bordered">

                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>Nama Istri</th>
                                    <th>Tanggal Datang</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Jenis KB</th>
                                    <th>Program KB</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Tensi Dara</th>
                                    <th>Keterangan</th>                                   
                                    <th width="20%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($catatan_kb as $pas) {

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

<script>
    
// Auto-hide the success alert after 3 seconds
document.addEventListener('DOMContentLoaded', function () {
    const alert = document.getElementById('success-alert');
    if (alert) {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); // Remove from DOM after transition
        }, 3000);
    }
});
</script>

<script>
    // Confirmation for delete
          $('.btn-delete').on('click', function(e) {
              e.preventDefault();
              const url = $(this).attr('href');
              if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                  window.location.href = url;
              }
          });
</script>
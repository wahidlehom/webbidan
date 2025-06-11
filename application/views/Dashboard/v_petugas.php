<div class="content-wrapper">
    <section class="content-header">
        <h1>
            PETUGAS
            <small>Data Petugas</small>
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
                <a href="<?php echo base_url() . 'dashboard/pasien_tambah'; ?>" class="btn btn btn-primary"><i class="fa fa-plus"></i><span>   Tambah Data Pasien</span></a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Petugas</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>Nama Petugas</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telpon</th>
                                    <th>Status</th>
                                    <th width="20%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($petugas as $p) {

                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>Ny. <?php echo $p->nama_petugas; ?></td>
                                        <td><?php echo $p->email; ?></td>
                                        <td><?php echo $p->jabatan; ?></td>
                                        <td><?php echo $p->alamat; ?></td>
                                        <td><?php echo $p->noTelpon; ?></td>
                                        <td>
                                            <?php
                                            if ($p->status == "Aktif") {
                                                echo "<span class='label label-success'>Aktif</span>";
                                            } else {
                                                echo "<span class='label label-danger'>Tidak Aktif</span>";
                                            }
                                            ?>
                                        </td>                                       
                                        <td>
                                            <a href="<?php echo base_url() . 'dashboard/petugas_edit/' . $p->$id_petugas; ?>" class="btn btn-warning btn sm"> <i class="fa fa-pencil"></i> </a>
                                            <a href="<?php echo base_url() . 'dashboard/petugas_hapus/' . $p->$id_petugas; ?>" class="btn btn-danger btn sm"> <i class="fa fa-trash"></i> </a>
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
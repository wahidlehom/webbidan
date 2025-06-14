<div class="content-wrapper">
    <section class="content-header">
        <h1>
            OBAT
            <small>Data Stok Obat</small>
        </h1>
    </section>

    <section class="content">
        <?php if ($this->session->flashdata('success')): ?>
            <div id="success-alert" class="alert alert-success" role="alert" style="transition: opacity 0.5s ease;">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo base_url() . 'dashboard/obat_tambah'; ?>" class="btn btn btn-primary"><i class="fa fa-plus"></i> <span>   Tambah Data Obat</span></a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Stok Obat</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>Nama Obat</th>
                                    <th>Qty</th>
                                    <th width="20%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($obat as $o) {

                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $o->nama_obat; ?></td>
                                        <td><?php echo $o->stok_obat; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'dashboard/obat_edit/' . $o->id_obat; ?>" class="btn btn-warning btn sm"> <i class="fa fa-pencil"></i> </a>
                                            <a href="<?php echo base_url() . 'dashboard/obat_hapus/' . $o->id_obat; ?>" class="btn btn-danger btn sm"> <i class="fa fa-trash"></i> </a>
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
    // Menggunakan jQuery untuk menghapus alert setelah 3 detik
    $(document).ready(function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000); // 3000 milidetik = 3 detik
    });
</script>
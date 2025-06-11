<div class="content-wrapper">
	<section class="content-header">
		<h1>
			FORM EDIT PASIEN
			<small>Edit Data Pasien</small>
		</h1>
	</section>
	<section class="content">
		<a href="<?php echo base_url() . 'dashboard/obat'; ?>" class="btn btn btn-primary">Kembali</a>
		<br />
		<br />
    <?php foreach ($obat as $o) { ?>
		<form method="post" action="<?php echo base_url('dashboard/obat_update') ?>">
			<div class="row">
				<div class="col-lg-6">
					<div class="box box-primary">
						<div class="box-body">
							<div class="form-group">
								<label for="">Nama Obat</label>
                                <!-- AMBIL DATA ID OBAT -->
                                <input type="hidden" name="id_obat" value="<?php echo $o->id_obat; ?>">
                                <!-- END DATA ID OBAT -->
                                <input type="text" name="namaObat" id="" class="form-control" value="<?php echo $o->nama_obat; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Stok Obat</label>
                                <input type="text" name="stokObat" id="" class="form-control" value="<?php echo $o->stok_obat; ?>">
                            </div>
                
                
							<input type="submit" value="SIMPAN" class="btn btn-success btn-block">
						</div>
					</div>
				</div>
			</div>
		</form>
    <?php } ?>
	</section>
</div>
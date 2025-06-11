<div class="content-wrapper">
	<section class="content-header">
		<h1>
			FORM TAMBAH OBAT
			<small>isi Data Obat</small>
		</h1>
	</section>
	<section class="content">
		<a href="<?php echo base_url() . 'dashboard/obat'; ?>" class="btn btn btn-primary">Kembali</a>
		<br />
		<br />
		<form method="post" action="<?php echo base_url('dashboard/obat_aksi') ?>">
			<div class="row">
				<div class="col-lg-6">
					<div class="box box-primary">
						<div class="box-body">
							<div class="form-group">
								<label for="">Nama Obat</label>
                                <input type="text" name="namaObat" id="" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Stok Obat</label>
                                <input type="text" name="stokObat" id="" class="form-control">
                            </div>
                
                
							<input type="submit" value="SIMPAN" class="btn btn-success btn-block">
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			FORM EDIT PASIEN
			<small>Edit Data Pasien</small>
		</h1>
	</section>
	<section class="content">
		<a href="<?php echo base_url() . 'dashboard/pasien'; ?>" class="btn btn btn-primary">Kembali</a>
		<br />
		<br />
    <?php foreach ($pasien as $p) { ?>
		<form method="post" action="<?php echo base_url('dashboard/pasien_update') ?>">
			<div class="row">
				<div class="col-lg-12">
					<div class="box box-primary">
						<div class="box-body">
							<div class="form-group">
								<label for="">Nama Istri</label>
                  <!-- AMBIL DATA ID PASIEN -->
                <input type="hidden" name="id_pasien" value="<?php echo $p->id_pasien; ?>">
                  <!-- END DATA ID PASIEN -->
                <input type="text" name="namaIstri" id="" class="form-control" value="<?php echo $p->nama_istri; ?>">
              </div>
                <div class="form-group">
                  <label for="">NIK Istri</label>
                  <input type="text" name="nikIstri" id="" class="form-control" value="<?php echo $p->nik_istri; ?>">
                </div>
                <div class="form-group">
                  <label for="">Pendidikan Istri</label>
                  <select class="form-control" name="pendidikanIstri" id="">
                    <option value="">Pilih Jenjang Pendidikan</option>
                     <?php
                        $pendidikanOptions = ['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'];
                          foreach ($pendidikanOptions as $option) {
                          $selected = ($p->pendidikan_istri == $option) ? 'selected' : '';
                          echo "<option value='$option' $selected>$option</option>";
                        }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Golongan Darah Istri</label>
                  <select class="form-control" name="golDarahIstri" id="">
                    <option value="">Pilih Golongan Darah</option>
                    <?php
                       $golonganDarahOptions = ['-', 'A', 'B', 'AB', 'O'];
                        foreach ($golonganDarahOptions as $option) {
                          $selected = ($p->golDarah_istri == $option) ? 'selected' : '';
                          echo "<option value='$option' $selected>$option</option>";
                        }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Pekerjaan Istri</label>
                  <select class="form-control" name="pekerjaanIstri" id="">
                    <option value="">Pilih Pekerjaan</option>
                    <?php
                      $pekerjaanOptions = ['PNS', 'TNI', 'Polri', 'Karyawan Swasta', 'Wiraswasta', 'Ibu Rumah Tangga'];
                        foreach ($pekerjaanOptions as $option) {
                          $selected = ($p->pekerjaan_istri == $option) ? 'selected' : '';
                          echo "<option value='$option' $selected>$option</option>";
                        }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">No Telpon Istri</label>
                  <input type="text" name="noTelponIstri" id="" class="form-control" value="<?php echo $p->noTelpon_istri; ?>">
                </div>
                <div class="form-group">
                  <label for="">Nama Suami</label>
                  <input type="text" name="namaSuami" id="" class="form-control" value="<?php echo $p->nama_suami; ?>">
                </div>
                <div class="form-group">
                  <label for="">NIK Suami</label>
                  <input type="text" name="nikSuami" id="" class="form-control" value="<?php echo $p->nik_suami; ?>">
                </div>
                <div class="form-group">
                  <label for="">Pendidikan Suami</label>
                  <select class="form-control" name="pendidikanSuami" id="">
                    <option value="">Pilih Jenjang Pendidikan</option>
                    <?php
                        $pendidikanOptions = ['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'];
                          foreach ($pendidikanOptions as $option) {
                          $selected = ($p->pendidikan_suami == $option) ? 'selected' : '';
                          echo "<option value='$option' $selected>$option</option>";
                        }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Golongan Darah Suami</label>
                  <select class="form-control" name="golDarahSuami" id="">
                    <option value="">Pilih Golongan Darah</option>
                    <?php
                       $golonganDarahOptions = ['-', 'A', 'B', 'AB', 'O'];
                        foreach ($golonganDarahOptions as $option) {
                          $selected = ($p->golDarah_suami == $option) ? 'selected' : '';
                          echo "<option value='$option' $selected>$option</option>";
                        }
                    ?>
                </select>
                </div>
                <div class="form-group">
                  <label for="">Pekerjaan Suami</label>
                  <select class="form-control" name="pekerjaanSuami" id="">
                    <option value="">Pilih Pekerjaan</option>
                      <?php
                        foreach (['Tidak Bekerja', 'PNS', 'TNI', 'Polri', 'Karyawan Swasta', 'Wiraswasta'] as $option) {
                        $selected = ($p->pekerjaan_suami == $option) ? 'selected' : '';
                        echo "<option value='$option' $selected>$option</option>";
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">No Telpon Suami</label>
                  <input type="text" name="noTelponSuami" id="" class="form-control" value="<?php echo $p->noTelpon_suami; ?>">
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
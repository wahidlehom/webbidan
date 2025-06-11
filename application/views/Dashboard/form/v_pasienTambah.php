<div class="content-wrapper">
	<section class="content-header">
		<h1>
			FORM TAMBAH PASIEN
			<small>isi Data Pasien</small>
		</h1>
	</section>
	<section class="content">
		<a href="<?php echo base_url() . 'dashboard/pasien'; ?>" class="btn btn btn-primary">Kembali</a>
		<br />
		<br />
		<form method="post" action="<?php echo base_url('dashboard/pasien_aksi') ?>">
			<div class="row">
				<div class="col-lg-12">
					<div class="box box-primary">
						<div class="box-body">
							<div class="form-group">
								<label for="">Nama Istri</label>
                                <input type="text" name="namaIstri" id="" class="form-control">
                             </div>
                <div class="form-group">
                  <label for="">NIK Istri</label>
                  <input type="text" name="nikIstri" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Pendidikan Istri</label>
                  <select class="form-control" name="pendidikanIstri" id="">
                    <option selected value="">Pilih Jenjang Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>    
                    <option value="SMA">SMA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option> 
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Golongan Darah Istri</label>
                  <select class="form-control" name="golDarahIstri" id="">
                    <option selected value="">Pilih Golongan Darah</option>
                    <option value="-">-</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Pekerjaan Istri</label>
                  <select class="form-control" name="pekerjaanIstri" id="">
                    <option selected value="">Pilih Pekerjaan</option>
                    <option value="PNS">PNS</option>
                    <option value="TNI">TNI</option>
                    <option value="Polri">Polri</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">No Telpon Istri</label>
                  <input type="text" name="noTelponIstri" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Nama Suami</label>
                  <input type="text" name="namaSuami" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">NIK Suami</label>
                  <input type="text" name="nikSuami" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Pendidikan Suami</label>
                  <select class="form-control" name="pendidikanSuami" id="">
                    <option selected value="">Pilih Jenjang Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>    
                    <option value="SMA">SMA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option> 
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Golongan Darah Suami</label>
                  <select class="form-control" name="golDarahSuami" id="">
                    <option selected value="">Pilih Golongan Darah</option>
                    <option value="-">-</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="">Pekerjaan Suami</label>
                  <select class="form-control" name="pekerjaanSuami" id="">
                    <option selected value="">Pilih Pekerjaan</option>
                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                    <option value="PNS">PNS</option>
                    <option value="TNI">TNI</option>
                    <option value="Polri">Polri</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">No Telpon Suami</label>
                  <input type="text" name="noTelponSuami" id="" class="form-control">
                </div>
                
							<input type="submit" value="SIMPAN" class="btn btn-success btn-block">
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
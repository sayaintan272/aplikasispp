<h5>Halaman tambah Petugas</h5>
<a href="?url=petugas" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
	<div class="form-group mb-2">
		<label>Username</label>
		<input type="text" name="username" class="form-control" required oninvalid="this.setCustomValidity('silahkan Lengkapi data!!')" oninput="this.setCustomValidity('')">
	</div>
	<div class="form-group mb-2">
		<label>password</label>
		<input type="text" name="password" class="form-control" required oninvalid="this.setCustomValidity('silahkan Lengkapi data!!')" oninput="this.setCustomValidity('')">
	</div>
	<div class="form-group mb-2">
		<label>nama Petugas</label>
		<input type="text" name="nama_petugas" class="form-control" required oninvalid="this.setCustomValidity('silahkan Lengkapi data!!')" oninput="this.setCustomValidity('')">
	</div>
	<div class="form-group mb-2">
		<label oninvalid="this.setCustomValidity('Anda belum memasukan Nominal')" oninput="this.setCustomValidity('')">Level petugas</label>
		<select name="level" class="form-control" required>
			<option value="">Pilih Level Petugas</option>
			<option value="admin">Admin</option>
			<option value="petugas">Petugas</option>
		</select>

	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">SIMPAN</button>
		<button type="reset" class="btn btn-warning">KOSONGKAN</button>
	</div>


</form>
<?php

include '../config.php';

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>BAB 4 PERENCANAAN KERJA SAMA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
		
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
		
				<div class="p-4">
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa"></span><img src = "images/home.svg"> Dashboard</a>
	          </li>
	          <li>
	              <a href="#"><span class="fa"></span><img src = "images/folder2.svg"> Periksa Berkas</a>
	          </li>
	          <li>
              <a href="#"><span class="fa"></span><img src = "images/gear.svg"> Pengaturan</a>
	          </li>
	          <li>
              <a href="../index.php"><span class="fa"></span><img src = "images/logout.svg"> Logout</a>
	          </li>
	        </ul>

	        <div class="footer mt-7">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>


        <!-- Page Content  -->
	<form class="needs-validation" novalidate action="proses.php" method="post">
    <div id="content" class="p-4 p-md-5 pt-5">
        <h3 class="mb-4">PERIKSA BAB 4</h3>
        <div class="section">
			<section>
				<h5>BAB 4. PERENCANAAN PELAKSANAAN KERJA SAMA</h5>
				<br>
				<p>Universitas: <?php echo $_SESSION['universitas']; ?> </p>
				<p>Kerma: - </p>
				<p>Status Kerma: - </p>
				<p>Naskah Akademik Izin Kerja Sama dan Lembar Pengesahan: <a href="downloadizin.html"><img src="images/down.svg"></a></p>
				<hr style="height: 3px;border-width:0;color:black;background-color:black">
			</section>
		</div>
		<div>
			<table style="background-color: aqua;">
				<tr>
					<th colspan="4" style="text-align: center; width: 1500px; height: 50px; margin-top: 0px;">KESIAPAN PELAKSANAAN KERJA</th>
				</tr>
				<tr>
					<th style="text-align: center; width: 420px;">ITEM</th>
					<th style="text-align: center; width: 280px;">VALUE</th>
					<th style="text-align: center; width: 450px;">CATATAN REVIEWER</th>
					<th style="text-align: center;">STATUS PERIKSA</th>
				</tr>
			</table>
		</div>
		<section class="features">
			<div class="feature mt-6">
				<p>RENCANA PELAKSANAAN PEMBELAJARAN<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature">
				<textarea name="nilai" rows="4" cols="35"></textarea>
			</div>
			<div class="feature cat">
				<textarea name="catatan" rows="4" cols="35"></textarea>
				<div class="form-group form-row col-8">
					<label for="inputState">Grade Pemeriksa</label>
					<select name="opsi" id="inputState" class="form-control">
					  <option>Pilih Grade</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck" >
					</label>
					<div class="invalid-feedback ">
					  Silahkan Ceklis Terlebih Dahulu.
					</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>DESAIN KURIKULUM<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature ml-0">
				<p>Kurikulum Prodi PT</p>
				<p>File: <a href="kurikulum.html"><span>Download</span></a></p>
				<hr style="color: black; height: 1px; margin-right: 100px; border-width: 0; background-color: black;"/>
				<p>Kurikulum Prodi PT Mitra</p>
				<p>File: <a href="kurikulummitra.html"><span>Download</span></a></p>
			</div>
			<div class="feature">
				<textarea name="nyatet" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsides" class="form-control" id="exampleFormControlSelect1">
						<option>Pilih Grade</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label mr-0" for="invalidCheck">
					</label>
					<div class="invalid-feedback mr-0 text-right">Silahkan Ceklis Terlebih Dahulu.</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>JENIS KERJA SAMA<span style="color: red;">&ast;</span></p>
			</div>
			<div class="form-group form-control-sm mr-4 col-4">
				<select name="kerjasama" class="form-control" id="exampleFormControlSelect1">
					<option>Gelar Ganda (Double Degree)</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="feature">
				<textarea name="catatjenis" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsijenis" class="form-control" id="exampleFormControlSelect1">
						<option>Pilih Grade</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label mr-0" for="invalidCheck">
					</label>
					<div class="invalid-feedback mr-0 text-right">Silahkan Ceklis Terlebih Dahulu.</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>JUMLAH IJAZAH YANG AKAN DITERBITKAN<span style="color: red;">&ast;</span></p>
			</div>
			<div class="form-group form-control-sm mr-4 col-4">
				<input name="ijazah" class="form-control" type="text" placeholder="2">
			</div>
			<div class="feature">
				<textarea name="catatijazah" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsiijazah" class="form-control" id="exampleFormControlSelect1">
						<option>Pilih Grade</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label mr-0" for="invalidCheck">
					</label>
					<div class="invalid-feedback mr-0 text-right">Silahkan Ceklis Terlebih Dahulu.</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p style="margin-top: 250px;">PENANDATANGANAN IJAZAH<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature">
				<p>Nama PT:</p>
				<textarea name="namapt" rows="4" cols="35"></textarea>
				<hr style="color: black; height: 1px; margin-right: 110px; border-width: 0; background-color: black;"/>
				<p>Jabatan PT:</p>
				<textarea name="jabatpt" rows="4" cols="35"></textarea>
				<hr style="color: black; height: 1px; margin-right: 110px; border-width: 0; background-color: black;"/>
				<p>Nama PT Mitra:</p>
				<textarea name="mitrapt" rows="4" cols="35"></textarea>
				<hr style="color: black; height: 1px; margin-right: 110px; border-width: 0; background-color: black;"/>
				<p>Jabatan PT Mitra:</p>
				<textarea name="jabmitpt" rows="4" cols="35"></textarea>
			</div>
			<div class="feature" style="margin-top: 250px;">
				<textarea name="catatmitra" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsimitra" class="form-control" id="exampleFormControlSelect1">
						<option>Pilih Grade</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate style="margin-top: 250px;">
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label mr-0" for="invalidCheck">
					</label>
					<div class="invalid-feedback mr-0 text-right">Silahkan Ceklis Terlebih Dahulu.</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>KRITERIA CALON MAHASISWA<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature">
				<textarea name="nilaicalon" rows="4" cols="35"></textarea>
			</div>
			<div class="feature cat">
				<textarea name="catatcalon" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsicalon" class="form-control" id="exampleFormControlSelect1">
					  <option>Pilih Grade</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
					</label>
					<div class="invalid-feedback">
						Silahkan Ceklis Terlebih Dahulu.
					</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>PROSES SELEKSI<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature">
				<textarea name="nilaiseleksi" rows="4" cols="35"></textarea>
			</div>
			<div class="feature cat">
				<textarea name="catatseleksi" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsiseleksi" class="form-control" id="exampleFormControlSelect1">
					  <option>Pilih Grade</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
					</label>
					<div class="invalid-feedback">
						Silahkan Ceklis Terlebih Dahulu.
					</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>SKEMA PEMBIAYAAN<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature">
				<textarea name="nilaibayar" rows="4" cols="35"></textarea>
			</div>
			<div class="feature cat">
				<textarea name="catatbayar" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsibayar" class="form-control" id="exampleFormControlSelect1">
					  <option>Pilih Grade</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
					</label>
					<div class="invalid-feedback">
						Silahkan Ceklis Terlebih Dahulu.
					</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>PENJADWALAN PROGRAM KERJA SAMA<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature ml-0">
				<p>File: <a href="jadwalkerjasama.html"><span>Download</span></a></p>
			</div>
			<div class="feature">
				<textarea name="catatjadwal" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsijadwal" class="form-control" id="exampleFormControlSelect1">
						<option>Pilih Grade</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label mr-0" for="invalidCheck">
					</label>
					<div class="invalid-feedback mr-0 text-right">Silahkan Ceklis Terlebih Dahulu.</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>SURAT KETERANGAN PENDAMPING IJAZAH (SKPI)<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature ml-0">
				<p>File: <a href="skpi.html"><span>Download</span></a></p>
			</div>
			<div class="feature">
				<textarea name="catatsurat" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsisurat" class="form-control" id="exampleFormControlSelect1">
						<option>Pilih Grade</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label mr-0" for="invalidCheck">
					</label>
					<div class="invalid-feedback mr-0 text-right">Silahkan Ceklis Terlebih Dahulu.</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>KEBERLANJUTAN UNTUK STUDI LANJUT (DESKRIPSI)<span style="color: red;">&ast;</span></p>
			</div>
			<div class="feature">
				<textarea name="nilaistudi" rows="4" cols="35"></textarea>
			</div>
			<div class="feature cat">
				<textarea name="catatstudi" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsistudi" class="form-control" id="exampleFormControlSelect1">
					  <option>Pilih Grade</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
					</label>
					<div class="invalid-feedback">
						Silahkan Ceklis Terlebih Dahulu.
					</div>
				  </div>
				</div>
			</form>
		</section>
		<section class="features">
			<div class="feature mt-6">
				<p>Studi Lanjut MOA</p>
			</div>
			<div class="feature">
				<p style="font-size: small; margin-right: 100px;">Apakah Hal Tersebut Tercantum dalam MOA</p>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="moa" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
					  Iya
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="moa" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
					  Tidak
					</label>
				</div>
			</div>
			<div class="feature cat">
				<textarea name="catatmoa" rows="4" cols="35"></textarea>
				<div class="form-group form-control-sm form-row col-8">
					<label for="exampleFormControlSelect1">Grade Pemeriksa</label>
					<select name="opsimoa" class="form-control" id="exampleFormControlSelect1">
					  <option>Pilih Grade</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
			</div>
			<form class="needs-validation" novalidate>
				<div class="form-group mt-6 mr-4">
				  <div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
					</label>
					<div class="invalid-feedback">
						Silahkan Ceklis Terlebih Dahulu.
					</div>
				  </div>
				</div>
			</form>
		</section>
		<a class="btn" role="button" href="bab3.html" style="float: left; margin-top: 10px; background-color: #494da3; color: white;">Kembali</a>
		<button class="btn btn-primary" name="submit" type="submit" style="float: right; margin-top: 10px;" onclick="Redirect()" role="button">Submit form</button>
	</form>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>	
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRASI</title>
<link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.css">
<link rel="stylesheet" href="/asset/css/header.css">
<script type="text/javascript" src="/asset/js/jquery.js"></script>
    <script type="text/javascript" src="/asset/js/bootstrap.js"></script>
</head>
<body>
    <div class="header">
    <table class="table table-borderless" padding="5px">
    <tr><td>
    <img id="home" src="LOGO_PU3.jpg" width="1" height="1"></td>
    <div class="links"><td><br>
        <div class="font-color">
                    <a href="/">Home</a></td>
                    <td>
                       <br><a href="data-pengguna">Tambah atau Edit Tenaga Ahli</a>
                   </td>
                    <td>
                        <br><a href="presensi-pengguna">Absensi</a>
                    </td>
                    <td>
                        <br><a href="posisi-pengguna">GPS</a>
                    </td>
                    <td>
                        <br><a href="presensi-pengguna">Rekap Absen</a>
                    </td>
                    <td>
                        Halo Pak Siapa Hayo<br>
                        Logout
                    </td>
                    </div></td>
                </div></tr></table></div>
     
	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h3 class="text-center">Silahkan Input Data Tenaga Ahli</h3>
                <br>
				<h2>Satker/PPKP2JN</h2>
                <hr size="1">
				<form>
                    
                    <div class="form-group">
                        <label for="select1">Satker/PPKP2JN</label><br>
                        <select>
                            <option value="volvo">AAAAA</option>
                            <option value="saab">BBBBBB</option>
                            <option value="opel">CCCCCCC</option>
                            <option value="audi">DDDDDD</option>
                        </select>
                    </div>
                    <table class="table table-borderless">
                    <tr><td>
                    <div class="form-group">
                        <label for="text1">Kepala Satker</label><br>
                        <input type="text" class="form-control" id="text1" placeholder="">
                    </div>
                    <td>
                    <div class="form-group">
                        <label for="text13">NIP</label><br>
                        <input type="text" class="form-control" id="text13" placeholder="">
                    </div></td>
                    </tr>
                </table>
                    <div class="form-group">
                        <label for="text2">Tahun Anggaran</label><br>
                        <input type="text" class="form-control" id="text2" placeholder="">
                    </div></td>

                </form>
                <h2>Konsultan Supervisi</h2>
                <hr size="1">
                <form>
                    <div class="form-group">
                        <label for="text3">No Kontrak</label><br>
                        <input type="text" class="form-control" id="text3" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="text4">Tanggal Kontrak</label><br>
                        <input type="text" class="form-control" id="text4" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="text5">Nama</label><br>
                        <input type="text" class="form-control" id="text5" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="select1">Kategori Tenaga</label><br>
                        <select>
                            <option value="volvo">Tenaga Ahli</option>
                            <option value="saab">BBBBBB</option>
                            <option value="opel">CCCCCCC</option>
                            <option value="audi">DDDDDD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text6">Username</label><br>
                        <input type="username" class="form-control" id="text6" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" class="form-control" id="password" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="select1">Jabatan</label><br>
                        <select>
                            <option value="volvo">AAAAAAAAA</option>
                            <option value="saab">BBBBBB</option>
                            <option value="opel">CCCCCCC</option>
                            <option value="audi">DDDDDD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text7">No Telp</label><br>
                        <input type="text" class="form-control" id="text7" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="text8">Tanggal Mobilisasi</label><br>
                        <input type="text" class="form-control" id="text8" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="form-group">
                        <label for="text9">Tanggal Demobilisasi</label><br>
                        <input type="text" class="form-control" id="text9" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="form-group">
                        <label for="text10">Jam Masuk</label><br>
                        <input type="text" class="form-control" id="text10" placeholder="">
                    </div><br>

                </form>
                <h2>Cakupan Wilayah</h2>
                <hr size="1">
                <form>
                    <div class="form-group">
                        <label for="text11">Latitude</label><br>
                        <input type="text" class="form-control" id="text11" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="text12">Longitude</label><br>
                        <input type="text" class="form-control" id="text12" placeholder="">
                    </div>
                        Gambar : <br>
                        <input type="file" name="myFile"><br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>	
			</div>
		</div>
	</div>
</body>
</html>

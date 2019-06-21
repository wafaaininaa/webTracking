<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>POSISI PENGGUNA</title>
        <link rel="stylesheet" href="/asset/css/header.css">
        <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.css">
        <script type="text/javascript" src="/asset/js/jquery.js"></script>
        <script type="text/javascript" src="/asset/js/bootstrap.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
        
                <h3>Posisi Pengguna</h3>
 
                <p>Cari Data Pegawai :</p>
 
                <div class="form-group">
                </div>
                <form action="/pegawai/cari" method="GET" class="form-inline">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                    <input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>

                <table class="table table-bordered">
                 <tr><thead>
                    <th scope="col">Nama</th>
                    <th scope="col">Dari Konsultan</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Masukkan Tanggal</th>
                    <th scope="col">    </th>
                </thead></tr>
                
                    <tr>
                        <td>misalnya siapa</td>
                        <td>perusahaan mana</td>
                        <td>0999999999</td>
                        <td><input class="form-control" type="text" placeholder="dd-mm-yyyy" value=""> </td>
                        <td><a class="btn btn-primary btn-sm">Lihat Pergerakan</a></td>
                        <td><a class="btn btn-primary btn-sm">Posisi Realtime</a></td>
                    </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>

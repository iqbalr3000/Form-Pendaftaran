<?php
    include "config/konek.php"
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran</title>
        <link rel="stylesheet" type="text/css" href="style.css">    </head>
    <body>
        <div class="box">
            <form method="post" action="simpan.php" enctype="multipart/form-data">
                <h1>FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN 2020-2021</h1>
                <table>
                    <tr>
                        <td>Pas Foto 3 x 4</td>
                        <td>
                            <input type="file" name="file">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Pendaftaran</td>
                        <td>
                            <input type="text" onkeyup="isi_otomatis()" name="no_pendaftaran">
                        </td>
                    </tr>

                    <tr>
                        <td>Nomor Tes</td>
                        <td>
                            <input type="text" onkeyup="isi_otomatis()" name="no_tes">
                        </td>
                    </tr>

                    <tr>
                        <td>Jalur Masuk</td>
                        <td>
                            <input type="radio" name="jalur_masuk" value="reguler">Reguler
                            <input type="radio" name="jalur_masuk" value="beasiswa">Beasiswa
                        </td>
                    </tr>
                </table>

                <!-- Form Data Siswa -->
                <table>
                    <h3>I. DATA CALON MURID</h3>

                    <tr>
                        <td>Nama Lengkap</td>
                        <td>
                            <input type="text" name="nama_lengkap">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>
                            <input type="text" name="nama_panggilan">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                            <input type="radio" name="jenis_kelamin" value="P">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>
                            <input id="kecil" type="text" name="tempat">
                            <input type="date" name="tanggal_lahir">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <select name="agama">
                                <option selected>Pilih...</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Cita Cita</td>
                        <td>
                            <input type="text" name="cita_cita">
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Hoby</td>
                        <td>
                            <input type="text" name="hoby">
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Ke-</td>
                        <td>
                            <input type="text" name="anak_ke">
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Sudara</td>
                        <td>
                            <input type="text" name="kandung" placeholder="Kandung">
                            <input type="text" name="tiri" placeholder="Tiri">
                            <input type="text" name="angkat" placeholder="Angkat">
                        </td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>
                            <input type="text" name="berat_badan">
                        </td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>
                            <input type="text" name="tinggi_badan">
                        </td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td>
                            <input type="text" name="golongan_darah">
                        </td>
                    </tr>
                </table>

                <!-- Form Alamat Siswa -->
                <table>
                    <h3>II. KETERANGAN TEMPAT TINGGAL</h3>

                    <tr>
                        <td>Alamat Rumah</td>
                        <td>
                            <textarea type="text" name="alamat" placeholder="Alamat,RT/RW"></textarea>
                            <!-- <input type="text" name="rt" placeholder="RT">
                            <input type="text" name="rw" placeholder="RW"> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>
                            <input type="text" name="kelurahan">
                        </td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>
                            <input type="text" name="kecamatan">
                        </td>
                    </tr>
                    <tr>
                        <td>Kabupaten Kota</td>
                        <td>
                            <input type="text" name="kabupaten_kota">
                        </td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>
                            <input type="text" name="provinsi">
                            <input type="text" name="kode pos" placeholder="Kode Pos">
                        </td>
                    </tr>
                    <tr>
                        <td>No. Telepon Rumah</td>
                        <td>
                            <input type="text" name="no_telepon_rumah">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="email" placeholder="contoh@emailmu.com">
                        </td>
                    </tr>
                    <tr>
                        <td>Tinggal Dengan</td>
                        <td>
                            <input type="radio" name="tinggal_dengan" value="orang_tua">Orang Tua
                            <input type="radio" name="tinggal_dengan" value="asrama">Asrama
                            <input type="radio" name="tinggal_dengan" value="saudara">Saudara
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Kirim">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>


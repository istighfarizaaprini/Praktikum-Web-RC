<html>
<head>
    <style>
        legend{
        font-size:30pt;
        font-family: 'Courier New';
        margin: 20px 10px 20px 10px;
        color:black;
        }
        form{
        background-color: #E8E6D9;
        color: rgb(119, 40, 29);
        text-align: center;
        width: 40%;
        margin: 150pt 400pt 50pt 300pt;
        padding: 20px;
        height:50p%;
        }
        h1{
            font-size:30pt;
            font-family: 'Courier New';
            margin: 20px 10px 20px 10px;
            color:black;
        }
        table{
            font-size:20pt;
            font-family: 'Courier New';
            margin: auto;
            color: #619196;
        }
    </style>
</head>
<body>
<?php
include "koneksi.php";
?>
<form method="post" action="proses-edit.php?nim=<?php echo $_GET['nim'];?>">
<h1>~Silahkan Edit~</h1>
<?php
$nim = $_GET['nim'];
$hasil=mysqli_query($kon,"select * from mahasiswa where nim=$nim");
$data = mysqli_fetch_array($hasil);
?>
    <table>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="number" name="nim"><br></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama"><br></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td>:</td>
        <td><select name="prodi">
            <option value="IF">Teknik Informatika</option>
            <option value="EL">Teknik Elektro</option>
            <option value="SI">Teknik Sipil</option>
            <option value="TG">Teknik Geofisika</option>
            <option value="MA">Matematika</option>
            <option value="ARS">Arsitek</option>
        </select><br></td>
    </tr>
    <tr>
        <td><label>Angkatan </label></td>
        <td>:</td>
        <td><input type="number" name="angkatan"><br></td>
    </tr>
    <tr>
        <td><input type="submit" name="simpan" value="Simpan Perubahan"></td>
    </tr>
    </table>

</form>
</body>
</html>
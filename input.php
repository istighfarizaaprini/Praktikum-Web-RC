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
      font-family:'Segoe UI';
      font-size: 25px;
      text-align: center;
      width: 40%;
      margin: 150pt 400pt 50pt 300pt;
      padding: 20px;
      height:50p%;
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
<form method="post" action="proses.php" >
  <legend><b>~Silahkan input data~</b></legend>
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
        <td><input type="submit" name="simpan" value="simpan"></td>
    </tr>
    </table>
</form>
</body>
</html>
<html>
<head>
  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
  <style>
    legend{
      font-size:30pt;
      font-family: 'Courier New';
      margin: 20px 10px 20px 10px;
      color:black;
    }
    form{
      background-color: rgba(200, 180, 181, 0.897);
      color: rgb(119, 40, 29);
      font-family:'Segoe UI';
      font-size: 25px;
      text-align: center;
      width: 40%;
      margin: 150pt 400pt 50pt 300pt;
      padding: 20px;
      height:50p%;
    }
  </style>
</head>
<body>
<form method="post" action="proses.php" >
  <legend><b>~Silahkan input data~</b></legend>
  <label>NIM </label>
  <input type="number" name="nim"><br>
  <label>Nama </label>
  <input type="text" name="nama"><br>
  <label>Prodi </label>
  <select name="prodi">
    <option value="IF">Teknik Informatika</option>
    <option value="EL">Teknik Elektro</option>
    <option value="SI">Teknik Sipil</option>
    <option value="TG">Teknik Geofisika</option>
    <option value="MA">Matematika</option>
  </select><br>
  <label>Angkatan </label>
  <input type="number" name="angkatan"><br>
  <p> <input type="submit" name="simpan" value="simpan"></p>
</form>
</body>
</html>
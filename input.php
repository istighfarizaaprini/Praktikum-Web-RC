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
      background-color: rgba(184, 207, 228, 0.897);
      color: rgb(119, 40, 29);
      font-family:'Segoe UI';
      font-size: 35px;
      text-align: center;
      width: 40%;
      margin: 100pt 400pt 50pt 300pt;
      padding: 20px;
    }
    input{
      width: 35%;
    }
  </style>
</head>
<body>
<form method="post" id="form_mhs" >
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
  <button id="btn_simpan">Simpan</button>
</form>
<script>
   $(document).ready(function() {
     $('bnt_simpan').click(function(){
       var data = $('form_mhs').serialize();
       $.ajax({
         type: 'POST',
         url: "tambah.php",
         data: data,
         cache: false,
         success: function(data) {
           $('#tampil_data').load("tampil.php");
          },
          error: function(request, error) {
          console.log(arguments);
          alert(" Can't do because: " + error);
          }
       })
     })
</script>
</body>
</html>
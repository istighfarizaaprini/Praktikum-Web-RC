<html>
<head>
  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
<form method="post" id="form_mhs" >
  <h1>~Silahkan input data~</h1>
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
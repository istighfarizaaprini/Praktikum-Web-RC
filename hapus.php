<?php
include "koneksi.php";

$nim    = $_GET['nim'];

$hasil=mysqli_query($kon,"delete from mahasiswa where nim='$nim'");
if ($hasil) {
echo "<script>alert('data berhasil dihapus');
document.location.href='tampil.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='tampil.php'</script>\n";
}
?>
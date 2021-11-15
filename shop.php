<html>
<head>
    <title>Form Belanja</title>
    <style>
        form {
            background-color: rgba(211, 172, 193, 0.897);
            color: rgb(75, 19, 26);
            font-family: roboto;
            font-size: 30px;
            text-align: center;
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
        }
        tr{
            font-size: 20px;
            color:rgb(110, 0, 0);
        }
    </style>
</head>
<body>
    <section>
        <div>
            <h3>~Daftar Harga~</h3>
            <p>Mangga : 15.000 <br>
                Jambu : 13.000 <br>
                Salak : 10.000</p>

            <form action="belanja.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                <legend>Form Belanja</legend>
                <table>
                    <tr>
                        <td>Mangga (kg) </td>
                        <td>:</td>
                        <td><input type="number" id="mangga" onchange="setValue()" name="mangga"></td>
                    </tr>
                    <tr>
                         <br>
                        <td>Jambu (kg) </td>
                        <td>:</td>
                        <td><input type="number" id="jambu" onchange="setValue()" name="jambu"> <br></td>
                    </tr>
                    <tr>
                        <td>salak (kg) </td>
                        <td>:</td>
                        <td><input type="number" id="salak" onchange="setValue()" name="salak"></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td><input type="text" id="total" name="total" readonly></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="">Cetak Struk</button></td>
                    </tr> 
                </table>
            </form>
        </div>
    </section>
</body>
    <script>
        function setValue(){
            var total = document.getElementById("total");
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            console.log(mangga + jambu + salak);
            var hasil = mangga + jambu + salak;
            total.value = hasil;
        }
    </script>
</html>
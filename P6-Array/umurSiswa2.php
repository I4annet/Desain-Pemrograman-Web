<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleSlide.css">
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script>
    $(document).ready(function() {
      $("#flip").click(function() {
        $("#kotak2").slideToggle("slow");
      });
    });
    </script>
</head>
<body>         
<div id="flip">Klik untuk Efek Slide</div>
<div id="kotak2">   
    <h2>Data Siswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        $siswa = array (
            array("Andika", 15, "11B", "Surabaya"),
            array("Iwan", 16, "12A", "Malang"),
            array("Faris", 14, "11D", "Gresik"),
            array("Farrel", 14, "12E", "Sidoarjo"),
        );
        foreach ($siswa as $data) {
            echo "<tr>";
            echo "<td>" . $data[0] . "</td>";
            echo "<td>" . $data[1] . "</td>";
            echo "<td>" . $data[2] . "</td>";
            echo "<td>" . $data[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
   
    <h2 id="hitung">Rata-rata Umur Siswa: <span id="rataRata"></span> tahun </h2>
    </div>  
    <script>
        function hitungUmur() {
            var dataSiswa = <?php echo json_encode($siswa); ?>;
            var totalUmur = 0;

            for (var i = 0; i < dataSiswa.length; i++) {
                totalUmur += dataSiswa[i][1]; 
            }

            var rataRataUmur = totalUmur / dataSiswa.length; 

            document.getElementById("rataRata").innerText = rataRataUmur.toFixed(2); 
        }

        hitungUmur(); 
    </script>
</body>
</html>

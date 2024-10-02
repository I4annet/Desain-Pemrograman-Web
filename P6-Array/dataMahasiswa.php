<html>
    <head>
        <body>
            <h2>Data Mahasiswa Array Multidimensi</h2>
            <?php
            $mahasiswa = array (
                    array ("Dina", 123456, "Teknik Kimia", "dina@gmail.com"),
                    array ("Dino", 9123124, "Teknik Listrik", "dino@gmail.com")
            );

            foreach ($mahasiswa as $data ) {
                echo "<ul>";
                echo "<li> Nama : " . $data[0] . "</li>";
                echo "<li> NIM : " . $data[1] . "</li>";
                echo "<li> Jurusan : " . $data[2] . "</li>";
                echo "<li> Email : " . $data[3] . "</li>";
                echo "</ul>";
            }
            ?>
        </body>
    </head>
</html>
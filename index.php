<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp Database</title>

    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        text-align: left;
        }
        th {
        background-color: black;
        color: white;
        }
        tr{
            color: black;
        }
        tr:nth-child(even) {background-color: lightblue}
    </style>    

</head>
<body>
    <h1 style="color: black; font-size: 30px; font-family: Arial, Helvet; text-align: center">TRUCORP DATABASE</h1>
<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jabatan</th>
</tr>
    <?php
    	$conn = mysqli_connect("172.20.0.2", "root", "password", "trucorp_database");
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        // $row = $result->fetch_all();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["nama"] . "</td><td>" . $row["alamat"]. "</td><td>" . $row["jabatan"]. "</td></tr>";
            }
            echo "</table>";
        } 
        else { 
            echo "0 results"; 
        }
        $conn->close();
    ?>
</table>
</body>
</html>

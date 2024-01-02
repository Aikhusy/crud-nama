<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crudsederhana";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $kota = $_POST['kota'];


    $sql = "INSERT INTO user (nama, usia, kota) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nama, $usia, $kota);


    if ($stmt->execute()) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
    header("index.php");
?>
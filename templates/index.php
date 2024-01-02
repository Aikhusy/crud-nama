<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD nama</title>
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <input type="text" name="nama" id="input"><br>

            <button type="button" onclick="consoleLog()">Submit</button>
        </form>
    </div>
    <div class>
        <form action="">
            <input type="hidden" name="nama" id='nama'><br>
            <input type="hidden" name="usia" id='usia'><br>
            <button type="button" onclick="consoleLog()">Submit</button>
        </form>
        
    </div>
</body>
<script>
    
    function consoleLog() {
        var elemen = document.getElementById('input');
        var value = elemen.value; 
        sending(value);
    }

    function sending(inputArray) {
        fetch('/regex', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=UTF-8',
            },
            body: JSON.stringify({ array: inputArray }),
        })
            .then(response => response.json())
            .then(data => {
                console.log('Data from Python:', data);

                var nama = data.nama;
                console.log(nama);

                var usia = data.usia;
                console.log(usia);
    
                var kota = data.kota;
                console.log(kota);
                var dataPHP = {
                    nama: data.nama,
                    usia: data.usia,
                    kota: data.kota
                };
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

</script>
</html>

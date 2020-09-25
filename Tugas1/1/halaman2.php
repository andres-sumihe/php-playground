<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2</title>
</head>
<body>
    
    <p id="text"> </p>


    <script>
        const value = new URLSearchParams(window.location.search);
        const url = window.location.href
        console.log(url);
        const a = document.querySelector("#text");
        if(url.match(/\?./)){
            let nama = value.get('nama');
            let nim = value.get('nim');
            let ipk = value.get('ipk');
            a.innerHTML = `Selamat Datang ${nama + ", " + nim + ", " + ipk}`; 
        } else {
            a.innerHTML = "Selamat Datang";
        }
    </script>
</body>
</html>
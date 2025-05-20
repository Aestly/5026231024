<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>function hello(){        
    alert("Selamat Anda Mendapat 1 Miliyar");
    }
    function tambah(){
        var bil1 = document.getElementById("bil1").value;
        var bil2 = document.getElementById("bil2").value;
        var hasil = parseInt(bil1) + parseInt(bil2);
        document.getElementById("hasil").innerHTML = hasil;
    }
</script>
</head>
<body>
    <div class="container">
        <p>
            <form id="frmDaftar" method="get" action="https://googlr.co.id">
            NRP : 
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP, harus diisi">
            <br>
            Nama :
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama, harus diisi">
            <br>
            Hasil Penjumlahan : 
            <div id="hasil"></div>
            <br>
            <input type="submit" class="btn btn-succes" onsubmit="daftar();" value="Daftar"></button>

        </button>
        </form>
        </p>
    </div>
</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <style>
   body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #4CAF50;
            outline: none;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
        @import url(https://fonts.googleapis.com/css?family=Raleway);

*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.wrap {
  width: 100%;
  max-width: 900px;
  margin: 4em auto;
  font-family: Raleway, Arial, sans-serif;
  padding: 1em 2em;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid #eee;
    margin: 2em 0;
    padding: 0;
}

h1, h2 {
  margin-bottom: 1em;
  border-bottom: 2px solid #eee;
  line-height: 1.5;
}

h1 > small{
  color: #666;
}

h1 > small > a,
p > a{
  color: #3CB371;
  text-decoration: none;
}
h1 > small > a:hover,
p > a:hover{
  text-decoration: underline;
}

/* Buttons styles */
input::-moz-focus-inner,
button::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input[type="submit"].btn,
button.btn {
	cursor: pointer;
}
input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

a.btn,.btn {
  margin-right: 1em; /* remove this while use*/
  margin-bottom: 1em; /* remove this while use*/
	display: inline-block;
	outline: none;
	*zoom: 1;
	text-align: center;
	text-decoration: none;
	font-family: inherit;
	font-weight: 300;
	letter-spacing: 1px;
	vertical-align: middle;
	border: 1px solid;
	transition: all 0.2s ease;
	box-sizing: border-box;
	text-shadow: 0 1px 0 rgba(0,0,0,0.01);
}
/* Radius */
.btn-radius {
  border-radius: 3px;
}
/* Sizes */
.btn-small {
	font-size: 0.8125em;
	padding: 0.4125em 1.25em;
}
.btn-medium {
	font-size: 0.9375em;
	padding: 0.5375em 1.375em;
}
.btn-large {
	font-size: 1.0625em;
	padding: 0.5625em 1.5em;
}

/* Colors */
.btn-green {
	color: #3CB371;
	border-color: #3CB371;
}
.btn-green:hover {
  background: #3CB371;
  color: #fff;
  border-color: #3CB371;		
}
.btn-blue {
	color: #4682B4;
	border-color: #4682B4;
}
.btn-blue:hover {
  background: #4682B4;
  color: #fff;
  border-color: #4682B4;		
}

.btn-orange {
	color: #FF8C00;
	border-color: #FF8C00;
}
.btn-orange:hover {
  background: #FF8C00;
  color: #fff;
  border-color: #FF8C00;		
}

.btn-red {
	color: #B22222;
	border-color: #B22222;
}
.btn-red:hover {
  background: #B22222;
  color: #fff;
  border-color: #B22222;	
}

.btn-gray {
	color: #808080;
	border-color: #808080;
}
.btn-gray:hover {
  background: #808080;
  color: #fff;
  border-color: #808080;	
}





    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Transaksi</h1>
        <form action="index.php?controller=transaksi&action=store" method="POST">
            <label for="id_transaksi">ID Transaksi:</label>
            <input type="number" id="id_transaksi" name="id_transaksi" required>

            <label for="kode_barang">Kode Barang:</label>
            <input type="text" id="kode_barang" name="kode_barang" required>

            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" id="id_pelanggan" name="id_pelanggan" required>

            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" required>

            <label for="harga_barang">Harga Barang:</label>
            <input type="number" id="harga_barang" name="harga_barang" required>

            <label for="tanggal_transaksi">Tanggal Transaksi:</label>
            <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" required>
            
            <p>Total Harga: <span id="total_harga">0</span></p>
            </form>
            <a class="btn btn-medium btn-blue" onclick="document.forms[0].submit();">Simpan</a>
        
        <a href="index.php?controller=transaksi&action=index" class="btn btn-medium btn-gray">Kembali</a>
    </div>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>

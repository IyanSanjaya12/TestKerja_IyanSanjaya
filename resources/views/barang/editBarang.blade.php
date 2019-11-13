<!DOCTYPE html>
<html>
<style>
input[type=text], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<title>Toko Mebel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: #4CAF50;text-align: center;font-family: impact; font-weight: bold;">Test Minda Perdana</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{url('dashBoard')}}">Dashboard</a></li>
        <li class="active"><a href="{{url('tampilBarang')}}">Data Barang</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
<h2 style="color: #4CAF50;text-align: center;font-family: impact; font-weight: bold;">Edit Data Barang</h2>

<div style="margin-left: 20%;margin-right: 20%;">
  <form action="{{url('updateBarang/'.$data->kode_barang)}}" method="POST">
    {{csrf_field()}}
    <label for="fname">Nama Barang</label>
    <input type="text" id="fname" name="nama" placeholder="Nama barang.." value="{{$data->nama}}">
    <label for="lname">Harga Barang</label>
    <input type="text" id="lname" name="harga" placeholder="Harga barang.." value="{{$data->harga}}">
    <label for="country">Deskripsi Barang</label>
    <textarea name="deskripsi" placeholder="Deskripsi..">
      {{$data->deskripsi}}
    </textarea>
  
    <input type="submit" value="Simpan">
  </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }

    .design{
      margin-left: 10%;
      margin-right: 10%;
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
  <div class="design">
    <h1 style="color: #4CAF50;text-align: center;font-family: impact; font-weight: bold;">Data Barang</h1>
    <h2 style="color: #333333;text-align: center;font-family: impact; font-weight: bold;">Pada Perusahaan Mebel</h2>
    <a href="{{url('tambahBarang')}}"><button class="btn btn-success">Tambah Data</button></a><br><br>
    <table id="customers">
      <tr>
        <th>NO</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Deskripsi</th>
        <th>Harga Barang</th>
        <th colspan="2">Aksi</th>
      </tr>
      @php $no=1; @endphp
      @foreach($data as $brg)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$brg->kode_barang}}</td>
        <td>{{$brg->nama}}</td>
        <td>{{$brg->deskripsi}}</td>
        <td>{{$brg->harga}}</td>
        <td><a href="{{url('editBarang/'.$brg->kode_barang)}}"><button class="btn btn-primary">Edit</button></a></td>
        <td><a href="{{url('hapusBarang/'.$brg->kode_barang)}}" onclick="return confirm('Apakah anda yakin ?');"><button class="btn btn-danger">Hapus</button></a></td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>

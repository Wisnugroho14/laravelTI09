@extends('admin.layout.appadmin')
@section('content')

<h1 class="mt-4">Tables Produk</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
  <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
  <div class="card-body">
    DataTables is a third party plugin that is used to generate the demo table below. For more
    information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
    .
  </div>
</div>
<div class="card mb-4">
  <div class="card-header">
    <!-- <i class="fas fa-table me-1"></i> -->
    <a class="btn btn-success" href="{{url('produk/create')}}">Create Produk</a>
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Min Stok</th>
          <th>Deskripsi</th>
          <th>Kategori Produk</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Min Stok</th>
          <th>Deskripsi</th>
          <th>Kategori Produk</th>
          <th>Action</th>
        </tr>
      </tfoot>
      <tbody>
        @php $no = 1; @endphp
        @foreach($produk as $p)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$p->kode}}</td>
          <td>{{$p->nama}}</td>
          <td>{{$p->harga_jual}}</td>
          <td>{{$p->harga_beli}}</td>
          <td>{{$p->stok}}</td>
          <td>{{$p->min_stok}}</td>
          <td>{{$p->deskripsi}}</td>
          <td>{{$p->kategori_produk_id}}</td>
          <td>
            <a class="btn btn-primary" href="{{ url('produk/view/' . $p->id) }}">View</a>
            <a class="btn btn-warning" href="{{ url('produk/edit/' . $p->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ url('produk/delete/' . $p->id) }}" onclick="if(!confirm('Anda Yakin Hapus Data Produk ?')) {return false}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
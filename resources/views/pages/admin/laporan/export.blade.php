<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Laporan pembayaran SPP SMKIU</title>

</head>
<body>

   <style>
      .page-break{
         page-break-after:always;
       }
      .text-center{
         text-align:center;
       }
      .text-header {
         font-size:1.1rem;
      }
      .size2 {
         font-size:1.4rem;
      }
      .border-bottom {
         border-bottom:1px black solid;
      }
      .border {
         border: 2px block solid;
      }
      .border-top {
         border-top:1px black solid;
      }
      .float-right {
         float:right;
      }
      .mt-4 {
         margin-top:4px;
       }
      .mx-1 {
         margin:1rem 0 1rem 0;
      }
      .mr-1 {
         margin-right:1rem;
      }
      .mt-1 {
         margin-top:1rem;
      }
      ml-2 {
         margin-left:2rem;
      }
      .ml-min-5 {
         margin-left:-5px;
      }
      .text-uppercase {
         font:uppercase;
      }
      .d1 {
         font-size:2rem;
      }
      .img {
         position:absolute;
      }
      .link {
         font-style:underline;
      }
      .text-desc {
         font-size:14px;
      }
      .text-bold {
         font-style:bold;
      }
      .underline {
         text-decoration:underline;
      }

      table {
         font-family: Arial, Helvetica, sans-serif;
         color: #666;
         text-shadow: 1px 1px 0px #fff;
         background: #eaebec;
         border: #ccc 1px solid;
      }
      table th {
           padding: 10px 15px;
           border-left:1px solid #e0e0e0;
           border-bottom: 1px solid #e0e0e0;
           background: #ededed;
       }
       table tr {
           text-align: center;
            padding-left: 20px;
       }
       table td {
             padding: 10px 15px;
             border-top: 1px solid #ffffff;
             border-bottom: 1px solid #e0e0e0;
             border-left: 1px solid #e0e0e0;
             background: #fafafa;
             background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
             background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
      }
      .table-center {
         margin-left:auto;
         margin-right:auto;
      }
      .mb-1 {
         margin-bottom:1rem;
      }
   </style>

   <!-- header -->
   <div class="text-center">
    <img src="{{ public_path('img/logo.png') }}" class="img" alt="logo.png" width="90">
      <div style="margin-left:6rem;">
         <span class="text-header text-bold text-danger">
            PEMERINTAH DAERAH PROVINSI JAWA BARAT <br> DINAS PENDIDIKAN <br>
               SEKOLAH MENENGAH KEJURUAN INFORMATIKA UTAMA <br>
         </span>
         <span class="text-desc">JL. JCC KOMPLEKS PT.PLN P3B JAWA BALI NO.61 KRUKUT KEC.LIMO, KOTA DEPOK, JAWA BARAT 16512 Telepon : (021) 7530843 <br>
      </div>
      </div>
   <div>
   <!-- /header -->

   <hr class="border">

   <!-- content -->

   <div class="size2 text-center mb-1">LAPORAN PEMBAYARAN SPP SMKIU</div>

  <table class="table-center mb-1">
      <thead>
         <tr>
            <th>No</th>
            <!-- <th>Petugas</th> -->
            <th>Siswa</th>
            <th>Kelas</th>
            <!-- <th>Jenis Kelamin</th> -->
            <th>SPP Bulan</th>
            <th>SPP Nominal</th>
            <th>Tanggal Bayar</th>
            <th>Status</th>
         </tr>
      </thead>
      <tbody>
         @foreach($pembayaran as $k => $val)
         <tr>
            <td>{{ $k += 1 }}</td>
            <!-- <td>{{ $val->user->name }}</td> -->
            <td>{{ $val->siswa->nama }}</td>
            <td>{{ $val->siswa->kelas->nama_kelas }}</td>
            <!-- <td>{{ $val->siswa->jenkel }}</td> -->
            <td>{{ $val->bulan_bayar }}</td>
            <td>{{ "Rp. " . number_format($val->jumlah_bayar, 0) }}</td>
            <td>{{ Carbon\Carbon::parse($val->tanggal_bayar)->format('d F Y') }}</td>
            <!-- <td>{{ $val->created_at->format('d M, Y') }}</td> -->
            <td>{{ $val->status }}</td>
         </tr>
         @endforeach
      </tbody>


</table>
   <!-- /content -->

   <!-- footer -->
    <div>Pembuat : {{ auth()->user()->name }}</div>
   <!-- /footer -->
</body>
</html>

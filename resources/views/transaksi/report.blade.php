<!DOCTYPE html>
    <html>
        <head>
            <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
        </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
            font-size: 9pt;
            }
                </style>
                <h4 align="center">TRANSAKSI REPORT</h4>
                <b>Diskon</b>      : {{ $transaksi->diskon }} <br>
                <b>Ongkir</b>      : {{ $transaksi->ongkir }} <br>
                <b>Jumlah</b>      : {{ $transaksi->jumlah }} <br>
                <b>Total Harga</b> : {{ $transaksi->total }} <br>
                <b>Status</b>      : {{ $transaksi->status }} <br><br>
    </body>
</html>
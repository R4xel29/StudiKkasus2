<?php
$nama_pelanggan = "Budi Santoso";
$judul_buku     = "Dasar-Dasar Pemrograman Web";
$jumlah_buku    = 2;
$harga_satuan   = 85000;
$member         = true;


function hitungTotalAwal($jumlah, $harga) {
    return $jumlah * $harga;
}

function hitungDiskon($totalAwal, $member) {
    if ($member) {
        return $totalAwal * 0.05; // diskon 5% untuk member
    } else {
        return 0;
    }
}

function hitungTotalBayar($totalAwal, $diskon) {
    return $totalAwal - $diskon;
}

function cetakStruk($nama, $judul, $jumlah, $harga, $totalAwal, $diskon, $totalBayar) {
    echo "<h2>===== Struk Pembelian Toko Buku Cahaya Ilmu =====</h2>";
    echo "Nama Pelanggan : $nama <br>";
    echo "Judul Buku     : $judul <br>";
    echo "Jumlah Buku    : $jumlah <br>";
    echo "Harga Satuan   : Rp " . number_format($harga, 0, ',', '.') . "<br>";
    echo "Total Awal     : Rp " . number_format($totalAwal, 0, ',', '.') . "<br>";
    echo "Diskon         : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
    echo "Total Bayar    : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
    echo "=================================================";
}

// Proses
$totalAwal  = hitungTotalAwal($jumlah_buku, $harga_satuan);
$diskon     = hitungDiskon($totalAwal, $member);
$totalBayar = hitungTotalBayar($totalAwal, $diskon);

// Cetak struk
cetakStruk($nama_pelanggan, $judul_buku, $jumlah_buku, $harga_satuan, $totalAwal, $diskon, $totalBayar);
?>

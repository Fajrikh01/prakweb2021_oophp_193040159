<?php

class Produk {
    public  $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga ="0";

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

/*
$produk1 = new Produk();
$produk1->judul = "Shinbi's House";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "One Piece";
$produk2->tambahProperty = "wkwkwk";
var_dump($produk2);
*/

$produk3 = new Produk();
$produk3->judul = "Detective Conan";
$produk3->penulis = "Aoyama Gosho";
$produk3->penerbit = "Shogakukan";
$produk3->harga = 25000;
//var_dump($produk3);

/*
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();
echo "<hr>";
*/

$produk4 = new Produk();
$produk4->judul = "Unchaerted";
$produk4->penulis = "Neil Duckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
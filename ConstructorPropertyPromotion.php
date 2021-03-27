<?php


class Product {
    public function __construct(public string $id, public string $nama, public string $harga, public int $jumlah, public string $pabrik){

    }

    public function munculkanId(){
        return $this->id;
    }

    public function munculkanNama(){
        return $this->nama;
    }

    public function masukkanNama($nama){
        $this->nama = $nama;
        return $this->nama;
    }
};

$product = new Product(id:1, nama:'Bimoli', harga:30000, jumlah:2, pabrik:'PT Indofood');

echo $product->nama . PHP_EOL;
var_dump($product);
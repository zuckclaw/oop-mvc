<?php
class ProductController extends ProductModel
{
    public function getProducts()
    {
        return $this->findAll();
    }

    public function getProductBy()
    {
        // cek dulu apakah id ada di $_GET
        if (!isset($_GET['id'])) {
            return null; // id tidak ada → null
        }

        // ambil id hanya angka
        $onlyId = preg_replace('/\D/', '', $_GET['id']);

        if ($onlyId !== "") {
            return $this->findOne($onlyId); // pakai id yang sudah difilter
        }

        return null; // kalau kosong
    }
}
?>

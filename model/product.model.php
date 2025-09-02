<?php

class ProductModel extends Connection
{
    protected $judul;
    protected $sinopsis;
    protected $tahun_rilis;

protected function findAall()
{
    $sql = "SELECT * FROM film";
    $stmt = $this->connect()->query($sql);
    if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $product[] = $data;
        }
        return $product;
    }
}

protected function findOne($id)
{
    $sql = "SELECT * FROM film WHERE id = ?";
    $stmt = $this->connect()->query($sql);
    if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $product[] = $data;
        }
        return $product;
        }
    }
}

?>
<?php

class ProductModel extends Connection
{
    protected $judul;
    protected $sinopsis;
    protected $tahun_rilis;

    protected function findAll()
    {
        $sql = "SELECT * FROM film";
        $result = $this->connect()->query($sql);

        $products = []; 

        if ($result && $result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
                $products[] = $data;
            }
        }

        return $products;
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM film WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);

        $products = []; 

        if ($stmt) {
            $stmt->bind_param("i", $id); 
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                while ($data = $result->fetch_assoc()) {
                    $products[] = $data;
                }
            }

            $stmt->close();
        }

        return $products;
    }
}

?>

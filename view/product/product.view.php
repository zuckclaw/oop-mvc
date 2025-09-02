<?php 

class ProductView extends ProductController
{
    public function show()
    {
        $produts = $this->getProducts();

        foreach ($products as $product) { ?>
         <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['judul']; ?></td>
            <td><?php echo $product['sinopsis']; ?></td>
            <td><?php echo $product['tahun_rilis']; ?></td>
         </tr>
        <?php 
        }
    }

    public function find()
    {
        $detailProduct = $this->getProductBy();
        if (empty(detailProduct)) {
            return;
        foreach ($detailProduct as $detail) { ?>
         <div>
            <h3><?php echo $detail['judul']; ?></h3>
            <p><?php echo $detail['sinopsis']; ?></p>
            <p><?php echo $detail['tahun_rilis']; ?></p>
         </div>
         <?php 
         }
        }
    }

}

?>
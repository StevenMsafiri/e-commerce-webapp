<div class="card">
    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
    <div class="card-body">
        <h5 class="card-title"><?php echo $product['name']; ?></h5>
        <p class="card-text">Category: <?php echo $product['category_name']; ?></p>
        <p class="card-text"><?php echo $product['description']; ?></p>
        <p class="card-text">$<?php echo $product['price']; ?></p>
        <a href="index.php" class="btn btn-secondary">Back to List</a>
    </div>
</div>
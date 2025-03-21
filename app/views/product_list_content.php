<div class="row">
    <div class="col-md-3">
        <h4>Categories</h4>
        <ul class="list-group">
            <?php foreach ($categories as $category): ?>
                <li class="list-group-item">
                    <a href="index.php?action=list_by_category&category_id=<?php echo $category['id']; ?>">
                        <?php echo $category['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="row">
            <?php if (empty($products)): ?>
                <div class="col-12">
                    <p>No products found.</p>
                </div>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                 <p class="card-text">Category: <?php echo $product['category_name']; ?></p>
                                <p class="card-text">$<?php echo $product['price']; ?></p>
                                <a href="index.php?action=show&id=<?php echo $product['id']; ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
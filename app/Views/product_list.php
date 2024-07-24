 <!-- var_dump($products);  ?>    for view the database all data -->

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div>
<img src="https://www.kcgcorporation.com/storage/product-and-service/our-product/food-and-bakery-ingredients/sunquick/product-sunquick.png" alt="DESCRIPTION_OF_IMAGE">
</div>
<div class="container mt-5">
    <h1>Product List</h1>
    <a href="/products/create" class="btn btn-primary mb-3">Add Product</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created Date And Time</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['created_at'] ?></td>
                
                
                <td>
                    <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="/products/delete/<?= $product['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

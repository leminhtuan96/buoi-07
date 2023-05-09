<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-right">
        <a href="/products/add" class="btn btn-primary mt-3 text-light">Create</a>
        </div>
        <div class="row mt-3">
            <h2>List Product</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($products as $key => $value){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->description?></td>
                        <td><?php echo $value->price?></td>
                        <td><a href="/products/edit" class="btn btn-primary text-light">Edit</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
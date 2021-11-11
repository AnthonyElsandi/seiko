<div class="container">
    <br>
    <br>
    <br>
    <br>

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Add Product
                </button>
            </h2>
            </div>

            <div class="container">
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                <div class="card-body">
                    <form action="<?= BASEURL ?>/product/addProduct" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Product Price</label>
                            <input type="number" class="form-control" id="product_price" name="product_price">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Brand</label>
                            <select class="form-control" id="brand_id" name="brand_id">
                            <option value="" disabled selected hidden>Select Brand</option>
                                <?php foreach($data['brand'] as $brand) : ?>
                                    <option value="<?= $brand['brand_id'] ?>">
                                        <?= $brand['brand_name']; ?>
                                    </option>
                                <?php endforeach?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" id="product_category_id" name="product_category_id">
                            <option value="" disabled selected hidden>Select Category</option>
                                <?php foreach($data['product_category'] as $productCategory) : ?>
                                    <option value="<?= $productCategory['product_category_id'] ?>">
                                        <?= $productCategory['product_category_name']; ?>
                                    </option>
                                <?php endforeach?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Photo Product</label>
                            <input type="file" class="form-control" id="exampleFormControlInput3" name="product_photo_url">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Product Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="product_desc"></textarea>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-success">SUBMIT</button>
                        </div>
                    </form>
                </div>

                </div>
            </div>
            
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Update/Add Category
                </button>
            </h2>
            </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <ul class="list-group mt-5 w-100">
                            <?php foreach ($data['product_category'] as $category) : ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    <div class="nama">
                                        <?= $category['product_category_name']; ?>
                                    </div>

                                    <div class="action">
                                        <a href="<?= BASEURL; ?>/product_category/update/<?= $category['product_category_id'] ?>" class="badge badge-warning showUpdateModal" data-toggle="modal" data-target="#formModal" data-id=<?= $category['product_category_id']; ?>>
                                            UPDATE
                                        </a>
                                        <a href="<?= BASEURL; ?>/product_category/delete/<?= $category['product_category_id'] ?>" class="badge badge-danger" onclick="return confirm('yakin ?');">
                                            DELETE
                                        </a>
                                    </div>
                                    
                                </li>
                            <?php endforeach?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Update/Add Brand
                </button>
            </h2>
            </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <ul class="list-group mt-5 w-100">
                            <?php foreach ($data['brand'] as $brand) : ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    <div class="nama">
                                        <?= $brand['brand_name']; ?>
                                    </div>

                                    <div class="action">
                                        <a href="<?= BASEURL; ?>/brand/update/<?= $brand['brand_id'] ?>" class="badge badge-warning showUpdateModal" data-toggle="modal" data-target="#formModal" data-id=<?= $brand['brand_id']; ?>>
                                            UPDATE
                                        </a>
                                        <a href="<?= BASEURL; ?>/brand/delete/<?= $brand['brand_id'] ?>" class="badge badge-danger" onclick="return confirm('yakin ?');">
                                            DELETE
                                        </a>
                                    </div>
                                    
                                </li>
                            <?php endforeach?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
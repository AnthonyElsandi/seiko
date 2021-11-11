<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="card">
                <div class="row d-flex justify-content-center align-items-center pt-5">
                    <div class="text-danger">
                        <?= $data['product_name'] ?>
                    </div>
                </div>
                
                <div class="row w-100 d-flex justify-content-center align-items-center ml-sm-1">
                    <img class="w-50" src="<?= BASEURL; ?>/images/<?= $data['product_photo_url'];?>" alt="">
                </div>

                <div class="row w-100 d-flex justify-content-center align-items-center ml-sm-1">
                    <div class="container">
                        <label for="produc_desc">Description:</label>
                        <p class="mb-5" id="product_desc">
                            <h5><?= $data['product_desc']; ?></h3>
                        </p>
                    </div>
                    
                </div>

                <div class="row w-100 d-flex justify-content-center align-items-center ml-sm-1 mb-4 mt-5">
                    <div class="container">
                        <a href="">
                            <button class="btn btn-outline-info">TAMBAH KE KERANJANG</button>
                        </a>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
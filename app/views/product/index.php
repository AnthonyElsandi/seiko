<!-- Page Content -->
<div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>seiko products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <?php foreach ($data['product_category'] as $productCategory) : ?>
                    <li data-filter=".<?= $productCategory['product_category_id'];?>">
                      <?= $productCategory['product_category_name'];?>
                    </li>
                  <?php endforeach?>  
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                
                  <?php foreach ($data['product'] as $product) : ?>
                      <div class="col-lg-4 col-md-4 all <?= $product['product_category_id'];?>">
                        <div class="product-item">

                          <a href="<?= BASEURL ?>/product/detail/<?= $product['product_id'] ?>"><img src="<?= BASEURL; ?>/images/<?= $product['product_photo_url'];?>" alt=""></a>

                          <div class="down-content">
                            <div class="row">
                              <a href="#"><h4><?= $product['product_name'];?></h4></a>
                            </div>
                            
                            <div class="row" >
                              <p class="text-success">Rp <?= $product['product_price'];?>,00/month</h6>
                            </div>
                            
                            <div class="row">
                              <p><?= $product['product_desc'];?></p>
                            </div>
                            
                            <?php if ($_SESSION['user']['role_id'] == 1) {?>
                              <a href="<?= BASEURL; ?>/admin/update/<?= $product['product_id']; ?>" class="badge badge-warning showUpdateModal" data-toggle="modal" data-target="#formModal" data-id=<?= $product['product_id']; ?>>
                                      UPDATE
                              </a>

                              <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $product['product_id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ?');">
                                      DELETE
                              </a>
                            <?php }?>
                            

                          </div>

                        </div>
                      </div>
                    <?php endforeach?>  
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
<!-- Modal -->
  <div class="modal fade mt-5" id="formModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">UPDATE PRODUCT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="<?= BASEURL; ?>/product/updateProduct" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="product_id" id="product_id">
              
              <div class="row">
                <div class="form-group ml-sm-3 mr-2">
                  <label for="exampleFormControlInput1">Product Name</label>
                  <input type="text" class="form-control" id="product_name" name="product_name">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Product Price</label>
                    <input type="number" class="form-control" id="product_price" name="product_price">
                </div>
              </div>
              

              <div class="form-group">
                  <label for="exampleFormControlSelect1">Brand</label>
                  <select class="form-control" id="brand_id" name="brand_id">
                  <option value="" disabled selected hidden>Select Brand</option>
                      <?php foreach($data['brand'] as $brand) : ?>
                          <option value="<?= $brand['brand_id']; ?>">
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
                  <input type="file" class="form-control" id="product_photo_url" name="product_photo_url">
              </div>

              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Product Description</label>
                  <textarea class="form-control" id="product_desc" rows="3"
                  name="product_desc"></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleFormControlSelect1">Product Availability</label>
                  <select class="form-control" id="product_availability" name="product_availability">
                      <option value="" disabled selected hidden>Select Availability</option>
                      <option value="F">Not Available</option>
                      <option value="T">Available</option>
                  </select>
              </div>                                                        

              <div class="form-group d-flex justify-content-center align-items-center">
                  <button type="submit" class="btn btn-success">SUBMIT</button>
              </div>

          </form>
        </div>
        
      </div>
    </div>
  </div>
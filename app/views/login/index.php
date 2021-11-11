<?php Flasher::flash();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL ?>/css/login.css" rel="stylesheet">
    <link href="<?= BASEURL ?>/css/font-awesome-4.0.3.css" rel="stylesheet">
    <link href="<?= BASEURL ?>/css/bootstrap-4.3.1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container px-4 py-5 mx-auto w-75">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <img style="width: 100%; height: 100%;" id="logo" src="<?= BASEURL;?>/images/seikoLogo.png"> </div>
                            <h6 class="msg-info">Please login to your account</h6>

                            <form action="<?= BASEURL; ?>/login/login" method="POST">
                        
                                <div class="form-group">
                                    <label class="form-control-label text-muted">Username</label>
                                    <input type="text" id="user_name" name="user_name" placeholder="Phone no or email id" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label text-muted">Password</label>
                                    <input type="password" id="user_password" name="user_password" placeholder="Password" class="form-control">
                                </div>

                                <div class="row justify-content-center my-3 px-3">
                                    <button type="submit" class="btn-block btn-color">Login to Seiko</button>
                                </div>

                                <div class="row justify-content-center my-2">
                                    <a href="#">
                                        <small class="text-muted">
                                            Forgot Password?
                                        </small>
                                    </a>
                                </div>
                            
                            </form>

                            

                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <a href="<?= BASEURL; ?>/register" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></a>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">Memudahkan keinginan kalian</h3> <small class="text-white">Anda senang kami bahagia</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= BASEURL ?>/js/bootstrap-4.3.1.js"></script>
    <script src="<?= BASEURL ?>/js/jquery.3.2.1.js"></script>
</body>
</html>


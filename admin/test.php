<doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>World Of Dresses | Edit Product Info</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css">
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }
        </style>


    <body>
        <?php include('includes/header.php'); ?>
        <div class="ts-main-content">
            <?php include('includes/leftbar.php'); ?>
            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">

                            <h2 class="page-title">Edit Product</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Basic Info</div>
                                        <div class="panel-body">
                                            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product ID <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="ID" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product_name <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="product_name" class="form-control" value="<?php ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">collections <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="collections" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product_category <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="product_category" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">company_name <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="company_name" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">brand <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="brand" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Price <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="price" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">description <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="description" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">product_pattern <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="product_pattern" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">quantity <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="quantity" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">size <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="size" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">product_stiched <span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="product_stiched" class="form-control" value="<?php  ?>" required>
                                                    </div>

                                                </div>

                                                <div class="hr-dashed"></div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <h4><b>Product Images</b></h4>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        Image <img src="img/<?php  ?>" width="300" height="200" style="border:solid 1px #000">
                                                        <a href="changeimage1.php?imgid=<?php ?>">Change Image </a>
                                                    </div>
                                                </div>
                                                <div class="hr-dashed"></div>


                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">

                                                        <button class="btn btn-primary" name="submit" type="submit" style="margin-top:4%">Save changes</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loading Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>

    </body>
    </head>

    </html>
</doctype>
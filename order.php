<?php include"header.php"?>
<?php include"topdiv.php"?>
<?php include"navbar.php"?>


<div class="container-fluid">
    <div class="text-center">
        <h4 class="mt-3">ORDER FORM</h4>
        <img src="img/decor2.png">

    </div>
    <!--    end of title div-->
    <div class="row text-center">
        <div class="col-12 mx-auto my-2 col-md-8">

            <div class="comment-form bg-white p-3">
                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row text-center">
                        <div class="col-sm-10 mx-auto">
                            <div class="form-group">
                                <label>Produce Type</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="produce type">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-sm-10 mx-auto">
                            <div class="form-group">
                                <label>Produce Name</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="produce name">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-sm-10 mx-auto">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" name="name" id="name" type="number" placeholder="quantity">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-sm-10 mx-auto">
                            <div class="form-group">
                                <label>Start Price</label>
                                <input class="form-control" name="name" id="name" type="number" placeholder="quantity">
                            </div>
                        </div>
                        <!--                  end of div-->
                    </div>
                    <div class="form-group mt-3">
                        <a href="#" class="btn btn-success float-left">SUBMIT</a>
                        <a href="index.php" class="btn btn-danger float-right">CANCEL</a>
                    </div>
                </form>
            </div>

        </div>
        <!--             end of col -->
    </div>
</div>






<?php include"footer.php"?>

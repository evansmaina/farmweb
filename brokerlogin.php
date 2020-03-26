<?php include"header.php"?>
<?php include"topdiv.php"?>
<?php include"navbar.php"?>


<div class="container-fluid">
    <div class="text-center">
        <h4 class="mt-3">BROKER LOGIN FORM</h4>
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
                                <label>Firstname</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="first name">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-sm-10 mx-auto">
                            <div class="form-group">
                                <label>Surname</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="surname">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-sm-10 mx-auto">

                            <div class="form-group">
                                <label>ID No</label>
                                <input class="form-control" name="password" id="name" type="text" placeholder="Id no">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-10 mx-auto">
                            <label>D.O.B</label>
                            <div class="form-group">
                                <input class="form-control" name="subject" id="date" type="date">
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-10 mx-auto">
                            <label>Gender</label>
                            <div class="form-group">
                                &nbsp;Male<input name="subject" id="check" type="radio">
                                &nbsp;
                                <input name="subject" id="check" type="radio"> female
                            </div>
                        </div>
                        <!--                  end of div-->
                        <div class="col-10 mx-auto">
                            <label>location</label>
                            <div class="form-group">
                                <input class="form-control" name="subject" id="location" type="text" placeholder="location">
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

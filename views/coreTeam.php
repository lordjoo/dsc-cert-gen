<?php include "header.php"; ?>

<div class="bg-light p-4">
    <div class="container bg-white p-2 px-4">
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <h3 class="mb-2">Create Certificates For Your Team</h3>
            </div>
            <div class="col-md-8 m-auto text-center">
                <img class="m-auto img-thumbnail" style="width: 450px" src="/ex/ctm.png" alt="">
            </div>
        </div>
        <hr>
        <form action="/ct19" method="post">
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Member Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">University Name</label>
                        <input name="univ" required type="text" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Leader Name</label>
                        <input name="lead" required type="text" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="w-100 btn btn-success btn-sm">Generate</button>
                </div>
            </div>
        </form>
    </div>

    <?php include "footer.php"; ?>

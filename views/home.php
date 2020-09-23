<?php include 'layouts/header.php'; ?>
<div class="home-page grey lighten-4 mt-4 p-4 pb-0">
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="d-flex align-center">
                    <img style="width: 45px;height: 35px"
                         class="mr-2"
                         src="assets/logo.png" alt="">
                    <h4>DSC Certificate Maker</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <a class="github-button" href="https://github.com/lordjoo/dsc-cert-gen" data-color-scheme="no-preference: dark; light: light; dark: dark;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star lordjoo/dsc-cert-gen on GitHub">Star</a>
                    <div class="ml-2"></div>
                    <a class="github-button" href="https://github.com/lordjoo/dsc-cert-gen/subscription" data-color-scheme="no-preference: dark; light: light; dark: dark;" data-icon="octicon-eye" data-size="large" aria-label="Watch lordjoo/dsc-cert-gen on GitHub">Watch</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">       <p>This is an Open Source Project To help The <a href="https://g.co/dev/dsc">DSC</a> Leaders generate
                    Certificates for Their Students Easily,<br>
                    Please feel free to submit a new design to add to the project, Made with <span
                            class="mdi mdi-heart text-danger"></span> by Youssef Mahmoud</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="" class="form row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <h5 class="mb-3">Choose Certificate Template</h5>
                            <div class="templates-slider">
                                <div class="temp mr-2">
                                    <div class="icon">
                                        <span class="mdi mdi-check-circle"></span>
                                    </div>
                                    <img style="width: 100%;height: 100%;" src="/ex/t1.png" alt="">
                                    <input checked required class="radio" type="radio" name="temp" value="1">
                                </div>
                                <div class="temp mr-2">
                                    <div class="icon">
                                        <span class="mdi mdi-check-circle"></span>
                                    </div>
                                    <img style="width: 100%;height: 100%;" src="/ex/t2.jpg" alt="">
                                    <input required class="radio" type="radio" name="temp" value="2">
                                </div>
                                <div class="temp">
                                    <div class="icon">
                                        <span class="mdi mdi-check-circle"></span>
                                    </div>
                                    <img style="width: 100%;height: 100%;" src="/ex/t3.png" alt="">
                                    <input required class="radio" type="radio" name="temp" value="3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="md-form">
                            <label for="branch">Branch *</label>
                            <input required class="form-control" id="branch" type="text" name="branch">
                        </div>
                        <div class="md-form">
                            <label for="title">Certificate Title *</label>
                            <input required class="form-control"
                                   id="title" type="text" name="c_title">
                        </div>
                        <div class="md-form">
                            <label for="st">Student Name *</label>
                            <input required class="form-control"
                                   id="st" type="text" name="c_name">
                        </div>
                        <div class="md-form">
                            <label for="desc">Description *</label>
                            <input required class="form-control"
                                   id="desc" type="text" name="c_desc">
                        </div>
                        <div class="md-form">
                            <label for="lead">Leader Name for signature (Optional)</label>
                            <input class="form-control"
                                   id="lead" type="text" name="lead">
                        </div>

                        <div class="md-form mt-2">
                            <button class="btn btn-primary">Generate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="footer pt-2 bg-dark">
    <p class="text-center text-white pb-0 mb-0 p-0">Made with <span class="mdi mdi-heart text-danger"></span> by <a target="_blank" href="https://twitter.com/lordjoo_20">Youssef Mahmoud</a></p>
</footer>
<?php include 'layouts/footer.php'; ?>
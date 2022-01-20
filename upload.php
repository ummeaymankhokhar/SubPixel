<?php
session_start();
if(isset($_SESSION['User']))
{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SubPixels</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Photo-Gallery.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="background-color: #37434d;color: #ffffff;">
            <div class="container-fluid"><a class="navbar-brand" href="index.html"><i class="fas fa-image"></i>&nbsp;SubPixel</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:#ffffff;" href="home.php"><i class="fas fa-sign-out-alt"></i>Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:#ffffff;" href="logout.php?logout=Logout"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-3 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="font-weight: bold;">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5"><i class="fas fa-paperclip"></i>&nbsp;Upload Image</h2>
                    <form action="upload2.php" method=post enctype="multipart/form-data">
					<input type="file" style="padding-bottom: 16px;" name=image>
                        <div class="form-group"><label class="text-secondary">Title</label>
                        <input class="form-control" type="text" required="" name="img_name"><br>
                        <label class="text-secondary">Tags</label>
						<textarea class="form-control"  rows="5"  required="" name="tags"></textarea>
                    </div>
						<input class="btn btn-info mt-2" type="submit" name="Upload" value=Upload></form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
<?php
}
else
    {
        header("location:index.html");
    }
?>
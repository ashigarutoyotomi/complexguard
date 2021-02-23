<?php
	if (isset($_GET['send'])) {
	$text =  $_GET['text'];
	$subject = $_GET['subject'];
	$email = $_GET['email'];
	$text  = htmlspecialchars($text);
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$subject = filter_var($subject, FILTER_SANITIZE_STRING);
	mail("abecodeman@gmail.com", $subject, $text, "From: {$_GET['email']}\r\nReply-To: {$_GET['email']}\r\n");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex guard - where your safety begins</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Complex Guard company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around w-100 text-light">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            Our Achievements
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Partners
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Find text" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/SecurityBro.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>High quality of work</h5>
                        <p>We did a great work to increase organisation and quality of service</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/security-cam-promo-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Best technical provide</h5>
                        <p>Our tech is never jams</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/law_enforcementsecurity-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>High management organization</h5>
                        <p>The high-professional team of management will help you to protect your life and work</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

   	<!-- Our competention -->

   	<div class="container text-center">
   		<h2 class="my-2 text-warning big">Our competention</h2>
   		<div class="row box">
   			<div class="col-sm-12 col-md-4 col-lg-4">
   				<h2 class="text-warning my-2">We provide professional bodyguards</h2>
   				<hr>
   				<p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Et porro architecto beatae modi velit commodi consectetur,Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Labore tempore sed ipsa nam repellat molestias dolores? A quo veritatis delectus, vero velit doloremque ratione dignissimos quia assumenda sit accusamus explicabo.</p>
   			</div>
   			<div class="col-sm-12 col-md-4 col-lg-4">
   				<h2 class="text-warning my-2">Honest and loyal folk working for good stats
   				</h2>
   				<hr>
   				<p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Et porro architecto beatae modi velit commodi consectetur,Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Labore tempore sed ipsa nam repellat molestias dolores? A quo veritatis delectus, vero velit doloremque ratione dignissimos quia assumenda sit accusamus explicabo.</p>
   			</div>
   			<div class="col-sm-12 col-md-4 col-lg-4">
   				<h2 class="text-warning my-2">Leader on technical support in this area of business</h2>
   				<hr>
   				<p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Et porro architecto beatae modi velit commodi consectetur,Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Labore tempore sed ipsa nam repellat molestias dolores? A quo veritatis delectus, vero velit doloremque ratione dignissimos quia assumenda sit accusamus explicabo.</p>
   			</div>
   		</div>
   	</div>
    <section>
        <div id="grid">
            <div class="q"><img src="img/1.jpg" alt="">
            	<h2>Confidential delivery of mail and goods</h2>
            </div>
            <div class="w"><img src="img/c9b13550439d944934662ada784e7dea.jpg" alt=""><h2>Regular phisycal training of staff</h2></div>
            <div class="e"><img src="img/aeff5bba574c83c04c624b6aaf60888ed4796c6b.jpg" alt="">
            	<h2>Honorable tech support</h2></div>
            <div class="r">
            	<img src="img/Banner.jpg" alt="">
            	<h2>
            		Fully-controlled proccesses at your object
            	</h2>
            </div>
            <div class="t">
            	<img src="img/HD-security-camera_LBV2521PK4B_L1.png" alt="">
            	<h2>Specialized and adopted cameras and detectors at your service</h2>
            </div>
            <div class="y">
            	<div>
            		<img src="img/3d-image-security-border-line-260nw-313899416.jpg" alt="">
            		<h3 id="hl">Supporting build process at your object</h3>
            	</div>
            	<div>
            		<img src="img/83-835900_cool-dog-photos-security-dogs.jpg" alt="">
            		<h3 id="hl">And also we using guard dogs</h3>
            	</div>
            </div>
        </div>
    </section>

  <!--   send mail	 -->
 		<!-- Button trigger modal -->


	<div class="container text-center">
		<h1>Our goal is satisfied customers</h1>
		<p class="text-warning">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi? Nulla ad explicabo, deleniti dolorum aperiam, quas vero earum sint nostrum, provident doloremque odio, nemo est alias eveniet. Hic voluptas quam voluptatem eveniet enim unde provident, culpa tenetur, molestiae explicabo.
		</p>
	</div>


<div class="row my-4">
	<button type="button" class="btn btn-warning mx-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Text us! We'll answer
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Type your message here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="GET">
        	<div class="row">
        		<div class="col-sm-12 col-md-6">
        			<input type="email" name="email" placeholder="Your email address" maxlength="40" tabindex="1" class="form-control">
        		</div>
        		<div class="col-sm-12 col-md-6">
        			<input type="text" placeholder="Your subject" maxlength="30" tabindex="2" name="subject" class="form-control">
        		</div>
        		<div class="px-2 mt-2">
        			<textarea name="text" placeholder="Type your full question here" tabindex="3" rows="10" cols="5" class="form-control"></textarea>
        		</div>
        		<input type="submit" class="btn btn-success mx-auto" name="send" value="Send it">
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="bg-dark">
    <footer class="container">
    	<div class="row my-2 py-4  text-light text-center px-4">
    		<div class="col-sm-12 col-md-3 col-lg-3 px-2">
    			<h2 class="mb-4">Our contacts:</h2>
    			<hr>
    			<ul>
    				<li><a href="https://www.vk.com/someone">Our VK</a></li>
    				<li>
    					<a href="https://www.facebook.com">Our facebook</a>
    				</li>
    				<li>
    					<a href="https://www.instagram.com">Our instagram</a>
    				</li>
    				<li>
    					<a href="https://www.twitter.com">Our twitter</a>
    				</li>
    				<li>
    					<a href="https://www.youtube.com">Our youtube</a>
    				</li>
    			</ul>
    		</div>
    		<div class="col-sm-12 col-md-3 col-lg-3 px-2">
    			<h2>Our location on map</h2>
    			<div style="width: 100%"><iframe width="100%" height="auto" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Complex%20guard)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    		</div>
    		<div class="col-sm-12 col-md-3 col-lg-3 px-2">
    			<img src="img/download (1).jpg" alt=""><br>
    			Our HQ
    		</div>
    		<div class="col-sm-12 col-md-3 col-lg-3 px-2">
    			<h2>our partners</h2>
    			<ol>
    				<li><a href="#">Cool Plates inc.</a></li>
    				<li><a href="#">Richardson & Co</a></li>
    				<li><a href="#">Under Siege mfg.</a></li>
    			</ol>
    		</div>
    	</div>
    </footer>
    </div>
    <script src="js/jq.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')

<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')

<!---------------------- Blog SEC -------------------->
<section class="dark" style="background: #3c3b40;">
	<div class="b-head">
        <img src="public/markup/img/blog-background.jpg" alt="">
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <div class=""></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="popular"></div>
        </div>
    </div>
</section>
@include('frontend.inc.newsletter')
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
<style>
   .dark h1 h2 h3 h4 span p {
        color: white;
   }
   .b-head {
        height: 350px;
   }
   .b-head img {
        height: 100%;
   }
   .post {
    min-height: 250px;
    background-color: #cdcdcd;
   }
   .popular {
    min-height: 500px; 
    background-color: #cdcdcd;
   }
</style>
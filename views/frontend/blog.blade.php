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
</section>
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
<style>
   .dark h1 h2 h3 h4 span p {
        color: white;
   }
   .b-head {
        height: 200px;
        background: "public/markup/img/blog-background.jpg";
   }
   .b-head img {
        
   }
</style>
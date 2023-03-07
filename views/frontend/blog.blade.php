<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')

<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')

<!---------------------- Blog SEC -------------------->
<section class="dark" style="background: #3c3b40;
    padding-top: 50px;
    padding-bottom: 50px;">
	<div class="b-head"><img src="public/markup/img/blog-background.jpg"></div>
</section>
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
<style>
   .dark h1 h2 h3 h4 span p {
        color: white;
   }
   .b-head {
        min-height: 200px;

   }
   .b-head img {
        object-fit: cover;
   }
</style>
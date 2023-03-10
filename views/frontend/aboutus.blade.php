<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')
<link rel="stylesheet" href="public/markup/css/styles.scss">
<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')

<!---------------------- Blog SEC -------------------->
<section class="sec-vision">
    <div class="container py-5 front">
        <div class="row">
            <div class="col-md-7">
                <h2 class="c-white">We’re strategists, growth experts, marketers, analysts, and what not</h2>
                <p class="c-white">We have over five years of experience in the creative industry, 
                    promoting and optimizing content for creators that is as good as it grows.</p>
                <h3 class="mt-5 mb-4 c-white">Our Vision</h3>
                <p class="c-white">Make growth highly accessible to content creators across the globe, 
                to take content beyond linguistic barriers, to take the media-tech industry by storm.</p>
                <div class="mt-5" style="text-align:center;padding: 17px; background-color: #505856; border-radius: 25px;">
                    <div class="heroImages mt-3" >

                        <img src="public/markup/img/Group 3602.png" alt="YouTube Partner">
                        <img src="public/markup/img/Group 3601.png" alt="Google Partner">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-5">
            <div class="card">
                <img src="public/markup/img/ceo.png" class="card-img-top" alt="CEO photo">
                <div class="card-footer">
                <h4 class="card-title c-black">Anil Punadiya</h4>
                <p class="card-text">CEO</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="area" style="max-height:0px; z-index:-10;">
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
    </div >
</section>
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')

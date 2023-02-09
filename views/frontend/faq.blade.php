<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')
<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')
<section class="faq-sec-hero">
    <div class="container-fluid p-0">
        <h3>Frequently Asked </h3>
        <span>Questions</span>
    </div>
</section>

<!--------------------------------FAQ-SEC ----------------------->
@include('frontend.inc.faq')

<!---------------------- NEWS LETTERS ---------------------->
@include('frontend.inc.newsletter')
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
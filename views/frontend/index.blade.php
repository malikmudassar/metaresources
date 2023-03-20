<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')
<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')
<!-------------------------- HERO-SEC -------------------->
@include('frontend.inc.hero')
<!---------------------- CREATORS SEC -------------------->
@include('frontend.inc.creators')
<!---------------------- COUTER-UP-SEC -------------------->
@include('frontend.inc.counters')
<!--------------------- DELIVERED SEC ------------------->
@include('frontend.inc.delivered')
<!--------------------- WHAT WE DO SEC ------------------>
@include('frontend.inc.whatwedo')
<!--------------------- META TRANSLATE SEC ------------------>
@include('frontend.inc.trans')
<!--------------------- META DB SEC ------------------>
@include('frontend.inc.db')
<!----------------------- YOU NEED SEC ------------------->
@include('frontend.inc.need')
<!--------------------- SLIDER SEC ----------------------->
@include('frontend.inc.slider')
<!----------------------- EXACTLY NEED SEC ------------------->
@include('frontend.inc.exactlyneed')
<!----------------------- FEEDBACK SEC ------------------->
@include('frontend.inc.feedback')
 <!--------------------- CONTACT-US-SEC ------------------->
@include('frontend.inc.contact')
<!--------------------------------FAQ-SEC ----------------------->
@include('frontend.inc.faq')
<!---------------------- NEWS LETTERS ---------------------->
@include('frontend.inc.newsletter')
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')

<style>
    @media (min-width: 1200px){
        .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    @media (min-width: 768px){
        .col-md-4 {
            flex: 0 0 45.333333%;
            max-width: 45.333333%;
        }
        .you-need-sec {
            height: auto !important;
        }
        .card {
            padding: 25px 25px 58px 45px;
        }
        .btngroups .btn-primary {
            padding: 15px 95px !important; 
        }
    }
</style>
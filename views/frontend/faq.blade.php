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
<section class="FAQ-sec">
    <div class="container">
        <div class="row">            
            <div class="col-lg-12">
                <div class="bs-example mt-5">
                    <div class="" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h4 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">What is Metapher Creator Ecosystem? <i class="fa fa-plus"></i></button>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Metapher creator ecosystem is suit of services we aim to provide to creators to unleash unlimited growth potential and bring revenue & subscribers growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h4 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">What are your Services?<i class="fa fa-plus"></i></button>									
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Metapher creator ecosystem is suit of services we aim to provide to creators to unleash unlimited growth potential and bring revenue & subscribers growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h4 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">How much does it Cost?<i class="fa fa-plus" aria-hidden="true"></i></button>                     
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Metapher creator ecosystem is suit of services we aim to provide to creators to unleash unlimited growth potential and bring revenue & subscribers growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h4 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">Any content creator you have Worked with?<i class="fa fa-plus" aria-hidden="true"></i></button>                     
                                </h4>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Metapher creator ecosystem is suit of services we aim to provide to creators to unleash unlimited growth potential and bring revenue & subscribers growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h4 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">How can I get Started? <i class="fa fa-plus" aria-hidden="true"></i></button>                     
                                </h4>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Metapher creator ecosystem is suit of services we aim to provide to creators to unleash unlimited growth potential and bring revenue & subscribers growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h4 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix">How can I get Insights about my channel? <i class="fa fa-plus" aria-hidden="true"></i></button>                     
                                </h4>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Metapher creator ecosystem is suit of services we aim to provide to creators to unleash unlimited growth potential and bring revenue & subscribers growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

<!---------------------- NEWS LETTERS ---------------------->
@include('frontend.inc.newsletter')
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
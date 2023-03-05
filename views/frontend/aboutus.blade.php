<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')
<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')

<!---------------------- Blog SEC -------------------->
<section class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <h2 class="mb-4">Our Story</h2>
      <h5>We’re strategists, growth experts, marketers, analysts, and what not</h5>
      <p>We have over five years of experience in the creative industry, 
        promoting and optimizing content for creators that is as good as it grows.</p>
      <h2 class="mt-5 mb-4">Our Vision</h2>
      <p>Make growth highly accessible to content creators across the globe, 
        to take content beyond linguistic barriers, to take the media-tech industry by storm.</p>
    </div>
    <div class="col-md-6">
      <div class="card">
        <img src="public/markup/img/ceo.png" class="card-img-top" alt="CEO photo">
        <div class="card-footer">
          <h4 class="card-title">Sarah Elixir</h4>
          <p class="card-text">CEO</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')

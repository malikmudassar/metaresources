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
    <div class="p-5 posts">
        <div class="row" style="padding-bottom:50px !important">
            <div class="col-md-8">
                <div class="">
                    <h3>MOST RECENT POSTS</h3>
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5>Revolutionizing Video Translation: How Metapher Is Meeting the Demands of the Digital Age</h5>
                        <hr>
                        <p class="paragraph">In today's digital age, video content has become increasingly popular across various platforms, and the demand for video translation services has skyrocketed. Video translation is essential for creators, businesses, and organisations that want to expand their audience and reach out to a global market. However, finding a reliable and customised video translation service can be a challenging task</p>
                        <div class="post__footer">
                            <img src=""> Posted By : <b> Shashank </b> 
                            <img src=""> 297 Views 
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5> Meta Growth Package: The All-in-One Tool for YouTube Content Creators</h5>
                        <hr>
                        <p class="paragraph">Content</p>
                        <div class="post__footer">
                            <img src=""> Posted By : <b> Shashank </b> 
                            <img src=""> 297 Views 
                        </div>
                    </div>
                   
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5>Beyond YouTube Monetization: How Meta Income Can Help You Earn More</h5>
                        <hr>
                        <p class="paragraph">Content</p>
                        <div class="post__footer">
                            <img src=""> Posted By : <b> Shashank </b> 
                            <img src=""> 297 Views 
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5>Title</h5>
                        <hr>
                        <p class="paragraph">Content</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5>Title</h5>
                        <hr>
                        <p class="paragraph">Content</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5>Title</h5>
                        <hr>
                        <p class="paragraph">Content</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post__img">
                        <img src="public/markup/img/img-pl.jpg" />
                    </div>
                    <div class="post__content">
                        <h5>Title</h5>
                        <hr>
                        <p class="paragraph">Content</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="popular">
                    <h3>MOST POPULAR</h3>
                    <hr>
                </div>
            </div>
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
   .posts {
    background: #fff;
   }
   .post {
    min-height: 250px;
    margin-bottom:20px;
    background-color: white;
    padding: 10px;
    box-shadow: 15px 16px 17px #cdcdcd;
   }
   .popular {
    min-height: 500px; 
   }
   .post__img img {
    height:200px;
   }
   .post__content {
        width:60%;
        text-align:justify;
        padding:10px;
   }
   .post__content p {
        font-size:12px;
        color: #6c5a5a;
   }
    .post__img,
    .post__content {
        display: inline-block;
        vertical-align: top; /* This is to ensure both divs are aligned at the top */
    }
    hr {width: 100%}
    .paragraph {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }
    .post__footer {
        font-size: 12px;
        color: #6c5a5a;
        bottom: 10px; 
        border-top: 2px solid grey;
    }
</style>
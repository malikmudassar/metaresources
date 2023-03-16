<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')

<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')

<!---------------------- Blog SEC -------------------->
<section class="dark" style="">
    <div class="p-5 posts">
        <div class="col-xs-12">
            <div class="breadcrumps">
                <a href="{{ route('home') }}" class="link-item">Metapher</a> 
                <img src="public/markup/img/right-arrow.png">
                <a href="{{ route('blog') }}" class="link-item">Blog</a> 
                <img src="public/markup/img/right-arrow.png">
                <a href="{{ route('blog') }}" class="link-item link-item-category">Translation</a>
            </div>
        </div>
        <div class="row" style="padding-bottom:50px !important">
            
            <div class="col-md-8 article-wrapper">
                <div class="">
                    <img src="public/markup/img/img-pl.jpg">
                </div>
                <h3>Latest Updates by YouTube: What You Need to Know.</h3>
                <p>
                    As one of the most popular video-sharing platforms in the world, YouTube is constantly updating its features and policies to better serve its users. Whether you're a content creator or a casual viewer, it's important to stay up-to-date with the latest changes to the platform. In this blog, we'll go over some of the recent updates made by YouTube and how they might impact you.
    
                    <h5>Removal of Dislike Counts</h5>
                    In November 2021, YouTube removed the public dislike count on videos. This means that viewers can still dislike a video, but the number of dislikes will no longer be publicly visible. According to YouTube, this was done to protect creators from targeted harassment and to promote more constructive feedback. However, some users have expressed concern that it may make it harder to gauge the popularity or quality of a video.
                    
                    <h5>Expanded Monetization Eligibility</h5>
                    In December 2021, YouTube announced that it was expanding its Partner Program eligibility requirements. Previously, creators needed 4,000 hours of watch time and 1,000 subscribers within the past 12 months to monetize their content. Now, creators can apply for monetization once they reach 1,000 subscribers and 4,000 hours of watch time in their channel's lifetime. This change aims to make it easier for small creators to start earning money from their content.
                    
                    <h5>Improved Copyright Claims System</h5>
                    In February 2022, YouTube announced improvements to its copyright claim system. The changes include more information for creators when they receive a claim, as well as new tools to help them resolve disputes. Additionally, YouTube will be providing more transparency around who is making claims and why. These changes aim to reduce the number of false claims and make the process fairer for creators.
                    
                    <h5>New Video Chapter Feature</h5>
                    In March 2022, YouTube introduced a new feature called Video Chapters. This allows creators to divide their videos into segments with titles and thumbnails, making it easier for viewers to find and skip to the content they're interested in. This feature is available to all creators who upload videos to YouTube, and can be especially helpful for longer videos or tutorials.
                    
                    <h5>Removal of Community Contributions</h5>
                    Also in March 2022, YouTube announced that it would be removing the Community Contributions feature. This allowed viewers to submit captions and translations for videos, but it was rarely used and had issues with spam and abuse. YouTube has stated that it will still support captioning and translation, but will be exploring new ways to improve the process. <br><br>
                    YouTube is constantly evolving and making changes to improve the user experience for both creators and viewers. By staying up-to-date with the latest updates and features, you can make the most of the platform and adapt your content accordingly. Whether you're a creator or a viewer, these changes are worth keeping an eye on as they may impact how you use and interact with YouTube.
                    
                </p>
                
                <div class="mt-5">
                    Keywords: 
                    <span class="label label-default">Metapher</span>
                    <span class="label label-default">YouTube</span>
                    <span class="label label-default"> Update </span>
                    <span class="label label-default"> Content</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="popular">
                    <h3>MOST POPULAR</h3>
                    <hr>
                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="card mp-card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Revolutionizing Video Translation: How Metapher Is Meeting The Demands Of The Digital Age</h5>
                                
                                <a href="#!" class="btn btn-warning btn-block">Read</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="card mp-card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                                <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Meta Growth Package: The All-In-One Tool For YouTube Content Creators</h5>
                                
                                <a href="#!" class="btn btn-warning btn-block">Read</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="card mp-card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                                <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Latest Updates By YouTube: What You Need To Know</h5>
                                
                                <a href="#!" class="btn btn-warning btn-block">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.inc.newsletter')
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
<style>
    body {
        font-family: Montserrat,sans-serif;
    }
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
    height:180px;
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
        -webkit-line-clamp: 5;
        overflow: hidden;
    }
    .post__footer {
        font-size: 12px;
        color: #6c5a5a;
        bottom: 10px; 
        border-top: 0.5px dotted #e5d5d5;
    }
    .post {
        position: relative;
    }

    .post__footer {
        position: absolute;
        bottom: 13px;
        padding-top: 10px;
        width: 59%;
    }
    .card {
        border-radius: 0px !important;
    }
    .mp-card {
        border: 0.5px dotted #e5d5d5;
        box-shadow: 15px 16px 17px #cdcdcd;
        border-radius: none;
    }
    p {
        text-align: justify;
        font-size: 14px;
        padding-top: 10px; 
        padding-bottom: 10x;
    }
    .label-default {
        background: black;
        border-radius:3px;
        padding: 2px;
    }
    @media (min-width: 1200px){
        .article-wrapper {
            padding-right: 105px;
        }
    }
</style>
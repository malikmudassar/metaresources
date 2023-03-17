<!DOCTYPE html>
<html lang="en"> 
@include('frontend.inc.head')

<body>

<!-------------- HEADER-SEC -------------------->
@include('frontend.inc.header')

<!---------------------- Blog SEC -------------------->
<section class="dark" style="">
    <div class="p-5 posts">
        <div class="container">
            <div class="col-xs-12">
                <div class="breadcrumps">
                    <a href="{{ route('home') }}" class="link-item">Metapher</a> 
                    <img src="public/markup/img/right-arrow.png">
                    <a href="{{ route('blog') }}" class="link-item">Blog</a> 
                    <img src="public/markup/img/right-arrow.png">
                    <a href="{{ route('blog') }}" class="link-item link-item-category">YouTube</a>
                </div>
            </div>
            <div class="row" style="padding-bottom:50px !important">
                
                <div class="col-md-8 article-wrapper">
                    
                    <h3>Latest Updates by YouTube: What You Need to Know.</h3>
                    <div class="">
                        <img src="public/markup/img/img-pl.jpg">
                    </div>
                    <p>
                        As one of the most popular video-sharing platforms in the world, YouTube is constantly updating its features and policies to better serve its users. Whether you're a content creator or a casual viewer, it's important to stay up-to-date with the latest changes to the platform. In this blog, we'll go over some of the recent updates made by YouTube and how they might impact you.
                    </p>
                        <h5>Removal of Dislike Counts</h5>
                        <p>
                        In November 2021, YouTube removed the public dislike count on videos. This means that viewers can still dislike a video, but the number of dislikes will no longer be publicly visible. According to YouTube, this was done to protect creators from targeted harassment and to promote more constructive feedback. However, some users have expressed concern that it may make it harder to gauge the popularity or quality of a video.
                        </p>
                        <h5>Expanded Monetization Eligibility</h5>
                        <p>    
                        In December 2021, YouTube announced that it was expanding its Partner Program eligibility requirements. Previously, creators needed 4,000 hours of watch time and 1,000 subscribers within the past 12 months to monetize their content. Now, creators can apply for monetization once they reach 1,000 subscribers and 4,000 hours of watch time in their channel's lifetime. This change aims to make it easier for small creators to start earning money from their content.
                        </p>
                        <h5>Improved Copyright Claims System</h5>
                        <p>
                        In February 2022, YouTube announced improvements to its copyright claim system. The changes include more information for creators when they receive a claim, as well as new tools to help them resolve disputes. Additionally, YouTube will be providing more transparency around who is making claims and why. These changes aim to reduce the number of false claims and make the process fairer for creators.
                        </p>
                        <h5>New Video Chapter Feature</h5>
                        <p>
                        In March 2022, YouTube introduced a new feature called Video Chapters. This allows creators to divide their videos into segments with titles and thumbnails, making it easier for viewers to find and skip to the content they're interested in. This feature is available to all creators who upload videos to YouTube, and can be especially helpful for longer videos or tutorials.
                        </p>
                        <h5>Removal of Community Contributions</h5>
                        <p>
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
                    @include('frontend.inc.comment')
                </div>
                <div class="col-sm-4">
                    <div class="sidebar sidebar-article">
                        <div class="changing-responsive"><!----> 
                            <div class="row-desktop">
                            <div class="gray-box top-five">
                                    <p class="title">Top-5 articles</p>
                                    <div class="post-item">
                                        <div class="cat-title">
                                            <a href="{{ route('blog') }}">YouTube</a>
                                        </div>
                                        <div class="post-title">
                                            <a href="{{ route('latest-updates') }}">
                                                Latest Updates by YouTube: What You Need to Know
                                            </a>
                                        </div>
                                        <div class="footer-creds">
                                            27.02.2023 -- 7 min read
                                        </div>
                                    </div> 
                                    <div class="post-item">
                                        <div class="cat-title">
                                            <a href="{{ route('blog') }}">Translate</a>
                                        </div>
                                        <div class="post-title">
                                            <a href="{{ route('revolution') }}">
                                                Preventing YouTube Disasters: Meta Safety's Range of Services for Content Creators
                                            </a>
                                        </div>
                                        <div class="footer-creds">
                                            27.02.2023 -- 7 min read
                                        </div>
                                    </div> 
                                    <div class="post-item">
                                        <div class="cat-title">
                                            <a href="{{ route('blog') }}">Meta Creator</a>
                                        </div>
                                        <div class="post-title">
                                            <a href="{{ route('all-in-one') }}">
                                                The All-in-One Tool for YouTube Content Creators
                                            </a>
                                        </div>
                                        <div class="footer-creds">
                                            10.02.2023 -- 4 min read
                                        </div>
                                    </div> 
                                    <div class="post-item">
                                        <div class="cat-title">
                                            <a href="{{ route('blog') }}">Meta Creator</a>
                                        </div>
                                        <div class="post-title">
                                            <a href="{{ route('earn-more') }}">
                                                How Meta Income Can Help You Earn More
                                            </a>
                                        </div>
                                        <div class="footer-creds">
                                            27.02.2023 -- 7 min read
                                        </div>
                                    </div> 
                                    <div class="post-item">
                                        <div class="cat-title">
                                            <a href="{{ route('blog') }}">Meta Creator</a>
                                        </div>
                                        <div class="post-title">
                                            <a href="{{ route('protect-youtube-channels') }}">
                                                5+ services that help protect YouTube channels and resolve Copyright Strikes
                                            </a>
                                        </div>
                                        <div class="footer-creds">
                                            10.02.2023 -- 4 min read
                                        </div>
                                    </div> 
                                </div> 
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
        font-size: 20px;
        padding-top: 50px;
        line-height: 2rem;
        padding-bottom: 10x;
    }
    .label-default {
        background: #ede9e9;
        border-radius:3px;
        padding: 2px;
        color: black;
        margin-left: 5px;
    }
    h5 {
        margin-top:50px;
    }
   /* sidebar */
   @media (min-width: 1200px){
        .article-wrapper {
            padding-right: 105px;
        }
        .top-five {
            padding-top: 58px;
            padding-bottom: 68px;
            padding-right: 50px;
            margin-bottom: 60px;
        }
        .top-five .title {
            font-size: 24px;
            line-height: 120%;
            margin-bottom: 40px;
        }
    }
    @media (min-width: 768px){
        .top-five .title {
            font-size: 16px;
            line-height: 120%;
            margin-bottom: 16px;
        }
    }
    .sidebar .gray-box {
        position: relative;
    }
    .top-five {
        padding: 43px 0 23px;
    }
    .top-five .title {
        font-size: 26px;
        margin-bottom: 36px;
    }
    .title {
        font-family: Montserrat,sans-serif;
        font-style: normal;
        font-weight: 700;
        color: #1e1e1e;
        font-size: 20px;
        line-height: 120%;
        background-color: transparent;
        text-align: initial;
    }
    .top-five .top-five-items-list {
        padding: 0;
        margin: 0;
    }
    .top-five .top-five-item {
        list-style: none;
        padding: 0;
        margin: 0 0 30px;
    }
    .social-share .social-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 22px;
        padding-bottom: 22px;
    }
    .social-share .social-title {
        font-size: 13px;
        line-height: 120%;
        margin-bottom: 0;
    }
    .social-wrapper .social-panel {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    .social-share .social-panel {
        margin-left: 10px;
    }
</style>
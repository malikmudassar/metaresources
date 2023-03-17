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
                    <a href="{{ route('blog') }}" class="link-item link-item-category">Meta Creators</a>
                </div>
            </div>
            <div class="row" style="padding-bottom:50px !important">
                
                <div class="col-md-8 article-wrapper">
                    
                    <h3>MetaDb: The Ultimate Guide to Finding Your Perfect YouTube Channel.</h3>
                    <div class="">
                        <img src="public/markup/img/img-pl.jpg">
                    </div>
                    <p>
                        YouTube is an enormous platform with countless content creators producing videos on a vast range of topics. With so much content available, it can be challenging to find the channels that align with your interests. Fortunately, MetaDb offers a solution with their IMDb-like platform that catalogues <b>over 1500 YouTube content creators.</b><br><br>
        
                        MetaDb's platform features <b>over 120 categories</b>, allowing users to easily navigate and find content creators that produce videos on topics that interest them. Whether you're looking for channels on cooking, beauty, gaming, or politics, MetaDb has a comprehensive selection of content creators that cater to your interests.<br><br>
                        
                        The platform also offers the unique advantage of organising channels based on their countries and languages. With content creators from <b>over 50 countries</b> and videos in <b>40+ languages</b>, MetaDb ensures that users can explore channels beyond their own borders and connect with creators from different parts of the world.<br><br>
                        
                        What sets MetaDb apart from other platforms is its commitment to providing a comprehensive database of YouTube channels. The team behind the platform works diligently to ensure that users have access to up-to-date information and a wide range of content creators to choose from. With the world's largest database of YouTube channels at your fingertips, you'll never run out of channels to explore.<br><br>
                        
                        With a vast range of content creators from different countries and categories, MetaDb is an excellent resource for anyone looking to discover new YouTube channels. So if you're looking to expand your YouTube horizons, give MetaDb a try and explore the world of YouTube like never before.
                    
                    </p>
                    
                    <div class="mt-5">
                        Keywords: 
                        <span class="label label-default">Metapher</span>
                        <span class="label label-default">MetaDb</span>
                        <span class="label label-default">YouTube</span>
                        <span class="label label-default"> Database </span>
                        <span class="label label-default"> YouTube Channel</span>
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
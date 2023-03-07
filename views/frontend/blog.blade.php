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
	<!-- <div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">Blog Posts</h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play red">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play green">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play yellow">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
	</div> -->
    <div class="b-head text-center"><h2 class="c-white">Blog Posts</h2></div>

    <div class="row">
        <div class="col-md-6">
            <div class="card" style="">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1674763973434-75e1930d4959?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <img src="public/markup/img/clock.png"> August 10th, 2022
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" >
                <img class="card-img-top" src="https://images.unsplash.com/photo-1674758978719-6121d8fbefb4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <img src="public/markup/img/clock.png"> August 10th, 2022
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="https://images.unsplash.com/photo-1674753987419-750e44ba94e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <img src="public/markup/img/clock.png"> August 10th, 2022
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="https://images.unsplash.com/photo-1663177670185-faf2be9f3752?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <img src="public/markup/img/clock.png"> August 10th, 2022
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="https://images.unsplash.com/photo-1674673353760-c86fdc093a56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <img src="public/markup/img/clock.png"> August 10th, 2022
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- FOOTER-SEC ---------------------->

@include('frontend.inc.footer')
<style>
   .card-img-top{
    min-height: 250px;
    max-height: 250px;
    object-fit:cover;
   }
   .row {
    margin-top:20px;
   }
   .card {
    margin:0px; padding:5px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;
   }
</style>
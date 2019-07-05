@extends('frontend.default')
@section('content')

		<!--// Main Banner \\-->
		<div class="sportsmagazine-banner">

            <!--// Slider \\-->
            <div class="sportsmagazine-banner-one">
                <div class="sportsmagazine-banner-one-layer">
                    <img src="{{asset('assetfront/extra-images/banner-1.jpg')}}" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1> Selamat Datang di <strong class="sportsmagazine-color">Persegal Official</strong> </h1>
                                        <p>Website semua tentang informasi persegal.</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sportsmagazine-banner-one-layer">
                    <img src="{{asset('assetfront/extra-images/banner-2.jpg')}}" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1> Selamat Datang di <strong class="sportsmagazine-color">Persegal Official</strong> </h1>
                                        <p>Website semua tentang informasi persegal.</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Slider \\-->
            
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
						
                        <!--// Fixture Slider \\-->
						<div class="col-md-12">
                            <div class="sportsmagazine-fixture-slider">
                                
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 23, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">ARS <span>03</span></li>
                                        <li>CHL <span>02</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 25, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">BRC <span>05</span></li>
                                        <li>RM <span>02</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 28, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">CIT <span>03</span></li>
                                        <li>KIN <span>03</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 31, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">ST <span>00</span></li>
                                        <li>FRA <span>01</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <time datetime="2008-02-14 20:00">September 03, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child"><small>SPA</small> VS <span>RM</span></li>
                                        <li>Full Booked</li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">September 05, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">ARS <span>03</span></li>
                                        <li>CHL <span>02</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <time datetime="2008-02-14 20:00">December 31, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child"><small>SPA</small> VS <span>RM</span></li>
                                        <li>Full Booked</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!--// Fixture Slider \\-->

                        <!--// Content \\-->
                        <div class="col-md-8">
                            
                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Featured News</h2></div> <!--// Fancy Title \\-->
                            <!--// Featured Slider \\-->
                            <div class="sportsmagazine-featured-slider">
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="{{asset('assetfront/extra-images/featured-slider-1.jpg')}}" alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                    <div class="sportsmagazine-featured-caption">
                                        <h2>Fusce at molestie elit, sit amet Curabitur in tellus non risu illa vitae non nunc</h2>
                                        <span class="sportsmagazine-color">03 December 2017 / John Maxwell</span>
                                    </div>
                                </div>
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="{{asset('assetfront/extra-images/featured-slider-2.jpg')}}" alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                    <div class="sportsmagazine-featured-caption">
                                        <h2>Fusce at molestie elit, sit amet Curabitur in tellus non risu illa vitae non nunc</h2>
                                        <span class="sportsmagazine-color">03 December 2017 / John Maxwell</span>
                                    </div>
                                </div>
                            </div>
                            <!--// Featured Slider \\-->

                            <!--// Latest Match Result \\-->
                            <!-- <div class="sportsmagazine-match-result">
                                <div class="sportsmagazine-match-title">
                                    <h4>Latest Match Result</h4>
                                    <span>Saturday, March 24th, 2016</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{asset('assetfront/extra-images/latest-result-logo-1.png')}}" alt="">
                                        <h4><a href="fixture-detail.html">Yorkshire</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                    <li class="sportsmagazine-match-score">
                                        <h5>FINAL SCORE</h5>
                                        <p><strong class="sportsmagazine-color">79</strong> <small>:</small> 73</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assetfront/extra-images/latest-result-logo-2.png')}}" alt="">
                                        <h4><a href="fixture-detail.html">Sharks Club</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                </ul>
                            </div> -->
                            <!--// Latest Match Result \\-->

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Latest News</h2></div> <!--// Fancy Title \\-->
                            <!--// Blog's \\-->
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="blog-detail.html"><img src="{{asset('assetfront/extra-images/latest-blog-1.jpg')}}" alt=""></a>
                                            <figcaption>
                                                <span><small>Featured</small></span>
                                                <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assetfront/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6 sportsmagazine-the-league">
                                        <figure>
                                            <a href="blog-detail.html"><img src="{{asset('assetfront/extra-images/latest-blog-2.jpg')}}" alt=""></a>
                                            <figcaption>
                                                <span><small>The League</small></span>
                                                <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="blog-detail.html">Michael Bryan was chosen as best player with 45 points</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assetfront/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="blog-detail.html"><img src="{{asset('assetfront/extra-images/latest-blog-3.jpg')}}" alt=""></a>
                                                    <figcaption>
                                                        <span><small>The Team</small></span>
                                                        <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="blog-detail.html">The vicotory againts The Shark brings us close to the Final</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                                </section>
                                                <div class="sportsmagazine-blog-grid-options">
                                                    <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assetfront/extra-images/blog-thumb-1.jpg')}}" alt=""> Julia Martyn</a>
                                                    <ul>
                                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                        <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-list">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>The Team</span>
                                                    <h6><a href="blog-detail.html">The victry againts The Shark bring us closer to the Final</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Playoffs</span>
                                                    <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Playoffs</span>
                                                    <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--// Blog's \\-->

                            <!--// Advertisement \\-->
                           <!--  <figure class="sportsmagazine-add-banner">
                                <img src="{{asset('assetfront/extra-images/add-thumb-1.jpg')}}" alt="">
                                <span class="sportsmagazine-add-transparent"></span>
                                <figcaption>
                                    <div class="sportsmagazine-addbanner-caption">
                                        <h2>Take a look at the brand New Uniforms for next season</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Utac malesuada ante. Curabitur lacinia.</p>
                                        <a href="404.html" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                </figcaption>
                            </figure> -->
                            <!--// Advertisement \\-->

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Popular Players</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-player-slider">

                                <div class="sportsmagazine-player-slider-image">
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{asset('assetfront/extra-images/player-slider-image-1.png')}}" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>97</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Micheal Darren</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{asset('assetfront/extra-images/player-slider-image-2.png')}}" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>38</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">sarena Jordan</a></h6>
                                                <small>Defensive</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{asset('assetfront/extra-images/player-slider-image-3.png')}}" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>97</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Micheal Darren</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{asset('assetfront/extra-images/player-slider-image-2.png')}}" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>10</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Chris Marlon</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{asset('assetfront/extra-images/player-slider-image-1.png')}}" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>97</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Micheal Darren</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                </div>

                                <div class="sportsmagazine-player-slider-nav">
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>09</span>
                                        <section>
                                            <h6>Kieron strauss</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>38</span>
                                        <section>
                                            <h6>sarena Jordan</h6>
                                            <small>Defensive</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>97</span>
                                        <section>
                                            <h6>Micheal Darren</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>10</span>
                                        <section>
                                            <h6>Chris Marlon</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>09</span>
                                        <section>
                                            <h6>Kieron strauss</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Club Media</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                <ul>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{asset('assetfront/extra-images/gallery-modren-img1.jpg')}}" class="fancybox"><img src="{{asset('assetfront/extra-images/gallery-modren-img1.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>12 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{asset('assetfront/extra-images/gallery-modren-img2.jpg')}}" class="fancybox"><img src="{{asset('assetfront/extra-images/gallery-modren-img2.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>11 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{asset('assetfront/extra-images/gallery-modren-img3.jpg')}}" class="fancybox"><img src="{{asset('assetfront/extra-images/gallery-modren-img3.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>7 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{asset('assetfront/extra-images/gallery-modren-img4.jpg')}}" class="fancybox"><img src="{{asset('assetfront/extra-images/gallery-modren-img4.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>4 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{asset('assetfront/extra-images/gallery-modren-img5.jpg')}}" class="fancybox"><img src="{{asset('assetfront/extra-images/gallery-modren-img5.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>13 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{asset('assetfront/extra-images/gallery-modren-img6.jpg')}}" class="fancybox"><img src="{{asset('assetfront/extra-images/gallery-modren-img6.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>6 Photos</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--// Content \\-->

                        <!--// SideBaar \\-->
                        <aside class="col-md-4">

                            <!--// Widget Next Match \\-->
                            <div class="widget widget_next_match">
                                <div class="sportsmagazine-fancy-title"><h2>Next Match</h2></div>
                                <div class="widget_next_match_title">
                                    <h5>Liga 3 Zona Jateng</h5>
                                    <span>Saturday, May 17th, 2018</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{asset('assetfront/extra-images/persegal.png')}}" alt="">
                                        <h6><a href="fixture-detail.html">Persegal</a></h6>
                                        <small>Kota Tegal</small>
                                    </li>
                                    <li>
                                        <div class="widget_next_match_option">
                                            <h6>19:00 WIB</h6>
                                            <small>Stadion Yos Sudarso</small>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assetfront/extra-images/widget-next-match-logo-2.png')}}" alt="">
                                        <h6><a href="fixture-detail.html">Combine</a></h6>
                                        <small>ST Paddy's Institute</small>
                                    </li>
                                </ul>
                                
                               
                            </div>
                            <!--// Widget Next Match \\-->

                            
                            <!--// Widget TeamRanking \\-->
                            <div class="widget widget_team_ranking">
                                <div class="sportsmagazine-fancy-title"><h2>Team Rankings</h2></div>
                                <div class="ranking-title-table">
                                    <ul class="ranking-title-row">
                                        <li>Team Rank</li>
                                        <li>M</li>
                                        <li>W</li>
                                        <li>PTS</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>1</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-1.png')}}" alt=""> <div class="ranking-logo"><span>L.A Pirates</span> <small>Bebop Institute</small> </div> </li>
                                        <li>08</li>
                                        <li>08</li>
                                        <li>16</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>2</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-2.png')}}" alt=""> <div class="ranking-logo"><span>Ocean Kings</span> <small>Icarus College</small> </div> </li>
                                        <li>08</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>3</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-3.png')}}" alt=""> <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div> </li>
                                        <li>07</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>4</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-4.png')}}" alt=""> <div class="ranking-logo"><span>Lucky Clovers</span> <small>Elric Bros School</small> </div> </li>
                                        <li>07</li>
                                        <li>06</li>
                                        <li>12</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>5</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-5.png')}}" alt=""> <div class="ranking-logo"><span>Draconians</span> <small>Atlantic School</small> </div> </li>
                                        <li>06</li>
                                        <li>05</li>
                                        <li>10</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>6</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-6.png')}}" alt=""> <div class="ranking-logo"><span>Bloody Wave</span> <small>Marine College</small> </div> </li>
                                        <li>06</li>
                                        <li>04</li>
                                        <li>08</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>7</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-7.png')}}" alt=""> <div class="ranking-logo"><span>Ocean Kings</span> <small>St. Patrick’s Institute</small> </div> </li>
                                        <li>06</li>
                                        <li>04</li>
                                        <li>08</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>8</li>
                                        <li> <img src="{{asset('assetfront/extra-images/ranking-widget-flag-2.png')}}" alt=""> <div class="ranking-logo"><span>Sharks</span> <small>Icarus College</small> </div> </li>
                                        <li>06</li>
                                        <li>02</li>
                                        <li>04</li>
                                    </ul>
                                </div>
                            </div>
                            <!--// Widget TeamRanking \\-->

                            <!--// Widget Popular News \\-->
                            <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
                                    <li>
                                        <span>01</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">Basketball Stadium will a max capacity for 5000 fans</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-injuries">
                                        <span>02</span>
                                        <div class="popular_news_text">
                                            <small>Injuries</small>
                                            <a href="blog-detail.html">The Clovers defense must reinvent itself without</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-theleague">
                                        <span>03</span>
                                        <div class="popular_news_text">
                                            <small>The League</small>
                                            <a href="blog-detail.html">Take look to the brand new helmets for next season</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span>04</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">The Basketball women division started training</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span>05</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->

                            <!--// Widget Trending News \\-->
                            <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Widget Trending News \\-->

                            <!--// Widget Newsletter \\-->
                            <div class="widget widget_newsletter">
                                <div class="sportsmagazine-fancy-title"><h2>Our Newsletter</h2></div>
                                <form>
                                    <label>Subscribe Now</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante.</p>
                                    <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                    <input type="text" value="Enter Your email" onblur="if(this.value == '') { this.value ='Enter Your email'; }" onfocus="if(this.value =='Enter Your email') { this.value = ''; }">
                                    <label class="widget_newsletter_btn"><input type="submit" value="Subscribe"></label>
                                </form>
                            </div>
                            <!--// Widget Newsletter \\-->

                            <!--// Widget Add \\-->
                          <!--   <div class="widget widget_add">
                                <img src="{{asset('assetfront/extra-images/add.jpg')}}" alt="">
                            </div> -->
                            <!--// Widget Add \\-->

                        </aside>
                        <!--// SideBaar \\-->

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		
		<!--// Footer \\-->

  @endsection
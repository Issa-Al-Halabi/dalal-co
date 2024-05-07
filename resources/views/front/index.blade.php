@extends('front.master')

@section('content')

<body>
<div class="preloader">
    <div class="preloader_image"></div>
</div>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <div class="widget widget_search">
        <form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
<div id="box_wrapper">

<!-- template sections -->



<section class="intro_section page_mainslider ls">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img  src="front-assets/images/slide01.jpg"  alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="slide_description_wrapper" style="font-family: cairo light;    direction: rtl;   text-align: right;">
								<div class="slide_description">
									<div class="intro-layer" data-animation="slideExpandUp">
									    <p class="small-text light margin_0">أهلا بك في موقعنا</p>
									    <h1 class="highlight" style="font-family: cairo light;">
										  شركة الاستقدام الافضل<br>
										<h1 style="color: #103e55; font-family: cairo light;"> في سوريا</h1>
									    </h1>
									</div>
									<div class="intro-layer" data-animation="slideExpandUp">
										<p class="light">
										๏	كادر محترف و مدرّب للرد على استفساراتكم على مدار اليوم.										</p>
										<a href="/Order" class="theme_button color1 topmargin_15" style="font-family: cairo light;">الخدمات</a>
									</div>
								</div> <!-- eof .slide_description -->
							</div> <!-- eof .slide_description_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container -->
			</li>

			<li>
				<img src="front-assets/images/slide01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12" style="font-family: cairo light;">
							<div class="slide_description_wrapper"style="font-family: cairo light;    direction: rtl;text-align: right;">>
								<div class="slide_description">
									<div class="intro-layer" data-animation="slideExpandUp" style="    font-family: cairo light;">
									    <p class="small-text light margin_0" style="    font-family: cairo light;">أهلا بك في موقعنا</p>
									    <h1 class="highlight" style="    font-family: cairo light;">
										 شركة الاستقدام الافضل  <br>
										<h1 style="color: #103e55; font-family: cairo light;"> في سوريا</h1>
									    </h1>
									</div>
									<div class="intro-layer" data-animation="slideExpandUp">
										<p class="light">
										๏	عاملات خبيرات و مؤهلات للعناية المنزلية، رعاية الأطفال و رعاية كبار السن.										</p>
										<a href="/Order" class="theme_button color1 topmargin_15"> الخدمات</a>
									</div>
								</div> <!-- eof .slide_description -->
							</div> <!-- eof .slide_description_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container -->
			</li>

			<li>
				<img src="front-assets/images/slide01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="slide_description_wrapper"style="font-family: cairo light;    direction: rtl;
                                                                                                                       text-align: right;">
								<div class="slide_description">
									<div class="intro-layer" data-animation="slideExpandUp">
									    <p class="small-text light margin_0"style="    font-family: cairo light;"> أهلا بك في موقعنا  </p>
										<h1 class="highlight" style="font-family: cairo light;">
										 شركة الاستقدام الافضل
											<h1 style="color: #103e55; font-family: cairo light;"> في سوريا</h1>
                                           </h1>

									</div>
									<div class="intro-layer" data-animation="slideExpandUp">
										<p class="light">
										๏	نقدم لكم أفضل الخدمات في مجال الاستقدام و بأسعار منافسة.										</p>
										<a href="/Order" class="theme_button color1 topmargin_15"> الخدمات</a>
									</div>
								</div> <!-- eof .slide_description -->
							</div>
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container -->
			</li>

		</ul>
	</div> <!-- eof flexslider -->
</section>

<section class="cs contacts teasers-table" style="background: #143d53;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 center_bg phone-teaser">
				<div class="teaser media">
                    <div class="media-left" style="    font-family: cairo light;">
                        <div class="fab fa-whatsapp"style="color: white;     FONT-SIZE: 34px;">
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="small-text margin_0 grey" style="    font-family: cairo light;">لديك سؤال؟ اتصل بنا </p>
                        <h5 class="margin_0 fontsize_25 yantramanav" ><strong>+963-944-941-007</strong></h5>
                    </div>
                </div>
			</div>
			<div class="col-md-4 center_bg working-hours-teaser">
				<div class="teaser media with_border">
                    <div class="media-left">
                        <div class="far fa-clock" style="color: white;     FONT-SIZE: 34px;">
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="small-text margin_0 grey"small-text margin_0 grey>نحن نفتح من السبت إلى للخميس</p>
                        <h5 class="margin_0 fontsize_25 yantramanav"small-text margin_0 grey><strong>10:00 AM - 7:00 PM</strong></h5>
                    </div>
                </div>
			</div>
			<div class="col-md-4 center_bg location-teaser">
				<div class="teaser media">
                    <div class="media-left">
                        <div class="fas fa-map-marker-alt"style="color: white;     FONT-SIZE: 34px;">
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="small-text margin_0 grey"small-text margin_0 grey>بحاجة الى جليسة أطفال! تفضل بزيارتنا الان</p>
                        <h5 class="margin_0 yantramanav fontsize_20"small-text margin_0 grey><strong>أبو رمانة - ساحة المطاعم - دمشق - سوريا</strong></h5>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="ls gallery-section">
	<div class="container-fluid">
		<div class="row columns_padding_0">
			<div class="col-sm-12">
				<div class="owl-carousel" data-margin="0" data-nav="true" data-items="7"
					data-responsive-xlg="7"
					data-responsive-lg="6"
					data-responsive-md="4"
					data-responsive-sm="3"
					data-responsive-xs="1"
				>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/01.jpg" alt="">
						    <div class="media-links" >
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/01.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/03.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/03.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/04.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/04.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/05.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/05.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/06.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/06.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/07.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/07.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/08.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/08.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/09.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/09.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/10.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/10.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/11.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/11.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/12.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/12.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>



			    </div><!-- .owl-carousel -->
			</div>
		</div>
	</div>
</section>

<section class="ls services section_padding_45">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="small-text margin_0" style="    color: #143d53;">شركة خدمات التنظيف المفضلة لديك</p>
                <h2 class="topmargin_10"style="    color: #143d53;     font-family: cairo light;">
				تقديم خدمات تنظيف عالية الجودة<br>
                    <strong class="medium" style="color: #143d53;">بأسعار معقولة</strong>
                </h2>
            </div>
        </div>
        <div class="row topmargin_10">
            <div class="col-md-3">
                <div class="media">
                    <div class="media-left"style="    font-family: cairo light;">

                    </div>
                    <div class="media-body"style="    font-family: cairo light;">
                        <h5 class="text-uppercase inline-block darklinks normal_spacing"><a href="#">

                        </a>
                    </div>
                </div>
                <div class="media"style="    font-family: cairo light;">
                    <div class="media-left">
                        <img class="media-object round" src="front-assets/images/service02.jpg" alt="">
                    </div>
                    <div class="media-body"style="    font-family: cairo light;">
                        <h5 class="text-uppercase inline-block darklinks normal_spacing"style="    font-family: cairo light;" ><a href="#"><strong>خادمة</strong><br> خدمات</a></h5>
                        <a href="#" class="round_button pull-right">
                            <i class="rt-icon2-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="media"style="    font-family: cairo light;">
                    <div class="media-left">

                    </div>
                    <div class="media-body">
                        <h5 class="text-uppercase inline-block darklinks normal_spacing"><a href="#">


                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center center_bg" style="background-image: url(front-assets/images/service-bg.png);">
                <img src="front-assets/images/service-image.png" alt="">
            </div>
            <div class="col-md-3">
                <div class="media">
                    <div class="media-left">
                    </div>
                    <div class="media-body">
                        <h5 class="text-uppercase inline-block darklinks normal_spacing"></h5>

                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object round" src="front-assets/images/service05.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <h5 class="text-uppercase inline-block darklinks normal_spacing" style="    font-family: cairo light;"><a href="#"><strong>خادمة</strong><br> خدمات</a></h5>
                        <a href="#" class="round_button pull-right">
                            <i class="rt-icon2-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                    </div>
                    <div class="media-body">
                        <h5 class="text-uppercase inline-block darklinks normal_spacing"></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls gallery-section">
	<div class="container-fluid">
		<div class="row columns_padding_0">
			<div class="col-sm-12">
				<div class="owl-carousel" data-margin="0" data-nav="true" data-items="7"
					data-responsive-xlg="7"
					data-responsive-lg="6"
					data-responsive-md="4"
					data-responsive-sm="3"
					data-responsive-xs="1"
				>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/01.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/01.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/03.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/03.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/04.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/04.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/05.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/05.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/06.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/06.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/07.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/07.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/08.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/08.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/09.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/09.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/10.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/10.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/11.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/11.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>

			    	<div class="vertical-item">
			    		<div class="item-media">
			    			<img src="front-assets/images/gallery/12.jpg" alt="">
						    <div class="media-links">
						    	<div class="links-wrap">
						    		<a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="front-assets/images/gallery/12.jpg"></a>
						    	</div>
						    	<a class="abs-link" href="gallery-single.html"></a>
						    </div>
			    		</div>
			    	</div>



			    </div><!-- .owl-carousel -->
			</div>
		</div>
	</div>
</section>
<section class="ls testimonials-section section_padding_45">
	<div class="container" >
		<div class="row" style="direction: rtl">
			<div class="col-lg-offset-1 col-lg-10 col-sm-12 text-center">
                <p class="small-text margin_0">عملائنا</p>
                <h2 class="topmargin_10 bottommargin_25" style="  font-family: cairo light;   color: #103e55;">
				ماذا قالوا
                    <strong style="color: #103e55;">عنا</strong>
                </h2>
                <p >
					ابجد ابجد ابجد
                </p>
            </div>
		</div>

		<div class="row columns_padding_0" >
			<div class="col-sm-12">
				<div class="owl-carousel testimonials-owl-carousel" data-margin="30" data-nav="true" data-items="8"
					data-responsive-xlg="3"
					data-responsive-lg="3"
					data-responsive-md="3"
					data-responsive-sm="2"
					data-responsive-xs="1"
				>

			    	<div class="vertical-item text-center" style="direction: rtl; font-family: cairo light;">
			    		<blockquote class="quote-item">
			    		    <div class="quote-body with_border color2 section_bg_color">
			    		        <div class="top-color-border">
			    		        	<div></div>
			    		        </div>
			    		        <p class="grey">
								”.دلالكو هي واحدة من أفضل شركات الاستقدام في سورية، خدماتهم تتميز بالسرعة و المرونة و الاهتمام بالتفاصيل“
			    		        </p>
			    		        <div class="bottom-arrow with_border section_bg_color"></div>
			    		    </div>

			    		    <img src="front-assets/images/face01.jpg" alt="" class="media-object">
			    		    <div class="blockquote-meta" style="    font-family: cairo light;">
			    		        <h5  style="    font-family: cairo light;">د. خليل زريق</h5>
			    		        <span class="small-text"  style="    font-family: cairo light;">طبيب أسنان</span>
			    		    </div>
			    		</blockquote>
			    	</div>

			    	<div class="vertical-item text-center">
			    		<blockquote class="quote-item">
			    		    <div class="quote-body with_border color3 section_bg_color" style="DIRECTION: RTL;">
			    		        <div class="top-color-border">
			    		        	<div></div>
			    		        </div>
			    		        <p class="grey"  style="    font-family: cairo light;">
								”شركة دلالكو هي الشركة الوحيدة التي تقدم خدمات التعاقد الفوري، فلا حاجة للانتظار بعد اليوم ! “.
			    		        </p>
			    		        <div class="bottom-arrow with_border section_bg_color"></div>
			    		    </div>

			    		    <img src="front-assets/images/face02.jpg" alt="" class="media-object">
			    		    <div class="blockquote-meta">
			    		        <h5  style="    font-family: cairo light;">
                                       السيد فراس عيسى  </h5>
			    		        <span class="small-text">عميل دائم </span>
			    		    </div>
			    		</blockquote>
			    	</div>

			    	<div class="vertical-item text-center">
			    		<blockquote class="quote-item">
			    		    <div class="quote-body with_border color1 section_bg_color"  style="DIRECTION: RTL;">
			    		        <div class="top-color-border">
			    		        	<div></div>
			    		        </div>
			    		        <p class="grey"  style="    font-family: cairo light;">
								”أكثر مايميز شركة دلالكو هو متابعتهم لجميع إجراءات الاستقدام من لحظة الوصول إلى لحظة المغادرة“.			    		        </p>
			    		        <div class="bottom-arrow with_border section_bg_color"></div>
			    		    </div>

			    		    <img src="front-assets/images/face03.jpg" alt="" class="media-object">
			    		    <div class="blockquote-meta">
			    		        <h5  style="    font-family: cairo light;">السيدة هلا مراد    </h5>
			    		        <span class="small-text"  style="    font-family: cairo light;">ربة منزل </span>
			    		    </div>
			    		</blockquote>
			    	</div>

			    	<div class="vertical-item text-center">
			    		<blockquote class="quote-item">
			    		    <div class="quote-body with_border color2 section_bg_color" style="direction: rtl">
			    		        <div class="top-color-border">
			    		        	<div></div>
			    		        </div>
			    		        <p class="grey"  style="    font-family: cairo light;">
			    		        	"On the other hand, we denounce with righteous indignation and dislike men so beguiled"
			    		        </p>
			    		        <div class="bottom-arrow with_border section_bg_color"></div>
			    		    </div>

			    		    <img src="front-assets/images/face01.jpg" alt="" class="media-object">
			    		    <div class="blockquote-meta">
			    		        <h5  style="    font-family: cairo light;">Stephen Hill</h5>
			    		        <span class="small-text"  style="    font-family: cairo light;">SEO Analyst</span>
			    		    </div>
			    		</blockquote>
			    	</div>

			    	<div class="vertical-item text-center">
			    		<blockquote class="quote-item">
			    		    <div class="quote-body with_border color3 section_bg_color">
			    		        <div class="top-color-border">
			    		        	<div></div>
			    		        </div>
			    		        <p class="grey"  style="    font-family: cairo light;">
			    		        	"Demoralized by the charms of pleasure of the moment, so blinded by desire"
			    		        </p>
			    		        <div class="bottom-arrow with_border section_bg_color"></div>
			    		    </div>

			    		    <img src="front-assets/images/face02.jpg" alt="" class="media-object">
			    		    <div class="blockquote-meta">
			    		        <h5  style="    font-family: cairo light;">Jacqueline Bowman</h5>
			    		        <span class="small-text"  style="    font-family: cairo light;">Marketing Manager</span>
			    		    </div>
			    		</blockquote>
			    	</div>

			    	<div class="vertical-item text-center">
			    		<blockquote class="quote-item">
			    		    <div class="quote-body with_border color1 section_bg_color">
			    		        <div class="top-color-border">
			    		        	<div></div>
			    		        </div>
			    		        <p class="grey"  style="    font-family: cairo light;">
			    		        	"That they cannot foresee the pain and trouble that are bound to ensue and equal blame"
			    		        </p>
			    		        <div class="bottom-arrow with_border section_bg_color"></div>
			    		    </div>

			    		    <img src="front-assets/images/face03.jpg" alt="" class="media-object">
			    		    <div class="blockquote-meta">
			    		        <h5  style="    font-family: cairo light;">Rafaela Meyers</h5>
			    		        <span class="small-text"  style="    font-family: cairo light;">Director</span>
			    		    </div>
			    		</blockquote>
			    	</div>

			    </div><!-- .owl-carousel -->
			</div>
		</div>

	</div>
</section>

<section  class="section_padding_120 ls contact-section muted_section image-background"style="direction: rtl; ">
	<div style="    display: flex;
    justify-content: center;">
		<h1  style="    color: #103e55;     font-family: cairo light;">اتصــل بنا </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12">
				<form class="contact-form columns_padding_5 row to_animate animated fadeInUp" method="post" action="https://html.modernwebtemplates.com/">


                       
                        <div class="col-sm-6">
                            <p class="contact-form-email">
                                <label for="email" class="sr-only">First name<span class="required">*</span></label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="الأسم الأخير ">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="contact-form-phone">
                                <label for="phone" class="sr-only">Last name<span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="الأسم الأول	 ">
                            </p>
                        </div>
						<div class="col-sm-12">
                            <p class="contact-form-name">
                                <label for="name" class="sr-only"> Email <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="الأيميل ">
                            </p>
                        </div>
						<div class="col-sm-12">
                            <p class="contact-form-name">
                                <label for="name" class="sr-only"> mobile number <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="رقم الهاتف ">
                            </p>
                        </div>
						<div class="col-sm-12">
                            <p class="contact-form-name">
                                <label for="name" class="sr-only">subject  <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder=" موضوع">
                            </p>
                        </div>
                        

                        <div class="col-sm-12">

                            <p class="contact-form-message">
                                <label for="message" class="sr-only">Message</label>
                                <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="رسالة"></textarea>
                            </p>
                        </div>

                        <div class="col-sm-12">

                            <p class="contact-form-submit topmargin_30 bottommargin_0 text-center">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button margin_0 color1">أرسل رسالة</button>
                            </p>
                        </div>


                </form>
			</div>
		</div>
	</div>
</section>
@endsection

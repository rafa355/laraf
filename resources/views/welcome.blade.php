@extends('template.main')

@section('content')
    <!-- main container of all the page elements -->
	<div id="wrapper">

		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- intro block -->
			<section class="intro-block">
				<div class="slider fade-slider">
					<div>
						<!-- intro block slide -->
						<article class="intro-block-slide overlay bg-cover" style="background-image:url({{url('/images/principal.jpg')}})">
							<div class="align-wrap container">
								<div class="align">
									<div class="anim">
										<h1 class="intro-block-heading"> Feliz Aniversario Chaparrita <3</h1>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div>
						<!-- intro block slide -->
						<article class="intro-block-slide overlay bg-cover" style="background-image:url({{url('/images/principal2.jpg')}})">
							<div class="align-wrap container">
								<div class="align">
									<div class="anim">
										<h1 class="intro-block-heading">2 Años de Novios </h1>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div>
						<!-- intro block slide -->
						<article class="intro-block-slide overlay bg-cover" style="background-image:url({{url('/images/principal3.jpg')}})">
							<div class="align-wrap container">
								<div class="align">
									<div class="anim">
										<h1 class="intro-block-heading">Otro Año Más :3</h1>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
				<div class="container">
					<!-- features aside -->
					<aside class="features-aside">
						<a href="#" class="col">
							<span class="icn-wrap text-center no-shrink">
								<img src="images/icon01.svg" width="44" height="43" alt="trophy">
							</span>
							<div class="description">
								<h2 class="features-aside-heading">Para la Mejor Novia del Mundo</h2>
							</div>
						</a>
						<a href="#" class="col">
							<span class="icn-wrap text-center no-shrink">
								<img src="images/icon02.svg" width="43" height="39" alt="computer">
							</span>
							<div class="description">
								<h2 class="features-aside-heading">Esta es Nuestra Pagina Web</h2>
							</div>
						</a>
						<a href="#" class="col">
							<span class="icn-wrap text-center no-shrink">
								<img src="images/icon03.svg" width="43" height="39" alt="computer">
							</span>
							<div class="description">
								<h2 class="features-aside-heading">Nuestros Recuerdos Estaran guardaditos Aquí</h2>
							</div>
						</a>
					</aside>
				</div>
			</section>
			<!-- popular posts block -->
			<section class="popular-posts-block container">
				<header class="popular-posts-head">
					<h2 class="popular-head-heading">Fotos Juntitos :3</h2>
				</header>
				<div class="row">
					<!-- popular posts slider -->
					<div class="slider popular-posts-slider">
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="{{asset('images/pequeno1.jpg')}}" alt="image description">
									</div>
									<h3 class="post-heading text-center"><a href="course-single.html">apaparruchados :3</a></h3>

								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="{{asset('images/pequeno2.jpg')}}" alt="image description">
									</div>

									<h3 class="post-heading text-center"><a href="course-single.html">Cumple de thiago :3</a></h3>

								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="{{asset('images/pequeno3.jpg')}}" alt="image description">
									</div>

									<h3 class="post-heading text-center"><a href="course-single.html">Amurrungaditos :3</a></h3>
								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="{{asset('images/pequeno4.jpg')}}" alt="image description">
									</div>

									<h3 class="post-heading text-center"><a href="course-single.html">Apapachados :3</a></h3>

								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- counter aside -->
			<aside class="bg-cover counter-aside" style="background-image:url({{url('/images/banner1.jpg')}})">
				<div class="container align-wrap">
					<div class="align">
						<div class="row">

						</div>
					</div>
				</div>
			</aside>
			<!-- upcoming events block -->
			<section class="upcoming-events-block container">
				<header class="block-header">
					<div class="pull-left">
						<h2 class="block-header-heading">Nuestra Primera Boda!!</h2>
						<p>La boda de oli te acuerdas? la pasamos muy fino :p</p>
					</div>
				</header>
				<!-- upcoming events list -->
				<ul class="list-unstyled upcoming-events-list">
					<li>
						<div class="alignright">
							<img src="{{asset('images/evento1.jpg')}}" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">01</strong>
								<strong class="month fw-light font-lato">Foto</strong>
								<strong class="day fw-light font-lato">Mordisco</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Me dijiste que tenias hambre y pues...</a></h3>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="{{asset('images/evento2.jpg')}}" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">02</strong>
								<strong class="month fw-light font-lato">foto</strong>
								<strong class="day fw-light font-lato">Robacamaras</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Como los esposos no estaban por alli bueno aprovechamos y pues... foto con la torta!</a></h3>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="{{asset('images/evento3.jpg')}}" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">03</strong>
								<strong class="month fw-light font-lato">foto</strong>
								<strong class="day fw-light font-lato">El Ramo</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Sin palabras...</a></h3>
						</div>
                    </li>
                    <li>
						<div class="alignright">
							<img src="{{asset('images/evento4.jpg')}}" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">04</strong>
								<strong class="month fw-light font-lato">foto</strong>
								<strong class="day fw-light font-lato">Final</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Despues de un largo dia,bastante trabajo todo salio bien y recibí mi premio</a></h3>
						</div>
					</li>
				</ul>
			</section>
			<!-- categories aside -->
			<aside class="bg-cover categories-aside text-center" style="background-image:url({{url('/images/banner2.jpg')}})">
				<div class="container holder">
					<!-- categories list -->
					<ul class="list-unstyled categories-list" style="padding:50px">

					</ul>
				</div>
			</aside>

			<!-- testimonials block -->
			<section class="testimonials-block text-center bg-gray" style="background-image: url(images/bg-pattern01.png);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<h2>Eventos para Recordar</h2>
							<!-- testimonail slider -->
							<div class="slick-slider slider testimonail-slider">
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-roboto">
										<p>“ Compramos un telefono por internet y cuando llego no queria prender, esta foto es la cara mientras revisaban la bateria.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="{{asset('images/slider1.jpg')}}" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h">Laurimar Diaz-<span class="text-gray"> Traumada</span></strong>
										</cite>
									</blockquote>
								</div>
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-roboto">
										<p>“ Depues de 5 años usando frenillos al fin le tocaba quitarselos, miren la felicidad en sus dientes.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="{{asset('images/slider2.jpeg')}}" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h">Laurimar Diaz -<span class="text-gray"> Sin Frenillos</span></strong>
										</cite>
									</blockquote>
								</div>
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-roboto">
										<p>“ Queria cortarse el cabello y despues de mucho pedir le cumpli su deseo, que tal quedo?.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="{{asset('images/slider3.jpg')}}" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h">Laurimar Diaz -<span class="text-gray"> Nuevo Look</span></strong>
										</cite>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- news block -->
			<section class="news-block container">
				<header class="seperator-head text-center">
					<h2>Cumpleaños Juntitos!</h2>
					<p>Han sido pocos pero muy lindos :3</p>
				</header>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- news post -->
						<article class="news-post">
							<div class="aligncenter">
								<a href="blog-single.html"><img src="{{asset('images/cumple1.jpg')}}" alt="image desciption"></a>
							</div>
							<h3><a href="blog-single.html">El primero siempre sale feo.</a></h3>
							<p>En este recuerdo que me moje, no conseguiamos harina, a thiago le compramos una galleta, tu querias comer pizza , y muchas cosas desastrozas mas, al final, todo salio bien y yo termine usando ropa de victor xD</p>
							<time datetime="2011-01-12" class="time text-uppercase text-gray">Septiembre 23,2017  by <a href="blog-single.html">Tu novio</a></time>
						</article>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- news post -->
						<article class="news-post">
							<div class="aligncenter">
								<a href="blog-single.html"><img src="{{asset('images/cumple2.jpg')}}" alt="image desciption"></a>
							</div>
							<h3><a href="blog-single.html">El segundo siempre es planificado.</a></h3>
							<p>En este tuvimos 2 semana planificandolo y todo salio de acuerdo al plan (por lo menos XD).</p><br><br>
							<time datetime="2011-01-12" class="time text-uppercase text-gray">Septiembre 23,2017  by <a href="blog-single.html">Tu novio</a></time>
						</article>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- news post -->
						<article class="news-post">
							<div class="aligncenter">
								<a href="blog-single.html"><img src="{{asset('images/cumple3.jpg')}}" alt="image desciption"></a>
							</div>
							<h3><a href="blog-single.html">Lo mas bello en la vida cumpliendo año.</a></h3>
							<p>Aún estabamos en la universidad, me picaron una torta de chocolate,rellena de chocolate y cubierta de chocolate, y tu usando tu camisa de siempre :3.</p>
							<time datetime="2011-01-12" class="time text-uppercase text-gray">Mar 05,2017  by <a href="blog-single.html">andrew caset</a></time>
						</article>
					</div>
				</div>
			</section>

		</main>
		<!-- footer area container -->
		<div class="footer-area bg-dark text-gray">
			<!-- aside -->
			<aside class="aside container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col text-center">
                        <h1 style="color:white">!! Feliz Aniversario !!</h1>
                        <img src="{{asset('images/footer.jpg')}}" alt="" style="border-radius:25px;height:150px">
                    </div>

				</div>
			</aside>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center fa fa-caret-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="images/svg/hearts.svg" width="100" alt="loader"></div>
		</div>
	</div>
	<div class="popup-holder">
		<div id="popup1" class="lightbox-demo">
			<form action="#" class="user-log-form">
				<h2>Login Form</h2>
				<div class="form-group">
					<input type="text" class="form-control element-block" placeholder="Username or email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" placeholder="Password *">
				</div>
				<div class="btns-wrap">
					<div class="wrap">
						<label for="rem" class="custom-check-wrap fw-normal font-lato">
							<input type="checkbox" id="rem" class="customFormReset">
							<span class="fake-label element-block">Remember me</span>
						</label>
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Login</button>
					</div>
					<div class="wrap text-right">
						<p>
							<a href="#" class="forget-link">Lost your Password?</a>
						</p>
					</div>
				</div>
			</form>
		</div>
		<div id="popup2" class="lightbox-demo">
			<form action="#" class="user-log-form">
				<h2>Register Form</h2>
				<div class="form-group">
					<input type="email" class="form-control element-block" placeholder="Email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" placeholder="Password *">
				</div>
				<div class="btns-wrap">
					<div class="wrap">
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Register</button>
					</div>
				</div>
			</form>
		</div>
    </div>
@endsection
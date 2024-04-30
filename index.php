<!doctype html>
<html lang="en">

<head>
	<title>PROJECT MANAGEMENT AND CONSULTANCY</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/61d60b83f4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="./assets/css/style.css">
	<style>
		.blog {
			background-color: black;
			color: white;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: 300;
			padding-top: 2rem;
			padding-bottom: 2rem;


			h1,
			h2,
			a {
				font-family: "Montserrat", sans-serif;
				text-transform: uppercase;
			}

			h1,
			h2 {
				margin-top: 0;
				letter-spacing: 0.2em;
			}

			h1 {
				margin-bottom: 3rem;
				text-align: center;
			}

			h2 {
				font-size: 1.2em;
			}

			a {
				text-decoration: none;
				color: #b4a677;
			}

			a:hover {
				color: #d6c385;
			}

			ul {
				list-style: none;
				padding: 0;
			}

			img {
				width: 100%;
			}

			.container {
				width: calc(100% - 48px);
				margin-left: auto;
				margin-right: auto;
			}

			.post+.post {
				margin-top: 2rem;
			}

			.post__excerpt {
				position: relative;
			}

			.card {
				background-color: #dcdcdc;
				padding: 2rem;
			}

			.card:before {
				content: "";
				display: block;
				width: 20px;
				height: 20px;
				background-color: #00984a;
				position: absolute;
				transform: rotate(45deg);
				bottom: -10px;
			}

			.card__header {
				padding-bottom: 1rem;
				border-bottom: 1px solid white;
			}

			.card__date {
				text-transform: uppercase;
				letter-spacing: 0.3em;
			}

			@media (min-width: 768px) {
				.container {
					width: 60%;
				}

				.post {
					display: flex;
					align-items: center;
				}

				.post__excerpt {
					width: 45%;
				}

				.post__image {
					width: 55%;
				}

				.post:nth-child(odd) .post__excerpt {
					margin-right: -4rem;
				}

				.post:nth-child(odd) .card:before {
					right: -10px;
				}

				.post:nth-child(odd) .card__header,
				.post:nth-child(odd) .card__cta {
					text-align: right;
				}

				.post:nth-child(even) .post__excerpt {
					order: 1;
					margin-left: -4rem;
				}

				.post:nth-child(even) .card:before {
					left: -10px;
				}

				.card:before {
					bottom: auto;
				}
			}
		}
	</style>
</head>

<body>
	<?php
	include_once './header.php';
	?>
	<carousel>
		<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000" style="background-image: url('./assets/img/hero_bg_2_1.png');">
					<img src="./assets/img/hero_overlay_2.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-light text-start" style="margin-bottom: 200px !important;">
						<span class="fs-1  slideFont text-orange">Revolutionizing Software Education</span>
						<p class="ms-3 mt-2">We Lead the Way in Innovative Learning Approaches.</p>
					</div>
				</div>
				<div class="carousel-item active" data-bs-interval="10000" style="background-image: url('./assets/img/hero_bg_2_1.png');">
					<img src="./assets/img/hero_overlay_2.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-light text-start" style="margin-bottom: 200px !important;">
						<span class="fs-1  slideFont text-orange">Breaking Barriers</span>
						<p class="ms-3 mt-2">We Put Our Best Efforts in Redefining Software Engineering Education to Match with Industry Requirements. </p>
					</div>
				</div>
				<div class="carousel-item active" data-bs-interval="10000" style="background-image: url('./assets/img/hero_bg_2_1.png');">
					<img src="./assets/img/hero_overlay_2.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-light text-start" style="margin-bottom: 200px !important;">
						<span class="fs-1  slideFont text-orange">Forging the Future</span>
						<p class="ms-3 mt-2">We Want to Play a Pivotal Role in Bridging the Industry's Knowledge Gap.</p>
					</div>
				</div>
				<!-- <div class="carousel-item active" data-bs-interval="10000" style="background-image: url('./assets/img/hero_bg_2_1.png');">
					<img src="./assets/img/hero_overlay_2.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-light text-start" style="margin-bottom: 200px !important;">
						<span class="fs-1 philosopher-regular text-orange">We are pioneers in </span>
						<h1 class="pt-3 philosopher-regular"> <span class="fw-bold" style="color:#00984a;"> - </span> Project Management <br> <span class="fw-bold" style="color:#00984a;"> - </span> Engineering Consultancy<br>
							<span class="fw-bold" style="color:#00984a;"> - </span> Technical Training
						</h1>
					</div>
				</div> -->
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</carousel>
	<describe>
		<div class="container py-5">
			<div class="row">
				<div class="col-md-6 py-3">
					<img src="./assets/img/wcu_2_1.png" class="img-fluid" alt="">
				</div>
				<div class="col-md-6 py-3">
					<p class="fs-3 text-orange">Bride Your Intelligence to a Software Career: </p>
					<h1 class="text-uppercase philosopher-regular" style="color:#233857; text-align:justify;">No Degree Required </h1>
					<p class="text-muted">
						At iCET, we firmly believe that the path to becoming a successful software engineer doesn't necessarily require a traditional degree.
						<br>
						Our programs are designed to provide individuals with the knowledge, skills, and practical experience needed to excel in the field of software engineering, regardless of their educational background.
						<br>
						We recognize that intelligence, passion, and dedication are far more important than a piece of paper, and our curriculum is tailored to unlock the full potential of every student, regardless of their academic history.
						Hands on Project Exposure
						<br>
						We recognize that the traditional path to a software engineering career may not suit everyone. That's why we offer a dynamic approach that goes beyond the confines of traditional degree requirements.
						<br>
						Through hands-on projects, immersive real-world experiences, and personalized guidance from industry professionals, we mentor individuals to develop the skills and confidence needed to thrive in the software engineering field.
						<br>
						With iCET, you can start your software engineering journey knowing that your success is determined by your passion, dedication, and ability to adapt, rather than by traditional academic credentials alone.
						<br>
						Our programs are designed to guide students from all backgrounds to pursue a career in software engineering with confidence and competence, setting them on a path to success in this rapidly evolving industry.
					</p>

				</div>
			</div>
		</div>
		<!-- <div class="container-fluid mb-5">
			<div class="row">
				<div class="container-fluid" style="background-color: #00984a;">
					<div class="row">
						<div class="col-md-12"> <br> </div>
					</div>
				</div>
				<div class="col-md-9 p-4" style="background-color:#1B4F72;">
					<img src="./assets/img/iCETlogowhite.png" width="130px" class="my-3" alt="Software Engineering Node Courses">
					<span class="fw-bold" style="color:#A6ACAF;">Embarking on a Path of Excellence:</span>
					<h3 class="text-warning">A Glimpse into the iCET Leadership+ Experience</h3>
					<small class="text-light">At iCET, we don't just offer courses; we pave the way for a transformative journey. Our Leadership+ program goes beyond conventional learning, cultivating skills that extend far into the realm of leadership. As you traverse this educational landscape, expect more than just knowledge — anticipate a holistic experience that nurtures qualities essential for leadership in the dynamic world of technology. Join us at iCET as we redefine the trajectory of your educational journey and empower you not just to learn but to lead</small>
				</div>
				<div class="col-md-3 p-4" style="background-color:#1B4F72;">
				</div>
				<div class="col-md-4 py-5 px-5" style="background-color: #1E8449;">
            <img src="./assets/img/iCETlogowhite.png" width="130px" class="my-3 d-inline" alt="Software Engineering Node Courses">
            <a href="https://icetlms.lk/login/index.php" class="d-inline ms-5" style="text-decoration: none; ">
               <button class="btn bg-light pt-3"> <h3 class="fw-bold text-success">Apply to iCET</h3></button>
            </a>
        </div> 
			</div>
		</div> -->
		<main class="py-5">

			<main class="responsive-wrapper">
				<div class="page-title">
					<h1>Latest Updates</h1>
				</div>
				<div class="magazine-layout">
					<div class="magazine-column">
						<article class="article">
							<h2 class="article-title article-title--large">
								<a href="#" class="article-link">The First Signs of <mark class="mark mark--primary">Alcoholic Liver</mark> Damage Are Not in the Liver</a>
							</h2>
							<div class="article-excerpt">
								<p>The combination of my father's death and my personal back ground lit a fire in me to know more</p>
								<p>He was admitted to the hospital on June 24, 2016.
							</div>
							<div class="article-author">
								<div class="article-author-img">
									<img src="https://assets.codepen.io/285131/author-3.png" />
								</div>
								<div class="article-author-info">
									<dl>
										<dt>David Sherof</dt>
										<dd>Reporter</dd>
									</dl>
								</div>
							</div>
						</article>
						<article class="article">
							<h2 class="article-title article-title--medium">
								<a href="#" class="article-link">The Founder's Guide to Actually Understanding Users Nowadays</a>
							</h2>
							<div class="article-creditation">
								<p>By Johnathan O'Connell, Andrew Van Dam, Aaron Gregg and Alyssa Fowers</p>
							</div>
						</article>
					</div>
					<div class="magazine-column">
						<article class="article">
							<figure class="article-img">
								<img src="./assets/img/StudentSupportServices.webp" />
							</figure>
							<h2 class="article-title article-title--medium">
								<a href="#" class="article-link">How 7 Lines of Code Turned Into a $36 Billion Empire</a>
							</h2>
							<div class="article-excerpt">
								<p>Yeah, it's safe to say these guys have a great sense of humor, which isn't really suprising for us considering their seemingly absurd solution to online payments. Instead of chasing 1000-hour programming contracts to build clunky payments solutions for each individual client, the Collison...</p>
							</div>
							<div class="article-author">
								<div class="article-author-img">
									<img src="https://assets.codepen.io/285131/author-2.png" />
								</div>
								<div class="article-author-info">
									<dl>
										<dt>James Robert</dt>
										<dd>Editor</dd>
									</dl>
								</div>
							</div>
						</article>
					</div>
					<div class="magazine-column">
						<article class="article">
							<figure class="article-img">
								<img src="https://images.unsplash.com/photo-1512521743077-a42eeaaa963c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" />
							</figure>
							<h2 class="article-title article-title--small">
								<a href="#" class="article-link">To Become <mark class="mark mark--secondary">Happier</mark>, Ask Yourself These Two Questions Every Night</a>
							</h2>
							<div class="article-creditation">
								<p>By Jonathan O'Connell</p>
							</div>
						</article>
						<article class="article">
							<figure class="article-img">
								<img src="./assets/img/Highly-Qualified-Faculty.webp" />
							</figure>
							<h2 class="article-title article-title--small">
								<a href="#" class="article-link">10 Things I Stole From People Smarter Than Me</a>
							</h2>
							<div class="article-creditation">
								<p>By Jonathan O'Connell</p>
							</div>
						</article>
					</div>
					<div class="magazine-column">
						<article class="article">
							<h2 class="article-title article-title--medium">
								<a href="#" class="article-link">Traveller Visiting Ice Cave With Amazing Eye-Catching Scenes</a>
							</h2>
							<div class="article-excerpt">
								<p>Slack has become indispensible for many businesses operation remotely during the pandemic. Here's what the acquisition could mean for users...</p>
							</div>
							<div class="article-author">
								<div class="article-author-img">
									<img src="https://assets.codepen.io/285131/author-2.png" />
								</div>
								<div class="article-author-info">
									<dl>
										<dt>James Robert</dt>
										<dd>Editor</dd>
									</dl>
								</div>
							</div>
						</article>
						<article class="article">
							<small class="article-category">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="22" viewBox="0 0 28 22">
									<defs>
										<clipPath id="clip-headphones">
											<rect width="28" height="22" />
										</clipPath>
									</defs>
									<g id="headphones" clip-path="url(#clip-headphones)">
										<g id="Group_2" data-name="Group 2" transform="translate(-3680 -609)">
											<path id="Subtraction_1" data-name="Subtraction 1" d="M5,12H5A5.274,5.274,0,0,1,0,6.5,5.274,5.274,0,0,1,5,1V12Z" transform="translate(3680 619)" />
											<rect id="Rectangle_18" data-name="Rectangle 18" width="2" height="11" transform="translate(3686 620)" />
											<path id="Subtraction_5" data-name="Subtraction 5" d="M1.243,12H.045C.015,11.67,0,11.334,0,11A11,11,0,0,1,18.778,3.222,10.925,10.925,0,0,1,22,11c0,.331-.015.667-.045,1h-1.2a14.108,14.108,0,0,0-2.685-6.241A8.982,8.982,0,0,0,11,2,8.982,8.982,0,0,0,3.929,5.759,14.109,14.109,0,0,0,1.243,12Z" transform="translate(3683 609)" />
											<path id="Subtraction_6" data-name="Subtraction 6" d="M5,0H5A5.274,5.274,0,0,0,0,5.5,5.274,5.274,0,0,0,5,11V0Z" transform="translate(3708 631) rotate(180)" />
											<rect id="Rectangle_23" data-name="Rectangle 23" width="2" height="11" transform="translate(3700 620)" />
											<path id="Path_8" data-name="Path 8" d="M.156-.031,2.125-1.687,2,2H0Z" transform="translate(3683 619)" />
											<path id="Path_9" data-name="Path 9" d="M1.969-.031,0-1.687.125,2h2Z" transform="translate(3702.875 619)" />
										</g>
									</g>
								</svg>
								<span>Post Reports / Podcast</span>
							</small>
							<h2 class="article-title article-title--medium">
								<a href="#" class="article-link">Things to Do After 6 P.M Will Enrich <mark class="mark mark--tertiary">Your Life</mark></a>
							</h2>
							<div class="article-podcast-player">
								<button class="podcast-play-button">
									<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
										<rect width="256" height="256" fill="none"></rect>
										<path d="M232.3125,114.34375,88.34375,26.35937A15.99781,15.99781,0,0,0,64,40.00781V215.99219a16.00521,16.00521,0,0,0,24.34375,13.64843L232.3125,141.65625a16.00727,16.00727,0,0,0,0-27.3125Z"></path>
									</svg>
								</button>
								<div class="podcast-progression">

								</div>
								<span class="podcast-time">23:45</span>
							</div>
							<div class="article-podcast-info">
								Apple Podcasts, Google Podcasts, Stitcher
							</div>
							<div class="article-author">
								<div class="article-author-img">
									<img src="https://assets.codepen.io/285131/author-3.png" />
								</div>
								<div class="article-author-info">
									<dl>
										<dt>David Sherof</dt>
										<dd>Reporter</dd>
									</dl>
								</div>
							</div>
						</article>
					</div>
				</div>
			</main>
		</main>
		<div class="container-fluid" style="background-color: #00984a;">
			<div class="row">
				<div class="col-md-12"> <br> </div>
			</div>
		</div>
		<?php
		//include_once './includes/services.php';
		?>
		<div class="py-5" style="background-color: #233857;">
			<!-- <div class="container">
				<div class="row px-2 mb-2">
					<div class="col-md-3 pt-2 bg-success border-success border-2 border-bottom">
						<h5 class="text-light text-uppercase">Best Reasons to Join Us</h5>
					</div>
					<div class="col-md-9 border-success border-2 border-bottom">

					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-4 g-4">
					<div class="col">
						<div class="card">
							<img src="./assets/img/Highly-Qualified-Faculty.jpg" class="card-img-top p-2" style="border-radius: 15px;" alt="...">
							<div class="card-body">
								<h5 class="card-title px-3 py-1 text-white" style="background-color: #233857; border-radius:10px;">Card title</h5>
								<img src="./Rectangle 7.svg" class="img-fluid w-50" alt="">
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="text-end text-muted text-uppercase text-dark mt-3"><a href="./services.php#" class="text-orange btn btn-sm">more
										+</a></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="./assets/img/StudentSupportServices.webp" class="card-img-top p-2" style="border-radius: 15px;" alt="...">
							<div class="card-body">
								<h5 class="card-title px-3 py-1 text-white" style="background-color: #233857; border-radius:10px;">Card title</h5>
								<img src="./Rectangle 7.svg" class="img-fluid w-50" alt="">
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="text-end text-muted text-uppercase text-dark mt-3"><a href="./services.php#" class="text-orange btn btn-sm">more
										+</a></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="./assets/img/Up-to-date-Curriculum.jpg" class="card-img-top p-2" style="border-radius: 15px;" alt="...">
							<div class="card-body">
								<h5 class="card-title px-3 py-1 text-white" style="background-color: #233857; border-radius:10px;">Card title</h5>
								<img src="./Rectangle 7.svg" class="img-fluid w-50" alt="">
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="text-end text-muted text-uppercase text-dark mt-3"><a href="./services.php#" class="text-orange btn btn-sm">more
										+</a></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="./assets/img/StudentFriendlyCulture.webp" class="card-img-top p-2" style="border-radius: 15px;" alt="...">
							<div class="card-body">
								<h5 class="card-title px-3 py-1 text-white" style="background-color: #233857; border-radius:10px;">Card title</h5>
								<img src="./Rectangle 7.svg" class="img-fluid w-50" alt="">
								<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="text-end text-muted text-uppercase text-dark mt-3"><a href="./services.php#" class="text-orange btn btn-sm">more
										+</a></div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="container my-5">
				<div class="row px-2 mb-2">
					<div class="col-md-3 pt-2 bg-success border-success border-2 border-bottom">
						<h5 class="text-light text-uppercase pt-2">Best Reasons to Join Us</h5>
					</div>
					<div class="col-md-9 border-success border-2 border-bottom">

					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-4 g-4">
					<div class="col">
						<div class="py-1">
							<img src="./assets/img/Highly-Qualified-Faculty.webp" class="card-img-top" alt="Software Engineering Courses">
							<div class="py-2 ">
								<h5 class="card-title text-eco mt-3  fw-bold fs-6 text-uppercase mt-1">Highly Qualified Faculty</h5>
								<p class="text-light mt-3 pb-3 card-bdy" style="font-size: 14px; text-align: justify;">Selected for their academic prowess and professional experience, the lecturers & instructors at iCET impart both theoretical knowledge and real-world insights. Their dynamic approach at training, fosters creativity and critical thinking, preparing potential software engineers for complex challenges.
								</p>
								<!-- <div class="py-3 d-none d-sm-block"></div> -->
								<!-- <div class="text-end text-light text-uppercase mt-1"><a href="./services.php#" class="text-eco btn btn-sm">more +</a></div> -->
							</div>
						</div>
					</div>
					<div class="col">
						<div class="py-1">
							<img src="./assets/img/Up-to-date-Curriculum.webp" class="card-img-top" alt="Software Engineering Classes">
							<div class="py-2 ">
								<h5 class="card-title fw-bold mt-3 fs-6 text-eco text-uppercase mt-1">Up-to-date Curriculum</h5>
								<p class="text-light mt-3 pb-3 card-bdy" style="font-size: 14px; text-align: justify;">iCET, standing at the forefront of educational excellence, distinguishes itself by its commitment to consistently feature updated curricula, adjusted to align with the most recent industry trends. With a visionary approach, iCET consistently reevaluates and refines its curricula to ensure that students are equipped with the most pertinent and up-to-date knowledge and skills.

								</p>
								<!-- <div class="py-3 d-none d-sm-block"></div> -->
								<!-- <div class="text-end text-light text-uppercase mt-1"><a href="./services.php#" class="text-eco btn btn-sm">more +</a></div> -->
							</div>
						</div>
					</div>
					<div class="col">
						<div class="py-1">
							<img src="./assets/img/StudentSupportServices.webp" class="card-img-top" alt="Softeware Engineering Training">
							<div class="py-2 ">
								<h5 class="card-title text-eco fw-bold mt-3 fs-6 text-uppercase mt-1">Student Support Services
								</h5>
								<p class="text-light mt-3 pb-3 card-bdy" style="font-size: 14px; text-align: justify;">From enrolment till program completion, students are offered a helping hand to ensure they have a positive experience while navigating their path. One of the key aspects of this support system is the establishment of a dedicated Help Desk. This Help Desk serves as a central hub for students to seek assistance, guidance, and connect with their peers.

								</p>
								<!-- <div class="py-3 d-none d-sm-block"></div> -->
								<!-- <div class="text-end text-light text-uppercase mt-1"><a href="./services.php#" class="text-eco btn btn-sm">more +</a></div> -->
							</div>
						</div>
					</div>
					<div class="col">
						<div class="py-1">
							<img src="./assets/img/StudentFriendlyCulture.webp" class="card-img-top" alt="Software Engineering Degree">
							<div class="py-2">
								<h5 class="card-title fw-bold fs-6 mt-3 text-eco text-uppercase mt-1">Student Friendly Culture </h5>
								<p class="text-light mt-3 pb-3 card-bdy" style="font-size: 14px; text-align: justify;">Selected for their academic prowess and professional experience, the lecturers & instructors at iCET impart both theoretical knowledge and real-world insights. Their dynamic approach at training, fosters creativity and critical thinking, preparing potential software engineers for complex challenges.
								</p>
								<!-- <div class="py-3 d-none d-sm-block"></div> -->
								<!-- <div class="text-end text-light text-uppercase mt-1"><a href="./services.php#" class="text-eco btn btn-sm">more +</a></div> -->
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</describe>

	<blog>
		<!-- blog -->
		<div class="blog">
			<div class="container py-5">
				<h1>Latest blog posts</h1>

				<ul>
					<li class="post">
						<div class="post__excerpt card">
							<header class="card__header">
								<h2>Node.js 22 is now available!</h2>
								<time class="card__date" datetime="2018-08-26">Apr 24, 2024</time>
							</header>
							<p class="mt-2">We're excited to announce the release of Node.js 22! Highlights include require()ing ES modules, a WebSocket client, updates of the V8 JavaScript engine, and more!</p>
							<div class="card__cta">
								<a href="#">Read more</a>
							</div>
						</div>
						<img class="post__image" src="./assets/img/node.png" alt="">
					</li>
					<li class="post">
						<div class="post__excerpt card">
							<header class="card__header">
								<h2>Has Angular Js reached the end of life? What is next? </h2>
								<time class="card__date" datetime="2022-03-22">Mar 22, 2022</time>
							</header>
							<p class="mt-2">Released by Google in 2010, AngularJS reached end-of-life (EOL) status on December 31, 2021. </p>
							<div class="card__cta">
								<a href="#">Read more</a>
							</div>
						</div>
						<img class="post__image" src="./assets/img/Angular_Banner.jpg" alt="">
					</li>
				</ul>
			</div>
		</div>
		<!-- end -->
	</blog>
	<?php
	include_once './footer.php';
	?>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script>
		$("li").hover(
			function() {
				$(this).find("span").stop().animate({
					width: "100%",
					opacity: "1",
				}, 400, function() {})
			},
			function() {
				$(this).find("span").stop().animate({
					width: "0%",
					opacity: "0",
				}, 400, function() {})
			}
		);
	</script>
</body>

</html>
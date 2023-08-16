<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/use.fontawesome.com/releases/v5.7.0/css/all.css">
	<title>
		<?php echo $pageTitle; ?> || The Science School
	</title>
	<meta name='robots' content='max-image-preview:large' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="alternate" type="application/rss+xml" title="The Science School &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="The Science School &raquo; Comments Feed" href="comments/feed/index.html" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/thescienceschool.edu.pk\/tsswp\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"
			}
		};
		/*! This file is auto-generated */
		! function(i, n) {
			var o, s, e;

			function c(e) {
				try {
					var t = {
						supportTests: e,
						timestamp: (new Date).valueOf()
					};
					sessionStorage.setItem(o, JSON.stringify(t))
				} catch (e) {}
			}

			function p(e, t, n) {
				e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
				var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
				return t.every(function(e, t) {
					return e === r[t]
				})
			}

			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
					case "emoji":
						return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
				}
				return !1
			}

			function f(e, t, n) {
				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
					a = r.getContext("2d", {
						willReadFrequently: !0
					}),
					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
				return e.forEach(function(e) {
					o[e] = t(a, e, n)
				}), o
			}

			function t(e) {
				var t = i.createElement("script");
				t.src = e, t.defer = !0, i.head.appendChild(t)
			}
			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, e = new Promise(function(e) {
				i.addEventListener("DOMContentLoaded", e, {
					once: !0
				})
			}), new Promise(function(t) {
				var n = function() {
					try {
						var e = JSON.parse(sessionStorage.getItem(o));
						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
					} catch (e) {}
					return null
				}();
				if (!n) {
					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
							r = new Blob([e], {
								type: "text/javascript"
							}),
							a = new Worker(URL.createObjectURL(r), {
								name: "wpTestEmojiSupports"
							});
						return void(a.onmessage = function(e) {
							c(n = e.data), a.terminate(), t(n)
						})
					} catch (e) {}
					c(n = f(s, u, p))
				}
				t(n)
			}).then(function(e) {
				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
					n.DOMReady = !0
				}
			}).then(function() {
				return e
			}).then(function() {
				var e;
				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
			}))
		}((window, document), window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='pa-frontend-css' href='wp-content/uploads/premium-addons-elementor/pa-frontend-78d006582.minc28a.css?ver=1691696764' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minf801.css?ver=6.3' type='text/css' media='all' />
	<link rel='stylesheet' id='pa-frontend-css' href='wp-content/uploads/premium-addons-elementor/pa-frontend-c968aad59.mine530.css?ver=1691696517' type='text/css' media='all' />
	<link rel='stylesheet' id='classic-theme-styles-inline-css' href='assets/css/classic-theme-styles-inline-css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='global-styles-inline-css' href='assets/css/global-styles-inline-css/style-inline.css' type='text/css' media='all' />
	<link rel='stylesheet' id='wpos-magnific-style-css' href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/magnific-popup1f22.css?ver=1.6.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wpos-slick-style-css' href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/slick1f22.css?ver=1.6.2' type='text/css' media='all' />
	<link rel='stylesheet' id='aigpl-public-css-css' href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/aigpl-public1f22.css?ver=1.6.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wpfront-scroll-top-css' href='wp-content/plugins/wpfront-scroll-top/css/wpfront-scroll-top.minb0d2.css?ver=2.0.4.04013' type='text/css' media='all' />
	<link rel='stylesheet' id='htbbootstrap-css' href='wp-content/plugins/ht-mega-for-elementor/assets/css/htbbootstrap001e.css?ver=2.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
	<link rel='stylesheet' id='htmega-animation-css' href='wp-content/plugins/ht-mega-for-elementor/assets/css/animation001e.css?ver=2.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='htmega-keyframes-css' href='wp-content/plugins/ht-mega-for-elementor/assets/css/htmega-keyframes001e.css?ver=2.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-style-css' href='wp-content/themes/education-insight/assets/css/bootstrapf801.css?ver=6.3' type='text/css' media='all' />
	<link rel='stylesheet' id='chld_thm_cfg_parent-css' href='wp-content/themes/education-insight/stylef801.css?ver=6.3' type='text/css' media='all' />
	<link rel='stylesheet' id='education-insight-fonts-css' href='http://fonts.googleapis.com/css?family=Roboto%20Slab%3Awght%40100%3B200%3B300%3B400%3B500%3B600%3B700%3B800%3B900%7CRoboto%3Aital%2Cwght%400%2C100%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C700%3B0%2C900%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C700%3B1%2C900' type='text/css' media='all' />
	<link rel='stylesheet' id='education-insight-style-css' href='wp-content/themes/education-insight-child03/style03a8.css?ver=0.2.6.1617949470' type='text/css' media='all' />
	<style id='education-insight-style-inline-css' type='text/css'>
		.wrap_figure.fixed {
			position: static;
		}
	</style>
	<link rel='stylesheet' id='font-awesome-style-css' href='wp-content/themes/education-insight/assets/css/fontawesome-allf801.css?ver=6.3' type='text/css' media='all' />
	<link rel='stylesheet' id='education-insight-block-style-css' href='wp-content/themes/education-insight/assets/css/blocksf801.css?ver=6.3' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min21f9.css?ver=5.11.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.minaeb9.css?ver=3.1.4' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.minaeb9.css?ver=3.1.4' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-160-css' href='wp-content/uploads/elementor/css/post-160b34f.css?ver=1672409768' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-3043-css' href='wp-content/uploads/elementor/css/post-30438394.css?ver=1672761566' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=6.3' type='text/css' media='all' />
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1' id='jquery-migrate-js'></script>
	<script type='text/javascript' src='wp-content/themes/education-insight/assets/js/education-insight-custom68b3.js?ver=1' id='education-insight-custom.js-js'></script>
	<script type='text/javascript' src='wp-content/themes/education-insight/assets/js/navigation-focus68b3.js?ver=1' id='education-insight-navigation-focus-js'></script>
	<script type='text/javascript' src='wp-content/themes/education-insight/assets/js/jquery.superfish68b3.js?ver=1' id='superfish-js-js'></script>
	<script type='text/javascript' src='wp-content/themes/education-insight/assets/js/bootstrap68b3.js?ver=1' id='bootstrap.js-js'></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
	<meta name="generator" content="WordPress 6.3" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index1313.html?p=3043' />
	<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7a8f.json?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Feducation%2Fparents-and-students%2Funiform%2F" />
	<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedd05b?url=https%3A%2F%2Fthescienceschool.edu.pk%2Ftsswp%2Feducation%2Fparents-and-students%2Funiform%2F&amp;format=xml" />
	<style type="text/css" id="wp-custom-css">
		#how-it-work:before {
			background-color: #42661a !important;
		}

		.result_grid .box-grid {
			background-color: #2f4812 !important;
		}

		.result_grid .box-grid:hover {
			background-color: #395616 !important;
		}

		.heading {
			font-family: Sans-serif !important;
		}
	</style>
</head>

<body class="page-template-default page page-id-3043 page-child parent-pageid-2815 wp-custom-logo page-two-column elementor-default elementor-kit-160 elementor-page elementor-page-3043">

	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<!-- 	<div id="beaker_icon_bg"></div>
	<div id="scope_icon_bg"></div> -->
	<div id="page" class="site">
		<div class="top_header row">

			<!--p class="tempnotice">
					<a href="#notice12" class="atempnotice"> In the memory of Uzair Ahmad... <em>The Great  loss to The Science School..!</em>
					</a> 
			</p-->
			<!-- 	toogle bar for mob view		 -->
			<div class="toggle-menu gb_menu mobile_view_toggle col-md-4 col-sm-2">
				<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-bars"></i></button>

				<!-- 					<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p></p></button> -->

			</div>
			<!-- 	toogle bar for mob view	END	 -->
			<div class="container contact_cap col-xl-12 col-lg-12 col-md-8 col-sm-10">

				<span><i class="fa fa-envelope"></i>info@thescienceschool.edu.pk</span>
			</div>
		</div>
		<div id="header">
			<div class="wrap_figure">
				<div class="container">
					<div class="row menus">
						<div class="col-lg-6" id="left-menus">
							<div class="menu_box">

								<div id="gb_responsive" class="nav side_gb_nav">
									<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="Left Side Menu">
										<div class="gb_navigation clearfix">
											<ul id="menu-left-menu" class="clearfix mobile_nav">
												<li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-23"><a href="http://thescienceschool.edu.pk/tsswp">Home</a></li>
												<li id="menu-item-3979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3979"><a href="mission-statements/index.html">Mission Statement</a></li>
												<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="governing-body/index.html">Governing Body</a></li>
												<li id="menu-item-8549" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8549"><a href="results/index.html">Results 2022 <blink style="color:  red;">*</blink></a></li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
						</div>

						<div class="col-lg-6" id="right-menus">
							<div class="row toggle_design">
								<!-- 								<div class="col-lg-12 col-md-9 col-3"> -->
								<div class="col-lg-12 col-md-12 col-12">
									<div class="menu_box">

										<div id="gb_responsive" class="nav side_gb_nav">
											<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="Right Side Menu">
												<div class="gb_navigation clearfix">
													<ul id="menu-righ-menu" class="clearfix mobile_nav">
														<li id="menu-item-1960" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960"><a href="celebrating-23rd-march/index.html">Celebrating 23rd March</a></li>
														<li id="menu-item-4719" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4719"><a href="#">Education</a>
															<ul class="sub-menu">
																<li id="menu-item-2816" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-2816"><a href="index.html">Parents and Students</a></li>
																<li id="menu-item-2820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2820"><a href="teaching-and-learning/index.html">Teaching and Learning</a></li>
																<li id="menu-item-2824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2824"><a href="activities/index.html">Activities</a></li>
																<li id="menu-item-2831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2831"><a href="science-and-tech-at-tss/index.html">Science and Tech at TSS</a></li>
															</ul>
														</li>
														<li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="why-tss/index.html">Why TSS</a></li>
														<li id="menu-item-1963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1963"><a href="gallery/index.html">Gallery</a></li>
													</ul>
												</div>
											</nav>
										</div>
									</div>
									<div class="toggle-menu gb_menu hidden_menu">
										<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i>
											<p>Menu</p>
										</button>
									</div>
									<div class="menu_box_mobile">

										<div id="gb_responsive" class="nav side_gb_nav mobile_menu_nav">
											<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="Mobile Menu">
												<div class="gb_navigation clearfix">
													<ul id="menu-mobile_menu" class="clearfix mobile_nav">
														<li id="menu-item-1037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1037"><a href="index.html">Home</a></li>
														<li id="menu-item-1034" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1034"><a href="governing-body/index.html">Governing Body</a></li>
														<li id="menu-item-8545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8545"><a href="results/index.html">Results 2022</a></li>
														<li id="menu-item-1033" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1033"><a href="admissions/index.html">admissions</a></li>
														<li id="menu-item-6436" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6436"><a href="mission-statements/index.html">Mission Statements</a></li>
														<li id="menu-item-4958" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4958"><a href="#">Education</a>
															<ul class="sub-menu">
																<li id="menu-item-4955" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-4955"><a href="index.html">Parents and Students</a></li>
																<li id="menu-item-4957" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4957"><a href="teaching-and-learning/index.html">Teaching and Learning</a></li>
																<li id="menu-item-4954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4954"><a href="activities/index.html">Activities</a></li>
																<li id="menu-item-4956" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4956"><a href="science-and-tech-at-tss/index.html">Science and Tech at TSS</a></li>
															</ul>
														</li>
														<li id="menu-item-1029" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1029"><a href="why-tss/index.html">Why TSS</a></li>
														<li id="menu-item-1027" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1027"><a href="gallery/index.html">Gallery</a></li>
													</ul>
												</div> <a href="javascript:void(0)" class="closebtn gb_menu" onclick="education_insight_gb_Menu_close()">x<span class="screen-reader-text">Close Menu</span></a>
											</nav>
										</div>
									</div>
								</div>
								<!-- 								<div class="col-lg-4 col-md-8 col-sm-9">
									<div class="links">
																					<a href="https://www.cloudways.com/blog/secure-wordpress-theme-plugin-code/"><i class="fab fa-facebook-f"></i></a>
																																																	</div>
								</div> -->
							</div>
						</div>
					</div>

					<div class="row desktop_header" id="head_down_content">
						<div class="col-lg-5 col-md-5 col-sm-5">
							<div class="menu_down_h"> <b>
									<h1>The Science School</h1>
								</b> </div>
							<div class="menu_down_p"><i>
									<p> &nbsp; Faith – Purpose – Action – Leadership </p>
								</i></div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-3">
							<div class="logo1">
								<a href="index.html" class="custom-logo-link" rel="home"><img width="216" height="240" src="wp-content/uploads/2021/04/cropped-tss-logo-e1637560635321.jpg" class="custom-logo" alt="The Science School" decoding="async" fetchpriority="high" /></a>
								<p class="site-title"><a href="index.html" rel="home">The Science School</a></p>
							</div>
						</div>
						<div class="col-lg-5 col-md-4 col-sm-4" style="text-align:right">
							<img src="wp-content/uploads/2021/03/Arbi.png">
							<i>
								<p class="menu_down_p_right">“And give us (the grace) to lead the righteous.”(Al Quran)</p>
							</i>
						</div>
					</div>

					<div class="mobile_header" id="head_down_content">
						<div class="row">
							<div class="logo col-3">
								<a href="index.html" class="custom-logo-link" rel="home"><img width="216" height="240" src="wp-content/uploads/2021/04/cropped-tss-logo-e1637560635321.jpg" class="custom-logo" alt="The Science School" decoding="async" /></a>
								<p class="site-title"><a href="index.html" rel="home">The Science School</a></p>
							</div>
							<div class="col-9" style="text-align:left">
								<div class="menu_down_h"> <b>
										<h1>The Science School</h1>
									</b> </div>
								<div class="menu_down_p"><i>
										<p>Faith – Purpose – Action – Leadership </p>
									</i></div>
							</div>
						</div>
						<div style="text-align:right">
							<img src="wp-content/uploads/2021/03/Arbi.png">
							<i>
								<p class="menu_down_p_right">“And give us (the grace) to lead the righteous.”(Al Quran)</p>
							</i>
						</div>
					</div>

					<!-- <marquee id="header-marquee" width="100%" direction="left">
							<a href="https://thescienceschool.edu.pk/tsswp/#point_result" style="position: relative;width:100%;line-height:10px;">
							<span style="color: red; font-size:12px !important;">The Science School AS and O Level Results</span>
							</a>
							<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<a href="https://thescienceschool.edu.pk/tsswp/#point_nustCompetition" style="position: relative;width:100%;line-height:10px;">
							<span style="color: red; font-size:12px !important;">A science technology, mathematics competition organised by the NUST University.</span>
							</a>
						</marquee> -->

				</div>
			</div>

		</div>
	</div>
	<main id="content">
		<div class="container" id="custom-a-tag">
			<div id="primary" class="content-area entry-content">
				<main id="main" class="site-main" role="main">


					<article id="post-3043" class="post-3043 page type-page status-publish hentry">
						<header class="entry-header">
							<h1 class="entry-title"><span>Uniform</span></h1>
						</header>
						<div class="entry-content">
							<p>
							<div data-elementor-type="wp-page" data-elementor-id="3043" class="elementor elementor-3043" data-elementor-settings="[]">
								<div class="elementor-section-wrap">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-3c6a7cd elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3c6a7cd" data-element_type="section" id="edu_child_first_content">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a6422d1" data-id="a6422d1" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-1d5e62d elementor-widget elementor-widget-sidebar" data-id="1d5e62d" data-element_type="widget" data-widget_type="sidebar.default">
														<div class="elementor-widget-container">
															<section id="nav_menu-3" class="widget widget_nav_menu">
																<div class="menu-parent-student-side-bar-container">
																	<ul id="menu-parent-student-side-bar" class="menu">
																		<li id="menu-item-3072" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3043 current_page_item menu-item-3072"><a href="index.html" aria-current="page">Uniform</a></li>
																		<li id="menu-item-3065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3065"><a href="medical-assistance/index.html">Medical Assistance</a></li>
																		<li id="menu-item-3063" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3063"><a href="attendance/index.html">Attendance</a></li>
																		<li id="menu-item-3066" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3066"><a href="report-to-student-and-parents/index.html">Report to Student and Parents</a></li>
																		<li id="menu-item-3069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3069"><a href="term-dates/index.html">Term Dates</a></li>
																		<li id="menu-item-3068" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3068"><a href="security/index.html">Security</a></li>
																		<li id="menu-item-3070" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3070"><a href="timings/index.html">Timings</a></li>
																		<li id="menu-item-3064" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3064"><a href="catering/index.html"><span id="Catering">Catering</span></a></li>
																		<li id="menu-item-3071" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3071"><a href="transport/index.html">Transport</a></li>
																		<li id="menu-item-3067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3067"><a href="scholarships-and-commitments/index.html">Scholarships and Commitments</a></li>
																	</ul>
																</div>
															</section>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1873b0b" data-id="1873b0b" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-bac5a57 elementor-widget elementor-widget-heading" data-id="bac5a57" data-element_type="widget" data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">Uniform</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-cadd8ed elementor-widget elementor-widget-text-editor" data-id="cadd8ed" data-element_type="widget" data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<div class="elementor-text-editor elementor-clearfix">
																<div class="well ">
																	<h3>Summer Uniform</h3>
																	<h4>Girls</h4>
																	<ul>
																		<li>White A line shirt with apple green edging on collars, front and sleeves; school logo on shirt pocket</li>
																		<li>Apple green sash</li>
																		<li>Black buckled shoes or pumps</li>
																		<li>White or uniform dark blue socks</li>
																	</ul>
																	<h4>Boys</h4>
																	<ul>
																		<li> White shirt with school logo on left pocket</li>
																		<li> Green tie embossed with school name in weave</li>
																		<li>Steel grey trousers</li>
																		<li>Dark blue socks</li>
																		<li>Black oxford shoes</li>
																	</ul>
																</div>


															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-fce195b elementor-widget elementor-widget-text-editor" data-id="fce195b" data-element_type="widget" data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<div class="elementor-text-editor elementor-clearfix">
																<div class="well   ">
																	<p></p>
																	<h3>Winter Uniform</h3>
																	<h4>Girls</h4>
																	<ul>
																		<li>School logo on shirt pocket</li>
																		<li>Apple green sash</li>
																		<li>Black buckled shoes or pumps</li>
																		<li>Dark blue socks</li>
																		<li>Dark blue pullover or cardigan</li>
																		<li>Dark blue blazer</li>
																	</ul>
																	<h4>Boys</h4>
																	<ul>
																		<li>White shirt with school logo on left pocket</li>
																		<li>Green tie embossed with school name in weave</li>
																		<li>Steel grey trousers</li>
																		<li>Dark blue socks</li>
																		<li>Black oxford shoes</li>
																		<li>Dark blue pullover</li>
																		<li>Dark blue blazer</li>
																	</ul>
																	<p></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="elementor-section elementor-top-section elementor-element elementor-element-5f4edc1 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5f4edc1" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1bad7fe" data-id="1bad7fe" data-element_type="column">
												<div class="elementor-widget-wrap">
												</div>
											</div>
											<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-274e1f1" data-id="274e1f1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-45431b5 elementor-widget elementor-widget-text-editor" data-id="45431b5" data-element_type="widget" data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<div class="elementor-text-editor elementor-clearfix"><i class="fas fa-bullhorn"></i> Emergency meetings if necessary, can be requested over phone.</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							</p>
						</div>
					</article>
				</main>
			</div>
		</div>
	</main>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="copyright">
			<div class="container footer-content">

				<aside class="widget-area" role="complementary">
					<div class="row">
						<div class="widget-column footer-widget-1 col-lg-6 col-md-6">
							<section id="custom_html-8" class="widget_text widget widget_custom_html">
								<h3 class="widget-title">H9 Campus</h3>
								<div class="textwidget custom-html-widget">
									<div>

										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													Plot No. 26, Street No. 6, H - 9/1 Islamabad
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12"><i class="fas fa-phone-volume"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													051 - 4865465 & 67
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12"><i class="fas fa-phone"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													03205005561 , 03205005539
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													info@thescienceschool.edu.pk
												</p>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="widget-column footer-widget-2 col-lg-6 col-md-6">
							<section id="custom_html-7" class="widget_text widget widget_custom_html">
								<h3 class="widget-title">DHA Campus</h3>
								<div class="textwidget custom-html-widget">
									<div>

										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="col-lg-11 col-sm-10 col-12">
												<p>
													T Chowk, GT Road, Rawat (1 Km East of Gate 4, DHA Phase-2)
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12"><i class="fas fa-phone-volume"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													051 - 8738494 , 051 - 8314782
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12"><i class="fas fas fa-phone"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													03205005562 , 03205004497
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-1 col-sm-1 col-12">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="col-lg-10 col-sm-10 col-12">
												<p>
													info@thescienceschool.edu.pk
												</p>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<!-- 		<div class="widget-column footer-widget-3 col-lg-3 col-md-3">
			<//?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div class="widget-column footer-widget-4 col-lg-3 col-md-3">
			<//?php dynamic_sidebar( 'footer-4' ); ?>
		</div> -->
					</div>
				</aside>
			</div>
		</div>

		<div class="site-info">
			© 2013 &amp; 2022 The Science School</div>
	</footer>
	<script type="text/javascript">
		function showhide_toggle(e, t, r, g) {
			var a = jQuery("#" + e + "-link-" + t),
				s = jQuery("a", a),
				i = jQuery("#" + e + "-content-" + t),
				l = jQuery("#" + e + "-toggle-" + t);
			a.toggleClass("sh-show sh-hide"), i.toggleClass("sh-show sh-hide").toggle(), "true" === s.attr("aria-expanded") ? s.attr("aria-expanded", "false") : s.attr("aria-expanded", "true"), l.text() === r ? (l.text(g), a.trigger("sh-link:more")) : (l.text(r), a.trigger("sh-link:less")), a.trigger("sh-link:toggle")
		}
	</script>
	<div id="wpfront-scroll-top-container">
		<img src="wp-content/uploads/2021/11/up-arrow-3.png" alt="" />
	</div>
	<script type="text/javascript">
		function wpfront_scroll_top_init() {
			if (typeof wpfront_scroll_top === "function" && typeof jQuery !== "undefined") {
				wpfront_scroll_top({
					"scroll_offset": 100,
					"button_width": 0,
					"button_height": 0,
					"button_opacity": 0.90000000000000002220446049250313080847263336181640625,
					"button_fade_duration": 200,
					"scroll_duration": 1000,
					"location": 1,
					"marginX": 20,
					"marginY": 20,
					"hide_iframe": false,
					"auto_hide": false,
					"auto_hide_after": 2,
					"button_action": "top",
					"button_action_element_selector": "",
					"button_action_container_selector": "html, body",
					"button_action_element_offset": 0
				});
			} else {
				setTimeout(wpfront_scroll_top_init, 100);
			}
		}
		wpfront_scroll_top_init();
	</script>
	<script type="text/javascript" src="wp-content/plugins/wpfront-scroll-top/js/wpfront-scroll-top.minb0d2.js?ver=2.0.4.04013" id="wpfront-scroll-top-js" async="async" defer="defer"></script>
	<script type='text/javascript' src='wp-content/plugins/ht-mega-for-elementor/assets/js/popper.min001e.js?ver=2.0.0' id='htmega-popper-js'></script>
	<script type='text/javascript' src='wp-content/plugins/ht-mega-for-elementor/assets/js/htbbootstrap001e.js?ver=2.0.0' id='htbbootstrap-js'></script>
	<script type='text/javascript' src='wp-content/plugins/ht-mega-for-elementor/assets/js/waypoints001e.js?ver=2.0.0' id='waypoints-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.minaeb9.js?ver=3.1.4' id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.minaeb9.js?ver=3.1.4' id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.minaeb9.js?ver=3.1.4' id='share-link-js'></script>
	<script type='text/javascript' src='wp-content/plugins/ht-mega-for-elementor/assets/js/swiper.min001e.js?ver=2.0.0' id='swiper-js'></script>
	<script id="elementor-frontend-js-before" type="text/javascript">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false,
				"isImprovedAssetsLoading": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"version": "3.1.4",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"a11y_improvements": true,
				"landing-pages": true
			},
			"urls": {
				"assets": "https:\/\/thescienceschool.edu.pk\/tsswp\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 3043,
				"title": "Uniform%20%E2%80%93%20The%20Science%20School",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.minaeb9.js?ver=3.1.4' id='elementor-frontend-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-elements-handlers.minaeb9.js?ver=3.1.4' id='preloaded-elements-handlers-js'></script>

	<!-- <script>
window.onload = function() {
    alert('Page is loaded');
	element.classList.remove("BOARD_MESSAGE");
};
document.getElementById("BOARD-MEMBER-MESSAGE").onclick = function() {myFunction2()};

function myFunction2() {
  var element = document.getElementById("BOARD_MESSAGE");
  element.classList.add("BOARD_MESSAGE");
}
</script> -->

	<!-- For registration form submission -->
	<!--  <script>
	 $('#registrationForm').on('click', function() {
		 var name = document.getElementById("123qwe").value;
		 
	 });
 </script> -->

	<script>
		// $(".result_2020").click(function(){
		// 	$(".result2021").hide();
		//     $(".result2020").show();
		// });

		// $(".result_2021").click(function(){
		//     $(".result2020").hide();
		// 	$(".result2021").show();
		// });
	</script>

	<script>
		// jQuery(function($) {
		// 		$('#registrationForm').on('submit', function (e) {
		// 			e.preventDefault();
		// 			 var formData = {
		// 				  email: "test@gmail.com",//$("#email").val(),
		// // 				  campus: "h9",//$("#campus").val(),
		// // 				  class: "8",//$("#class").val(),
		// // 				  phone: "123",//$("#phone").val(),
		// 				  password: "123",//$("#password").val(),
		// 				};
		// 			$.ajax({
		// 				type: 'POST',
		// 				  url: 'http://192.168.1.203/emis/workplace/RegistrationAPISS/api/UserLoginApi.php',
		// 				  data: {
		// 				  email: "test@gmail.com",
		// 				  password: "123",
		// 				},
		// // 			    dataType: "json",
		// // 				encode: true,
		// 				success: function (data) {
		// 					console.log(data);
		// // 					var jsonResponse= JSON.parse(data);
		// //                     alert(jsonResponse.message);
		// 				},
		// 				error: function(data) { 
		// 					console.log(data);

		// // 					var jsonResponse= JSON.parse(data);
		// //                        alert(jsonResponse.message);
		//                 }
		// 			});

		// 		});

		// 	});
	</script>

	<!-- <script>
	 $("#registrationForm").on("submit", function(event){
        event.preventDefault();
        var formValues= $(this).serialize();
		 alert(formValues);
//         $.post("RegisterUserTest.php", formValues, function(data){
//             // Display the returned data in browser
//              alert(data);
//             $("#result").html(data);
//         });
    });
</script> -->

	<!-- Acces form value data in RegisterUserTest.php file using  echo $_POST["name"] ?? ''; -->

	<!-- Submit Admission Form   -->
	<script type="text/javascript">
		//alert('a1');
		jQuery(document).ready(function($) {
			//alert('a2');
			// hide messages 
			$("#error").hide();
			$("#show_message").hide();
			// on submit...
			$('#registrationForm').submit(function(e) {
				//alert('a3');
				e.preventDefault();
				$("#error").hide();
				//name required
				var name = $("input#name").val();
				if (name == "") {
					$("#error").fadeIn().text("Name required.");
					$("input#name").focus();
					return false;
				}
				// email required
				var email = $("input#email").val();
				if (email == "") {
					$("#error").fadeIn().text("Email required");
					$("input#email").focus();
					return false;
				}
				// email required
				var campus = $("input#email").val();
				if (campus == "") {
					$("#error").fadeIn().text("Campus required");
					$("input#campus").focus();
					return false;
				}
				// email required
				var clas = $("input#email").val();
				if (clas == "") {
					$("#error").fadeIn().text("Class required");
					$("input#class").focus();
					return false;
				}
				// phone number required
				var phone = $("input#phone").val();
				if (phone == "") {
					$("#error").fadeIn().text("Mobile number required");
					$("input#phone").focus();
					return false;
				}
				// password number required
				var password = $("input#password").val();
				if (password == "") {
					$("#error").fadeIn().text("Password number required");
					$("input#password").focus();
					return false;
				}
				// password number required
				var re_password = $("input#re-password").val();
				if (re_password == "") {
					$("#error").fadeIn().text("Re-Password number required");
					$("input#re-password").focus();
					return false;
				}
				if (re_password != password) {
					$("#error").fadeIn().text("Password and re-password should be same");
					$("input#re-password").focus();
					return false;
				}
				// ajax
				$.ajax({
					type: "POST",
					url: "https://emis.thescienceschool.edu.pk/RegistrationAPI/api/UserRegistrationApi.php",
					data: $(this).serialize(), // get all form field value in serialize form
					success: function() {
						$("#show_message").fadeIn();
						//$("#ajax-form").fadeOut();
					}
				});
			});
			return false;
		});
	</script>



</body>

<!-- Mirrored from thescienceschool.edu.pk/tsswp/education/parents-and-students/uniform/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 19:53:30 GMT -->

</html>
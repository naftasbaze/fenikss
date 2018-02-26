<!-- SCRIPTS -->

<!-- Required JSs -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>


<!-- Essential JSs -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('js/util.js') }}"></script>--}}
<script src="{{ asset('bootstrap/js/tooltip.js') }}"></script>
<script src="{{ asset('bootstrap-extensions/bootstrap-dropdownhover.js') }}"></script>
<script src="{{ asset('bootstrap-extensions/bootstrap.slide-menu.js') }}"></script>
<script src="{{ asset('bootstrap-extensions/bootstrap-validator.js') }}"></script>
<script src="{{ asset('/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel-3.0.6.pack.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>

<!-- Assets - Required -->
<script src="{{ asset('parallax/parallax.min.js') }}"></script>
<script src="{{ asset('page-scroller/jquery.ui.totop.min.js') }}"></script>


<script src="{{ asset('waypoints/waypoints.min.js') }}"></script>

<!-- Assets - Optional (keep what you need) -->
<!-- Sidebar transitions -->
{{--<script src="{{ asset('/sidebar-transitions/sidebar-transitions.js') }}"></script>--}}
<!-- Smooth scroll -->
<script src="{{ asset('js/jquery.smoothscroll.js') }}"></script>



<!-- Owl carousel - Touch enabled carousel -->
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('fancybox/jquery.fancybox.js') }}"></script>

<!-- Cross-browser responsivity scripts -->
<!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
<![endif]-->

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Fenikss-ko, SIA",
  "telephone" : "(+371) 29236361",
  "email" : "info@fenikssko.lv",
  "image": [
		"http://www.fenikssko.lv/galerijas/1518011827-dsc-6626.JPG",
		"http://www.fenikssko.lv/galerijas/1518101935-scan0004.jpg",
		"http://www.fenikssko.lv/galerijas/1518442917-20180212-122158.jpg"
		],
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Acones iela 16",
    "addressLocality" : "Ulbroka",
    "addressRegion" : "Stopiņu reg.",
    "postalCode" : "LV-2130"
  },
    "priceRange": "Pēc vienošanās",
  "url" : "http://www.fenikssko.lv/"
}
</script>

@yield('jscits')


<!-- App JS -->
{{--<script src="{{ asset('js/dvs.app.js') }}"></script>--}}

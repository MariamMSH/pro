<!DOCTYPE html>
<html>
<head>
	@includeif('base_layout.components.header.header_meta')
	@yield('style')
</head>
<body>
	<!-- Header Starts -->
	@includeif('base_layout.components.header.header')
	<!-- Header End -->
	<!-- Start Body -->
	@yield('body')
	<!-- End Body -->
	<!-- Footer Start -->
	@includeif('base_layout.components.footer.footer')
	<!-- Footer End -->

	@includeif('base_layout.components.footer.footer_meta')
	@yield('script')
</body>
</html>


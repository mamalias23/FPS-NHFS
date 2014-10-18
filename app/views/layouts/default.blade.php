<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>NHFS</title>
	@include('layouts.partials.styles')

	@section('on-page-style')
	<!-- on page style -->
	@show
</head>
<body>
	<div class="container">
		@include('layouts.partials.header')

		<content>
			@yield('content')
		</content>

		@include('layouts.partials.footer')
	</div>

	@include('layouts.partials.scripts')

	@section('on-page-script')
	<!-- on page script -->
	@show
</body>
</html>

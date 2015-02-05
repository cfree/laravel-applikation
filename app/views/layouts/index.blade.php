<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Applikation</title>
		{{ HTML::style('http://fonts.googleapis.com/css?family=Germania+One|Roboto:300') }}
		{{ HTML::style('assets/css/style.css') }}
	</head>

	<body>
		<div class="wrapper">
			<main>
				<div class="container">
					<h1 class="site-title">Applikation</h1>

					@yield('body')

				</div>
			</main>

		</div>
	</body>

</html>
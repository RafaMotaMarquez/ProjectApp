<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="nav-bar">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<img src="/img/acmeLogo.png" id="acmeLogo" width="100%" height="auto" alt="no logo">
				</div>
			</div>
			<div class="level-right"></div>
		</div>	
	</div>
	
	<div class="container">
		@yield('content')
	</div>
	
</body>
</html>
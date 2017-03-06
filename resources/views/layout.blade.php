<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Application</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/css/uikit.min.css" />
</head>
<body>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
		@include ('partials.nav')  

		@yield('content')

    </div>

    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas">
                <li class="uk-active">
                    <a href="layouts_frontpage.html">Frontpage</a>
                </li>
                <li>
                    <a href="layouts_portfolio.html">Portfolio</a>
                </li>
                <li>
                    <a href="layouts_blog.html">Blog</a>
                </li>
                <li>
                    <a href="layouts_documentation.html">Documentation</a>
                </li>
                <li>
                    <a href="layouts_contact.html">Contact</a>
                </li>
                <li>
                    <a href="/register">Register</a>
                </li>
                <li>
                    <a href="layouts_login.html">Login</a>
                </li>
            </ul>
        </div>
    </div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/uikit.min.js"></script>
</body>
</html>
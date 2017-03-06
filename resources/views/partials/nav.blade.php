<nav class="uk-navbar uk-margin-large-bottom">
    <a class="uk-navbar-brand uk-hidden-small" href="/">Brand</a>
    <ul class="uk-navbar-nav uk-hidden-small">
        <li class="uk-active">
            <a href="/">Homepage</a>
        </li>
        <li>
            <a href="layouts_portfolio.html">Portfolio</a>
        </li>
        <li>
            <a href="/posts">Blog</a>
        </li>
        <li>
            <a href="layouts_documentation.html">Documentation</a>
        </li>
        <li>
            <a href="layouts_contact.html">Contact</a>
        </li>
        @if (Auth::check())
            <li>
                <a href="/logout">Logout</a>
            </li>
        @else
            <li>
                <a href="/register">Register</a>
            </li>
            <li>
                <a href="/login">Login</a>
            </li>
        @endif
    </ul>
    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
</nav>
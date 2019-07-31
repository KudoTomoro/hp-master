<header class='l-header l-top-header' role='banner'>
    <div class='l-header__body'>
        <div class='l-header__logo'>
            <a href="/">
                <img alt="techtecコーポレート" src="@if(Request::url() === route('home') || Request::url() === route('recruit')) {{ asset('images/logo_white.png') }} @else {{ asset('images/logo.png') }}@endif" /></a>
        </div>
        <div class='l-header__logo-sp'>
            <a href="/"><img alt="techtecコーポレート" src="{{ asset('images/logo.png') }}" /></a>
        </div>
        <div class='l-header__nav-toggle'>
            <img src="{{ asset('images/ic_toggle.png') }}" alt="Ic toggle" />
        </div>
        <ul class='l-header__list'>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif" href="/">HOME</a>
            </li>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif" href="/service">SERVICE</a>
            </li>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif" href="/products">PRODUCT</a>
            </li>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif" href="/company">COMPANY</a>
            </li>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif l-header__content_blank" target="_blank"
                    href="https://hi-blockchain.world/techtec-news/">NEWS</a>
            </li>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif l-header__content_blank" target="_blank"
                    href="https://techtec.connpass.com/">COMMUNITY</a>
            </li>
            <li class='l-header__link'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif" href="/contact">CONTACT</a>
            </li>
            <li class='l-header__link l-header__btn'>
                <a class="@if(Request::url() === route('home') || Request::url() === route('recruit')) l-top-header__content @else l-header__content @endif" href="/recruit">RECRUIT</a>
            </li>
        </ul>
    </div>
</header>

<nav class='l-header__nav-sp'>
    <nav>
        <ul>
            <li class='l-header__link'>
                <a class="l-header__content" href="/">HOME</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content" href="/service">SERVICE</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content" href="/products">PRODUCT</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content" href="/company">COMPANY</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content l-header__content_blank" target="_blank"
                    href="https://techtec.connpass.com/">NEWS</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content l-header__content_blank" target="_blank"
                    href="https://techtec.connpass.com/">COMMUNITY</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content" href="/recruit">RECRUIT</a>
            </li>
            <li class='l-header__link'>
                <a class="l-header__content" href="/contact">CONTACT</a>
            </li>
        </ul>
    </nav>
</nav>

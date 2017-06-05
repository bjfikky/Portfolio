<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="/"><div class="logo"><img src="/images/logo.png" alt="logo">BENJAMIN ORIMOLOYE </div></a>
            </div>
            <div class="col-md-9">
                <div class="right-menu hidden-sm hidden-xs"> <i class="fa fa-bars"></i> </div>
                <div class="responsive">MENU</div>

                @if($_SERVER['REQUEST_URI'] == '/')

                <nav>
                    <ul class="nav-menu nav-scroll">
                        <li><a href="#home" class="selected">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#portfolio">PORTFOLIO</a></li>
                        <li><a href="#blog">BLOG</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </nav>

                @else

                    <nav>
                        <ul class="nav-menu nav-scroll">
                            <li><a href="/" @if($_SERVER['REQUEST_URI'] == '/') class="selected" @endif >HOME</a></li>
                            <li><a href="/#about">ABOUT</a></li>
                            <li><a href="/#portfolio">PORTFOLIO</a></li>
                            <li><a href="/posts" @if($_SERVER['REQUEST_URI'] == '/posts') class="selected" @endif>BLOG</a></li>
                            <li><a href="/#contact">CONTACT</a></li>
                        </ul>
                    </nav>

                @endif

            </div>
        </div>
    </div>
</header>
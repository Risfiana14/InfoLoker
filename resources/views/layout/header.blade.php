<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.html"><img src="{{ asset('') }}landing/img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="/">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="category.html">Category</a></li>
              <li><a href="/price">Price</a></li>
              <li><a href="blog-home">Blog</a></li>
              <li><a href="/contact">Contact</a></li>
              <li class="menu-has-children"><a href="">Pages</a>
                <ul>
                    <li><a href="elements.html">elements</a></li>
                    <li><a href="search.html">search</a></li>
                    <li><a href="single.html">single</a></li>
                </ul>
              </li>
              <li><a class="ticker-btn" href="{{ route('register')}}">Signup</a></li>
              <li><a class="ticker-btn" href="{{ route('login')}}">Login</a></li>				          				          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header><!-- #header -->
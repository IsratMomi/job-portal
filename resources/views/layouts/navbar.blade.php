<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">The Job<em> Portal</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>

                        <!--<li><a href="javascript:void(0)">Jobs</a></li>-->
                        <li><a href="javascript:void(0)">Video Chat</a></li>
                        @guest

                        <li><a href="{{route('login')}}">Login</a></li>
                        @endguest
                        @auth
                        @if (auth()->user()->isCompany())
                        <li><a href="{{route('job-post.index')}}">Post a Job</a></li>
                        @endif
                        <li><a
                                href="javascript:void(0)">{{auth()->user()->first_name ." ". auth()->user()->last_name}}</a>
                        </li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <li><button type="submit">Logout</button></li>
                        </form>
                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
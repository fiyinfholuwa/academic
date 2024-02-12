

<header>
    <nav class="nav-section">
        <ul class="nav-list">
            <li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Programs & Courses</a></li>
            <li class="nav-item menu" id="toggleSubMenu"><a href="#" class="nav-linkss">Study Destination
                    <i class="fa-solid fa-caret-down"></i></a>
                <ul class="submenu">
                    @if(count($destinations) > 0)
                        @foreach($destinations as $destination)
                            <li class="sublink"><a href="{{route('destination.detail', $destination->id)}}" class="submenu-link"><img src="{{asset(optional($destination->country_info)->flag)}}" alt="">{{optional($destination->country_info)->name}}</a></li>
                        @endforeach

                    @endif

                </ul>
            </li>
            <li class="nav-item"><a href="{{route('resources')}}" class="nav-link">Resources</a></li>
            <li class="nav-item"><a href="{{route('faq')}}" class="nav-link">FAQ</a></li>
            {{--            <li class="nav-item"><a href="about.html#offer" class="nav-link">Services</a></li>--}}
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>

            <div class="buttons">
                <a href="#" class="login">Free Consultation</a>
            </div>
        </ul>

        <div id="menu-icon" class="nav-link">
            <i class="fa-solid fa-bars fa-lg"></i>
        </div>
    </nav>

    @auth
        <div class="second-nav">
            <img src="{{asset('assets/image/AncileAcad-logo.svg')}}" alt="">
            <div class="nav-profile">
                <i class="fa-solid fa-xmark iconn"></i>
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="input-box">
                        <form action="">
                            <input type="text" placeholder="Search...">
                            <button type="submit" class="searchh">Search</button>
                        </form>

                    </div>
                </div>
                <div class="nav-auth-profile">
                    <img src="{{asset('assets/image/message.svg')}}" class="message" />
                    <div class="nav-profile-details">
                        <img src="{{asset('assets/image/img11.jpg')}}" alt="" class="profile-img">
                        <div class="nav-profile-name">
                            <h3><h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3></h3>
                            <a href="{{route('logout')}}">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="second-nav">
            <a href="{{route('home')}}"><img src="{{asset('assets/image/AncileAcad-logo.svg')}}" alt=""></a>

            <div class="nav-profile">
                <i class="fa-solid fa-xmark iconn"></i>
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="input-box">
                        <form action="">
                            <input type="text" placeholder="Search...">
                            <button type="submit" class="searchh">Search</button>
                        </form>

                    </div>
                </div>
                <div class="nav-auth">
                    <a href="#" id="registered">SIGN UP</a>
                    <a href="#" id="logged">LOGIN</a>
                </div>
            </div>
        </div>

    @endauth
</header>

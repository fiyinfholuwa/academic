<li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Programs & Courses</a></li>
<li class="nav-item menu" id="toggleSubMenu"><a href="#" class="nav-linkss">Study Destination
        <i class="fa-solid fa-caret-down"></i></a>
    <ul class="submenu">
        @if(count($destinations) > 0)
            @foreach($destinations as $destination)
                <li class="sublink"><a href="{{route('destination.detail', optional($destination->country_info)->name)}}" class="submenu-link"><img src="{{asset(optional($destination->country_info)->flag)}}" alt="">{{optional($destination->country_info)->name}}</a></li>
            @endforeach

        @endif

    </ul>
</li>
<li class="nav-item"><a href="{{route('resources')}}" class="nav-link">Resources</a></li>
<li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blogs</a></li>
<li class="nav-item"><a href="{{route('news')}}" class="nav-link">News</a></li>
<li class="nav-item"><a href="{{route('faq')}}" class="nav-link">FAQ</a></li>
{{--            <li class="nav-item"><a href="about.html#offer" class="nav-link">Services</a></li>--}}
<li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>

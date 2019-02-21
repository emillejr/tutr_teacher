                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                @foreach($navs as $nav)
                                <li>
                                    <a class="" href="{{$nav->route}}">
                                        <i class="{{$nav->icon}}"></i>
                                        <span class="sidebar-mini-hide">{{$nav->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
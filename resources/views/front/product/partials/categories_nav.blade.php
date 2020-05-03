<div class="sb-widget d-none d-lg-block no-padding">
    <div class="sb-menu sb-mwnu-with-half-border">

        <h5 class="sb-title">Categories</h5>

        <ul class="categories-menu">

            <?php
                $product_menus = Helper::getMenus();
            ?>

            @foreach($product_menus as $menu)

            <li class="dropdown">
                <div class="dropdown-menu-wrapper">
                    <img class="vertical-menu-icon" src="{{asset('uploads/Menuimages/'.$menu->menu_icon)}}" alt="{{$menu->name}}" />
                    <a href="" class="dropdown-link">
                        <span>{{$menu->name}}</span>
                    </a>
                </div>

                @if(count($menu->categories) > 0)
                <span class="expand"></span>

                <ul class="dropdown-menu">

                    @foreach($menu->categories as $category)
                    <li class="dropdown sb-dropdown-submenu">

                        <div class="dropdown-menu-wrapper">
                            <img class="vertical-menu-icon" src="{{asset('uploads/Categoryimages/'.$category->category_icon)}}" alt="{{$category->name}}" />
                            <a href="" class="dropdown-link">
                                <span>{{$category->name}}</span>
                            </a>
                        </div>


                        @if(count($category->sub_category) > 0)

                        <span class="expand"></span>

                        <ul class="dropdown-menu">

                            @foreach($category->sub_category as $sub_c)
                            <li>
                                <div class="dropdown-menu-wrapper dropdown-sub-category-wrapper">
                                    <img class="vertical-menu-icon" src="{{asset('uploads/SubCategory/'.$sub_c->icon)}}" alt="{{$sub_c->name}}" />
                                    <a href="{{route('sub_category',$sub_c->slug)}}">
                                        <span>{{$sub_c->name}}</span>
                                    </a>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        @endif
                    </li>
                    @endforeach

                </ul>
                @endif

            </li>
            @endforeach

        </ul>

    </div>
</div>

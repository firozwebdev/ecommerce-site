<ul class="metismenu" id="side-menu">

    <li class="menu-title">Yinimini</li>

    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-cube"></i>
            <span> Category </span>
            <span class="badge badge-danger float-right"> Category</span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.categories.create')}}">Categories</a>
            </li>
            <!-- <li>
                <a href="{{route('admin.menus.index')}}">Manage Menu  </a>
            </li>
            <li>
                <a href="{{route('admin.categories.index')}}">Manage Category </a>
            </li>
            <li>
                <a href="{{route('admin.sub-categories.index')}}">Manage Sub-Category </a>
            </li> -->

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
     <i class="la la-pinterest-square"></i>
     <span> Product </span>
     <span class="badge badge-danger float-right">Product</span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.products.create')}}">Add Product</a>
            </li>

            <li>
                <a href="{{route('admin.products.index')}}">Manage Product</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="{{route('admin.seller-product')}}">
            <i class="la la-pied-piper"></i>
            <span class="badge badge-danger float-right"></span>
            <span>Seller Product  </span>
        </a>

    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-clone"></i>
            <span> Ads </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.ads.create')}}">Add Ads</a>
            </li>

            <li>
                <a href="{{route('admin.ads.index')}}">Manage Ads</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-cogs"></i>
            <span> Homepage Setting </span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li> <a href="{{route('admin.products.advance-products.daily-deals')}}">Deals of the Day</a> </li>

        </ul>
        <ul class="nav-second-level" aria-expanded="false">
            <li> <a href="{{route('admin.popular-category')}}">Popular Categories</a> </li>
          </ul>
    </li>

    <li class="menu-title mt-2">System</li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-cube"></i>
            <span> Cupon </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.coupons.create')}}">Add Cupon</a>
            </li>
            <li>
                <a href="{{route('admin.coupons.index')}}">Manage Cupon</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-file-text-o"></i>
            <span> Slider </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.sliders.create')}}">Add Slider</a>
            </li>
            <li>
                <a href="{{route('admin.sliders.index')}}">Manage Slider</a>
            </li>

        </ul>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i class="la la-cc-amex"></i>
            <span> Payment Method </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.payment-methods.create')}}">Add Payment Method</a>
            </li>
            <li>
                <a href="{{route('admin.payment-methods.index')}}">Manage  Method</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-file-text-o"></i>
            <span> Shipping Zone </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.shipping-zone.create')}}">Add Shipping Zone</a>
            </li>
            <li>
                <a href="{{route('admin.shipping-zone.index')}}">Manage  Zone </a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-square-o"></i>
            <span class="badge badge-danger float-right">New</span>
            <span>Orders </span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.orders.index')}}">Pendding Orders</a>
            </li>

            <li>
                <a href="{{route('admin.confrimed_order')}}">Confirm Orders</a>
            </li>
            <li>
                <a href="{{route('admin.delivered_order')}}">Deliverd Orders</a>
            </li>

        </ul>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i class="la la-male"></i>
            <span class="badge badge-danger float-right">Role</span>
            <span>Add Role </span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.sellers.create')}}">Add Role Orders</a>
            </li>

            <li>
                <a href="{{route('admin.sellers.index')}}">Manage Seller</a>
            </li>


        </ul>
    </li>
    <li>
        <a href="{{route('admin.contact')}}">
            <i class="la la-envelope-o"></i>
            <span class="badge badge-danger float-right"></span>
            <span>Contact </span>
        </a>

    </li>
    <li>
        <a href="{{route('admin.newsletter')}}">
           <i class="la la-comment"></i>
           <span class="badge badge-danger float-right"></span>
            <span>Newsletter </span>
        </a>

    </li>

    <li>
        <a href="{{route('admin.users')}}">
            <i class="la la-users"></i>
            <span class="badge badge-danger float-right">Customers</span>
            <span>Customers </span>
        </a>

    </li>


    <li>
        <a href="{{route('admin.selling-reports')}}">
           <i class="la la-comment"></i>
           <span class="badge badge-danger float-right"></span>
            <span>Selling Report </span>
        </a>

    </li>



    <li>
        <a href="javascript: void(0);">
            <i class="la la-diamond"></i>
            <span> Feedback </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="ui-buttons.html">Ratting</a>
            </li>
            <li>
                <a href="ui-cards.html">Report</a>
            </li>
            <li>

        </ul>
        </li>


</ul>
</li>

</ul>

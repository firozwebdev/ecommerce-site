<ul class="metismenu" id="side-menu">

    <li class="menu-title">Yinimini</li>

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
            <a href="javascript: void(0);">
              <i class="la la-male"></i>
                <span> Profile </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{route('admin.seller-profiles.create')}}">Add Complete Profile</a>
                </li>
                <li>
                    <a href="{{route('admin.seller-profiles.index')}}">Manage Profile</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="{{route('admin.seller-order')}}">
              <i class="la la-square-o"></i>
                <span class="badge badge-danger float-right">Orders</span>
                <span>Totals Orders </span>
            </a>

        </li>



  </ul>

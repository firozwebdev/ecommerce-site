<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          @if(Auth::guard('admin')->user()->hasRole(['admin']))
            @include('admin.partials.admin-menu')
          @endif


          @if(Auth::guard('admin')->user()->hasRole(['seller']))
            @include('admin.partials.seller-menu')
          @endif
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>

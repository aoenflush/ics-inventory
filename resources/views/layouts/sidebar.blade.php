<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        {{-- <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::to('assets/img/user.png') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name  }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> --}}

        {{-- <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form --> --}}

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            {{-- <li class="header">Fungsi</li> --}}
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="active"><a href="{{ url('users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <li class="active"><a href="{{ url('categories') }}"><i class="fa fa-list"></i> <span>Kategori</span></a></li>
            <li class="active"><a href="{{ url('products') }}"><i class="fa fa-cubes"></i> <span>Product</span></a></li>
            <li class="active"><a href="{{ url('customers') }}"><i class="fa fa-users"></i> <span>Customer</span></a></li>
            <li class="active"><a href="{{ url('sales') }}"><i class="fa fa-cart-plus"></i> <span>Penjualan</span></a></li>
            <li class="active"><a href="{{ url('suppliers') }}"><i class="fa fa-truck"></i> <span>Supplier</span></a></li>
            <li class="active"><a href="{{ url('productsOut') }}"><i class="fa fa-minus"></i> <span>Product Keluar</span></a></li>

            <li class="active"><a href="{{ url('productsIn') }}"><i class="fa fa-plus"></i> <span>Product Masuk</span></a></li>








        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>



<!-- sidebar menu area start -->
<!--<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="superadmin-assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="index.html">Admin Dashboard</a></li> 
                                    <li class="active"><a href="{{route('superadmin.index')}}">Super Admin Dashboard</a></li>
                                    <li><a href="index3.html">Customer Dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Shops
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('shop.index')}}">Shop List & Details</a></li>
                                    <li><a href="{{route('shop.create')}}">Create New Shop</a></li>
                                </ul>
                            </li>-->


                            <div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Create Shop</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('superadmin.index') }}">Super Admin Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create New Shop</h4>

                    {{-- Show validation error messages --}}
                    @include('layouts.partials.messages')

                    <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">
                                        Full Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phoneno">
                                        Phone Number
                                        <span class="text-info">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone Number" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category">
                                    Category
                                        <span class="text-info">*</span>
                                    </label>
                                    <input type="category" class="form-control" name="category" id="category" placeholder="category">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="location">
                                    Location
                                        <span class="text-info">*</span>
                                    </label>
                                    <input name="location" id="location" class="form-control" placeholder="location">
                                    </div>
                            </div>
                              
                           <!-- <div class="col-6">
                                <div class="form-group">
                                    <label for="image">Profile
                                        <span class="text-info">(optional)</span>
                                    </label>
                                    <input type="file" class="form-control" name="image" id="image"  >
                                </div>
                            </div>
                        </div> -->
                       
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

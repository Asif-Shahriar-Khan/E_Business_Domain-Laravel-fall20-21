

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Edit User</h4>
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
                    <h4 class="header-title">Update User Information</h4>

                    {{-- Show validation error messages --}}
                    @include('layouts.partials.messages')

                    <form action="{{ route('shop.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">
                                        Full Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ $shop->name }}" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phoneno">
                                        Phone Number
                                        <span class="text-info">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone Number" value="{{ $shop->phoneno }}" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ $shop->email }}" >
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

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
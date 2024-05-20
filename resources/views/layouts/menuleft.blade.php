<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#"
                    class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">VCCORP</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <li class="nav-item">
                        <a href="/home" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboad</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Quản lý khách
                                hàng</span>
                        </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ url('customers/create') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Thêm khách
                                        hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('deleteCustomer') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Xóa khách
                                        hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('customers/edit') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Chỉnh sửa
                                        khách hàng</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Quản lý phân
                                quyền</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Quản lý đơn
                                hàng</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ url('orders/create') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Thêm đơn
                                        hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('deleteOrder') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Xóa đơn
                                        hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('updateOrder') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Chỉnh sửa đơn
                                        hàng</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Quản lý công ty</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ url('companys/create') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Thêm công
                                        ty</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('deleteCompany') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Xóa công
                                        ty</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('updateCompany') }}" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Chỉnh sửa công
                                        ty</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                            class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Name</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3" style="background-color: whitesmoke">
            @yield('content')
        </div>
    </div>
</div>

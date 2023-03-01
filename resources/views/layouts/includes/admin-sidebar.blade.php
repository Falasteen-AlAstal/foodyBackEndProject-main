<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>FOODY</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('/img/user.png')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Falasteen AlAstal</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('dashboard.index')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                  
                    <a href="{{route('meals.index')}}" class="nav-item nav-link"><i class="fa fa-coffee me-2"></i>Meals</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-fw fa-folder me-2"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('categories.index')}}" class="dropdown-item">Diseases</a>
                            <a href="{{route('forbidden.index')}}" class="dropdown-item">Forbidden Foods</a>
                            <a href="{{route('alternatives.index')}}" class="dropdown-item">Alternatives</a>
                        </div>
                    </div>
                    <a href="{{route('challenges.index')}}" class="nav-item nav-link"><i class="fa fa-sign-language me-2"></i>Coupons</a>
                    <a href="{{route('orders.index')}}" class="nav-item nav-link"><i class="fa fa-shopping-cart me-2"></i>Orders</a>
                    <a href="{{route('messages.index')}}" class="nav-item nav-link"><i class="fa fa-envelope me-2"></i>Messages</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-bell me-2"></i>Notification</a>
            
                </div>
            </nav>
        </div>

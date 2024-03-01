    <header class="bg-light p-3 mb-3">
        <div class="px-3 py-2 bg-dark text-white">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ route('dashboard') }}"
                    class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fw-bold fs-5 me-3">
                    {{ env('APP_NAME') }}
                </a>

                
                <ul class="nav col-6 col-lg-auto me-lg-auto mb-2 justify-content-start mb-md-0">
                    @guest

                    @else
                    <button type="button" class="btn btn-line-primary">
                        <li><a href="{{ route('dashboard') }}" class="nav-link px-2 text-white">Dashboard</a></li>
                    </button>
                    <button type="button" class="btn btn-line-primary">
                        <li><a href="{{ route('item') }}" class="nav-link px-2 text-white">Items</a></li>
                    </button>
                    <button type="button" class="btn btn-line-primary">
                        <li><a href="{{ route('supplier') }}" class="nav-link px-2 text-white">Suppliers</a></li>
                    </button>
                    <button type="button" class="btn btn-line-primary">
                        <li><a href="{{ route('category') }}" class="nav-link px-2 text-white">Category</a></li>
                    </button>
                    <button type="button" class="btn btn-line-primary">
                        <li><a href="{{ route('department') }}" class="nav-link px-2 text-white">Department</a></li>
                    </button>
                    <button type="button" class="btn btn-line-primary">
                        <li><a href="{{ route('borrower') }}" class="nav-link px-2 text-white">Borrower</a></li>
                    </button>
                    @endguest
                    
                </ul>
                
                

                @guest
                <div class="text-end">
                    <a href="{{ route('index') }}" class="px-2 text-white text-decoration-none">Sign in</a>
                    <a href="{{ route('register') }}" class="px-2 text-white text-decoration-none">Sign up</a>
                </div>
                @else
                <div class="text-end">
                    <div class="dropdown">
                        <a class="dropdown-toggle px-2 text-white text-decoration-none" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                        </ul>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </header>

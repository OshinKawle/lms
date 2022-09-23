 <nav class="navbar navbar-expand-lg bg-light navbarset sticky-top">
        <div class="container-fluid">
            <img class="logoset" src="{{asset('admin/assets/images/Profcyma.png')}}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  menualign">
                    <li class="nav-item menuitemspace">
                        <a class="nav-link active menuset activemenu" aria-current="page" href="{{url('home')}}">Overall
                            Stats</a>
                    </li>

                    <li class="nav-item dropdown menuitemspace" id="coures">
                        <a class="nav-link dropdown-toggle menuset" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Settings</a>
                        <ul class="dropdown-menu">
                            <li id="sub-dropdown" class="dropdown "><a class="dropdown-item" href="#">App Settings</a>
                                <ul id="sub-dropdown-menu" class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Bottom Navigation</a></li>
                                    <li><a class="dropdown-item" href="#">Home Screen</a></li>
                                </ul>
                            </li>

                            <li><a class="dropdown-item" href="#">Web Settings</a></li>

                        </ul>
                    </li>
                    <li class="nav-item menuitemspace">
                        <a class="nav-link menuset" href="{{url('master/university')}}">Master</a>
                    </li>

                    <li class="nav-item menuitemspace">
                        <a class="nav-link menuset" href="#">University Information</a>
                    </li>

                    <li class="nav-item menuitemspace">
                        <a class="nav-link menuset" href="#">Students</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
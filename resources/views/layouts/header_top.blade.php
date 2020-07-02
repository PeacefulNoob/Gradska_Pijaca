	<!--Topbar-->
    <div class="header-main">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                        <div class="top-bar-left d-flex">
                            <div class="clearfix">
                          
                            </div>
                            <div class="clearfix">
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                        <div class="top-bar-right">
                            <ul class="custom">
                                @guest
                                <li class="nav-item">
                                    <a href="/login" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="/register" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Registrujte se</span></a>
                                    </li>
                                @endif
                            @else  
                            @if(Auth::user()->isAdmin())
                            <li class="dropdown">
                                <a href="/admin" class="text-dark" ><i class="fa fa-home mr-1"></i><span> Podešavanja</span></a>
                            
                            </li>
                            @endif    
                            @if(Auth::user()->isApproved())
                            <li class="dropdown">
                                <a href="/user" class="text-dark" ><i class="fa fa-home mr-1"></i><span> Podešavanja</span></a>

                            </li>
                            @endif    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                       
                        @endguest 

                               
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Topbar-->
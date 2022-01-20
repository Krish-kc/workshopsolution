  <div class="nav-bar">
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
              <a href="#" class="navbar-brand">MENU</a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav mr-auto">
                      <a href="{{ route('home') }}"
                          class="nav-item nav-link {{ request()->is('home') ? 'active' : '' }}">Home</a>
                      <a href="{{ route('aboutework') }}"
                          class="nav-item nav-link {{ request()->is('aboutework') ? 'active' : '' }}">About</a>
                      <a href="{{ route('workshop-service') }}"
                          class="nav-item nav-link  {{ request()->is('workshop-service') ? 'active' : '' }}">Workshop</a>

                      <a href="{{ route('contact') }}"
                          class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                  </div>
                  <li class="nav-item ">
                      <div class="ml-auto ">
                          <a class="btn" href="#" class="nav-link dropdown-toggle"
                              id="navbarDropdownMenuLink" data-toggle="dropdown">
                              @if (Auth::user())
                                  {{ Auth::user()->name }}
                              @else
                                  Guest
                              @endif
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                              @if (Auth::user())


                                  <a class="dropdown-item" href="{{ route('userprofile.index') }}"><i
                                          class="fa fa-user" aria-hidden="true"></i>
                                      Profile</a>
                                  <a class="dropdown-item" href="{{route('userprofile.edit',Auth::id())}}"><i class="fas fa-user-cog"></i>
                                      Settings</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                      logout</a>
                              @else
                                  <a class="dropdown-item" href="/login"><i class="fas fa-sign-in-alt"></i>
                                      Login</a>
                                  <a class="dropdown-item" href="/register"><i class="fas fa-edit"></i>
                                      Register</a>

                              @endif
                          </div>
                      </div>
                  </li>
              </div>
          </nav>
      </div>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>

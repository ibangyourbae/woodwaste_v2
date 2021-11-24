    <!-- navbar-top -->
    <div class="container">
        <nav class="navbar navbar-top ">
            <div class="container">
                <a class="navbar-brand" href="@auth /dashboard @else / @endauth">
                    <img src="../../img/Logo.png" alt="" width="50" height="50">
                </a>
                @auth
                <li style="list-style:none" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../img/codicon_account.png" alt="" width="50" height="50" style="border-radius: 100%;">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/profile/{{ auth()->user()->username }}/edit"><i class="bi bi-person-fill"></i> Akun Saya</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="POST">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>  
                        </form>  
                      </li>
                    </ul>
                  </li>
                {{-- <a class="navbar-brand" href="#">
                    <img src="img/codicon_account.png" alt="" width="50" height="50" style="border-radius: 100%;">
                </a> --}}
                @endauth
                {{-- <img src="img/codicon_account.png" alt="" width="50" height="50" style="border-radius: 100%;"> --}}
            </div>
        </nav>
    </div>
    <!-- end navbar-top -->
    <!-- content -->
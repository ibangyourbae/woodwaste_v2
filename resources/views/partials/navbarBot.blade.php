            <!-- navbar-bottom -->
            <div class="container " style="margin-top: 200px; ">
                <nav class="navbar container navbar-bottom fixed-bottom navbar-light ">

                    <a class="nav-link {{ ($active === "home") ? 'alert-dark' : '' }}" href="@auth /dashboard @else / @endauth">
                        <i class="bi bi-house-door-fill"></i>
                        <h5>Beranda</h5>
                    </a>

                    <a class="nav-link  nav-link {{ ($active === "allwood") ? 'alert-dark' : '' }}" href="/allwood">
                        <i class="bi bi-cart-dash-fill"></i>
                        <h5>All-Wood</h5>
                    </a>

                    <a class="nav-link nav-link {{ ($active === "wooddata") ? 'alert-dark' : '' }}" href="/wooddata">
                        <i class="bi bi-pencil-square"></i>
                        <h5>Wood Data</h5>
                    </a>


                    <a class="nav-link nav-link {{ ($active === "woodpedia") ? 'alert-dark' : '' }}" href="/woodpedia">
                        <i class="bi bi-journal-richtext"></i>
                        <h5>Woodpedia <br> Edukasi</h5>
                    </a>


                    <a class="nav-link nav-link {{ ($active === "kontak") ? 'alert-dark' : '' }}" href="/kontak">
                        <i class="bi bi-telephone-fill"></i>
                        <h5>Kontak <br> Kami</h5>
                    </a>

            </div>



            </nav>
        </div>
        <!-- navbar-bottom -->
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    -->
</body>

</html>
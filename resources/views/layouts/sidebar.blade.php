<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span>LAUNDRYSEEKER</span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li><a class="waves-effect waves-dark" href="/home/"  aria-expanded="false"><i class="fa fa-search"></i> <span>Cari Laundry</span></a></li>
                <li><a class="waves-effect waves-dark" href="/order/"  aria-expanded="false" ><i class="fa fa-money"></i> <span>Pesanan Anda</span></a></li>
                @if (Auth::user()->type === "launderer")
                  <li><a class="waves-effect waves-dark" href="/manage/order"  aria-expanded="false"><i class="fa fa-gear"></i> <span>Kelola Pesanan</span></a></li>
                  <li><a class="waves-effect waves-dark" href="/manage/paket"  aria-expanded="false"><i class="fa fa-gear"></i> <span>Kelola Paket</span></a></li>
                @endif
                <li><a class="waves-effect waves-dark" href="/manage/profile"  aria-expanded="false"><i class="fa fa-gear"></i> <span>Profile</span></a></li>
                <div class="text-center m-t-30">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                      @csrf
                    </form>
                    <a class="btn waves-effect waves-light btn-success hidden-md-down" onclick="
                      event.preventDefault();
                      document.getElementById('logout-form').submit();
                    ">SIGN OUT</a>
                </div>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

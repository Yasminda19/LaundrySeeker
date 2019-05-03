    <aside class="main-sidebar">
      <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img class="img-circle" alt="User Image" src="{{ URL::asset('images/unnamed.jpg') }}">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <p>
              @if (Auth::user()->type === "user")
                Pengguna Laundry
              @else
                Yang nge-Laundry
              @endif
            </p>
          </div>
        </div>
        <!-- search form -->
        <form class="sidebar-form" action="#" method="get">
          @csrf
          <div class="input-group">
            <input type="text" name="search" placeholder="Cari sesuatu...">
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
          <li><a href="/home"><i class="fa fa-search"></i> <span>Cari Laundry</span></a></li>
          <li><a href="/order"><i class="fa fa-book"></i> <span>Riwayat Pesanan</span></a></li>
          @if (Auth::user()->type === "launderer")
            <li><a href="/manage/order"><i class="fa fa-money"></i> <span>Kelola Pesanan Anda</span></a></li>
            <li><a href="/manage/paket"><i class="fa fa-gear"></i> <span>Kelola Paket</span></a></li>
          @endif
          <li><a href="/manage/profile"><i class="fa fa-gear"></i> <span>Profile</span></a></li>
        </ul>
      </section>
    </aside>
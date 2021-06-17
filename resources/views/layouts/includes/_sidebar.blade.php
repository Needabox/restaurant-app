<style>
#sidebar-wrapper .list-group {
  width: 17rem;
}

#page-content-wrapper {
  min-width: 180vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -10rem;
  }
}

  </style>
    <!-- Sidebar -->
    <div class="bg-light border-right mt-4" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="{{ Route('dashboard') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            @if (auth()->user()->role == 'admin' ||  auth()->user()->role == 'waiter' )
              <a href="{{ Route('menu') }}" class="list-group-item list-group-item-action bg-light">Menu</a>
            @endif

            @if (auth()->user()->role == 'waiter')
              <a href="{{ route('pesanan') }}" class="list-group-item list-group-item-action bg-light">Pesanan</a>
            @endif

            @if (auth()->user()->role == 'cashier')
              <a href="{{ route('transaksi') }}" class="list-group-item list-group-item-action bg-light">Transaksi</a>
            @endif

            @if (auth()->user()->role == 'admin' ||  auth()->user()->role == 'owner' )
            <a href="{{ route('users') }}" class="list-group-item list-group-item-action bg-light">Users</a>
            @endif

        </div>
      </div>
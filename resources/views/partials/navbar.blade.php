<div class="horizontal-menu">
      <nav class="bottom-navbar">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url('/kontak') == request()->url() ? 'active' : '' }}" href="{{ url('/kontak') }}">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Kontak</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Artikel</span>
                <i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link {{ url('/artikel') == request()->url() ? 'active' : '' }}" href="{{ url('/artikel') }}">Artikel</a></li>

                  <!-- <li class="nav-item"><a class="nav-link {{ url('/kategori-artikel') == request()->url() ? 'active' : '' }}" href="{{ url('/kategori-artikel') }}">Kategori Barang</a></li> -->

                  <li class="nav-item"><a class="nav-link {{ url('/kategoriartikel') == request()->url() ? 'active' : '' }}" href="{{ url('/kategoriartikel') }}">Kategori Artikel</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Barang</span>
                <i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link {{ url('/merk') == request()->url() ? 'active' : '' }}" href="{{ url('/merk') }}">Merk Barang</a></li>

                  <li class="nav-item"><a class="nav-link {{ url('/kategoribarang') == request()->url() ? 'active' : '' }}" href="{{ url('/kategoribarang') }}">Kategori Barang</a></li>

                  <li class="nav-item"><a class="nav-link {{ url('/barang') == request()->url() ? 'active' : '' }}" href="{{ url('/barang') }}">Barang</a></li>

                  <li class="nav-item"><a class="nav-link {{ url('/fotobarang') == request()->url() ? 'active' : '' }}" href="{{ url('/fotobarang') }}">Foto Barang</a></li>

                </ul>
              </div>
            </li>

      </nav>
    </div>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                
                <li>
                    <a>
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>Assets</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>License</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>Component</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>People</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>Supplier</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>Import</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>Report</a>
                </li>
                <li>
                    <a>
                        <i class="fas fa-table"></i>Logout</a>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>

<style>
    .menu-sidebar {
  position: fixed; /* Tetap di posisi bahkan saat digulir */
  top: 7.2%; /* Menempelkan sidebar 60px di bawah navbar */
  left: 0; /* Menempelkan sidebar ke kiri */
  width: 250px; /* Lebar sidebar */
  height: calc(100vh - 60px); /* Tinggi sidebar mengisi tinggi layar dikurangi tinggi navbar */
  background-color: #ffffff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Kotak bayangan */
}

.menu-sidebar__content {
  padding: 20px;
}

.menu-sidebar__content .navbar-sidebar {
  margin: 0;
  padding: 0;
}

.menu-sidebar__content .navbar-sidebar .navbar__list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-sidebar__content .navbar-sidebar .navbar__list li {
  margin-bottom: 10px;
}

.menu-sidebar__content .navbar-sidebar .navbar__list li a {
  display: block;
  text-decoration: none;
  color: #333333;
}

</style>
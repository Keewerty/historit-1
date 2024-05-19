<nav class="navbar navbar-expand-lg bg-purple" style="background-color: #B16AB7">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:black">HistorIT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="d-flex mx-auto searchbar" role="search">
          <input class="form-control me-2" type="search" aria-label="Search">
        </form>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
              Create
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true" style="color:black">Admin</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

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
        
        .mx-auto {
          margin-right: auto !important;
          margin-left: auto !important;
          margin-top: auto;
          margin-bottom: auto;
        }


        .menu-sidebar {
            position: fixed; 
            top: 0vm; 
            left: 0; 
            width: 250px; 
            height: calc(100vh - 56px);
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
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
  
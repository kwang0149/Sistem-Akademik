<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title==="Dashboard") ? 'active': '' }}" aria-current="page" href="/dosen">
            <span data-feather="home"></span>
            Dashboard Dosen
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/dosen/biodata">
            <span data-feather="file"></span>
            Biodata
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dosen/transkrip">
            <span data-feather="file"></span>
            Transkrip
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dosen/frs">
            <span data-feather="file"></span>
            FRS
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
    </div>
  </nav>

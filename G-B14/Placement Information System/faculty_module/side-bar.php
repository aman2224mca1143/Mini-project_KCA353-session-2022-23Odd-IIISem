<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="faculty-dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Placement Drives</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="faculty-drives.php">
              <i class="bi bi-circle"></i><span>View Drives</span>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="add-student.php">
              <i class="bi bi-circle"></i><span>Add Students</span>
            </a>
          </li> 
        <li>
            <a href="view-student.php">
              <i class="bi bi-circle"></i><span>View Students</span>
            </a>
          </li>
          <li>
            <a href="placed-student.php">
              <i class="bi bi-circle"></i><span>Placed Student List</span>
            </a>
          </li>
          <li>
            <a href="unplaced-student.php">
              <i class="bi bi-circle"></i><span>Unplaced Student List</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>
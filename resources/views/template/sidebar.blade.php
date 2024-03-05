<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="/user-settings" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Predictive Analytics</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Manage Data Entry
                        <i class="right fas fa-angle-down"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: block">
                    <li class="nav-item">
                        <a href="/barangay" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Barangay</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/purok" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Purok</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/illness" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Illness Entry</p>
                        </a>
                        <!-- Save button added here -->
                        <button class="btn btn-primary save-button" onclick="saveIllnessEntry()">
                            Save
                        </button>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

<!-- JavaScript code for save functionality -->
<script>
    function saveIllnessEntry() {
        // Add code here to handle saving illness entry information
        alert("Illness entry information saved!");
    }
</script>

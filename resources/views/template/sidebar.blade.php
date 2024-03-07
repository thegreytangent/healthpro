<head>
    <!-- Link to Font Awesome stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-KJg4qEVNvmZtmNmNBt+alw0Y0t++Q8mD7z7u+WHV28CwrGkljweXFiNoP5GbeEAOi1eUnf4J8UzVzoKNEPvRHg==" crossorigin="anonymous" />
</head>

<body class="hold-transition sidebar-mini">
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
                            <button class="btn btn-success btn-sm" onclick="addBarangay()">
                                <i class="fas fa-home"></i> Add
                            </button>
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
                            <button class="btn btn-primary btn-sm" onclick="addData()">
                                <i class="fas fa-plus"></i> Add
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

    <!-- JavaScript code for button functionalities -->
    <script>
        function addData() {
            // Add code here for adding data
            alert("Data added!");
        }

        function deleteData() {
            // Add code here for deleting data
            alert("Data deleted!");
        }

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
                        <a href="/resident" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Resident</p>
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

</html>

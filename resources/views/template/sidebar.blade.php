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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">

                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 22" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                        <p>Predictive Analytics</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="/resident-illness" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 24" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                        <p>Manage Resident Illness</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 23" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <p>Manage Data Entry <i class="right fas fa-angle-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block">
                        <li class="nav-item">
                        <a href="/barangay" class="nav-link">
                        <svg width="23" height="23" viewBox="0 0 32 40" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M27 29H5V17H3.235c-1.138 0-1.669-1.419-.812-2.168L14.131 3.745a2.716 2.716 0 0 1 3.737 0l11.707 11.087c.858.748.327 2.168-.812 2.168H27v12z" fill="none" stroke="#f8f8f8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" class="stroke-000000"></path><path d="M20 29h-8v-6a4 4 0 0 1 4-4h0a4 4 0 0 1 4 4v6z" fill="none" stroke="#f8f8f8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" class="stroke-000000"></path></svg>
                        <p>Barangay</p>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="/purok" class="nav-link">
                            <svg width="23" height="23" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path fill="#f8f8f8" fill-opacity=".01" d="M0 0h48v48H0z" class="fill-ffffff"></path><g stroke="#f8f8f8" stroke-width="4" class="stroke-000000"><path d="M11 6 6 42M37 6l4.964 35.955M24 6v6M24 35v7M24 20v7"></path></g></g></svg>
                                <p>Purok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/resident" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 23" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                                <p>Residence</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/illness" class="nav-link">
                            <svg  width="23" height="23" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M616.4 135.5c-28.47-28.48-73.59-30.63-105.3-7.184h-31.11c-17.88-.115-35.34-5.772-50.22-15.69l-42.26-28.18c-40.86-27.25-94.11-27.25-134.1 0l-42.74 28.5c-14.56 9.711-31.65 15.1-49.16 15.21l-32.61.144c-31.7-23.4-76.8-21.3-105.3 7.2-31.18 31.17-31.5 82.11-.75 113.7C99.21 326.7 168.9 416 320 416c149.3 0 217.4-85.87 297.1-166.8 30.8-31.6 30.5-82.5-.7-113.7zM112 294.9l-66.21-68.1c-18.63-19.1-18.44-49.9.43-68.7 17.9-17.85 46.55-18.43 65.76-2.496L112 294.9zM400 336H240c-8.842 0-16.02-7.095-16.02-15.93 0-8.836 7.174-16.06 16.02-16.06h159.1c8.842 0 16 7.225 16 16.06.9 8.83-6.2 15.93-15.1 15.93zm32-64H208c-8.842 0-16.02-7.142-16.02-15.98 0-8.834 7.191-15.89 16.03-15.89h223.1c8.842 0 15.99 7.054 15.99 15.89.9 8.88-6.2 15.98-15.1 15.98zm0-63.8H208.1c-8.842 0-16.03-7.337-16.03-16.17 0-8.836 7.191-15.8 16.03-15.8h223.1c8.842 0 15.99 6.96 15.99 15.8.81 8.87-6.29 16.17-15.19 16.17zm162.2 18.6-66.23 67.1.027-134.8c0-.145-.07-.268-.082-.408V155.6c19.21-15.1 47.89-15.46 65.85 2.449C612.7 176.9 612.8 207.7 594.2 226.8z" fill="#f8f8f8" class="fill-000000"></path></svg>
                                <p>Illness Entry</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Logout &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</body>
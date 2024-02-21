<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard

                    </p>
                </a>

            </li>
            <li class="nav-item">
                <a href="/sickness-category" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Sickness Categories</p>
                </a>

            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->

    <!-- resources/views/sidebar.blade.php -->

     <!-- Test side bar by Ban -->
 <div class="sidebar">
     <h2>Barangay</h2>
     <ul>
         @foreach($barangays as $barangay)
             <li>{{ $barangay }}</li>
         @endforeach
     </ul>

     <h2>Purok</h2>
     <ul>
         @foreach($puroks as $purok)
             <li>{{ $purok }}</li>
         @endforeach
     </ul>

     <h2>Illness</h2>
     <ul>
         @foreach($illnesses as $illness)
             <li>
                 {{ $illness }}
                 <table>
                     <thead>
                         <tr>
                             <th>Name</th>
                             <th>Status</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($sickPeople[$illness] as $person)
                             <tr>
                                 <td>{{ $person['name'] }}</td>
                                 <td>{{ $person['status'] }}</td>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
                 <form action="{{ route('addSickPerson') }}" method="post">
                     @csrf
                     <label for="name">Name:</label>
                     <input type="text" name="name" required>
                    
                     <label for="status">Status:</label>
                     <input type="text" name="status" required>
                    
                     <input type="hidden" name="illness" value="{{ $illness }}">
                    
                     <button type="submit">Add Sick Person</button>
                 </form>
             </li>
         @endforeach
     </ul>
 </div>


</div>
<!-- /.sidebar -->

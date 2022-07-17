<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('Admin/asset/css/app1.css') }}" rel="stylesheet">
    <link href="Admin/asset/css/ltr.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <style>
       input {
   border: 5px solid #4195fc; /* some kind of blue border */

/* other CSS styles */

/* round the corners */
    -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
        border-radius: 7px;


/* make it glow! */
   -webkit-box-shadow: 2px 2px 5px #4195fc;
   -moz-box-shadow: 2px 2px 5px #4195fc;
        box-shadow: 2px 2px 5px #4195fc;}
        select {
   border: 5px solid #4195fc; /* some kind of blue border */

/* other CSS styles */

/* round the corners */
    -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
        border-radius: 7px;


/* make it glow! */
   -webkit-box-shadow: 2px 2px 5px #4195fc;
   -moz-box-shadow: 2px 2px 5px #4195fc;
        box-shadow: 2px 2px 5px #4195fc;}
        </style>
        <!-- Font -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link href="{{ URL::asset('Admin/asset/css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">


        <!--- Style css -->
        <link href="{{ URL::asset('Admin/asset/css/style.css') }}" rel="stylesheet">

        <!--- Style css -->
            <link href="{{ URL::asset('Admin/asset/css/ltr.css') }}" rel="stylesheet">
@if
@elseif ()
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AlKhamsen</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="Admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="Admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="Admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="Admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="Admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="Admin/css/vertical-layout-light/style.css">
  <!-- endinject -->

</head>
<body  class="g-sidenav-show  bg-gray-200">
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="row">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="#"><img src="assets/img/emirate.jpg" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/img/emirate.jpg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                  <li class="mb-2">
                    <div class="d-flex py-1">
                    <div class="my-auto">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item border-radius-md"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();"><i class="bx bx-log-out"></i>
                                    <div class="d-flex flex-column justify-content-center">
                                        <i class="ti-power-off text-primary"></i>   <span class="font-weight-bold">{{ __('Log Out') }}</span>
                  </a>
                </form>
                    </div>
                    </div>
                  </li>
                </div>
              </li></ul></div>
</div>
</nav>
    <div class="container-fluid page-body-wrapper">

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="{{route('users.index')}}" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
              </a>
          </ul>
        </nav>
        <div class="container">
            <br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(session()->has('Add'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('Add') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('delete') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('edit') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <br>
            <br>
             <form action="{{url('search')}}" method="get">
                <h5>Search User<h5>
                <input type="text"
                name="search" size="50" style="border: 2px solid black">
                <br>
                <br>
               <input type="submit" value="Search" class="btn btn-success">
          </form>
            <br>
            <br>
            <br>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                Add User
            </button>
            <br>
            <br>
        <div class="table-responsive">
            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                style="text-align: center">
                <thead>
                    <tr style="height:30px">
                        <th style= "background-color: #04AA6D;"><b>Full Name</b></th>
                        <th style= "background-color: #04AA6D;"><b>Full Name (Arabic)</b></th>
                        <th style= "background-color: #04AA6D;"><b>Full Name (Turkey)</b></th>
                        <th style= "background-color: #04AA6D;"><b>E-mail</b></th>
                        <th style= "background-color: #04AA6D;"><b>Description</b></th>
                        <th style= "background-color: #04AA6D;"><b>Description (Arabic)</b></th>
                        <th style= "background-color: #04AA6D;"><b>Description (Turkey)</b></th>
                        <th style= "background-color: #04AA6D;"><b>Profile Picture </b></th>
                        <th style= "background-color: #04AA6D;"><b>Operations</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td style="border-color:green"><b>{{ $user->name }}</b></td>
                            <td style="border-color:green"><b>{{ $user->nameAr }}</b></td>
                            <td style="border-color:green"><b>{{ $user->nameTr }}</b></td>
                            <td style="border-color: green" ><b>{{ $user->email }}</b></td>
                            <td  style="border-color: green"><b>{!! nl2br($user->description) !!}</b></td>
                            <td  style="border-color: green"><b>{!! nl2br($user->descriptionAr) !!}</b></td>
                            <td  style="border-color: green"><b>{!! nl2br($user->descriptionTr) !!}</b></td>
                            <td style="border-color:green"> <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-full h-30 w-30 object-cover"></td>
                            <td style="border-color: green">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#edit{{ $user->id }}"
                                    title="Edit User"><i class="fa fa-edit"></i></button>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{ $user->id }}"
                                    title="Delete">Delete</button>
                            </td>

                        </tr>
                        <!-- delete_modal_Grade -->
                        <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                           id="exampleModalLabel">
                                           Delete User
                                       </h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                               aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form action="{{ route('users.destroy', 'test') }}"
                                             method="post">
                                           {{ method_field('Delete') }}
                                           @csrf
                                           <input id="id" type="hidden" name="id" class="form-control"
                                                  value="{{ $user->id }}">Do You Want To Delete {{ $user->name }} ?
                                           <div class="modal-footer">

                                               <button type="button" class="btn btn-secondary"
                                                       data-dismiss="modal">close</button>
                                               <button type="submit"
                                                       class="btn btn-danger">Submit</button>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        Edit User
                                    </h5>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>
                                <div class="modal-body">
                                    <!-- add_form -->
                                    <form action="{{ route('users.update', 'test') }}" method="post">
                                        {{ method_field('patch') }}
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="Name"
                                                    class="mr-sm-2">Name
                                                    :</label>
                                                <input id="Name" type="text" name="name"
                                                    class="form-control"
                                                    value="{{ $user->name}}"
                                                    required>
                                                <input id="id" type="hidden" name="id" class="border"
                                                    value="{{ $user->id }}">
                                                    <label for="Name"
                                                    class="mr-sm-2">Name (Arabic)
                                                    :</label>
                                                <input id="Name" type="text" name="nameAr"
                                                    class="form-control"
                                                    value="{{ $user->nameAr}}"
                                                    required>
                                                <input id="id" type="hidden" name="id" class="border"
                                                    value="{{ $user->id }}">
                                                    <label for="Name"
                                                    class="mr-sm-2">Name (Turkey)
                                                    :</label>
                                                <input id="Name" type="text" name="nameTr"
                                                    class="form-control"
                                                    value="{{ $user->nameTr}}"
                                                    required>
                                                <input id="id" type="hidden" name="id" class="border"
                                                    value="{{ $user->id }}">
                                        <div class="form-group">
                                            <label
                                                for="exampleFormControlTextarea1">Description
                                                :</label>
                                            <textarea class="form-control"name="description"
                                                id="exampleFormControlTextarea1" rows ='10'cols ='80' required
                                                >{{ $user->description}}</textarea>
                                                <label
                                                for="exampleFormControlTextarea1">Description (Arabic)
                                                :</label>
                                            <textarea class="form-control"name="descriptionAr"
                                                id="exampleFormControlTextarea1" rows ='10'cols ='80' required
                                                >{{ $user->descriptionAr}}</textarea>
                                                <label
                                                for="exampleFormControlTextarea1">Description (Turkey)
                                                :</label>
                                            <textarea class="form-control"name="descriptionTr"
                                                id="exampleFormControlTextarea1" rows ='10'cols ='80' required
                                                >{{ $user->descriptionTr}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="exampleFormControlTextarea1">email
                                                :</label>
                                            <input class="form-control" name="email"
                                                id="exampleFormControlTextarea1"
                                                value="{{ $user->email}}" required>
                                        </div>
                                        <br><br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit"
                                                class="btn btn-success">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
           </table>
       </div>
   </div>
</div>
</div>
<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                {{ ('Add User') }}
            </h5>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- add_form -->
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="Name" class="mr-sm-2">Full Name
                            :</label>
                        <input id="name" type="text" name="name" class="form-control" required>
                        <label for="Name" class="mr-sm-2">Full Name (Arabic)
                            :</label>
                        <input id="name" type="text" name="nameAr" class="form-control" required>
                        <label for="Name" class="mr-sm-2">Full Name (Turkey)
                            :</label>
                        <input id="name" type="text" name="nameTr" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description
                        :</label>
                    <textarea class="form-control" type="text" name="description" id="exampleFormControlTextarea1"
                    rows ='10'cols ='80' required></textarea>
                    <label for="exampleFormControlTextarea1">Description (Arabic)
                        :</label>
                    <textarea class="form-control" type="text" name="descriptionAr" id="exampleFormControlTextarea1"
                    rows ='10'cols ='80' required></textarea>
                    <label for="exampleFormControlTextarea1">Description (Turkey)
                        :</label>
                    <textarea class="form-control" type="text" name="descriptionTr" id="exampleFormControlTextarea1"
                    rows ='10'cols ='80' required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">E-mail
                        :</label>
                    <input class="form-control" name="email" id="exampleFormControlTextarea1"
                        rows="3" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Password
                        :</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlTextarea1"
                        rows="3" required>
                </div>
                <br><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>

    </div>
</div>
</div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="Admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="Admin/js/off-canvas.js"></script>
    <script src="Admin/js/hoverable-collapse.js"></script>
    <script src="Admin/js/template.js"></script>
    <script src="Admin/js/settings.js"></script>
    <script src="Admin/js/todolist.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="Admin/assets/js/material-dashboard.min.js?v=3.0.0"></script>
    <script src="{{ URL::asset('Admin/asset/js/bootstrap-datatables/en/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('Admin/asset/js/bootstrap-datatables/en/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('Admin/asset/js/jquery-3.3.1.min.js') }}"></script>
   <!-- plugins-jquery -->
   <script src="{{ URL::asset('Admin/asset/js/plugins-jquery.js') }}"></script>
   <!-- plugin_path -->
   <script src="{{ URL::asset('Admin/asset/js/custom.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="Admin/js/dashboard.js"></script>
    <script src="Admin/js/Chart.roundedBarCharts.js"></script>
    <script src="js/users.js"></script>
    <script src="{{ URL::asset('Admin/asset/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('Admin/asset/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->


<!-- chart -->

<!-- validation -->
<script src="{{ URL::asset('Admin/asset/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('Admin/asset/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('Admin/asset/js/custom.js') }}"></script>


<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>


    <!-- End custom js for this page-->
  </body>

  </html>

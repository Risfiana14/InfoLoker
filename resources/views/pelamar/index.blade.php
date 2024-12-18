<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Pelamar</title>
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>
<body>
    <div class="container">
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
              <!-- Logo Header -->
              <div class="logo-header" data-background-color="dark">
                <a href="index.html" class="logo">
                  <img
                    src="assets/img/kaiadmin/logo_light.svg"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20"
                  />
                </a>
                <div class="nav-toggle">
                  <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                  </button>
                  <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                  </button>
                </div>
                <button class="topbar-toggler more">
                  <i class="gg-more-vertical-alt"></i>
                </button>
              </div>
              <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
              <div class="sidebar-content">
                <ul class="nav nav-secondary">
                  <li class="nav-item active">
                    <a
                      data-bs-toggle="collapse"
                      href="#dashboard"
                      class="collapsed"
                      aria-expanded="false"
                    >
                      <i class="fas fa-home"></i>
                      <p>Dashboard</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="{{ route('dashboard')}}">
                            <span class="sub-item">Dashboard</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-section">
                    <span class="sidebar-mini-icon">
                      <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                      <i class="fas fa-layer-group"></i>
                      <p>Menu Perusahaan</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="components/avatars.html">
                            <span class="sub-item">Avatars</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/buttons.html">
                            <span class="sub-item">Buttons</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/gridsystem.html">
                            <span class="sub-item">Grid System</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/panels.html">
                            <span class="sub-item">Panels</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/notifications.html">
                            <span class="sub-item">Notifications</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/sweetalert.html">
                            <span class="sub-item">Sweet Alert</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/font-awesome-icons.html">
                            <span class="sub-item">Font Awesome Icons</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/simple-line-icons.html">
                            <span class="sub-item">Simple Line Icons</span>
                          </a>
                        </li>
                        <li>
                          <a href="components/typography.html">
                            <span class="sub-item">Typography</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                      <i class="fas fa-th-list"></i>
                      <p>Status Lamaran</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="{{ route('pelamar.index')}}">
                            <span class="sub-item">pelamar</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                      <i class="fas fa-pen-square"></i>
                      <p>Forms</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="forms/forms.html">
                            <span class="sub-item">Basic Form</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="/role">
                      <i class="fas fa-desktop"></i>
                      <p>Role</p>
                    </a>   
                    <div class="collapse" id="tables">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="tables/tables.html">
                            <span class="sub-item">Basic Table</span>
                          </a>
                        </li>
                        <li>
                          <a href="tables/datatables.html">
                            <span class="sub-item">Datatables</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                      <i class="fas fa-map-marker-alt"></i>
                      <p>Maps</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="maps/googlemaps.html">
                            <span class="sub-item">Google Maps</span>
                          </a>
                        </li>
                        <li>
                          <a href="maps/jsvectormap.html">
                            <span class="sub-item">Jsvectormap</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#charts">
                      <i class="far fa-chart-bar"></i>
                      <p>Charts</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                      <ul class="nav nav-collapse">
                        <li>
                          <a href="charts/charts.html">
                            <span class="sub-item">Chart Js</span>
                          </a>
                        </li>
                        <li>
                          <a href="charts/sparkline.html">
                            <span class="sub-item">Sparkline</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Widgets</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../documentation/index.html">
                      <i class="fas fa-file"></i>
                      <p>Documentation</p>
                      <span class="badge badge-secondary">1</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                      <i class="fas fa-bars"></i>
                      <p>Menu Levels</p>
                      <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                      <ul class="nav nav-collapse">
                        <li>
                          <a data-bs-toggle="collapse" href="#subnav1">
                            <span class="sub-item">Level 1</span>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="subnav1">
                            <ul class="nav nav-collapse subnav">
                              <li>
                                <a href="#">
                                  <span class="sub-item">Level 2</span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="sub-item">Level 2</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <a data-bs-toggle="collapse" href="#subnav2">
                            <span class="sub-item">Level 1</span>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="subnav2">
                            <ul class="nav nav-collapse subnav">
                              <li>
                                <a href="#">
                                  <span class="sub-item">Level 2</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <a href="#">
                            <span class="sub-item">Level 1</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="text-center mb-4">Daftar Pelamar</h1>
          <div class="table-responsive">
              <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                      <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>No. HP</th>
                          <th>CV</th>
                          <th>Perusahaan</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($jobApplicants as $item)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->address }}</td>
                              <td>{{ $item->phone_number }}</td>
                              <td>
                                  <a href="{{ asset('uploads/cv/' . $item->cv) }}" class="btn btn-sm btn-primary" target="_blank">Lihat CV</a>
                              </td>
                              <td>{{ $item->company->name }}</td>
                              <td>
                                  <a href="{{ route('pelamar.show', $item->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                  <form action="{{ route('pelamar.destroy', $item->id) }}" method="post" style="display: inline;">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
        </div>
            <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f9f9f9;
            }
            
            h1 {
                font-size: 28px;
                font-weight: bold;
                color: #333;
            }

            .container {
                max-width: 1200px;
                margin: 20px auto;
                margin-left: 19%;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ddd;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }


            .table {
                width: 100%;
                border-collapse: collapse;
                background-color: #fff;
            }

            .table th {
                background-color: #343a40;
                color: #fff;
                text-align: center;
            }
            
            .table td {
                vertical-align: middle;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tr:hover {
                background-color: #e6f7ff;
            }

            .btn {
                padding: 5px 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin: 2px;
                transition: background-color 0.3s, opacity 0.3s;
            }

            .btn-info {
                background-color: #5bc0de;
                color: #fff;
            }

            .btn-warning {
                background-color: #f0ad4e;
                color: #fff;
            }

            .btn-danger {
                background-color: #d9534f;
                color: #fff;
            }

            .btn:hover {
                opacity: 0.8;
            }
            </style>
            <script src="assets/js/core/jquery-3.7.1.min.js"></script>
            <script src="assets/js/core/popper.min.js"></script>
            <script src="assets/js/core/bootstrap.min.js"></script>
        
            <!-- jQuery Scrollbar -->
            <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        
            <!-- Chart JS -->
            <script src="assets/js/plugin/chart.js/chart.min.js"></script>
        
            <!-- jQuery Sparkline -->
            <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
        
            <!-- Chart Circle -->
            <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
        
            <!-- Datatables -->
            <script src="assets/js/plugin/datatables/datatables.min.js"></script>
        
            <!-- Bootstrap Notify -->
            <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
        
            <!-- jQuery Vector Maps -->
            <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
            <script src="assets/js/plugin/jsvectormap/world.js"></script>
        
            <!-- Sweet Alert -->
            <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
        
            <!-- Kaiadmin JS -->
            <script src="assets/js/kaiadmin.min.js"></script>
        
            <!-- Kaiadmin DEMO methods, don't include it in your project! -->
            <script src="assets/js/setting-demo.js"></script>
            <script src="assets/js/demo.js"></script>
                <script>
                $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#177dff",
                    fillColor: "rgba(23, 125, 255, 0.14)",
                });

                $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#f3545d",
                    fillColor: "rgba(243, 84, 93, .14)",
                });

                $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#ffa534",
                    fillColor: "rgba(255, 165, 52, .14)",
                });
                </script>
        </body>
    </html>


<?php include "./adminInclude/adminHeader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>NMK - ADMIN</title>

    <!-- Bootstrap -->
    <link
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="../vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link
      href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
    />
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link
      href="../vendors/bootstrap-daterangepicker/daterangepicker.css"
      rel="stylesheet"
    />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <style>
      th,
      td {
        text-align: center;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0">
              <a href="index.html" class="site_title"
                ><img
                  src="../docs/images/LOGO.png"
                  alt=""
                  style="height: 50px"
                />
                <span>ADMIN</span></a
              >
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img
                  src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                  alt="..."
                  class="img-circle profile_img"
                />
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2>Khánh Nguyễn</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div
              id="sidebar-menu"
              class="main_menu_side hidden-print main_menu"
            >
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="./AFormIndex.html"
                      ><i class="fa fa-home"></i> Trang chủ
                    </a>
                  </li>
                  <li>
                    <a
                      ><i class="fa fa-inbox"></i> Sản phẩm
                      <span class="fa fa-chevron-down"></span
                    ></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="./AListItem.html">Danh sách sản phẩm</a>
                      </li>
                      <li>
                        <a href="./AAddItem.html">Thêm sản phẩm</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="./AOrdered.html"
                      ><i class="fa fa-edit"></i> Đơn hàng</a
                    >
                  </li>
                  <li>
                    <a href="./AUser.html"
                      ><i class="fa fa-user"></i> Khách hàng
                    </a>
                  </li>
                  <li>
                    <a href="./AComment.html"
                      ><i class="fa fa-comment-o"></i>Đánh giá
                    </a>
                  </li>
                  <li>
                    <a href="./ARevenue.html"
                      ><i class="fa fa-bar-chart-o"></i> Doanh thu
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
              <ul class="navbar-right" style="position: relative">
                <li class="nav-item dropdown open" style="padding-left: 15px">
                  <a
                    href="javascript:;"
                    class="user-profile dropdown-toggle"
                    aria-haspopup="true"
                    id="navbarDropdown"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                      alt=""
                    />Khánh Nguyễn
                  </a>
                  <div
                    class="dropdown-menu dropdown-usermenu pull-right"
                    aria-labelledby="navbarDropdown"
                  >
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <a class="dropdown-item" href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="login.html"
                      ><i class="fa fa-sign-out pull-right"></i> Log Out</a
                    >
                  </div>
                </li>

                <li
                  role="presentation"
                  class="nav-item dropdown open"
                  style="position: absolute; top: 11px; right: 172px"
                >
                  <a
                    href="javascript:;"
                    class="dropdown-toggle info-number"
                    id="navbarDropdown1"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="fa fa-envelope-o" style="font-size: 18px"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul
                    class="dropdown-menu list-unstyled msg_list"
                    role="menu"
                    aria-labelledby="navbarDropdown1"
                  >
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"
                          ><img src="images/img.jpg" alt="Profile Image"
                        /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie
                          makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Khách hàng<small></small></h3>
              </div>

              <div class="title_right">
                <div
                  class="
                    col-md-5 col-sm-5 col-xs-12
                    form-group
                    pull-right
                    top_search
                  "
                >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tìm kiếm ..."
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-secondary"
                        type="button"
                        style="background-color: #2a3f54; color: white"
                      >
                        Tìm
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2 style="color: black; font-size: 28px; float: none">
                      Thông tin khách hàng
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable-checkbox"
                            class="
                              table table-striped table-bordered
                              bulk_action
                            "
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Thao tác</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>khanhB1909929@student.ctu.edu.vn</td>
                                <td>Nguyễn Minh Khánh</td>
                                <td>0784432140</td>

                                <td>
                                  46/14, KV5, phường Bình Thủy, Quận Bình Thủy,
                                  Thành phố Cần Thơ
                                </td>

                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <td>02</td>
                                <td>khanhnguyn123@gmail.com</td>
                                <td>Nguyễn Việt Khánh</td>
                                <td>01216031410</td>

                                <td>
                                  47/24, KV6, phường Trà Nóc, Quận Bình Thủy,
                                  Thành phố Cần Thơ
                                </td>

                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>tritr1254@gmail.com</td>
                                <td>Trần Minh Trí</td>
                                <td>024599945</td>

                                <td>
                                  23/10, KV2, phường Xuân Khánh, Quận Ninh Kiều,
                                  Thành phố Cần Thơ
                                </td>

                                <td>
                                  <i
                                    class="fa fa-edit"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                  <i
                                    class="fa fa-close"
                                    style="font-size: 20px; color: red"
                                  ></i>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
  <?php include "./adminInclude/adminFooter.php"; ?>
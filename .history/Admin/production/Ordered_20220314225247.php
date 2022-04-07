<?php include "./adminInclude/adminHeader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../docs/images/LOGO.png" type="image/ico" />

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
    <link rel="stylesheet" href="../docs/css/AFormIndex.css" />
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
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
                <h3>Đơn hàng<small></small></h3>
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
                      placeholder="Tìm kiếm..."
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
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Đơn hàng chưa được duyệt<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Ngày giao hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Tổng tiền</th>
                                <th>Xem chi tiết</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>FC141000</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">2:33pm</div>
                                    <div class="table-time-date">
                                      10/12/2021
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div
                                    class="date-wrap"
                                    style="position: relative"
                                  >
                                    <input
                                      type="text"
                                      value="dd/mm/yyyy"
                                      style="
                                        padding: 4px 4px 4px 6px;
                                        width: 140px;
                                        font-size: 16px;
                                      "
                                    />
                                    <i
                                      class="fa fa-calendar"
                                      style="
                                        position: absolute;
                                        top: 10px;
                                        right: 20px;
                                        font-size: 16px;
                                      "
                                    ></i>
                                  </div>
                                </td>
                                <td>Chuyển khoản</td>
                                <td>
                                  <select style="padding: 4px 8px">
                                    <option value="">Chưa duyệt</option>
                                    <option value="">Đã duyệt</option>
                                  </select>
                                </td>
                                <td>30.990.990đ</td>
                                <td>
                                  <a
                                    href="./AOrderDes.html"
                                    class="table-see-wrap"
                                    style="
                                      color: #001fff;
                                      text-decoration: none;
                                    "
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>02</td>
                                <td>FC348600</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">4:12pm</div>
                                    <div class="table-time-date">7/12/2021</div>
                                  </div>
                                </td>
                                <td>
                                  <div
                                    class="date-wrap"
                                    style="position: relative"
                                  >
                                    <input
                                      type="text"
                                      value="dd/mm/yyyy"
                                      style="
                                        padding: 4px 4px 4px 6px;
                                        width: 140px;
                                        font-size: 16px;
                                      "
                                    />
                                    <i
                                      class="fa fa-calendar"
                                      style="
                                        position: absolute;
                                        top: 10px;
                                        right: 20px;
                                        font-size: 16px;
                                      "
                                    ></i>
                                  </div>
                                </td>
                                <td>COD</td>
                                <td>
                                  <select style="padding: 4px 8px">
                                    <option value="">Chưa duyệt</option>
                                    <option value="">Đã duyệt</option>
                                  </select>
                                </td>
                                <td>23.490.000đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC154923</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">7:45am</div>
                                    <div class="table-time-date">8/12/2021</div>
                                  </div>
                                </td>
                                <td>
                                  <div
                                    class="date-wrap"
                                    style="position: relative"
                                  >
                                    <input
                                      type="text"
                                      value="dd/mm/yyyy"
                                      style="
                                        padding: 4px 4px 4px 6px;
                                        width: 140px;
                                        font-size: 16px;
                                      "
                                    />
                                    <i
                                      class="fa fa-calendar"
                                      style="
                                        position: absolute;
                                        top: 10px;
                                        right: 20px;
                                        font-size: 16px;
                                      "
                                    ></i>
                                  </div>
                                </td>
                                <td>Trả góp</td>
                                <td>
                                  <select style="padding: 4px 8px">
                                    <option value="">Chưa duyệt</option>
                                    <option value="">Đã duyệt</option>
                                  </select>
                                </td>
                                <td>19.990.000đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="prev-ordered">
                          <a
                            href="./AOrdered.html"
                            style="
                              font-size: 18px;
                              line-height: 18px;
                              background-color: #2a3f54;
                              padding: 8px 16px;
                              color: white; ;
                            "
                            >Lưu</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Đơn hàng đã được duyệt<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Ngày giao hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Tổng tiền</th>
                                <th>Xem chi tiết</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>02</td>
                                <td>FC356423</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">2:45pm</div>
                                    <div class="table-time-date">6/12/2021</div>
                                  </div>
                                </td>
                                <td>7/12/2021</td>
                                <td>Chuyển khoản</td>
                                <td>Đã duyệt</td>
                                <td>25.990.990đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC141750</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">5:18pm</div>
                                    <div class="table-time-date">5/12/2021</div>
                                  </div>
                                </td>
                                <td>6/12/2021</td>
                                <td>Chuyển khoản</td>
                                <td>Đã duyệt</td>
                                <td>30.990.000đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC195263</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">7:33pm</div>
                                    <div class="table-time-date">4/12/2021</div>
                                  </div>
                                </td>
                                <td>5/12/2021</td>
                                <td>Chuyển khoản</td>
                                <td>Đã duyệt</td>
                                <td>39.990.000đ</td>
                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
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
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title" style="width: 100%; text-align: center">
                    <h2 style="width: 100%; color: black; font-size: 28px">
                      Đơn hàng đã hủy<small></small>
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table
                            id="datatable"
                            class="table table-striped table-bordered"
                            style="width: 100%"
                          >
                            <thead>
                              <tr>
                                <th>ID Khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt hàng</th>

                                <th>Tình trạng đơn hàng</th>
                                <th>Lý do hủy</th>

                                <th>Xem chi tiết</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>FC143584</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">4:13pm</div>
                                    <div class="table-time-date">5/12/2021</div>
                                  </div>
                                </td>

                                <td>Đã Hủy</td>
                                <td>Đặt nhầm sản phẩm</td>

                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>02</td>
                                <td>FC845612</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">5:53pm</div>
                                    <div class="table-time-date">4/12/2021</div>
                                  </div>
                                </td>

                                <td>Đã Hủy</td>
                                <td>Kinh tế không đủ</td>

                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>FC456328</td>
                                <td>
                                  <div class="table-time-wrap">
                                    <div class="table-time-hour">3:33pm</div>
                                    <div class="table-time-date">3/12/2021</div>
                                  </div>
                                </td>
                                <td>Đã Hủy</td>
                                <td>Không muốn mua</td>

                                <td>
                                  <div
                                    class="table-see-wrap"
                                    style="color: #001fff"
                                  >
                                    <i
                                      class="fa fa-eye"
                                      style="font-size: 20px"
                                    ></i>
                                  </div>
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
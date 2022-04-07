<?php include "./adminInclude/adminHeader.php"; ?>
        <!-- /top navigation -->

        <!-- page content -->
         <style>
      .form-control {
        height: auto;
      }
      label {
        font-size: 16px;
      }
    </style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sản phẩm</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tìm kiếm ..."
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-default"
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
                  <div class="x_title" style="text-align: center; width: 100%">
                    <h2 style="font-size: 28px; float: none; color: black">
                      Thêm sản phẩm
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Tên sản phẩm:
                        </label>
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="productName"
                            placeholder="Tên sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Danh mục sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <select name="" id="" class="form-control">
                            <option value="">---Danh mục sản phẩm---</option>
                            <option value="">Laptop Gaming</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Hình ảnh sản phẩm sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="file"
                            class="form-control"
                            name="image"
                            placeholder="Loại sản phẩm"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Giá sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="price"
                            placeholder="Giá sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Số lượng sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="quantity"
                            placeholder="Số lượng sản phẩm ..."
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Mô tả chi tiết sản phẩm:</label
                        >
                        <div class="col-md-9 col-sm-9"></div>
                      </div>
                      <div class="x_content">
                        <div class="">
                          <textarea name="" id="" cols="100" rows="10" style="resize: horizontal;"></textarea>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group" style="text-align: center">
                        <div
                          class="col-md-12 col-sm-12 offset-md-3"
                          style="margin: 0"
                        >
                          <button
                            type="button"
                            class="btn btn-primary"
                            style="margin: 0 8px; width: 90px"
                          >
                            Hủy
                          </button>
                          <button
                            type="reset"
                            class="btn btn-primary"
                            style="margin: 0 8px; width: 90px"
                          >
                            Reset
                          </button>
                          <button
                            type="submit"
                            class="btn btn-success"
                            style="margin: 0 8px; width: 90px"
                          >
                            Thêm
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
 <?php include "./adminInclude/adminFooter.php"; ?>
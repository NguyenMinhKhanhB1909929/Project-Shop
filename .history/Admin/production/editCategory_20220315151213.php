<?php include "./adminInclude/adminHeader.php"; ?>
<?php include "../../classes/category.php"; ?>
<?php
  if(isset($_GET['catId']) && $_GET['catId']!=NULL) {
    $id = $_GET['catId'];
  }
  $cat = new category();
?>
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
                <h3>Danh mục sản phẩm</h3>
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
                      Sửa danh mục sản phẩm
                    </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="addCategory.php" method="post" token_name="">
                      <?php
                        if(isset($insertCat)) {
                          echo $insertCat;
                        }
                      ?>
                      <?php
                        $get_category_name = $cat->getCatById($id);
                        if($get_category_name) {
                          while($result = $get_category_name->fetch_assoc()) {
                      ?>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3"
                          >Tên danh mục:
                        </label>
                        <div class="col-md-9 col-sm-9">
                          <input
                            type="text"
                            class="form-control"
                            name="catName";
                            placeholder="Vui lòng nhập tên danh mục muốn thêm..."
                            value=""
                          />
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
                            type="submit"
                            class="btn btn-success"
                            style="margin: 0 8px; width: 90px"
                          >
                            Sửa
                          </button>
                        </div>
                      </div>
                      <?php }
                        }
                        ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include "./adminInclude/adminFooter.php"; ?>
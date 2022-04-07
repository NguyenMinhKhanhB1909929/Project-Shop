<?php include "../nienluan/include/header.php"; ?>

      <div class="app__container">
        <div class="grid">
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <a
              href="./FormUser.html"
              class=""
              style="color: inherit; text-decoration: none"
              >Trang chủ</a
            >
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="link__curr-text isHere">Tài khoản của tôi</span>
          </div>
          <div class="grid__row app__content">
            <div class="grid__column-2">
              <div class="myuser__navbar">
                <div class="myuser__navbar-des-wrap">
                  <div class="myuser__navbar-des-img-wrap">
                    <img
                      src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                      alt=""
                      class="myuser__navbar-des-img"
                    />
                  </div>
                  <div class="myuser__navbar-des-name-wrap">
                    <div class="myuser__navbar-des-name">KhanhB1909929</div>
                    <div class="myuser__navbar-des-setting">
                      <i class="myuser__navbar-des-setting-icon fas fa-pen"></i>
                      <span class="myuser__navbar-des-setting-title"
                        >Sửa hồ sơ</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="myuser__navbar-des">
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-user"></i>
                  <span class="myuser__navbar-des-title-text"
                    >Tài khoản của tôi</span
                  >
                </div>
                <a
                  href="./myuser.html"
                  class="myuser__navbar-des-content ishover"
                  >Hồ sơ</a
                >
                <a href="./changePass.html" class="myuser__navbar-des-content"
                  >Đổi mật khẩu</a
                >
                <div class="myuser__navbar-des-title-wrap">
                  <i class="myuser__navbar-des-title-icon fas fa-clipboard"></i>
                  <a href="./myorder.html" class="myuser__navbar-des-title-text"
                    >Đơn mua</a
                  >
                </div>
              </div>
            </div>

            <div class="grid__column-10">
              <div class="myuser__content">
                <h1 class="myuser__content-title">Hồ sơ của tôi</h1>
                <div class="myuser__container">
                  <div class="grid__col-7">
                    <div class="myuser__content-wrap">
                      <div class="myuser__content-name-wrap">
                        <div class="myuser__content-label">Tên Đăng nhập:</div>
                        <span class="myuser__content-name-input"
                          >KhanhB1909929</span
                        >
                      </div>
                      <div class="myuser__content-fullname-wrap">
                        <div class="myuser__content-label">Họ và tên:</div>
                        <input
                          type="text"
                          class="myuser__content-fullname-input"
                          value="Nguyễn Minh Khánh"
                        />
                      </div>
                      <div class="myuser__content-email-wrap">
                        <div class="myuser__content-label">Email:</div>
                        <span class="myuser__content-email-input"
                          >Kh*************@student.ctu.edu.vn</span
                        >
                        <a href="/" class="myuser__content-setting">Thay dổi</a>
                      </div>
                      <div class="myuser__content-phone-wrap">
                        <div class="myuser__content-label">Số điện thoại:</div>
                        <span class="myuser__content-phone-input"
                          >07******40</span
                        >
                        <a href="/" class="myuser__content-setting">Thay đổi</a>
                      </div>
                      <div class="myuser__content-sex-wrap">
                        <div class="myuser__content-label">Giới tính:</div>
                        <input
                          type="radio"
                          name="sex"
                          class="myuser__content-sex-input"
                          checked
                        />
                        <span class="myuser__content-sex-input-label">Nam</span>
                        <input
                          type="radio"
                          name="sex"
                          class="myuser__content-sex-input"
                        />
                        <span class="myuser__content-sex-input-label">Nữ</span>
                      </div>
                      <div class="myuser__content-date-wrap">
                        <div class="myuser__content-label">Ngày sinh:</div>
                        <select name="" id="" class="myuser__content-date">
                          <option value="">14</option>
                        </select>
                        <select name="" id="" class="myuser__content-date">
                          <option value="">Tháng 10</option>
                        </select>
                        <select name="" id="" class="myuser__content-date">
                          <option value="">2000</option>
                        </select>
                      </div>
                      <div class="myuser__content-address-wrap">
                        <div class="myuser__content-label">Địa chỉ:</div>
                        <input
                          type="text"
                          class="myuser__content-address-input"
                          value="46/14, KV5"
                        />
                      </div>
                      <div class="myuser__content-address-des-wrap">
                        <div class="myuser__content-label">Tỉnh thành:</div>
                        <select
                          name=""
                          id=""
                          class="myuser__content-address-des-select1"
                        >
                          <option
                            value=""
                            class="myuser__content-address-des-option"
                          >
                            Cần Thơ
                          </option>
                        </select>
                      </div>
                      <div class="myuser__content-address-des-wrap">
                        <div class="myuser__content-label">Quận huyện:</div>
                        <select
                          name=""
                          id=""
                          class="myuser__content-address-des-select1"
                        >
                          <option
                            value=""
                            class="myuser__content-address-des-option"
                          >
                            Quận Bình Thủy
                          </option>
                        </select>
                      </div>
                      <div class="myuser__content-address-des-wrap">
                        <div class="myuser__content-label">Phường xã:</div>
                        <select
                          name=""
                          id=""
                          class="myuser__content-address-des-select1"
                        >
                          <option
                            value=""
                            class="myuser__content-address-des-option"
                          >
                            Phường Bình Thủy
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="gird__col-5 myuser__content-main">
                    <div class="myuser__content-main-img-wrap">
                      <img
                        src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                        alt=""
                        class="myuser__content-main-img"
                      />
                    </div>
                    <div class="myuser__content-main-btn-wrap">
                      <a href="" class="myuser__content-main-btn">Chọn Ảnh</a>
                    </div>
                    <h4 class="myuser__content-main-des">
                      Dụng lượng file tối đa 1 MB
                    </h4>
                    <h4 class="myuser__content-main-des">
                      Định dạng:.JPEG, .PNG
                    </h4>
                  </div>
                </div>
                <div class="myuser__content-save-wrap">
                  <a href="/" class="myuser__content-save-btn">Lưu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 <?php include "../nienluan/include/footer.php"; ?>

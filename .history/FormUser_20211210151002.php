<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NMK-SHOP</title>
    <link rel="icon" href="./assets/img/LOGO.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
  </head>
  <body>
    <div class="app">
      <header class="header">
        <div class="grid">
          <nav class="header__navbar">
            <ul class="header__navbar-list">
              <li
                class="
                  header__navbar-item
                  header__navbar-item-has-qr
                  header__navbar-item--separate
                "
              >
                Tải ứng dụng
                <!-- Header QR CODE -->
                <div class="header__qr">
                  <img
                    src="./assets/img/qr_code.png"
                    alt="QR Code"
                    class="header__qr-img"
                  />
                  <div class="header__qr-apps">
                    <a href="" class="header__qr-link">
                      <img
                        src="./assets/img/googleplay.png"
                        alt="Google Play"
                        class="header__qr-dowload-img"
                      />
                    </a>
                    <a href="" class="header__qr-link">
                      <img
                        src="./assets/img/appstore.png"
                        alt="App Store"
                        class="header__qr-dowload-img"
                      />
                    </a>
                  </div>
                </div>
              </li>
              <li class="header__navbar-item header__navbar-item--separate">
                <span class="header__navbar-title--no-pointer">Kết nối</span>
                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-facebook"></i>
                </a>
                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-instagram"></i>
                </a>
              </li>
              <li class="header__navbar-item">
                <i class="header__navbar-icon fas fa-phone-volume"></i>
                1900.1410
              </li>
            </ul>
            <ul class="header__navbar-list">
              <li class="header__navbar-item header__navbar-item--has-notify">
                <a href="" class="header__navbar-item-link">
                  <i class="header__navbar-icon far fa-bell"></i>
                  Thông báo
                </a>
                <!-- Mo Thong Bao -->
                <div class="header__notify">
                  <header class="header__notify-header">
                    <h3>Thông báo mới nhận</h3>
                  </header>
                  <ul class="header__notify-list">
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/9f5349ef51304baade9400f49efe34c6_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name"
                            >Laptop Acer Nitro 5</span
                          >
                          <span class="header__notify-description"
                            >Laptop Acer Nitro 5 chính hãng</span
                          >
                        </div>
                      </a>
                    </li>
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/a8d348ae36cf07b53a3448a24ad64dcf_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name">
                            Laptop Asus chính hãng</span
                          >
                          <span class="header__notify-description"
                            >Laptop Asus 2021</span
                          >
                        </div>
                      </a>
                    </li>
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/994228a247d6ede2b7c785449527ce2f_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name"
                            >Macbook pro 2021</span
                          >
                          <span class="header__notify-description"
                            >Macbook pro 2021 khuyến mãi
                          </span>
                        </div>
                      </a>
                    </li>
                    <li class="header__notify-item">
                      <a
                        href=""
                        class="header__notify-link header__notify-item--viewed"
                      >
                        <img
                          class="header__notify-img"
                          src="https://cf.shopee.vn/file/7f7c772c33125a87a7950bbd7565b1b9_tn"
                          alt=""
                        />
                        <div class="header__notify-info">
                          <span class="header__notify-name"
                            >Laptop Dell mới nhất</span
                          >
                          <span class="header__notify-description"
                            >Laptop Dell văn phòng mới 2021</span
                          >
                        </div>
                      </a>
                    </li>
                  </ul>
                  <footer class="header__notify-footer">
                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                  </footer>
                </div>
              </li>
              <li class="header__navbar-item">
                <a href="" class="header__navbar-item-link">
                  <i class="header__navbar-icon far fa-question-circle"></i>
                  Trợ giúp
                </a>
              </li>
              <!-- Login/Log up -->
              <li class="header__navbar-item header__navbar-user">
                <img
                  src="https://i.pinimg.com/564x/92/26/5c/92265c40c8e428122e0b32adc1994594.jpg"
                  alt=""
                  class="header__navbar-user-img"
                />
                <span class="header__navbar-user-name">Khánh Nguyễn</span>
                <!-- Menu User -->
                <ul class="header__navbar-user-menu">
                  <li class="header__navbar-user-item">
                    <a href="./myuser.html">Tài khoản của tôi</a>
                  </li>
                  <li class="header__navbar-user-item">
                    <a href="./myorder.html">Đơn mua</a>
                  </li>
                  <li
                    class="
                      header__navbar-user-item
                      header__navbar-user-item--separate
                    "
                  >
                    <a class="formLogout" href="./index.html">Đăng xuất</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- Header with Search -->
          <div class="header-with-search">
            <div class="header__logo">
              <a href="#" class="header__logo-link">
                <img
                  src="./assets/img/LOGO.png"
                  class="header__logo-img"
                  alt=""
                />
              </a>
            </div>
            <div class="header__search">
              <div class="header__search-input-wrap">
                <input
                  type="text"
                  class="header__search-input"
                  placeholder="Nhập tìm kiếm"
                />
                <!-- Search history -->
                <div class="header__search-history">
                  <h3 class="header__search-history-heading">
                    Lịch sử tìm kiếm
                  </h3>
                  <ul class="header__search-history-list">
                    <li class="header__search-history-item">
                      <a href="">Acer Nitro5</a>
                    </li>
                    <li class="header__search-history-item">
                      <a href="">Macbook Pro</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="header__search-select">
                <span class="header__search-select-label">Tên sản phấm</span>
                <i class="header__search-select-icon fas fa-angle-down"></i>

                <ul class="header__search-option">
                  <li
                    class="
                      header__search-option-item
                      header__search-option-item--active
                    "
                  >
                    <span>Tên sản phẩm</span>
                    <!-- <i class="fas fa-check"></i> -->
                  </li>
                  <li
                    class="
                      header__search-option-item
                      header__search-option-item--active
                    "
                  >
                    <span>Thương hiệu</span>
                    <!-- <i class="fas fa-check"></i> -->
                  </li>
                </ul>
              </div>
              <a href="./SearchItem.html" class="header__search-btn">
                <i class="header__search-icon fas fa-search"></i>
              </a>
            </div>
            <!-- Cart layout -->
            <div class="header__cart">
              <div class="header__cart-wrap">
                <i class="header__cart-icon fas fa-shopping-cart"></i>
                <span class="header__cart-notice">1</span>
                <div class="header__cart-list">
                  <!-- No cart: header__cart-list--no-cart -->
                  <img
                    src="./assets/img/no_cart.png"
                    alt=""
                    class="header__cart-list--no-cart-img"
                  />
                  <p class="header__cart-list--no-cart-msg">Chưa có sản phẩm</p>
                  <!-- Has cart -->
                  <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                  <ul class="header__cart-list-item">
                    <li class="header__cart-item">
                      <img
                        src="https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn"
                        alt=""
                        class="header__cart-img"
                      />
                      <div class="header__cart-item-info">
                        <div class="header__cart-item-head">
                          <h5 class="header__cart-item-name">
                            Laptop Acer Nitro 5 AN515-45-R0B6
                          </h5>
                          <div class="header__cart-item-price-wrap">
                            <span class="header__cart-item-price"
                              >30.990.000đ</span
                            >
                            <span class="header__cart-item-multiply">x</span>
                            <span class="header__cart-item-qut">1</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <a
                    href="./orderItem.html"
                    class="header__cart-view-cart btn btn-primary"
                    >Xem giỏ hàng</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="app__container">
        <div class="grid">
          <div class="banner">
            <img src="./assets/img/banner.png" class="banner_img" alt="" />
          </div>
          <div class="trademark">
            <img src="./assets/img/xiaomi.jpg" class="trademark-img" alt="" />
            <img
              src="./assets/img/samsung-img.jpg"
              class="trademark-img"
              alt=""
            />
            <img src="./assets/img/msi-img.jpg" class="trademark-img" alt="" />
            <img src="./assets/img/hp-img.jpg" class="trademark-img" alt="" />
            <img
              src="./assets/img/apple-img.jpg"
              class="trademark-img"
              alt=""
            />
            <img src="./assets/img/asus-img.jpg" class="trademark-img" alt="" />
          </div>
          <div class="item-highlight">
            <span class="text-item-highlight">SẢN PHẨM THEO NHU CẦU</span>
            <div class="items-highlight">
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/432b8d98e98460fc9f1d3a04d1818f6f);
                  "
                ></div>
                <div class="text-item">GAMING</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/b8ae87c9b51fb3b795eba17051a891b5);
                  "
                ></div>
                <div class="text-item">MỎNG NHẸ</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/09c2f034008754ef305ad3c4d16d8b3c);
                  "
                ></div>
                <div class="text-item">MACBOOK</div>
              </div>
              <div class="item-hl">
                <div
                  class="item-img"
                  style="
                    background-image: url(https://cf.shopee.vn/file/d8c891e04742f6ae3f2e2bb0ed4272b1);
                  "
                ></div>
                <div class="text-item">TRUYỀN THÔNG</div>
              </div>
            </div>
          </div>
          <div class="link__curr">
            <i class="home-icon fas fa-home"></i>
            <a
              href="./FormUser.html"
              class=""
              style="color: inherit; text-decoration: none"
              >Trang chủ</a
            >
            <i class="link__curr-icon fas fa-angle-right"></i>
            <span class="link__curr-text isHere">Tất cả sản phẩm</span>
          </div>
          <div class="grid__row app__content">
            <div class="grid__column-2">
              <nav class="category">
                <h3 class="category__heading">
                  <i class="category__heading-icon fas fa-list"></i>
                  Danh mục
                </h3>
                <ul class="category-list">
                  <li class="category-item1 category-item--active">
                    <div class="category-item__link">Tất cả</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Laptop</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Máy tính Gaming</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Macbook</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">Phụ kiện Laptop</div>
                  </li>
                  <li class="category-item1">
                    <div class="category-item__link">
                      Thêm
                      <i class="icon-ctg-item fas fa-angle-down"></i>
                    </div>
                  </li>
                </ul>
              </nav>
              <nav class="category">
                <h3 class="category__heading">
                  <i class="category__heading-icon fas fa-coins"></i>
                  Khoảng giá
                </h3>
                <ul class="category-list">
                  <li class="category-item category-item--active">
                    <div class="category-item__link">Tất cả</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Dưới 10 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 10 - 15 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 15 - 20 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Từ 20 - 25 triệu</div>
                  </li>
                  <li class="category-item">
                    <div class="category-item__link">Trên 25 triệu</div>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="grid__column-10">
              <!-- Home Filter -->
              <div class="home-filter">
                <span class="home-filter__label">Sắp xếp theo</span>
                <button class="home-filter__btn btn btn-primary">
                  Phổ biến
                </button>
                <button class="home-filter__btn btn">Mới nhất</button>
                <button class="home-filter__btn btn">Bán chạy</button>

                <div class="select-input">
                  <span class="select-input__label">Giá</span>
                  <i class="select-input__icon fas fa-angle-down"></i>
                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item1">
                      <div class="select-input__link">Giá: Thấp đến cao</div>
                    </li>
                    <li class="select-input__item1">
                      <div class="select-input__link">Giá: Cao đến thấp</div>
                    </li>
                  </ul>
                </div>
                <div class="select-input">
                  <span class="select-input__label">Thương hiệu</span>
                  <i class="select-input__icon fas fa-angle-down"></i>
                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item">
                      <div class="select-input__link">ASUS</div>
                    </li>
                    <li class="select-input__item">
                      <div class="select-input__link">DELL</div>
                    </li>
                    <li class="select-input__item">
                      <div class="select-input__link">HP</div>
                    </li>
                  </ul>
                </div>

                <div class="home-filter__page">
                  <span class="home-filter__page-num">
                    <span class="home-filter__page-current">1</span>/2
                  </span>
                  <div class="home-filter__page-control">
                    <a
                      href=""
                      class="
                        home-filter__page-btn home-filter__page-btn--disable
                      "
                    >
                      <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="" class="home-filter__page-btn">
                      <i class="fas fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- San Pham -->
              <div class="home-product page-current">
                <div class="grid__row laptop-item">
                  <!-- ----------------------------------------------------------------------- -->
                  <div class="grid__column-2-4">
                    <a href="./ItemDes.html" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB
                          R7-5800H 8G 512G 144Hz W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >35.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >30.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                          </div>
                          <span class="home-product-item__sold">18 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >14%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H 8G 512G
                          15.6'' W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >21.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >21.170.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">47 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >4%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/4e57d35593e841c1ecb59670215a1aaf_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop ASUS ROG G512-IAL013T GTX1650Ti i5-10300H 8G
                          512G 144Hz
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >25.490.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">5 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/79302a0832fe8a5d02c841bfa4de5b7f_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop MSI GF75 Thin 10SCXR-013VN i7-10750H 8GB 512GB
                          GTX1650 17.3" FHD 144Hz Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >23.490.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">2 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/48112fa74a9644bbae9ff4d2f9d52749_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop HP Pavilion Gaming 15-ec1056AX (1N1J6PA)
                          R7-4800H | 8GB | 512GB | VGA GTX 1650 4GB | 15.6" FHD
                          144Hz | Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >26.800.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >20.399.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">15 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >24%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/928f6e30e300f5938bcdcf6ee8a95728_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Inspiron 3583 (Core i5-8265U | Ram 8GB |
                          SSD 256GB | 15.6 inch HD Touch)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >43.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/28ce3982dbcd64a485bad85c027cd7ef_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb
                          SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >22.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >19.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">10 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >13%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/5e02016132da0cb33eaaeea8c96d5438_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD
                          512GB, intel HD Graphics, Win 10, 13.3 inch FHD
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >24.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >17.150.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">15 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >31%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/9f92923c18b9bcdbad84f88a8dd65ac9_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Aspire 5 A515-56G-51YL i5-1135G7 | 8GB |
                          512GB | VGA MX350 2GB | 15.6'' FHD | Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >18.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">16 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/a32811b818f52fc7a55f23a098635228_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Vostro 5581 i5-8265, 4Gb Ram, 1Tb HDD,
                          Intel HD Graphics, 15.6 inch FHD, Win10 (70175950)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >20.250.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="home-product">
                <div class="grid__row laptop-item">
                  <!-- ----------------------------------------------------------------------- -->
                  <div class="grid__column-2-4">
                    <a href="./ItemDes.html" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/bf807aaeacc93e2e417fd0fff7258b3d_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB
                          R7-5800H 8G 512G 144Hz W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >35.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >30.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                          </div>
                          <span class="home-product-item__sold">18 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >14%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/72741deedf79d2325d721aea0e1aceeb);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop ASUS FX506LH-HN002T GTX1650 i5-10300H 8G 512G
                          15.6'' W10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >21.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >21.170.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">47 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >4%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/928f6e30e300f5938bcdcf6ee8a95728_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Inspiron 3583 (Core i5-8265U | Ram 8GB |
                          SSD 256GB | 15.6 inch HD Touch)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >43.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/28ce3982dbcd64a485bad85c027cd7ef_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb
                          SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >22.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >19.990.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">10 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >13%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/5e02016132da0cb33eaaeea8c96d5438_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD
                          512GB, intel HD Graphics, Win 10, 13.3 inch FHD
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"
                            >24.990.000đ</span
                          >
                          <span class="home-product-item__price-current"
                            >17.150.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">15 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >31%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/9f92923c18b9bcdbad84f88a8dd65ac9_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Acer Aspire 5 A515-56G-51YL i5-1135G7 | 8GB |
                          512GB | VGA MX350 2GB | 15.6'' FHD | Win 10
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >18.500.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">16 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="grid__column-2-4">
                    <a href="" class="home-product-item__link">
                      <div class="home-product-item">
                        <div
                          class="home-product-item__img"
                          style="
                            background-image: url(https://cf.shopee.vn/file/a32811b818f52fc7a55f23a098635228_tn);
                          "
                        ></div>
                        <h4 class="home-product-item__name">
                          Laptop Dell Vostro 5581 i5-8265, 4Gb Ram, 1Tb HDD,
                          Intel HD Graphics, 15.6 inch FHD, Win10 (70175950)
                        </h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old"></span>
                          <span class="home-product-item__price-current"
                            >20.250.000đ</span
                          >
                        </div>
                        <div class="home-product-item__action">
                          <span
                            class="
                              home-product-item__like
                              home-product-item__like--liked
                            "
                          >
                            <i
                              class="
                                home-product-item__like-icon-empty
                                far
                                fa-heart
                              "
                            ></i>
                            <i
                              class="
                                home-product-item__like-icon-fill
                                fas
                                fa-heart
                              "
                            ></i>
                          </span>
                          <div class="home-product-item__rating">
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i
                              class="home-product-item__star--gold fas fa-star"
                            ></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <span class="home-product-item__sold">0 Đã bán</span>
                        </div>
                        <div class="home-product-item__origin">
                          <span class="home-product-item__brand">NMK-Shop</span>
                          <span class="home-product-item__origin-name"
                            >Cần Thơ</span
                          >
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent"
                            >10%</span
                          >
                          <span class="home-product-item__sale-off-label"
                            >GIẢM</span
                          >
                        </div>
                        <div class="home-product-item__same">
                          <a href="">Tìm sản phẩm tương tự</a>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Pagination -->
              <ul class="pagination">
                <li class="pagination-item">
                  <div class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-left"></i>
                  </div>
                </li>
                <li class="pagination-item-page pagination-item__active">
                  <div class="pagination-item__link">1</div>
                </li>
                <li class="pagination-item-page">
                  <div class="pagination-item__link">2</div>
                  <!-- </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">3</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">4</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">5</a>
                </li>
                <li class="pagination-item">
                  <span
                    class="
                      pagination-item__link--no-hover pagination-item__link
                    "
                    >...</span
                  >
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">14</a>
                </li> -->
                </li>

                <li class="pagination-item">
                  <div href="" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-right"></i>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="grid">
          <div class="grid__row">
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Chăm sóc khách hàng</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">Trung tâm trợ giúp</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">NMK-Shop Mall</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Hướng dẫn mua hàng</a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Về NMK-Shop</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">Giới thiệu</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Tuyển dụng</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Điều khoản</a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Theo dõi tôi trên</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">
                    <i class="footer__iten-icon fab fa-facebook"></i>
                    Facebook
                  </a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">
                    <i class="footer__iten-icon fab fa-instagram"></i>
                    Instagram
                  </a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">
                    <i class="footer__iten-icon fab fa-linkedin"></i>
                    Linkedln
                  </a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Danh mục</h3>
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="" class="footer__item-link">Máy tính bàn</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Laptop</a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__item-link">Phụ kiện</a>
                </li>
              </ul>
            </div>
            <div class="grid__column-2-4">
              <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
              <div class="footer__download">
                <img
                  src="./assets/img/qr_code.png"
                  alt="Download QR"
                  class="footer__download-qr"
                />
                <div class="footer__download-apps">
                  <a href="" class="footer__download-app-link">
                    <img
                      src="./assets/img/googleplay.png"
                      alt="GooglePlay"
                      class="footer__download-app-img"
                    />
                  </a>
                  <a href="" class="footer__download-app-link">
                    <img
                      src="./assets/img/appstore.png"
                      alt="AppStore"
                      class="footer__download-app-img"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="grid">
            <p class="footer-text">
              &copy; 2021 - Bản quyền thuộc về NGUYEN MINH KHANH - B1909929
            </p>
          </div>
        </div>
      </footer>
    </div>

    <!-- Modal Layout -->
    <div class="modal js-modal">
      <div class="modal__overlay"></div>
      <div class="modal__body">
        <!-- Register form -->
        <form action="" id="form-reg">
          <div class="auth-form js-auth-form-register">
            <div class="auth-form__logo">
              <img
                src="./assets/img/LOGO.png"
                class="auth-form__logo-img"
                alt=""
              />
            </div>
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng ký</h3>
                <span class="auth-form__switch-btn js-change-login"
                  >Đăng nhập</span
                >
              </div>
              <div class="auth-form__form">
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Email:</label>
                    <input
                      type="text"
                      id="emailReg"
                      class="auth-form__input"
                      placeholder="Nhập Email của bạn"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Mật khẩu:</label>
                    <input
                      type="password"
                      id="passwordReg"
                      class="auth-form__input"
                      placeholder="Nhập Mật khẩu của bạn"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Nhập lại mật khẩu:</label>
                    <input
                      type="password"
                      id="passwordRegConf"
                      class="auth-form__input"
                      placeholder="Nhập lại mật khẩu"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="auth-form__aside">
                <p class="auth-form__policy-text">
                  Bằng việc đăng ký, bạn đã đồng ý với NMK-Shop về
                  <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                  &
                  <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                </p>
              </div>
              <div class="auth-form__controls">
                <button class="btn btn-normal auth-form__controls-back js-back">
                  TRỞ LẠI
                </button>
                <button class="btn btn-primary">ĐĂNG KÝ</button>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="
                  auth-form__socials--facebook
                  btn btn-size-S btn--switch-icon
                "
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title">
                  Kết nối với Facebook
                </span>
              </a>
              <a
                href=""
                class="
                  auth-form__socials--google
                  btn btn-size-S btn--switch-icon
                "
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                  alt=""
                  class="auth-form__icon-google"
                />
                <span class="auth-form__socials-title">
                  Kết nối với Google
                </span>
              </a>
            </div>
          </div>
        </form>

        <!-- Login form -->
        <form action="" id="form-login">
          <div class="auth-form js-auth-form-login">
            <div class="auth-form__logo">
              <img
                src="./assets/img/LOGO.png"
                class="auth-form__logo-img"
                alt=""
              />
            </div>
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng nhập</h3>
                <span class="auth-form__switch-btn js-change-register"
                  >Đăng ký</span
                >
              </div>
              <div class="auth-form__form">
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Email:</label>
                    <input
                      type="text"
                      id="emailLogin"
                      class="auth-form__input"
                      placeholder="Nhập Email của bạn"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                  <div class="auth-form__group-input">
                    <label for="">Mật khẩu:</label>
                    <input
                      type="password"
                      id="passwordLogin"
                      class="auth-form__input"
                      placeholder="Nhập Mật khẩu của bạn"
                    />
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__aside">
                  <div class="auth-form__help">
                    <a
                      href=""
                      class="auth-form__help-link auth-form__help-forgot"
                      >Quên mật khẩu</a
                    >
                    <span class="auth-form__help-separate"></span>
                    <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                  </div>
                </div>
                <div class="auth-form__controls">
                  <button
                    class="btn btn-normal auth-form__controls-back js-back"
                  >
                    TRỞ LẠI
                  </button>
                  <a class="btn btn-primary btn-login">ĐĂNG NHẬP</a>
                </div>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="
                  auth-form__socials--facebook
                  btn btn-size-S btn--switch-icon
                "
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title">
                  Kết nối với Facebook
                </span>
              </a>
              <a
                href=""
                class="
                  auth-form__socials--google
                  btn btn-size-S btn--switch-icon
                "
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                  alt=""
                  class="auth-form__icon-google"
                />
                <span class="auth-form__socials-title">
                  Kết nối với Google
                </span>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- <script src="../formValidation/validator.js"></script> -->
    <!-- <script src="./assets/javascript/itemLaptop.js"></script> -->
    <script src="./assets/javascript/openForm.js"></script>
    <!-- <script src="./assets/javascript/login.js"></script> -->
    <script src="./assets/javascript/BtnSort.js"></script>

    <!-- <script>
      Validator({
        form: "#form-login",
        errorSelector: ".form-message",
        rules: [
          Validator.isEmail("#emailLogin"),
          Validator.isPwd("#passwordLogin"),
        ],
      });
      Validator({
        form: "#form-reg",
        errorSelector: ".form-message",
        rules: [
          Validator.isEmail("#emailReg"),
          Validator.isPwd("#passwordReg", 6),
          Validator.isRePwd(
            "#passwordRegConf",
            function () {
              return document.querySelector("#form-reg #passwordReg").value;
            },
            "Mật khẩu nhập lại không đúng"
          ),
        ],
      });
    </script> -->
  </body>
</html>

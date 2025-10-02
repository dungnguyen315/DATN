<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Seo meta -->
    <meta name="description" content="{{ substr($meta_desc, 0, 120) }}">
    <meta name="keywords" content="{{ $meta_keywords }}">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="canonical" href="{{ $url_canonical }}">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="">
    <!-- End Seo meta -->
    <title>{{ $meta_title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('fontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('fontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontend/css/custom.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{ 'public/fontend/images/ico/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">



    <script src="https://kit.fontawesome.com/ff4b23649f.js" crossorigin="anonymous"></script>
    <style>
        .panel {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 15px;
            background: #fff;
            margin-bottom: 15px;
        }

        .btn-default {
            background: #000;
            color: #fff;
            border-radius: 5px;
        }

        .search_box input {
            color: black !important;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 5px;
        }

        .search_box {
            position: relative;
            width: 100%;
            max-width: 300px;
        }

        #keywords {
            width: 100%;
            padding: 10px 40px 10px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search_box button {
            position: absolute;
            top: 50%;
            right: 1px;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        #search_ajax {
            position: absolute;
            width: 100%;
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 9999;
        }

        .search_box button i {
            font-size: 16px;
            color: #777;
        }

        button[name="searchItems"]:hover {
            background-color: #777;

        }

        button[name="searchItems"]:hover i {
            color: white;
        }

        .nav-pills.nav-stacked {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        /* Định dạng cho các mục li */
        .nav-pills.nav-stacked li {
            margin-bottom: 8px;
            /* Khoảng cách giữa các mục */
        }

        /* Định dạng cho các liên kết a */
        .nav-pills.nav-stacked li a {
            display: block;
            padding: 8px 15px;
            /* Giảm padding để trông gọn gàng hơn */
            background-color: #f1f1f1;
            /* Màu nền sáng nhẹ */
            color: #555;
            /* Màu chữ xám đậm */
            text-decoration: none;
            /* Xóa gạch chân */
            border-radius: 15px;
            /* Bo tròn góc nhẹ */
            font-size: 14px;
            /* Giảm kích thước chữ */
            font-weight: 400;
            /* Độ đậm chữ nhẹ */
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Hiệu ứng chuyển nền và phóng to */
        }

        /* Khi hover vào liên kết */
        .nav-pills.nav-stacked li a:hover {
            background-color: #ff980f;
            /* Màu nền khi hover */
            color: #fff;
            /* Màu chữ trắng khi hover */
            transform: scale(1.02);
            /* Hiệu ứng phóng to nhẹ khi hover */
        }

        /* Hiệu ứng khi hover mục li */
        .nav-pills.nav-stacked li:hover a {
            text-decoration: none;
            /* Đảm bảo không có gạch chân khi hover */
        }

        .breadcrumbs .breadcrumb li a:after {
            top: 3px;
        }
    </style>
</head><!--/head-->

<body>
    <header id="header"><!--header-->


        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" style="display: flex; align-items: center;">
                        <div class="logo" style="display: flex; align-items: center; padding-left: 15px;">
                            <a href="/" style="display: flex; align-items: center; text-decoration: none;">
                                <img src="{{ URL::to('fontend/images/furryFriend.png') }}" alt="Logo PetHouse"
                                    style="width: 60px; height: 60px; object-fit: contain; display: block; margin-right: 10px;" />
                                <span
                                    style="font-size: 24px; font-weight: bold; color: #000; font-family: 'Poppins', sans-serif;">PetHouse.com</span>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="">

                                <li><a href="#" style="display: block; padding: 10px; text-decoration: none;"><i
                                            class="fa-solid fa-heart"></i> Danh sách yêu thích</a></li>
                                <li><a href="{{ URL::to('/show-cart') }}"
                                        style="display: block; padding: 10px; text-decoration: none;"><i
                                            class="fa fa-shopping-cart"></i>
                                        Giỏ hàng
                                        <span class="cart-count"
                                            style="
                                        position: absolute;
                                        top: 12px;
                                        background: #ccc;
                                        color: black;
                                        font-size: 12px;
                                        padding: 2px 6px;
                                        border-radius: 50%;
                                        font-weight: normal;
                                        min-width: 20px;
                                        text-align: center;
                                    ">
                                            {{ Cart::getTotalQuantity() }}
                                        </span>
                                    </a></li>
                                @php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                    // dd(Session::all());
                                @endphp
                                @if ($customer_id != null)
                                    <li style="position: relative;">
                                        <a href="#" style="display: block; padding: 10px; text-decoration: none;">
                                            <i class="fa fa-user"></i> Tài khoản <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul
                                            style="
                                      display: none;
                                      position: absolute;
                                      top: 100%;
                                      left: 0;
                                      background: #fff;
                                      border: 1px solid #ddd;
                                      list-style: none;
                                      padding: 10px 0;
                                      min-width: 180px;
                                      z-index: 99;
                                      transition: background-color 0.3s ease, transform 0.2s ease;
                                      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
                                    ">
                                            <li style="padding: 5px 20px;">
                                                <a href="{{ url('/thong-tin-tai-khoan') }}"
                                                    style="color: #333; text-decoration: none; display: block;"
                                                    onmouseover="this.style.background='#f5f5f5'; this.style.color='#000';"
                                                    onmouseout="this.style.background='transparent'; this.style.color='#333';">
                                                    Thông tin tài khoản
                                                </a>
                                            </li>
                                            <li style="padding: 5px 20px;">
                                                <a href="{{ url('/history') }}"
                                                    style="color: #333; text-decoration: none; display: block;"
                                                    onmouseover="this.style.background='#f5f5f5'; this.style.color='#000';"
                                                    onmouseout="this.style.background='transparent'; this.style.color='#333';">
                                                    Lịch sử đơn hàng
                                                </a>
                                            </li>
                                            <li style="padding: 5px 20px;">
                                                <a href="{{ url('/logout-checkout') }}"
                                                    style="color: #333; text-decoration: none; display: block;"
                                                    onmouseover="this.style.background='#f5f5f5'; this.style.color='#000';"
                                                    onmouseout="this.style.background='transparent'; this.style.color='#333';">
                                                    Đăng xuất
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ url('/login-checkout') }}"
                                            style="display: block; padding: 10px; text-decoration: none;"><i
                                                class="fa fa-lock"></i> Đăng nhập</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trang-chu') }}" class="active">Trang chủ</a></li>
                                <li><a href="{{ URL::to('/trang-chu') }}">Giới thiệu</a></li>
                                <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu"
                                        style="
                                        background-color: #ffffff;
                                        padding: 6px 0;
                                        margin: 0;
                                        list-style: none;
                                        min-width: 200px;
                                        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                                        border-radius: 6px;
                                        z-index: 1000;
                                    ">
                                        @foreach ($category_post as $key => $cate_post)
                                            <li style="border-bottom: 1px solid #eaeaea;">
                                                <a href="{{ URL::to('/danh-muc-bai-viet/' . $cate_post->cate_post_slug) }}"
                                                    style="
                                                    display: block;
                                                    padding: 8px 8px;
                                                    color: #222;
                                                    font-weight: 300;
                                                    font-size: 14px;
                                                    text-decoration: none;
                                                    transition: all 0.3s ease;
                                                    font-family: Arial, sans-serif;
                                                "
                                                    onmouseover="this.style.backgroundColor='#f0f0f0'; this.style.color='#f7941d';"
                                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#222';">
                                                    {{ $cate_post->cate_post_name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </li>
                                <!-- <li><a href="404.html">404</a></li> -->
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="{{ URL::to('/tim-kiem') }}" autocomplete="off" method="post">
                            {{ csrf_field() }}
                            <div class="search_box pull-right">
                                <input type="text" style="width:100%" name="keyword" id="keywords"
                                    placeholder="Tìm kiếm" />
                                <div id="search_ajax"></div>
                                <button type="submit" name="searchItems"
                                    style="height:35px; margin-left:-5px;border-radius: 5px;"
                                    class="btn btn-info btn-sm">
                                    <i class="fa fa-thin fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <section id="customer-info" style="margin-bottom: 60px;">
        <div class="container mb-5">
            <div class="breadcrumbs mb-4">
                <ol class="breadcrumb" style="background: none; padding: 0; margin-bottom: 20px;">
                    <li><a href="{{ URL::to('/trang-chu') }}">Trang chủ</a></li>
                    <li class="active">Thông tin cá nhân</li>
                </ol>
            </div>

            <div class="row">
                {{-- Cột trái: Mục lục --}}
                <div class="col-md-3">
                    <div
                        style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                        <h5 style="margin-bottom: 20px; font-weight: bold; color: #2c3e50;">Tài khoản của bạn</h5>
                        <ul style="list-style: none; padding-left: 0; margin: 0;">
                            <li style="margin-bottom: 12px;">
                                <a href="{{ url('/thong-tin-tai-khoan') }}"
                                    style="display: flex; align-items: center; text-decoration: none; color: #333; padding: 10px 15px; border-radius: 8px; transition: all 0.3s ease; background-color: #f9f9f9;"
                                    onmouseover="this.style.backgroundColor='#e8f0fe'; this.style.color='#1a73e8';"
                                    onmouseout="this.style.backgroundColor='#f9f9f9'; this.style.color='#333';">
                                    <i class="fa fa-user" style="margin-right: 10px;"></i> Thông tin tài khoản
                                </a>
                            </li>
                            <li style="margin-bottom: 12px;">
                                <a href="{{ url('/address-customer') }}"
                                    style="display: flex; align-items: center; text-decoration: none; color: #333; padding: 10px 15px; border-radius: 8px; transition: all 0.3s ease; background-color: #f9f9f9;"
                                    onmouseover="this.style.backgroundColor='#e8f0fe'; this.style.color='#1a73e8';"
                                    onmouseout="this.style.backgroundColor='#f9f9f9'; this.style.color='#333';">
                                    <i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i> Địa chỉ
                                </a>
                            </li>
                            <li style="margin-bottom: 12px;">
                                <a href="{{ url('/change-pass') }}"
                                    style="display: flex; align-items: center; text-decoration: none; color: #333; padding: 10px 15px; border-radius: 8px; transition: all 0.3s ease; background-color: #f9f9f9;"
                                    onmouseover="this.style.backgroundColor='#e8f0fe'; this.style.color='#1a73e8';"
                                    onmouseout="this.style.backgroundColor='#f9f9f9'; this.style.color='#333';">
                                    <i class="fa fa-lock" style="margin-right: 10px;"></i> Đổi mật khẩu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                {{-- Cột phải: Thông tin tài khoản --}}
                <div class="col-md-9">
                    <div class="customer-card"
                        style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <h2
                            style="margin-bottom: 20px; font-weight: bold; color: #333; display: flex; justify-content: space-between; align-items: center;">
                            Địa chỉ
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#createShippingAddressModal"
                                style="padding: 10px 20px; background-color: #3498db; color: #fff; font-weight: bold; border-radius: 6px; text-decoration: none;">
                                + Tạo địa chỉ mới
                            </button>
                        </h2>
                        <!-- Modal -->
                        <div class="modal fade" id="createShippingAddressModal" tabindex="-1" role="dialog"
                            aria-labelledby="createShippingAddressModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="createShippingAddressModalLabel">Tạo địa chỉ mới
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form nhập địa chỉ mới -->
                                        <form action="{{ URL::to('/save-shipping-address') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="shippingAddress">Địa chỉ</label>
                                                <textarea class="form-control" id="shippingAddress" name="shipping_address" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Chọn thành phố</label>
                                                <select name="city" id="city"
                                                    class="form-control choose city">
                                                    <option value="">-- Chọn tỉnh/thành phố --</option>
                                                    @foreach ($city as $key => $val)
                                                        <option value="{{ $val->matp }}">{{ $val->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Chọn quận/huyện</label>
                                                <select name="province" id="province"
                                                    class="form-control choose province">
                                                    <option value="">-- Chọn quận/huyện --</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Chọn xã/phường</label>
                                                <select name="ward" id="ward" class="form-control ward">
                                                    <option value="">-- Chọn xã/phường --</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                    style="padding: 10px 20px; font-size: 14px; border-radius: 20px; min-width: 90px; text-align: center; font-weight: 600; background-color: #6c757d; border: 1px solid #6c757d; color: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="submit"
                                                    style="padding: 10px 20px; font-size: 14px; border-radius: 20px; min-width: 140px; text-align: center; font-weight: 600; background-color: #3498db; border: 1px solid #3498db; color: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">Lưu
                                                    địa chỉ</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($info_shipping as $key => $info)
                            <div class="address-card"
                                style="border: 1px solid #eee; border-radius: 10px; padding: 20px; margin-bottom: 20px; position: relative;">
                                <button
                                    onclick="if(confirm('Bạn có chắc muốn xoá địa chỉ này?')) deleteShipping({{ $info->shipping_id }})"
                                    style="
                                        position: absolute;
                                        top: 10px;
                                        right: 10px;
                                        width: 36px;
                                        height: 36px;
                                        background: #f8d7da;
                                        border: none;
                                        border-radius: 50%;
                                        font-size: 20px;
                                        color: #e74c3c;
                                        font-weight: bold;
                                        cursor: pointer;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        transition: background 0.3s;
                                    "
                                    onmouseover="this.style.background='#f5c6cb'"
                                    onmouseout="this.style.background='#f8d7da'">
                                    &times;
                                </button>

                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <p style="margin: 0; font-weight: bold;">Họ tên:</p>
                                        <p style="margin: 0 0 10px;">{{ $info->shipping_name }}</p>

                                        <p style="margin: 0; font-weight: bold;">Số điện thoại:</p>
                                        <p style="margin: 0 0 10px;">{{ $info->shipping_phone }}</p>
                                    </div>

                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <p style="margin: 0; font-weight: bold;">Địa chỉ giao hàng:</p>
                                        <p style="margin: 0;">{{ $info->shipping_address }}</p>
                                    </div>
                                </div>

                                @if ($info->shipping_default)
                                    <span
                                        style="color: #27ae60; font-weight: bold; display: inline-block; margin-top: 15px;">[Địa
                                        chỉ mặc định]</span>
                                @else
                                    <button onclick="setDefaultShipping({{ $info->shipping_id }})"
                                        style="margin-top: 15px; padding: 8px 16px; background: #3498db; border: none; border-radius: 8px; color: white; font-weight: bold; cursor: pointer; transition: background 0.3s;">
                                        Chọn làm mặc định
                                    </button>
                                @endif
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </section>






    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="companyinfo" style="margin-top: 40px;">
                            <span
                                style="font-size: 24px; font-weight: bold; color: #000; font-family: 'Poppins', sans-serif;">
                                PetHouse.com
                            </span>
                            <span
                                style="
                            display: block;
                            margin-top: 10px;
                            font-size: 14px;
                            line-height: 1.6;
                            color: #555;
                            font-family: 'Poppins', sans-serif;
                            max-width: 500px;
                        ">
                                PetHouse là người bạn đồng hành đáng tin cậy của thú cưng và chủ nuôi.
                                Chúng tôi cung cấp các sản phẩm chất lượng, an toàn và tiện ích dành cho chó mèo, từ
                                thức ăn đến phụ kiện chăm sóc.
                                Với PetHouse, việc chăm sóc thú cưng trở nên dễ dàng và trọn vẹn hơn bao giờ hết!
                            </span>
                        </div>

                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d553.4992184813427!2d105.75927469230241!3d21.053320005725624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454dd70d387ab%3A0x24ce05baa53824b0!2zNTIgSOG6u20gMTkzLzIyMC81MCwgUGjDuiBEaeG7hW4sIELhuq9jIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1744112679735!5m2!1svi!2s"
                                class="map-iframe" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                            <!-- <p>9 Ngõ 101 Nguyễn Đạo An, Phú Diễn, Bắc Từ Liêm, Hà Nội</p> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container" style="padding-bottom:30px;">
                <div class="row" style="display: flex; flex-wrap: wrap; margin-top: 30px; gap: 20px;">
                    <!-- Cột 1 -->
                    <div class="col-sm-2" style="flex: 1; min-width: 180px;">
                        <div class="single-widget">
                            <h2 style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 16px;">
                                PetHouse Shop</h2>
                            <ul class="nav nav-pills nav-stacked"
                                style="list-style: none; padding: 0; line-height: 1.8;">
                                <li><a href="#" style="color: #555;">Giới thiệu</a></li>
                                <li><a href="#" style="color: #555;">Thành viên PetHouse</a></li>
                                <li><a href="#" style="color: #555;">Điều khoản sử dụng</a></li>
                                <li><a href="#" style="color: #555;">Tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cột 2 -->
                    <div class="col-sm-3" style="flex: 1; min-width: 200px;">
                        <div class="single-widget">
                            <h2 style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 16px;">Hỗ Trợ
                                Khách Hàng</h2>
                            <ul class="nav nav-pills nav-stacked"
                                style="list-style: none; padding: 0; line-height: 1.8;">
                                <li><a href="#" style="color: #555;">Chính Sách Đổi Trả Hàng</a></li>
                                <li><a href="#" style="color: #555;">Phương Thức Vận Chuyển</a></li>
                                <li><a href="#" style="color: #555;">Chính Sách Bảo Mật</a></li>
                                <li><a href="#" style="color: #555;">Phương Thức Thanh Toán</a></li>
                                <li><a href="#" style="color: #555;">Chính Sách Hoàn Tiền</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cột 3 -->
                    <div class="col-sm-3" style="flex: 1; min-width: 200px;">
                        <div class="single-widget">
                            <h2 style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 16px;">Liên hệ
                            </h2>
                            <ul class="nav nav-pills nav-stacked"
                                style="list-style: none; padding: 0; line-height: 1.8;">
                                <li><a href="#" style="color: #555;"><i class="fa fa-phone"></i> Hotline:
                                        0867677891</a>
                                </li>
                                <li><a href="#" style="color: #555;"><i class="fa fa-envelope"></i> Email:
                                        contact@paddy.vn</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cột 4: Form đăng ký -->
                    <div class="col-sm-4" style="flex: 1; min-width: 300px;">
                        <div class="single-widget"
                            style="
                    background: #fff;
                    border-radius: 16px;
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
                    padding: 30px 20px;
                    text-align: center;
                ">
                            <h2
                                style="
                    font-size: 20px;
                    font-weight: 700;
                    text-transform: uppercase;
                    color: #333;
                    margin-bottom: 25px;
                    line-height: 1.4;
                    ">
                                Thành viên<br>PetHouse
                            </h2>

                            <form action="#" class="searchform" style="display: flex; justify-content: center;">
                                <div
                                    style="
                        position: relative;
                        width: 100%;
                        max-width: 340px;
                    ">
                                    <input type="email" placeholder="Email của bạn..."
                                        style="
                        width: 100%;
                        padding: 12px 50px 12px 16px;
                        border: 1px solid #ddd;
                        border-radius: 999px;
                        outline: none;
                        font-size: 14px;
                        background: #fdfdfd;
                        " />

                                    <button type="submit"
                                        style="
                        position: absolute;
                        top: 56%;
                        right: 1px;
                        transform: translateY(-50%);
                        background: #f89c1f;
                        border: none;
                        padding: 12px 11px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: background 0.3s;
                        cursor: pointer;
                        "
                                        onmouseover="this.style.background='#e78c13'"
                                        onmouseout="this.style.background='#f89c1f'">
                                        <i class="fa fa-arrow-circle-o-right"
                                            style="color: #fff; font-size: 18px;"></i>
                                    </button>
                                </div>
                            </form>

                            <p
                                style="
                    font-size: 13.5px;
                    color: #555;
                    margin-top: 18px;
                    line-height: 1.6;
                    ">
                                Đăng ký thành viên ngay hôm nay để nhận email về sản phẩm mới<br />
                                và chương trình khuyến mãi của <strong style="color: #333;">PetHouse</strong>
                            </p>
                        </div>
                    </div>


                </div>
            </div>

    </footer><!--/Footer-->



    <script src="{{ asset('fontend/js/jquery.js') }}"></script>
    <script src="{{ asset('fontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('fontend/js/price-range.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('fontend/js/main.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Thêm jQuery nếu chưa có -->
<script>
    function deleteShipping(shippingId) {
        $.ajax({
            url: '{{ route('deleteShipping') }}',
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                shipping_id: shippingId
            },
            success: function(response) {
                if (response.status === 'success') {
                    toastr.success(response.message);
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function() {
                toastr.error('Có lỗi xảy ra!');
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $("#success-message, #error-message").fadeOut();
        }, 3000);
    });
</script>
<script>
    @if (session('message'))
        toastr.success("{{ session('message') }}");
    @endif

    @if (session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.warning("{{ $error }}");
        @endforeach
    @endif
</script>
<script>
    function setDefaultShipping(shippingId) {
        $.ajax({
            url: "{{ route('set-default-shipping') }}",
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                shipping_id: shippingId
            },
            success: function(response) {
                if (response.status === 'success') {
                    toastr.success(response.message);
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function() {
                toastr.error('Có lỗi xảy ra!');
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var matp = $(this).val();
            var _token = $('input[name = "_token"]').val();
            var result = '';
            if (action == 'city') {
                result = 'province';
            } else {
                result = 'ward';
            }
            $.ajax({
                url: '{{ url('/select-delivery-home') }}',
                method: 'post',
                data: {
                    action: action,
                    matp: matp,
                    _token: _token
                },
                success: function(data) {
                    $('#' + result).html(data);
                }
            });
        });
    });
</script>
<!-- JavaScript để hover xổ menu tai khoan -->
<script>
    document.querySelectorAll('li[style]').forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            let submenu = this.querySelector('ul');
            if (submenu) submenu.style.display = 'block';
        });
        item.addEventListener('mouseleave', function() {
            let submenu = this.querySelector('ul');
            if (submenu) submenu.style.display = 'none';
        });
    });
</script>





<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

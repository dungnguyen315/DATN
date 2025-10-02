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
    <link href="{{ asset('fontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('fontend/css/responsive.css') }}" rel="stylesheet">
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
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

        /* css cho giỏ hàng */
        .cart_menu {
            background-color: #f5f5f5;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .table-responsive.cart_info {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-top: 15px;
        }

        .cart_product img {
            max-width: 60px;
            border-radius: 8px;
        }

        .cart_description h4 a {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            text-decoration: none;
            display: block;
            line-height: 1.4;
        }

        .cart_price p,
        .cart_total p {
            font-size: 15px;
            margin: 0;
            color: #444;
        }

        .cart_price span {
            display: block;
        }

        .cart_price span:first-child {
            font-size: 13px;
        }

        .cart_price span:last-child {
            font-weight: bold;
            font-size: 15px;
        }

        .cart_quantity_button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .cart_quantity_button a {
            display: inline-block;
            background: #000;
            color: white;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
        }

        .cart_quantity_button a:hover {
            background: #e78c13;
        }

        .cart_quantity_input {
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 5px 10px;
            width: 50px;
            background: #f9f9f9;
            font-size: 14px;
        }

        .cart_delete a {
            color: #e74c3c;
            font-size: 18px;
            transition: 0.3s;
        }

        .cart_delete a:hover {
            color: #c0392b;
        }

        .total_area ul li {
            background: none;
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
                            <ul class="nav navbar-nav">

                                <li><a href="#" style="display: block; padding: 10px; text-decoration: none;"><i
                                            class="fa-solid fa-heart"></i> Danh sách yêu thích</a></li>
                                <li><a href="{{ URL::to('/show-cart') }}"
                                        style="display: block; padding: 10px; text-decoration: none;"><i
                                            class="fa fa-shopping-cart"></i>
                                        Giỏ hàng
                                        <span class="cart-count"
                                            style="
                                        position: absolute;
                                        top: 2px;
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
                                    // dd(session::all());
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
                                <!-- <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
          <li><a href="product-details.html">Product Details</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li><a href="cart.html">Cart</a></li>
          <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li> -->
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

    <section id="cart_items">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background:none;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" style="border:none;" aria-current="page">Giỏ hàng của bạn</li>
                </ol>
            </nav>
            <div class="table-responsive cart_info">
                <?php
                $content = Cart::getContent();
                ?>
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Hình ảnh</td>
                            <td class="description">Sản phẩm</td>
                            <td class="price">Giá</td>
                            <td class="quantity">Số lượng</td>
                            <td class="total">Tổng tiền</td>
                            <td></td>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($content as $value)
                            <tr>
                                <td class="cart_product">
                                    <a href="">
                                        <img src="{{ URL::to('upload/product/' . $value->attributes->image) }}"
                                            alt="" width="50">
                                    </a>
                                </td>
                                <td class="cart_description">
                                    <h4 style="width:400px;"><a href="">
                                            {{ $value->name }}
                                            <br>
                                            @if (!empty($value->attributes['taste_name']))
                                                Vị: {{ $value->attributes['taste_name'] }}
                                            @endif
                                        </a>
                                    </h4>
                                </td>
                                <td class="cart_price">
                                    <p>
                                        @if ($value->associatedModel && $value->associatedModel->product_discount_price)
                                            <span style="text-decoration: line-through; color: #888;">
                                                {{ number_format($value->associatedModel->product_price, 0, ',', '.') . ' VNĐ' }}
                                            </span>
                                            <span style="color: red;">
                                                {{ number_format($value->price, 0, ',', '.') . ' VNĐ' }}
                                            </span>
                                        @else
                                            {{ number_format($value->price, 0, ',', '.') . ' VNĐ' }}
                                        @endif
                                    </p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" data-id="{{ $value->id }}"
                                            href="javascript:void(0)"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity"
                                            value="{{ $value->quantity }}" autocomplete="off" size="2"
                                            readonly>
                                        <a class="cart_quantity_down" data-id="{{ $value->id }}"
                                            href="javascript:void(0)"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price" id="subtotal_{{ $value->id }}">
                                        {{ number_format($value->price * $value->quantity, 0, ',', '.') . ' VNĐ' }}
                                    </p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete"
                                        href="{{ URL::to('/delete-from-cart/' . $value->id) }}"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action" style="">
        <div class="container" style="max-width: 1140px; margin: auto;">
            <div class="row">
                <div class="col-sm-6">
                    <div
                        style="background-color: #fff; padding: 20px;  border: 1px solid #eee; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                        <h4 style="margin-bottom: 15px; font-weight: 600; color: #333;">Hỗ trợ & Chính sách</h4>
                        <ul style="list-style: none; padding-left: 0; font-size: 15px; line-height: 1.8; color: #555;">
                            <li>📞 <strong>Hotline:</strong> 0867677891</li>
                            <li>💬 <strong>Chatbot:</strong> Tư vấn trực tuyến</li>
                            <li>🚚 <strong>Giao hàng:</strong> 2h nội thành, 1-3 ngày toàn quốc</li>
                            <li>🔁 <strong>Đổi trả:</strong> Trong vòng 7 ngày nếu lỗi kỹ thuật</li>
                            <li>🔒 <strong>Bảo mật:</strong> Cam kết an toàn thông tin</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area"
                        style="background: #fff; border: 1px solid #eee; border-radius: 12px; padding: 20px 25px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);">
                        <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                            <li
                                style="font-size: 16px; font-weight: 500; color: #444; padding: 10px 0; border-bottom: 1px dashed #ccc; display: flex; justify-content: space-between;">
                                Tổng tiền giỏ hàng
                                <span id="cart_total" style="color: #000; font-weight: 600; font-size: 15px;">
                                    {{ number_format(Cart::getTotal(), 0, ',', '.') . ' VNĐ' }}
                                </span>
                            </li>
                            <li
                                style="font-size: 16px; font-weight: 500; color: #444; padding: 10px 0; border-bottom: 1px dashed #ccc; display: flex; justify-content: space-between;">
                                Thuế VAT (10%)
                                <span id="vat" style="color: #000; font-weight: 600; font-size: 15px;">
                                    {{ number_format(Cart::getTotal() * 0.1, 0, ',', '.') . ' VNĐ' }}
                                </span>
                            </li>
                            <li
                                style="font-size: 16px; font-weight: 600; color: #000; padding: 10px 0; display: flex; justify-content: space-between;">
                                Thành tiền
                                <span id="grand_total" style="color: #000; font-weight: 600; font-size: 15px;">
                                    <?php
                                    $subtotal = Cart::getTotal();
                                    $vat = $subtotal * 0.1;
                                    $total = $subtotal + $vat;
                                    echo number_format($total, 0, ',', '.') . ' VNĐ';
                                    ?>
                                </span>
                            </li>
                        </ul>

                        @php
                            $customer_id = Session::get('customer_id');
                            if (!$customer_id) {
                                $redirect_url = '/login-checkout';
                            } else {
                                $shipping_info = DB::table('tbl_shipping')->where('customer_id', $customer_id)->first();
                                $redirect_url = $shipping_info ? '/payment' : '/checkout';
                            }
                        @endphp
                        <div style="display: flex; justify-content: space-between; gap: 10px; margin-top: 20px;">
                            <a class="btn btn-default check_out" href="{{ URL::to('/') }}"
                                style="background-color: #000; color: white; padding: 12px 24px; border-radius: 8px; font-weight: 600; text-transform: uppercase; transition: all 0.3s ease; text-decoration: none; display: inline-block; border: none; flex: 1; text-align: center;"
                                onmouseover="this.style.backgroundColor='#e67e22'; this.style.transform='scale(1.03)';"
                                onmouseout="this.style.backgroundColor='#000'; this.style.transform='scale(1)'">
                                Tiếp tục mua hàng
                            </a>

                            <a class="btn btn-default check_out"
                                href="{{ !$customer_id ? URL::to('/login-checkout?redirect_to_checkout=1') : URL::to($redirect_url) }}"
                                style="background-color: #000; color: white; padding: 12px 24px; border-radius: 8px; font-weight: 600; text-transform: uppercase; transition: all 0.3s ease; text-decoration: none; display: inline-block; border: none; flex: 1; text-align: center;"
                                onmouseover="this.style.backgroundColor='#e67e22'; this.style.transform='scale(1.03)';"
                                onmouseout="this.style.backgroundColor='#000'; this.style.transform='scale(1)'">
                                Đặt hàng
                            </a>
                        </div>
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
                                        0867677891</a></li>
                                <li><a href="#" style="color: #555;"><i class="fa fa-envelope"></i> Email:
                                        contact@furryfriend.vn</a></li>
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
</body>

</html>
<!-- Thêm CSRF token vào meta -->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".cart_quantity_up, .cart_quantity_down").click(function(e) {
            e.preventDefault(); // Ngăn chặn tải lại trang

            var button = $(this);
            var rawId = button.data("id");
            var input = button.siblings(".cart_quantity_input");
            var quantity = parseInt(input.val());

            if (button.hasClass("cart_quantity_up")) {
                quantity += 1;
            } else if (button.hasClass("cart_quantity_down") && quantity > 1) {
                quantity -= 1;
            }

            $.ajax({
                url: "{{ route('cart.update') }}",
                method: "POST",
                data: {
                    item_id: rawId,
                    quantity: quantity,
                    _token: $('meta[name="csrf-token"]').attr('content') // CSRF Token
                },
                success: function(response) {
                    if (response.success) {
                        input.val(quantity);

                        //  Cập nhật tổng tiền của từng sản phẩm
                        $("#subtotal_" + rawId).text(response.subtotal);

                        //  Cập nhật tổng tiền giỏ hàng đúng
                        $("#cart_total").text(response.total);
                        $("#vat").text(response.vat);
                        $("#grand_total").text(response.grand_total);

                        //  Debug: Kiểm tra giá trị phản hồi từ server
                        console.log("Cập nhật giỏ hàng:", response);
                    } else {
                        alert("Cập nhật giỏ hàng thất bại!");
                    }
                },
                error: function(xhr) {
                    alert("Lỗi cập nhật giỏ hàng. Vui lòng thử lại!");
                }
            });
        });
    });
</script>

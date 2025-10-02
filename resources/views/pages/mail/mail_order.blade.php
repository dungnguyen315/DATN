<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 20px;
        }

        .content {
            padding: 20px;
            color: #333;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .product-table th,
        .product-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .product-table th {
            background-color: #f2f2f2;
        }

        .totals {
            margin-top: 20px;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }

        .totals p {
            margin: 5px 0;
        }

        .footer {
            text-align: center;
            font-size: 13px;
            color: #999;
            padding: 15px;
            border-top: 1px solid #eee;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            Xác nhận đơn hàng {{ $data['order_code'] }}
        </div>
        <div class="content">
            <p>Chào <strong>{{ $data['customer_name'] }}</strong>,</p>
            <p>Cảm ơn bạn đã đặt hàng tại <strong>PetHouse</strong>! Dưới đây là thông tin đơn hàng của bạn:</p>

            <!-- Bảng sản phẩm -->
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $subtotal = 0;
                    @endphp
                    @foreach ($cart as $val)
                        @php
                            $subtotal += $val['product_price'] * $val['product_sales_quantity'];
                        @endphp
                        <tr>
                            <td>{{ $val['product_name'] }}</td>
                            <td>{{ $val['product_sales_quantity'] }}</td>
                            <td>{{ $val['product_price'] }}</td>
                            <td>{{ number_format($subtotal, 0, ',', '.') }} VNĐ</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Tổng tiền và thông tin -->
            <div class="totals">
                @php
                    $sub = 0;
                    foreach ($cart as $item) {
                        $sub += $item['product_price'] * $item['product_sales_quantity'];
                    }

                    $vat = $sub * 0.1; // VAT 10%
                    $shipping_fee = $data['fee_ship'] ?? 0;
                    $discount_amount = $data['counpon_percent'] ?? 0;

                    $total_payment = $sub + $vat + $shipping_fee - $discount_amount;
                @endphp
                <p><strong>Tạm tính:</strong> {{ number_format($sub, 0, ',', '.') }} VNĐ</p>
                <p><strong>Thuế VAT (10%):</strong> {{ number_format($vat, 0, ',', '.') }} VNĐ</p>
                <p><strong>Phí vận chuyển:</strong> {{ number_format($data['fee_ship'] ?? 0, 0, ',', '.') }} VNĐ</p>
                <p><strong>Giảm giá: </strong> {{ number_format($data['counpon_percent'] ?? 0, 0, ',', '.') }} VNĐ</p>
                <p><strong>Tổng thanh toán:</strong> <strong>{{ number_format($total_payment, 0, ',', '.') }}
                        VNĐ</strong></p>
                <p><strong>Hình thức thanh toán:</strong> {{ $data['payment_method'] }}</p>
            </div>

            <p>📦 <strong>Giao đến:</strong><br />
                {{ $data['customer_name'] }}<br />
                {{ $data['shipping_address'] }}<br />
                {{ $data['shipping_phone'] }}
            </p>

            <p>Chúng tôi sẽ xử lý đơn hàng và giao trong 1–3 ngày làm việc. Khi đơn hàng được gửi đi, bạn sẽ nhận được
                mã vận đơn để theo dõi.</p>

            <p>Mọi thắc mắc, vui lòng liên hệ:<br />
                📞 0909 000 111 – ✉️ shopabc@email.com
            </p>
        </div>
        <div class="footer">
            © 2025 PetHouse. Cảm ơn bạn đã mua sắm cùng chúng tôi!
        </div>
    </div>
</body>

</html>

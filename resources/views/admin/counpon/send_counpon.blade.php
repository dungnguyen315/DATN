<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div
        style="max-width:600px; margin:auto; border:1px dashed #ccc; padding:20px; font-family: Arial, sans-serif; line-height: 1.6;">
        <h3 style="margin-top:0; color: #FF6F61;">
            🎉 Ưu đãi đặc biệt từ PetHouse dành riêng cho bạn!
        </h3>
        @if ($counpon->counpon_function == 1)
            <p> 🔥 Bạn sẽ được <strong>giảm {{ $counpon->counpon_percent }}%</strong> trên tổng hóa đơn khi sử dụng mã
                này.</p>
        @else
            <p>🔥 Bạn sẽ được <strong>giảm {{ number_format($counpon->counpon_percent, 0, ',', '.') }} VNĐ</strong> khi
                thanh toán.</p>
        @endif
        <h2 style="color: #000; font-weight: bold; font-style: italic; margin: 15px 0;">
            {{ $counpon->counpon_name }}
        </h2>

        <p>
            Cảm ơn bạn đã tin tưởng và mua sắm tại <strong>PetHouse</strong> trong thời gian qua. Chúng tôi luôn trân
            trọng từng khách hàng và muốn gửi tặng bạn một mã khuyến mãi đặc biệt như lời tri ân.
        </p>

        <p>
            Hãy <strong>đăng nhập</strong> vào tài khoản của bạn trên website và sử dụng mã dưới đây khi thanh toán để
            nhận được ưu đãi hấp dẫn!
        </p>

        <div style="background: #f9f9f9; padding: 15px; margin: 20px 0; text-align: center; border: 1px solid #eee;">
            <span style="font-size: 18px;">🎁 Mã khuyến mãi của bạn:</span><br>
            <span
                style="display: inline-block; margin-top: 10px; background: #000; color: #fff; padding: 10px 20px; font-size: 20px; letter-spacing: 2px;">
                {{ $counpon->counpon_code }}
            </span>
            <p style="color:red; margin-top: 15px;">
                📅 Hạn sử dụng: {{ $counpon->counpon_date_end }}
            </p>
        </div>

        <p>
            💬 Nếu bạn cần bất kỳ hỗ trợ nào, đừng ngần ngại liên hệ với đội ngũ chăm sóc khách hàng của chúng tôi.
        </p>

        <p style="margin-top: 20px;">
            Thân mến,<br>
            <strong>PetHouse Team 🐾</strong>
        </p>
    </div>


</body>

</html>

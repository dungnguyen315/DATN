@extends('welcome')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Chào mừng đến với PetHouse</h2>

        <div
            style="padding: 20px; background-color: #f9f9f9; border-radius: 15px; font-size: 15px; line-height: 1.7; color: #333;">
            <p><strong>PetHouse</strong> là người bạn đồng hành đáng tin cậy dành cho thú cưng của bạn. Chúng tôi cung cấp
                các sản phẩm chất lượng cao, dịch vụ chăm sóc tận tâm, cùng một cộng đồng yêu thú cưng sôi nổi và thân
                thiện.</p>

            <p><strong>Sứ mệnh của chúng tôi</strong> là mang đến sự an toàn, tiện nghi và hạnh phúc cho mọi thú cưng, đồng
                thời tạo nên sự kết nối bền chặt giữa bạn và người bạn nhỏ của mình.</p>

            <ul style="margin-top: 15px;">
                <li>🐾 Sản phẩm an toàn, nguồn gốc rõ ràng, phù hợp cho mọi giống loài.</li>
                <li>✂️ Dịch vụ spa, cắt tỉa, chăm sóc sức khỏe chuyên nghiệp.</li>
                <li>🏠 Khách sạn thú cưng tiện nghi, sạch sẽ và thân thiện như ở nhà.</li>
                <li>💬 Tư vấn miễn phí từ các chuyên gia thú y có kinh nghiệm.</li>
            </ul>

            <p style="margin-top: 15px;">
                Với sự tận tâm và tình yêu thương động vật, <strong>PetHouse</strong> không chỉ là một cửa hàng – mà là một
                ngôi nhà thứ hai cho thú cưng của bạn.
            </p>

            <div style="text-align: center; margin-top: 25px;">
                <img src="{{ asset('fontend/images/PetHouse.png') }}" alt="PetHouse Giới thiệu"
                    style="border-radius: 12px; width: 120px; height: 120px;">
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <a href="{{ url('/gioi-thieu') }}" class="btn btn-warning"
                    style="padding: 10px 25px; border-radius: 25px; font-size: 16px; font-weight: bold;">
                    Tìm hiểu thêm về chúng tôi
                </a>
            </div>
        </div>
    @endsection

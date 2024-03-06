<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'id' => 'e6f5826e-b068-45e9-af89-880c51518395',
                'catalog_id' => 'c062e43e-351f-47fa-b0a6-9941bfc998e8',
                'summary' => 'Theo Ban Quản lý Khu kinh tế cửa khẩu Đồng Đăng (Lạng Sơn), tổng số phương tiện vận chuyển hàng hóa xuất nhập khẩu thông quan qua các cửa khẩu trên địa bàn tỉnh Lạng Sơn vượt 1.230 xe⁄ngày. Trong đó, hàng hóa xuất khẩu chủ yếu là hoa quả tươi và các loại nông sản khác.

                ',
                'slug' => 'tinh-hinh-xuat-khau-qua-tuoi',
                'name' => 'Tình hình xuất khẩu quả tươi và các loại nông sản qua các cửa khẩu trên địa bàn Lạng Sơn',
                'img' => 'langson.jpeg',
                'content' => 'Cụ thể, theo thống kê, những ngày gần đây, tại các cửa khẩu của tỉnh Lạng Sơn, lượng hàng hóa thông quan xuất nhập khẩu đều đạt từ 1.115-1.238 xe/ngày.

                Theo thông tin mới nhất từ Ban Quản lý Khu kinh tế cửa khẩu Đồng Đăng, Lạng Sơn, tổng số phương tiện vận chuyển hàng hóa xuất nhập khẩu thông quan qua các cửa khẩu trên địa bàn tỉnh Lạng Sơn trong ngày 23/1/2024 là 1.238 xe, trong đó, số phương tiện có hàng xuất khẩu: 481 xe, nhập khẩu là 757 xe.
                <br>
                Số phương tiện chở hàng hóa xuất khẩu tồn tính đến 20g ngày 23/1/2024 là 591 xe, tăng 108 xe so với tối ngày 22/1/2024.
                <br>
                Trong đó, tại cửa khẩu quốc tế Hữu Nghị, tổng số phương tiện vận chuyển hàng hóa xuất khẩu, nhập khẩu thông quan là 657 xe, trong đó, 146 xe xuất khẩu, 511 xe hàng nhập khẩu. Số phương tiện vận chuyển hàng hóa mới từ nội địa là 148 xe.
                <br>
                Tại Cửa khẩu phụ Tân Thanh, tổng số phương tiện vận chuyển hàng hóa xuất khẩu, nhập khẩu thông quan là 482 xe, trong đó: Số phương tiện có hàng xuất khẩu: 314 xe; số phương tiện có hàng nhập khẩu: 168 xe. Số phương tiện vận chuyển hàng hóa mới từ nội địa lên 417 xe, lượng xe tồn đến 20h00 ngày 23/1/2024 là 549 xe.
                <br>
                Tại Cửa khẩu chính Chi Ma, tổng số phương tiện vận chuyển hàng hóa xuất khẩu, nhập khẩu thông quan là 82 xe; tại Cửa khẩu phụ Cốc Nam, tổng số phương tiện vận chuyển hàng hóa xuất khẩu, nhập khẩu thông quan là 11 xe...
                <br>
                Sở Công Thương Lạng Sơn lưu ý các doanh nghiệp và các đơn vị liên quan được biết, chủ động đưa hàng hóa đến các cửa khẩu của tỉnh Lạng Sơn để xuất khẩu.
                <br>
                Năm 2023, tỉnh Lạng Sơn đã khôi phục hoạt động thông quan trở lại tại cửa khẩu Na Hình, hoạt động xuất nhập cảnh qua cửa khẩu Chi Ma, nâng tổng số cửa khẩu hoạt động trên địa bàn tỉnh lên 6 cửa khẩu gồm: Cửa khẩu quốc tế Hữu Nghị, Ga đường sắt Đồng Đăng; Cửa khẩu chính Chi Ma; các cửa khẩu phụ Tân Thanh, Cốc Nam, Na Hình.
                <br>
                Theo đó, lượng xe thông quan trung bình đạt khoảng 1.100 - 1.350 xe/ngày. Tổng kim ngạch hàng hóa xuất nhập khẩu qua địa bàn tỉnh năm 2023 tăng mạnh so với năm 2022, ước thực hiện 4.780 triệu USD, đạt 126% kế hoạch, tăng 56,2%.
                <br>
                Trong đó, xuất khẩu 2.730 triệu USD, đạt 210% kế hoạch, tăng 166,9%; nhập khẩu 2.050 triệu USD, đạt 82% kế hoạch, tăng 0,6%. 
                
                <br>     Nguồn: Cục Thương mại điện tử và Kinh tế số'
            ],
            [
                'id' => 'b8294f27-20bf-48af-93be-a532f85eb58c',
                'catalog_id' => 'c062e43e-351f-47fa-b0a6-9941bfc998e8',
                'summary' => 'Thông tin từ Bộ Công Thương, tính đến ngày 22/1/2024, cả nước có 161 thương nhân được cấp Giấy chứng nhận đủ điều kiện kinh doanh xuất khẩu gạo.
                ',
                'slug' => 'bo-cong-thuong-cap-giay-chung-nhan',
                'name' => 'Bộ Công Thương cấp Giấy chứng nhận cho 161 thương nhân đủ điều kiện xuất khẩu gạo
                ',
                'img' => 'xuatkhaugao.jpg',
                'content' => 'Cục Xuất nhập khẩu (Bộ Công Thương) vừa thông tin, tính đến ngày 22/1/2024, cả nước có 161 thương nhân được cấp Giấy chứng nhận đủ điều kiện kinh doanh xuất khẩu gạo.

                Theo đó, TP. Hồ Chí Minh là địa phương đứng đầu với 36 thương nhân đủ điều kiện (giảm 1 thương nhân so với danh sách công bố hồi tháng 10/2023); tiếp đến là Cần Thơ 34 thương nhân, Long An 22 thương nhân, Đồng Tháp 15 thương nhân, An Giang 14 thương nhân.
                <br>
                Tuy nhiên, cũng tại danh sách này, một số địa phương chỉ có 1 thương nhân đủ điều kiện xuất khẩu gạo là Hà Nam, Hậu Giang, Khánh Hòa, Lạng Sơn, Thanh Hóa.
                <br>
                Theo danh sách này nếu so với thời điểm giữa năm, số thương nhân đủ điều kiện kinh doanh xuất khẩu gạo đã giảm đi đáng kể. Trước đó, trong danh sách hồi giữa tháng 8/2023, cả nước có tổng cộng 210 thương nhân kinh doanh xuất khẩu gạo, nhưng đến tháng 10/2023 chỉ còn 170 thương nhân.
                <br>
                 
                
                Nhận định từ Cục Xuất nhập khẩu, năm 2023, Bộ Công Thương đã tham mưu điều hành xuất khẩu đạt kết quả tích cực, tiêu thụ lúa gạo của người nông dân với giá cao, đồng thời đảm bảo an ninh lương thực. Kết quả xuất khẩu gạo trên 8,1 triệu tấn, mang về doanh thu gần 4,7 tỷ USD trong bối cảnh tình hình thương mại gạo thế giới diễn biến phức tạp, nhiều nước hạn chế xuất khẩu với mục tiêu an ninh lương thực.
                <br>
                Theo đó, ngay từ vụ Đông Xuân, Bộ Công Thương đã tổ chức cuộc họp với Bộ Nông nghiệp và Phát triển nông thôn, Hiệp hội Lương thực Việt Nam và các thương nhân xuất khẩu gạo, qua đó báo cáo Thủ tướng Chính phủ các giải pháp xuất khẩu gạo năm 2023.
                <br>
                Ngoài ra, trước động thái bất ngờ của Ấn Độ về việc cấm xuất khẩu tất cả chủng loại gạo trắng thường (phi basmati), Bộ Công Thương đã kịp thời chỉ đạo các thương nhân thực hiện nghiêm túc quy định tại Nghị định số 107/2018/NĐ-CP đảm bảo duy trì mức dự trữ lưu thông, cân đối xuất khẩu hiệu quả.
                <br>
                Đáng lưu ý, Cục Xuất nhập khẩu cũng đã tham mưu cho Bộ trưởng Bộ Công Thương để ban hành Chỉ thị số 07/CT-BCT về tăng cường thông tin thị trường, xúc tiến thương mại, phát triển thị trường xuất khẩu gạo và bình ổn thị trường trong nước.
                <br>
                Mặt khác, Bộ Công Thương tích cực đàm phán, trao đổi song phương với các đối tác nhập khẩu truyền thống, trọng điểm (Malaysia, Philippines) về việc xem xét tiến tới ký kết Bản ghi nhớ thương mại gạo.
                <br>
                Cùng đó, ký kết với Bộ Công nghiệp nhẹ, Lương thực và Nông nghiệp Mông Cổ về Bản ghi nhớ thương mại gạo giữa Việt Nam và Mông Cổ; trong đó, Việt Nam luôn sẵn sàng cung cấp 30.000 tấn gạo cho thị trường Mông Cổ. Tổ chức Đoàn giao dịch thương mại gạo tại thị trường Trung Quốc nhằm duy trì, củng cố và mở rộng thị phần sản phẩm gạo tại thị trường này.
                <br>
                Theo các chuyên gia thương mại, dự báo giá gạo xuất khẩu sẽ còn biến động theo chiều hướng tăng trong năm 2024 do nguồn cung bị thắt chặt. Thị trường gạo sẽ tiếp tục thắt chặt vào đầu năm do các hạn chế xuất khẩu đang diễn ra của Ấn Độ.
                <br>
                Trong khi đó, nhu cầu nhập khẩu của nhiều quốc gia như Indonesia, Philippines gia tăng sẽ có tác động làm tăng giá gạo xuất khẩu. Đặc biệt, năm 2024, Việt Nam đặt mục tiêu giữ vững diện tích gieo trồng lúa đạt 7,1 triệu ha, sản lượng lúa trên 43 triệu tấn, đảm bảo tiêu dùng trong nước và xuất khẩu trên 8 triệu tấn gạo.
                
                 
                <br>
                Nhận định từ Cục Xuất nhập khẩu, năm 2023, Bộ Công Thương đã tham mưu điều hành xuất khẩu đạt kết quả tích cực, tiêu thụ lúa gạo của người nông dân với giá cao, đồng thời đảm bảo an ninh lương thực. Kết quả xuất khẩu gạo trên 8,1 triệu tấn, mang về doanh thu gần 4,7 tỷ USD trong bối cảnh tình hình thương mại gạo thế giới diễn biến phức tạp, nhiều nước hạn chế xuất khẩu với mục tiêu an ninh lương thực.
                <br>
                Theo đó, ngay từ vụ Đông Xuân, Bộ Công Thương đã tổ chức cuộc họp với Bộ Nông nghiệp và Phát triển nông thôn, Hiệp hội Lương thực Việt Nam và các thương nhân xuất khẩu gạo, qua đó báo cáo Thủ tướng Chính phủ các giải pháp xuất khẩu gạo năm 2023.
                <br>
                Ngoài ra, trước động thái bất ngờ của Ấn Độ về việc cấm xuất khẩu tất cả chủng loại gạo trắng thường (phi basmati), Bộ Công Thương đã kịp thời chỉ đạo các thương nhân thực hiện nghiêm túc quy định tại Nghị định số 107/2018/NĐ-CP đảm bảo duy trì mức dự trữ lưu thông, cân đối xuất khẩu hiệu quả.
                <br>
                Đáng lưu ý, Cục Xuất nhập khẩu cũng đã tham mưu cho Bộ trưởng Bộ Công Thương để ban hành Chỉ thị số 07/CT-BCT về tăng cường thông tin thị trường, xúc tiến thương mại, phát triển thị trường xuất khẩu gạo và bình ổn thị trường trong nước.
                <br>
                Mặt khác, Bộ Công Thương tích cực đàm phán, trao đổi song phương với các đối tác nhập khẩu truyền thống, trọng điểm (Malaysia, Philippines) về việc xem xét tiến tới ký kết Bản ghi nhớ thương mại gạo.
                <br>
                Cùng đó, ký kết với Bộ Công nghiệp nhẹ, Lương thực và Nông nghiệp Mông Cổ về Bản ghi nhớ thương mại gạo giữa Việt Nam và Mông Cổ; trong đó, Việt Nam luôn sẵn sàng cung cấp 30.000 tấn gạo cho thị trường Mông Cổ. Tổ chức Đoàn giao dịch thương mại gạo tại thị trường Trung Quốc nhằm duy trì, củng cố và mở rộng thị phần sản phẩm gạo tại thị trường này.
                <br>
                Theo các chuyên gia thương mại, dự báo giá gạo xuất khẩu sẽ còn biến động theo chiều hướng tăng trong năm 2024 do nguồn cung bị thắt chặt. Thị trường gạo sẽ tiếp tục thắt chặt vào đầu năm do các hạn chế xuất khẩu đang diễn ra của Ấn Độ.
                <br>
                Trong khi đó, nhu cầu nhập khẩu của nhiều quốc gia như Indonesia, Philippines gia tăng sẽ có tác động làm tăng giá gạo xuất khẩu. Đặc biệt, năm 2024, Việt Nam đặt mục tiêu giữ vững diện tích gieo trồng lúa đạt 7,1 triệu ha, sản lượng lúa trên 43 triệu tấn, đảm bảo tiêu dùng trong nước và xuất khẩu trên 8 triệu tấn gạo.'
            ],
            [
                'id' => '3d8ddd8e-1a25-4c1a-8fc6-ba1c0b5d6cb0',
                'catalog_id' => 'c062e43e-351f-47fa-b0a6-9941bfc998e8',
                'summary' => 'Bộ Khoa học và Công nghệ đã ban hành Thông tư 24/2023/TT-BKHCN quy định việc kiểm tra nhà nước về chất lượng sản phẩm, hàng hóa trong sản xuất thuộc trách nhiệm quản lý của Bộ Khoa học và Công nghệ.
                ',
                'name' => 'Quy định kiểm tra chất lượng sản phẩm, hàng hóa trong sản xuất
                ',
                'slug' => 'quy-dinh-kiem-tra-chat-luong-san-pham',
                'img' => 'quytrinhkiemtrachatluong.jpg',
                'content' => 'Thông tư nêu rõ, đối tượng kiểm tra là sản phẩm, hàng hóa trong sản xuất thuộc trách nhiệm quản lý của Bộ Khoa học và Công nghệ quy định tại điểm p khoản 2 Điều 32 Nghị định số 132/2008/NĐ-CP ngày 31/12/2008 của Chính phủ quy định chi tiết thi hành một số điều của Luật Chất lượng sản phẩm, hàng hóa, được sửa đổi, bổ sung bởi khoản 14 Điều 1 Nghị định 74/2018/NĐ-CP ngày 15/5/2018 của Chính phủ quy định chi tiết thi hành một số điều Luật Chất lượng sản phẩm, hàng hóa.
                <br>
                Nội dung kiểm tra chất lượng sản phẩm, hàng hóa trong sản xuất
                <br>
                Theo Thông tư quy định, một trong những nội dung kiểm tra chất lượng sản phẩm trong sản xuất là kiểm tra việc áp dụng yêu cầu quy định trong tiêu chuẩn công bố áp dụng, quy chuẩn kỹ thuật tương ứng liên quan đến điều kiện của quá trình sản xuất và các biện pháp quản lý nhà nước về chất lượng trong sản xuất, bao gồm:
                <br>
                Kiểm tra hồ sơ chứng nhận hợp quy, công bố hợp quy (đối với các sản phẩm, hàng hóa phải chứng nhận và công bố hợp quy); hồ sơ công bố hợp chuẩn (đối với các sản phẩm, hàng hóa công bố hợp chuẩn); hồ sơ chứng nhận hệ thống quản lý chất lượng phù hợp tiêu chuẩn (đối với sản phẩm, hàng hóa áp dụng hệ thống quản lý chất lượng).
                <br>
                Trường hợp trong quy chuẩn kỹ thuật tương ứng có quy định liên quan đến điều kiện của quá trình sản xuất thì kiểm tra việc thực hiện các quy định này trong 4 quá trình sản xuất.
                <br>
                Kiểm tra việc thực hiện các biện pháp khác của quản lý nhà nước về chất lượng sản phẩm, hàng hóa trong sản xuất do cơ quan có thẩm quyền quy định.
                <br>
                Kiểm tra kết quả đánh giá sự phù hợp, nhãn hàng hóa, dấu hợp chuẩn, dấu hợp quy và các tài liệu kèm theo sản phẩm, hàng hóa cần kiểm tra, bao gồm:
                <br>
                Kiểm tra việc thực hiện và kết quả đánh giá sự phù hợp của quá trình sản xuất.
                <br>
                Kiểm tra nhãn hàng hóa, thông tin sản phẩm, hàng hóa:
                <br>
                Kiểm tra các nội dung thể hiện trên nhãn sản phẩm, hàng hóa; các nội dung thể hiện mã số, mã vạch, truy xuất nguồn gốc theo quy định của pháp luật và đối chiếu với tài liệu kèm theo.
                <br>
                Kiểm tra việc thực hiện công bố tiêu chuẩn áp dụng, việc thể hiện dấu hợp quy (đối với sản phẩm, hàng hóa phải chứng nhận và công bố hợp quy), dấu hợp chuẩn (đối với sản phẩm, hàng hóa được chứng nhận phù hợp tiêu chuẩn).
                <br>
                Kiểm tra tính chính xác của việc thể hiện nội dung, thông tin quảng cáo trên nhãn (nếu có) của sản phẩm, hàng hóa.
                <br>
                Kiểm tra hoạt động kiểm soát quá trình sản xuất của cơ sở được kiểm tra liên quan đến việc tạo thành sản phẩm, hàng hóa và duy trì sự đảm bảo chất lượng bao gồm:
                <br>
                Kiểm tra hồ sơ kỹ thuật của sản phẩm, hàng hóa (tài liệu thiết kế; tiêu chuẩn công bố áp dụng, quy chuẩn kỹ thuật tương ứng của sản phẩm, hàng hóa).
                <br>
                Kiểm tra toàn bộ quá trình sản xuất (từ đầu vào, qua các giai đoạn trung gian cho đến khi hình thành sản phẩm, hàng hóa bao gồm cả quá trình bao gói, xếp dỡ, lưu kho và vận chuyển sản phẩm).
                <br>
                Kiểm tra việc sử dụng các phương tiện đo liên quan đến quá trình sản xuất theo quy định của pháp luật về đo lường.
                <br>
                Kiểm tra chất lượng nguyên vật liệu (theo tiêu chuẩn công bố áp dụng, quy chuẩn kỹ thuật tương ứng, việc sử dụng nguyên liệu bị cấm, nguyên vật liệu quá hạn sử dụng).
                <br>
                Trong trường hợp cần thiết, cơ quan kiểm tra có thể sử dụng chuyên gia thực hiện việc đánh giá theo các yêu cầu của tiêu chuẩn công bố áp dụng, quy chuẩn kỹ thuật tương ứng. Chuyên gia đánh giá phải độc lập, khách quan và chịu trách nhiệm trước pháp luật về kết quả đánh giá của mình.
                <br>
                Thử nghiệm mẫu để kiểm tra sự phù hợp của chất lượng sản phẩm, hàng hóa với tiêu chuẩn công bố áp dụng, quy chuẩn kỹ thuật tương ứng.
                <br>
                Thông tư có hiệu lực thi hành từ 15/2/2024.'
            ]
        ];
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}

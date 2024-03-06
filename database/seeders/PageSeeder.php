<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pages = [
            [
                'id' => '843d25a0-f49f-45ab-84e6-cfdd6374f8ae',
                'slug' => 'gioi-thieu',
                'name' => 'Giới thiệu',
                'content' => '
                <h3><strong>Về chúng tôi</strong></h3>
                <p>Công ty được thành lập năm vào năm 2017 và từ đó đến nay là nhà cung cấp dịch vụ logistics đáng tin cậy của Việt Nam.
                Danh tiếng về độ tin cậy của chúng tôi trong việc vận chuyển hàng hóa trong khu vực và quốc tế đã được xây dựng nhờ giải pháp hậu cần chuyên nghiệp, giá cả cạnh tranh và dịch vụ sau bán hàng.
                </p>
                <h3><strong>Chúng tôi đang thực hiện</strong></h3>
                <p><strong>VẬN TẢI ĐA PHƯƠNG THỨC</strong></p>
                <p>Đưa ra những giải pháp thông minh tối ưu trong công việc chuyển giao hợp nhất giữa các phương thức đường biển, đường không và vận chuyển nội địa (Đường sắt, xà lan, xe đầu kéo)
                </p>

                <p><strong>GIẢI PHÁP KHO BÃI
                </strong></p>
                <p>Cung cấp kho bãi thương mại điện tử, cơ sở kho bãi, dịch vụ phân phối và bãi container lạnh tổng hợp
                </p>

                <p><strong>DỊCH VỤ HẢI QUAN

                </strong></p>
                <p>Dịch vụ khai báo hải quan khách hàng, kiểm hoá cho tất cả loại hàng hoá
                </p>

                <p><strong>VẬN TẢI HÀNG RỜI
                </strong></p>
                <p>Cung cấp phương tiện chở hàng rời & vận chuyển nhiều loại hàng rời
                </p>

                <p><strong>VẬN TẢI HÀNG QUÁ KHỔ
                </strong></p>
                <p>Chuyên vận chuyển hàng dự án với hàng siêu trường siêu trọng và các loại container đặc biệt (Reefer, Tank, Flat Rack, Open Top Container,…)
                </p>

                <p><strong>DỊCH VỤ GIA TĂNG
                </strong></p>
                <p>Theo dõi, sửa chữa, đóng gói, tính linh hoạt… Gia tăng giá trị sau khi sử dụng dịch vụ - yêu cầu duy trì liên tục
                </p>

                <h4><strong>Lý do quý khách hàng nên chọn chúng tôi</strong></h4>
                <p>Cung cấp dịch vụ vận chuyển an toàn, đáng tin cậy cho khách hàng bằng cách tư vấn hiệu quả cho khách hàng về nhiều quy trình và thủ tục hải quan hoặc giải pháp logistics tốt nhất cho doanh nghiệp của đối tác bởi đội ngũ chuyên nghiệp của chúng tôi.
                </p>
                <p>Tập trung vào khách hàng với mục đích chính là xây dựng mối quan hệ kinh doanh tích cực lâu dài với khách hang. Vì vậy, chúng tôi luôn nỗ lực cải tiến liên tục về mọi mặt.
                </p>
                ',
                'img' => 'gioi-thieu.jpg',
            ],
            [
                'id' => 'c477fded-8e08-4717-a08d-c9f49fe92166',
                'slug' => 'lien-he',
                'name' => 'Liên hệ',
                'content' => '
                <h3><strong>Liên hệ với chúng tôi</strong></h3>
                <div class="row">
                <div class="col-md-6 col-12 px-4">
                    <form>
                        <div class="mb-3">
                            <label  class="form-label">Họ tên</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Email address</label>
                            <input type="email" class="form-control" >
                        </div>
                        <div class="mb-3">
                        <label  class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" >
                    </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nội dung</label>
                            <textarea style="height:100px" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
                <div class="col-md-6 border-start px-4 col-12">
                <p><strong>Giám đốc: </strong>Nguyễn Đức Ba</p>
                <p><strong>Số điện thoại: </strong>+84906 058 729</p>
                <p><strong>Email: </strong>band@bachailogistics.com</p>
                <hr>
                <p><strong>Phó giám đốc: </strong>Nguyễn Anh Đức</p>
                <p><strong>Số điện thoại: </strong>+84 93 688 7955</p>
                <p><strong>Email: </strong>ducnguyen@bachailogistics.com</p>
                <hr>
                <p><strong>Trụ sở chính: </strong> 1B9-1B11 ĐƯỜNG SỐ 27, PHƯỜNG AN PHÚ, TP. THỦ ĐỨC, TP. HỒ CHÍ MINH </p>
                <hr>
                <p><strong>CHI NHÁNH HẢI PHÒNG: </strong> 
                79 Chùa Vẽ, Tổ dân phố Phú Xá 3, phường Đông Hải 1, quận Hải An, thành phố Hải Phòng </p>

                <p><strong>CHI NHÁNH BẮC NINH:</strong>
                Km14, xã Việt Hùng, huyện Quế Võ, tỉnh Bắc Ninh</p>

                <p><strong>CHI NHÁNH BÌNH DƯƠNG: </strong> 
                Đường số 2, khu phố Bình Đường 1, phường An Bình, thành phố Dĩ An, tỉnh Bình Dương Province.</p>

                <p><strong>CHI NHÁNH VŨNG TÀU: </strong> 
                Ngã 3 Cái Mép, đường Độc Lập, khu phố Ông Trịnh, Thị Xã Phú Mỹ, tỉnh Bà Rịa - Vũng Tàu</p>

                </div>
                </div>
                ',
                'img' => 'lien-he.png',
            ],
            [
                'id' => 'ceff1457-94d6-4abc-bf6e-d060f05a376b',
                'slug' => 'chinh-sach-bao-mat',
                'name' => 'Chính sách bảo mật',
                'content' => '<div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">
        
                        
                                            
                                <p><span style="font-size: 12pt;"><strong>Chính sách bảo mật tại bachaicompany.com</strong></span><br>
        <span style="font-size: 12pt;">Tài liệu này mô tả về phạm vi thông tin mà bachaicompany.com thu thập từ người sử dụng và mục đích sử dụng, cách sử dụng cũng như các phương tiện sử dụng nhằm tối đa hóa trong việc bảo mật thông tin khách hàng. bachaicompany.com cam kết bảo mật tuyệt đối chi tiết cá nhân của khách hàng. Mỗi thông tin và dữ liệu thu thập được đều được xử lý theo các quy tắc bảo vệ dữ liệu cá nhân trực tuyến .</span></p>
        <p><span style="font-size: 12pt;"><strong>Chính sách bảo mật tại bachaicompany.com bao gồm các nội dung sau:</strong></span></p>
        <p><span style="font-size: 12pt;"><strong>A. Chúng tôi thu thập dữ liệu như thế nào?</strong></span><br>
        <span style="font-size: 12pt;">Thông tin của người sử dụng trang web bachaicompany.com được thu thập một cách chủ động và thụ động. Thu thập thông tin một cách chủ động là khi người sử dụng đăng nhập thông tin vào đơn đặt hàng trong quá trình tiến hành mua bán trực tuyến. Thu thập thông tin một cách thụ động là khi máy chủ tự động ghi chép các dữ liệu liên quan đến trang web bao gồm địa chỉ IP, loại trình duyệt và độ phân giải bằng các chương trình phân tích hành vi khách hàng nhằm phục vụ cho mục đích thống kê.</span></p>
        <p><span style="font-size: 12pt;"><strong>B. Phạm vi của các dữ liệu được thu thập</strong></span><br>
        <span style="font-size: 12pt;">Địa chỉ email của người sử dụng được thu thập trong quá trình đăng ký nhận bản tin mới từ bachaicompany.com. Những thông tin khách hàng bao gồm: tên họ đầy đủ, địa chỉ, số điện thoại, số fax (tùy chọn), thông tin công ty (tùy chọn trong việc xuất hóa đơn) và địa chỉ email sẽ được thu thập trong quá trình mua vé. Trong trường hợp khách hàng không muốn nhận các tiếp thị điện tử hoặc chương trình khuyến mại từ bachaicompany.com, khách hàng có thể từ chối nhận bản tin. Tuy nhiên, khách hàng phải cung cấp những thông tin cần thiết mà bachaicompany.com cần như thông tin cá nhân để hoàn thành booking đặt vé.</span></p>
        <p><span style="font-size: 12pt;">Ngoài ra, thông tin cá nhân khách hàng cũng có thể được thu thập từ các tổ chức trực tuyến có uy tín nhằm bổ sung dữ liệu và phục vụ quá trình thống kê và/hoặc phân tích thói quen mua hàng trực tuyến. Trong quá trình sử dụng trang web bachaicompany.com, vì lý do an ninh, các dữ liệu liên quan đến kết nối máy vi tính và trình duyệt internet của người dùng đều được tự động cập nhật.</span></p>
        <p><span style="font-size: 12pt;">Hệ thống của bachaicompany.com chỉ quan tâm đến chi tiết giao dịch chứ không quan tâm đến thông tin cá nhân của khách hàng, kể cả đối với các thông tin được thu thập một cách chủ động (hay thụ động). Trường hợp người sử dụng đăng ký và mong muốn nhận được cách thông tin khuyến mại từ chúng tôi, cơ sở dữ liệu của chúng tôi sẽ tự động phân tích và thu thập các sở thích du lịch của khách hàng và tư vấn nhiều tìm kiếm tối ưu nhất. Tuy nhiên, đối với các khách hàng sử dụng thẻ tín dụng bất hợp pháp hoặc những hành vi vi phạm pháp luật khác đều có thể bị truy tố theo luật pháp và khách hàng chịu trách nhiệm trước pháp luật về các hành vi của mình. Các cơ quan có liên quan của Chính phủ có thể xác định địa điểm của máy tính truy cập và khởi tố người sử dụng dữ liệu từ máy chủ.</span></p>
        <p><span style="font-size: 12pt;">Các dữ liệu thu thập chứa các thông tin về nguồn gốc, thông tin từ các trang web đã dẫn người dùng đến bachaicompany.com, các dữ liệu liên quan đến địa chỉ IP kết nối internet, thông tin đăng ký của máy chủ, độ phân giải và các dữ liệu kỹ thuật khác. Các dữ liệu truy cập cũng bao gồm cả các từ khóa liên quan, các trang quảng cáo liên kết dẫn người sử dụng đến với bachaicompany.com và các lần truy cập cuối cùng đến bachaicompany.com.</span></p>
        <p><span style="font-size: 12pt;"><strong>C. Chúng tôi thu thập thông tin để làm gì?</strong></span><br>
        <span style="font-size: 12pt;">Các thông tin cá nhân của khách hàng được thu thập nhằm hoàn thành quá trình bán sản phẩm và dịch vụ được cung cấp bởi bachaicompany.com. Các dữ liệu được thu thập cũng có thể được sử dụng để cung cấp sản phẩm và dịch vụ khác trong tương lai. Trong một số trường hợp, chúng tôi sẽ sử dụng các thông tin này để thực hiện các chương trình khuyến mại, chiến dịch quảng cáo hoặc các cuộc khảo sát thăm dò ý kiến khách hàng.</span></p>
        <p><span style="font-size: 12pt;">Chúng tôi cũng sử dụng các thông tin này cho mục đích thống kê. Qúa trình thống kê sẽ được thực hiện bằng các hệ thống phân tích được cung cấp bởi các công ty có uy tín nhằm bảo về quyền riêng tư tối ưu cho bachaicompany.com và khách hàng của bachaicompany.com. Dựa trên các dữ liệu được phân tích trên, bachaicompany.com qua đó có thể thống kê hành vi, sở thích của người dùng nhằm cải thiện chất lượng trang web và tăng thêm sự hài lòng cho người sử dụng.</span></p>
        <p><span style="font-size: 12pt;"><strong>D. Truyền tải dữ liệu của khách hàng qua các đơn vị khác</strong></span><br>
        <span style="font-size: 12pt;">Thông tin của khách hàng chỉ được truyền tải cho các hãng hàng không và các nhà cung cấp dịch vụ trực tiếp khác cho bachaicompany.com.</span></p>
        <p><span style="font-size: 12pt;">bachaicompany.com đảm bảo các chi tiết và thông tin cá nhân trên chỉ được truyền tải cho các đơn vị đáng tin cậy và không lạm dụng quyền riêng tư đối với người sử dụng trang web bachaicompany.com.</span></p>
        <p><span style="font-size: 12pt;">bachaicompany.com có quyền cung cấp các dữ liệu cho các cơ quan có liên quan khi nhận được yêu cầu hợp pháp từ các cơ quan của Chính phủ. bachaicompany.com không được phép bán các dữ liệu thu thập được về người sử dụng cho các đối tượng và đơn vị khác nhau nhằm mục đích lợi nhuận.</span></p>
        <p><span style="font-size: 12pt;"><strong>E. Quy tắc liên lạc giữa bachaicompany.com và người sử dụng</strong></span><br>
        <span style="font-size: 12pt;">bachaicompany.com được phép liên lạc với người sử dụng khi cần thiết thông qua: email, tin nhắn SMS, fax, thư, điện thoại, gặp trực tiếp để thực hiện các hoạt động bán hàng hoặc thăm dò ý kiến, đo lường sự hài lòng của khách hàng nhằm từng bước cải thiện chức năng của trang web bachaicompany.com.</span></p>
        <p><span style="font-size: 12pt;">bachaicompany.com cũng sẽ liên lạc với người sử dụng để cung cấp cho người dùng các thông tin liên quan đến các chương trình khuyến mại và chiến dịch quảng cáo (người dùng có thể đăng ký sử dụng vào bất cứ lúc nào).</span></p>
        <p><span style="font-size: 12pt;"><strong>F. Thay đổi các chi tiết cá nhân và từ chối nhận các thông tin quảng cáo</strong></span><br>
        <span style="font-size: 12pt;">Mỗi thành viên của trang web bachaicompany.com có quyền xem những thông tin cá nhân của mình trên trang web và thay đổi theo mong muốn. Để thực hiện việc này, người sử dụng cần đăng nhập vào trang web và thay đổi thông tin. Người sử dụng có thể được yêu cầu cung cấp một số thông tin cần thiết hoặc chứng minh thông tin tài khoản đăng nhập bằng cách kích hoạt đường dẫn qua email đăng ký.</span></p>
        <p><span style="font-size: 12pt;">Khách hàng đã đăng ký nhận thông tin từ bachaicompany.com có thể từ chối nhận các bản tin, thông tin thương mại và quảng cáo bất cứ lúc nào hoặc cấm truyền tải thông tin cá nhân cho các đơn vị khác trừ khi thực hiện các giao dịch trực tuyến. Khách hàng có thể xóa các dữ liệu cá nhân trên bachaicompany.com vào bất cứ thời điểm nào. Tuy nhiên, một số thông tin liên quan đến mục đích kế toán vẫn được bachaicompany.com lưu giữ một cách hợp pháp.</span></p>
        <p><span style="font-size: 12pt;"><strong>G. Bảo mật dữ liệu</strong></span><br>
        <span style="font-size: 12pt;">Nhằm bảo mật các dữ liệu và thông tin khách hàng, cơ sở dữ liệu thu thập được và lưu trên máy chủ của bachaicompany.com được bảo vệ chống truy cập với một hệ thống mật khẩu hoàn toàn bảo mật.</span></p>
        <p><span style="font-size: 12pt;"><strong>H. Loại trừ trách nhiệm</strong></span><br>
        <span style="font-size: 12pt;">Toàn bộ thông tin về chính sách bảo mật cho người sử dụng bachaicompany.com đã được bao gồm trong tài liệu này. Tuy nhiên, trong thực tế có thể có các trường hợp bachaicompany.com thực hiện việc thu thập, xử lý và sử dụng thông tin người dùng không hoàn toàn giống so với miêu tả trong tài liệu này miễn là việc đó không lạm dụng vào quyền riêng tư của người dùng.</span></p>
        <p><span style="font-size: 12pt;">bachaicompany.com cam kết sử dụng các biện pháp cần thiết để thực hiện chính sách bảo mật. Tuy nhiên, bachaicompany.com không có nghĩa vụ bồi thường cho việc lạm dụng và không tuân thủ chính sách bảo mật. Ngoại trừ trường hợp những nghĩa vụ này có liên quan đến trách nhiệm dân sự và hình sự theo luật pháp.</span></p>
        <p><span style="font-size: 12pt;">bachaicompany.com có thể có những liên kết, quảng cáo và các đường dẫn đến các trang web khác. Chúng tôi cam kết nỗ lực liên kết đến những trang web có giá trị và uy tín nhằm bảo đảm sự an toàn và riêng tư của người sử dụng. Tuy nhiên, bachaicompany.com xin khẳng định chính sách bảo mật của các trang web hoàn toàn khác nhau và độc lập với bachaicompany.com. bachaicompany.com không chịu trách nhiệm đối với các trang web khác.</span></p>
        <p><span style="font-size: 12pt;"><strong>I. Tổ chức thu thập dữ liệu</strong></span><br>
        <span style="font-size: 12pt;">Tổ chức thu thập dữ liệu là Công ty Cổ phần du lịch vé máy bay Việt Mỹ, có trụ sở đặt tại Hồ Chí Minh, Việt Nam. Chi tiết về công ty có trong mục “Liên hệ” của trang web bachaicompany.com</span></p>
        <p><span style="font-size: 12pt;"><strong>J. Thay đổi các chính sách bảo mật</strong></span><br>
        <span style="font-size: 12pt;">Các chính sách bảo mật có thể được thay đổi cho phù hợp với thực tế. Các thay đổi sẽ được cập nhật tới người dùng trên trang web bachaicompany.com.</span></p>
        
                            
                                                        </div>
                </div>
            </div>',
                'img' => 'chinhsachbaomat.jpg',

            ],
            [
                'id' => '487c7cba-cf32-4403-8660-393e394d761b',
                'slug' => 'dieu-khoan-su-dung',
                'name' => 'Điều khoản sử dụng',
                'content' => '<div class="contentDKSDidBox">
                <h3 class="titleDKSD">Điều khoản sử dụng trên Bắc Hải</h3>
                <p class="TextDKSD">Website này thuộc quyền sở hữu và quản lý của Công ty cổ phần tiếp vận Bắc Hải. Việc quý khách truy cập và sử dụng website này có nghĩa là quý khách đã chấp thuận các điều khoản và điều kiện đề ra sau đây. Do vậy đề nghị quý khách đọc và nghiên cứu kỹ trước khi sử dụng tiếp.</p>
            
                <p class="bfContentText ">Điều khoản sử dụng trên Bắc Hải bao gồm các nội dung sau:</p>
                <div id="contentDKSDidBox_2">
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">A.&nbsp;Khái quát</span></h3>
                    <div>
                        <table width="100%" id="listDKSD">
            
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px">
                                        1. Tất cả những điều khoản về việc sử dụng Bắc Hải để đặt, thanh toán, thanh toán nhanh vé máy bay và các dịch vụ khác ("Điều khoản sử dụng Bắc Hải và/hoặc "Điều khoản sử dụng") được đăng tải trên trên trang website https://bachaicompany.com/ và được cung cấp bởi đội ngũ hỗ trợ của Bắc Hải (trung tâm hỗ trợ Bắc Hải).<br>
                                        2. Các quản trị viên của trang website Bắc Hải ("trang web Bắc Hải") và trung tâm hỗ trợ Bắc Hải trực thuộc Công ty cổ phần tiếp vận Bắc Hải, trụ sở tại Hải Phòng, Việt Nam. Thông tin chi tiết về Công ty có trong mục "Liên hệ" trên trang web https://bachaicompany.com/.<br>
                                        3. Bắc Hải cung cấp dịch vụ vé máy bay cho khách hàng với tư cách là đại lý cấp một của các đại lý đã được Hiệp hội vận tải hàng không quốc tế (IATA) công nhận và có hợp đồng đại lý với các hãng hàng không thuộc IATA (Hãng hàng không truyền thống). 
                                        4. Với vai trò là đại lý cấp một của các đại lý đã được IATA công nhận, Bắc Hải là đại diện cho các Hãng hàng không thuộc IATA trong việc bán vé máy bay cho khách hàng. Trách nhiệm của Bắc Hải là thay mặt các Hãng hàng không ký hợp đồng vận chuyển với khách hàng.<br>
                                        5. Trong Điều khoản sử dụng Bắc Hải, cụm từ "Bất khả kháng" bao gồm: tất cả những sự kiện không thể chống cự hoặc ngăn cản được, đặc biệt là các sự cố như: chiến tranh, lũ lụt, hỏa hoạn, thiên tai, núi lửa phun trào, các cuộc tấn công khủng bố, đình công, tuyết lở, cũng như hacker tấn công trên mạng lưới Internet hay các virus vi tính làm tắc nghẽn việc cung cấp dịch vụ.<br>
                                        6. Trung tâm hỗ trợ Bắc Hải thực hiện các trách nhiệm của mình theo Điều khoản sử dụng Bắc Hải bằng điện thoại hoặc tại văn phòng của Bắc Hải:<br>
                                        <span class="marginLeft20px">Từ thứ hai đến thứ sáu hàng tuần từ 08:00 đến 20:00.</span><br>
                                        <span class="marginLeft20px">Ngày thứ bảy từ 08:00 – 12:00.</span><br>
                                        Trung tâm hỗ trợ Bắc Hải không làm việc trong những ngày nghỉ lễ, chủ nhật.<br>
                                        Người sử dụng, theo định nghĩa của Bắc Hải, là bất kỳ cá nhân, pháp nhân hoặc các tổ chức không có tư cách pháp nhân sử dụng các dịch vụ của Bắc Hải.<br>
                                        7. Giá vé của một hãng máy bay mà người sử dụng phải thanh toán bao gồm: giá của các chuyến bay và các chi phí khác được quy định bởi Hãng hàng không truyền thống. Ngoài Giá vé của Hãng hàng không, khách hàng còn được yêu cầu thanh toán phí dịch vụ cho Bắc Hải ("Phí xuất vé"). Tổng Giá vé bao gồm Giá vé và Phí xuất vé và được thông báo cho khách hàng trước khi thanh toán.<br>
                                        8. Người dùng cũng được yêu cầu trả phí giao dịch cho Bắc Hải ("Phí dịch vụ") khi thực hiện các giao dịch liên quan tới việc hủy vé máy bay (hoặc dịch vụ khác cho khách du lịch), hoặc thay đổi thông tin trên vé (hoặc dịch vụ khác cho khách du lịch). Chi tiết về mức Phí dịch vụ được hiển thị trong mục Xem chi tiết tại trang Kết quả tìm kiếm trên trang web https://bachaicompany.com/.<br>
            
            
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">B.&nbsp;Điều kiện chung của dịch vụ điện tử</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px">
                                        1.	Chấp nhận Điều khoản sử dụng Bắc Hải là điều kiện cần thiết để sử dụng các dịch vụ của Bắc Hải và trung tâm hỗ trợ Bắc Hải. Điều khoản sử dụng Bắc Hải được đăng tải trên trang https://bachaicompany.com//dieu-khoan-su-dung và ở phần footer của trang web https://bachaicompany.com/. Người sử dụng cần tuân theo các điều khoản này từ thời điểm bắt đầu sử dụng trang web của Bắc Hải và các dịch vụ của trung tâm hỗ trợ Bắc Hải.<br>
                                        2.	<span class="uppercase">ĐẶT CHỖ (BOOKING)</span>: là việc người sử dụng vào trang web của Bắc Hải hoặc gọi điện thoại hoặc đến văn phòng công ty Bắc Hải để mua vé máy bay theo các tiêu chí (ví dụ: đường bay, ngày bay) do người sử dụng lựa chọn.<br>
                                        3.	YÊU CẦU ĐẶT VÉ (ORDERING): là việc người sử dụng vào trang web của Bắc Hải hoặc thông qua Trung tâm hỗ trợ Bắc Hải để mua vé máy bay trên các LCC. Các ĐẶT CHỖ trên các Hãng hàng không truyền thống cũng được coi là các YÊU CẦU ĐẶT VÉ nếu vì một lý do nào đó ngoài tầm kiểm soát của Bắc Hải, mà việc ĐẶT CHỖ trên các Hãng hàng không truyền thống không thể thực hiện được.
                                        4.	Người dùng cần đọc và chấp nhận các điều kiện liên quan tới ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ vé máy bay và các dịch vụ khác trên trang web của Bắc Hải.<br>
                                        5.	Các LCC không nhất thiết phải tuân theo các quy định về vận chuyển của IATA. Quy định về vận chuyển của các LCC phụ thuộc vào từng LCC.<br>
                                        6.	 Nội dung của các trang web https://bachaicompany.com/ được bảo vệ bởi pháp luật.<br>
                                        7.	Để thực hiện việc ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ cho các dịch vụ và vé máy bay, người sử dụng cần có một địa chỉ thư điện tử (e-mail) hoặc một số điện thoại đang hoạt động. Người sử dụng đồng ý rằng tất cả các giao dịch của Bắc Hải với người sử dụng sẽ được thực hiện thông qua thư điện tử và số điện thoại mà người sử dụng đã đăng ký với Bắc Hải.<br>
                                        8.	Người sử dụng đồng ý để Bắc Hải sử dụng các thông tin cá nhân mà người sử dụng đã cung cấp cho Bắc Hải trong phạm vi cho phép để thực hiện việc ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ, bao gồm cả việc khiếu nại về việc ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ trong phạm vi kinh doanh của Bắc Hải.<br>
                                        9.	Tên thương mại, tên, thiết kế và thương hiệu được đăng tải tại https://bachaicompany.com/ được pháp luật bảo vệ. Người sử dụng không được thực hiện bất kỳ hành động nào vi phạm đến quyền sở hữu trí tuệ của các tên thương mại, tên, thiết kế và thương hiệu trên trang web của Bắc Hải.<br>
                                        10.	Người dùng chấp nhận rằng Bắc Hải có thể cung cấp đến các cơ quan có thẩm quyền về các hoạt động trái phép để xâm nhập vào trang web của Bắc Hải.<br>
                                        <br>
                                        <span class="b">Quyền miễn trừ trách nhiệm</span><br>
                                        11.	Người sử dụng hoặc người có tên trên vé máy bay cần có đầy đủ các giấy tờ hợp lệ phục vụ cho việc đi lại bằng đường hàng không như: Chứng minh nhân dân, hộ chiếu, visa ngay tại thời điểm ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ. Trong trường hợp ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ các loại vé dành cho sinh viên, người sử dụng hoặc người có tên trên vé cần có thẻ sinh viên còn giá trị.<br>
                                        12.	Người sử dụng tự chịu trách nhiệm nếu không có visa nhập cảnh và quá cảnh theo quy định. Người sử dụng chịu trách nhiệm tìm hiểu các thông tin về yêu cầu visa trước khi thực hiện việc ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ.<br>
                                        13.	Bắc Hải không chịu trách nhiệm trong trường hợp việc ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ  không thể thực hiện được vì các lý do kỹ thuật (lỗi của các hệ thống GDS) hoặc các trường hợp bất khả kháng.<br>
                                        14.	Trách nhiệm thực hiện các dịch vụ vận chuyển hàng không thuộc về các Hãng hàng không truyền thống, các LCC mà người sử dụng đã ký hợp đồng vận chuyển. Bắc Hải không chịu trách nhiệm trong các trường hợp cụ thể dưới đây:<br>
                                        <span class="marginLeft20px">•	Bất kỳ sự chậm trễ hoặc thay đổi nào về chuyến bay của hãng hàng không truyền thống hoặc hãng hàng không giá rẻ;</span><br>
                                        <span class="marginLeft20px">•	Chất lượng của các dịch vụ hàng không và các dịch vụ có liên quan (ví dụ như việc thất lạc hành lý);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Khách hàng đã mua vé nhưng không đến trong thời gian làm thủ tục để lên máy bay;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Khách hàng đã mua vé nhưng không sử dụng vé và không thực hiện hành trình theo vé đã mua;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Khách hàng đã mua vé nhưng không sử dụng toàn bộ hành trình đã mua trên vé (ví dụ như đi một chiều đối với vé khứ hồi);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Khách hàng bị từ chối chuyên chở do không có đầy đủ các giấy tờ cá nhân theo quy định (ví dụ: không có visa, visa giả, không có hộ chiếu, giấy chứng minh nhân dân, thiếu các tài liệu cần thiết khi đi du lịch với trẻ vị thành niên);<br>
                                        </span>
                                        15.	Tất cả các khiếu nại liên quan đến việc thực hiện hợp đồng chuyên chở sẽ do người sử dụng làm việc trực tiếp với các các Hãng hàng không truyền thống hoặc các LCC. Việc khiếu nại cần phù hợp với quy định của các Hãng hàng không truyền thống và các LCC.<br>
                                        16.	Bắc Hải không chịu trách nhiệm bồi thường cho người sử dụng nếu nguyên nhân được xác định là do các trường hợp bất khả kháng.<br>
                                        17.	 Bắc Hải không chịu trách nhiệm về sự lựa chọn các chuyến bay của người sử dụng hoặc người có tên trên vé máy bay.<br>
                                        18.	Trong mọi trường hợp, mức độ bồi thường tối đa mà Bắc Hải bồi thường cho khách hàng là bằng mức Phí dịch vụ mà khách hàng đã trả cho Bắc Hải.<br>
            
            
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">C.&nbsp;Đặt mua vé máy bay và các dịch vụ khác</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        ĐẶT CHỖ (BOOKING): là việc người sử dụng vào trang web của Bắc Hải hoặc thông qua Trung tâm hỗ trợ Bắc Hải để mua vé máy bay trên các Hãng hàng không truyền thống theo các tiêu chí (ví dụ: đường bay, ngày bay) do người sử dụng lựa chọn.<br>
                                        <br>
                                        1.	Người sử dụng thực hiện việc ĐẶT CHỖ thông qua webiste của Bắc Hải hoặc thông qua Bắc Hải bằng cách gặp mặt trao đổi trực tiếp hoặc thông qua điện thoại.<br>
                                        <br>
                                        2.	Người sử dụng đồng ý các Điều khoản sử dụng Bắc Hải khi thực hiện việc ĐẶT CHỖ với Bắc Hải.<br>
                                        <br>
                                        3.	Để thực hiện việc ĐẶT CHỖ, Người sử dụng được yêu cầu cung cấp dữ liệu cho Bắc Hải hoặc Trung tâm hỗ trợ Bắc Hải:<br>
                                        <br>
                                        <span class="marginLeft20px">•	Thông tin cá nhân của Người sử dụng, đặc biệt là tên và họ, địa chỉ email và số điện thoại. Trong trường hợp Người sử dụng mua vé cho người khác thì Người sử dụng cũng cần cung cấp thông tin cá nhân của người trực tiếp sử dụng vé;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Yêu cầu về các dịch vụ bổ sung – Nếu Người sử dụng yêu cầu dịch vụ bổ sung;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thông tin cần thiết để phát hành hóa đơn thuế VAT;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Hình thức thanh toán;<br>
                                        </span>
                                        <br>
                                        4.	Việc ĐẶT CHỖ có thể sẽ không thực hiện được nếu Người sử dụng bỏ qua một trong bốn mục trên.<br>
                                        <br>
                                        5.	Để thực hiện việc ĐẶT CHỖ, Người sử dụng cần cung cấp số một số thông tin liên quan tới việc lựa chọn vé máy bay của Người sử dụng như dưới đây:<br>
                                        <span class="marginLeft20px">•	Nơi khởi hành và nơi đến;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Ngày khởi hành, ngày trở lại;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Số lượng người lớn (từ 12 tuổi trở lên), số lượng trẻ sơ sinh (0-2 tuổi), trẻ em (2-12 tuổi).<br>
                                        </span>
                                        <br>
                                        6.	Khi bắt đầu thực hiện việc ĐẶT CHỖ, Người sử dụng cần kiểm tra và đảm bảo sự chính xác của tất cả các dữ liệu đã cung cấp. Khi quyết định thực hiện việc ĐẶT CHỖ, Người sử dụng cần đặc biệt chú ý tới các thông tin có liên quan tới Giá vé, Phí dịch vụ, Tổng chi phí, điều khoản, điều kiện sử dụng vé máy bay của Hãng hàng không cung cấp dịch vận chuyển và Điều khoản sử dụng Bắc Hải.<br>
                                        <br>
                                        7.	Giá vé mà Người sử dụng nhận được từ Trung tâm hỗ trợ Bắc Hải hoặc từ Bắc Hải website là do Bắc Hải xây dựng và Bắc Hải không đảm bảo rằng Giá vé này sẽ cố định. Giá vé chỉ được đảm bảo tại thời điểm xuất vé. Điều khoản này không áp dụng đối với Phí dịch vụ của Bắc Hải.<br>
                                        <br>
                                        8.	Thời hạn xuất vé cho các ĐẶT CHỖ vé máy bay cần tuân theo thời hạn được quy định bởi các Hãng hàng không. Thời hạn này có thể được thay đổi, rút ngắn và Người sử dụng cần tuân theo các thời hạn này.<br>
                                        <br>
                                        9.	 Sau khi Người sử dụng đã nhận được xác nhận về việc ĐẶT CHỖ, xác nhận về việc đã nhận được thanh toán từ Bắc Hải, nếu Giá vé hoặc thời hạn xuất vé thay đổi Bắc Hải sẽ ngay lập tức thông báo lại cho Người sử dụng. Trong trường hợp này Người sử dụng có quyền: Chấp nhận trả thêm tiền chênh lệch thực hiện việc ĐẶT CHỖ, thực hiện việc thanh toán và xuất vé theo thời hạn xuất vé mới hoặc hủy việc ĐẶT CHỖ. Trong trường hợp Người sử dụng quyết định hủy việc ĐẶT CHỖ, Người sử dụng sẽ nhận lại toàn bộ số tiền đã trả cho Bắc Hải. Hãng hàng không chịu toàn bộ trách nhiệm về việc thay đổi giá vé cũng như thời hạn xuất vé dẫn tới việc Người sử dụng hủy việc ĐẶT CHỖ. Bắc Hải không chịu trách nhiệm về những chi phí có thể xảy email ra cho Người sử dụng do việc hủy ĐẶT CHỖ. Bắc Hải cũng không chịu trách nhiệm nếu ĐẶT CHỖ bị Hãng hàng không hủy vì lý do Bắc Hải không thể liên hệ với Người sử dụng hoặc Người sử dụng không trả lời emai, điện thoại. Người sử dụng chấp thuận rằng Hãng hàng không có thể thay đổi lại thời hạn mua vé và thời hạn mua vé mới chỉ cách thời điểm nhận thông báo một khoảng thời gian rất ngắn.<br>
                                        <br>
                                        10.	 Người sử dụng chịu trách nhiệm về sự chính xác của các thông tin trong mục 3 ở trên cũng như các tham số cho việc lựa chọn các chuyến bay. Người sử dụng hiểu và đồng ý rằng: Sau khi ĐẶT CHỖ, nếu các thông tin và tham số thay đổi, Người sử dụng có thể phải thực hiện một ĐẶT CHỖ mới. Trong trường hợp này, Bắc Hải không đảm bảo rằng các thông tin về chuyến bay, Giá vé, ngày bay, hành trình sẽ giống như các thông tin mà Bắc Hải đã gửi tới Người sử dụng trong ĐẶT CHỖ cũ.<br>
                                        <br>
                                        11.	Người sử dụng đồng ý rằng một số giao diện của trang web Bắc Hải có thể đưa ra một số tư vấn về các chuyến bay. Các tư vấn này được thực hiện hoàn toàn vì mục đích phục vụ cho các chương trình khuyến mại và Người sử dụng hoàn toàn có thể chấp nhận hay từ chối các tư vấn này. Việc lựa chọn hay từ chối các tư vấn này là quyền của Người sử dụng và Bắc Hải không chịu trách nhiệm về các lựa chọn của Người sử dụng.<br>
                                        <br>
                                        12.	Việc ĐẶT CHỖ của Người sử dụng sẽ được Bắc Hải xác nhận bằng cách gửi cho Người sử dụng một email và tin nhắn điện thoại (SMS) với nội dung bao gồm Mã đặt chỗ trên Bắc Hải và toàn bộ các thông tin có liên quan tới các chuyến bay đã đặt. Trong trường hợp việc ĐẶT CHỖ thực hiện thông qua trung tâm hỗ trợ Bắc Hải, thông tin về Mã đặt chỗ trên Bắc Hải và toàn bộ các thông tin có liên quan tới các chuyến bay sẽ được nhân viên của trung tâm hỗ trợ Bắc Hải truyền tải tới Người sử dụng và sau đó được gửi tới Người sử dụng bằng email và SMS. Cụ thể, xác nhận về việc ĐẶT CHỖ sẽ bao gồm các thông tin sau:<br>
                                        <span class="marginLeft20px">•	Mã đặt chỗ (mã xác nhận);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Ngày hết hạn ĐẶT CHỖ (ngày thanh toán);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Tổng chi phí, bao gồm Giá vé và Phí dịch vụ;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Hành trình;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Các hình thức thanh toán có thể. Nếu người sử dụng chưa chọn hình thức thanh toán bằng thẻ tín dụng và chưa thanh toán cho ĐẶT CHỖ;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thông tin về người sử dụng vé máy bay theo thông báo từ Người sử dụng;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Các thông tin khác liên quan đến vé máy bay;<br>
                                        </span>
                                        <br>
                                        13.	Trong xác nhận ĐẶT CHỖ mà Bắc Hải gửi tới Người sử dụng có đường link dẫn tới trang web Bắc Hải Người sử dụng có thể đọc nội dung Điều khoản sử dụng này bằng cách bấm con chuột máy tính vào mục Điều khoản sử dụng trong phần footer của trang web Bắc Hải. Điều khoản sử dụng Bắc Hải cũng có thể được Trung tâm hỗ trợ Bắc Hải thông báo trực tiếp tới Người sử dụng. Bằng việc thanh toán để thực hiện việc ĐẶT CHỖ, Người sử dụng xác nhận rằng Người sử dụng đã hiểu và chấp thuận các điều khoản của Điều khoản sử dụng Bắc Hải.<br>
                                        <br>
                                        14.	Xác nhận ĐẶT CHỖ mà Bắc Hải gửi tới Người sử dụng không phải là vé máy bay và không có giá trị để thực hiện các chuyến bay.<br>
                                        <br>
                                        15.	Tổng chi phí, bao gồm Giá vé máy bay và Phí dịch vụ, được tính bằng đơn vị là Đồng Việt Nam đã bao gồm thuế giá trị gia tăng (VAT).<br>
                                        <br>
                                        16.	Người sử dụng sẽ nhận được vé máy bay điện tử sau khi đã thực hiện việc thanh toán trong thời hạn ĐẶT CHỖ có ghi trong xác nhận ĐẶT CHỖ và số tiền thanh toán phù hợp với điều khoản C, mục 9 của Điều lệ sử dụng Bắc Hải.<br>
                                        <br>
                                        17.	Người sử dụng hiểu rằng việc cung cấp đầy đủ thông tin vào mục Thanh toán theo yêu cầu trong xác nhận ĐẶT CHỖ sẽ là cơ sở để thực hiện việc ĐẶT CHỖ. Bất kể sự chậm trễ, cung cấp thiếu thông tin nào cũng có thể dẫn tới tình trạng không thực hiện được việc ĐẶT CHỖ.<br>
                                        <br>
                                        18.	Việc thanh toán một phần của Tổng chi phí hoặc thanh toán sau thời hạn ĐẶT CHỖ đồng nghĩa với việc chưa thanh toán.<br>
                                        <br>
            
                                        <span class="b">Thanh toán</span><br>
                                        <br>
                                        19.	Người sử dụng có thể thanh toán bằng một trong các hình thức thanh toán được liệt kê trong trang Hình thức thanh toán tại trang web https://bachaicompany.com/. Người sử dụng hiểu rằng Bắc Hải không đảm bảo rằng tất cả các hình thức thanh toán sẽ được áp dụng cho các ĐẶT CHỖ khác nhau. Phương thức thanh toán cho mỗi ĐẶT CHỖ khác nhau có thể khác nhau tùy theo ĐẶT CHỖ đó là trên Hãng hàng không truyền thống hay LCC nào. Phương thức thanh toán cũng còn phụ thuộc vào các yếu tố khác của việc ĐẶT CHỖ cũng như vào chính sách của Bắc Hải về phương thức thanh toán.<br>
                                        <br>
                                        20.	Người sử dụng đồng ý rằng, ngày thanh toán, nếu không được chỉ ra trong một điều khoản nào khác của Điều kiện sử dụng Bắc Hải, được hiểu là ngày mà Tổng chi phí, bao gồm Giá vé và Phí dịch vụ của Bắc Hải được thanh toán bằng tiền mặt hoặc tới một trong các tài khoản ngân hàng của Bắc Hải và được thực hiện trong giờ làm việc của Bắc Hải. Giờ làm việc của Bắc Hải được quy định trong điều khoản A, mục 7 của Điều khoản sử dụng. Chi tiết về các quy định có liên quan tới ngày thanh toán được quy định trong điều khoản E của bản Điều khoản sử dụng – MUA VÉ MÁY BAY VÀ CÁC DỊCH VỤ KHÁC.<br>
                                        <br>
                                        21.	Theo như quy định trong mục 20 ở trên, khi Bắc Hải cung cấp các hình thức thanh toán, Người sử dụng có thể chọn các hình thức thanh toán vé máy bay dưới đây:<br>
                                        <span class="marginLeft20px">•	Thẻ tín dụng;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Chuyển khoản vào tài khoản ngân hàng của Bắc Hải;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thanh toán qua các đơn vị cung cấp dịch vụ cổng thanh toán trực tuyến<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thanh toán bằng tiền mặt tại văn phòng Bắc Hải hoặc chi nhánh của các ngân hàng mà Bắc Hải có tài khoản;<br>
                                            <br>
                                        </span>
                                        22.	Phù hợp với điều khoản C, mục 9 của Điều khoản sử dụng, Người sử dụng đồng ý là trước thời điểm vé đã được xuất xong, Bắc Hải không đảm rằng Giá vé như đã chỉ ra trong xác nhận ĐẶT CHỖ sẽ không thay đổi. Giá vé của các Hãng hàng không hoàn toàn có thể thay đổi. Người sử dụng chấp thuận rằng Giá vé có thể thay đổi trong các khoảng thời gian từ khi Người sử dụng nhận được xác nhận về việc ĐẶT CHỖ cho tới khi Người sử dụng thực hiện việc thanh toán. Người sử dụng cũng chấp thuận rằng Giá vé có thể thay đổi ngay cả trong khoảng thời gian sau khi Người sử dụng đã thanh toán cho ĐẶT CHỖ cho tới trước khi Bắc Hải thực hiện việc xuất vé điện tử.<br>
                                        <br>
                                        23.	Tại bất cứ giai đoạn nào trước khi Bắc Hải đã hoàn thành việc xuất vé, nếu Giá vé máy bay có thay đổi, Bắc Hải sẽ thông báo ngay cho Người sử dụng bằng email hoặc điện thoại. Việc thông báo này sẽ chỉ thực hiện trong giờ làm việc của Bắc Hải. Khi nhận được thông báo về việc thay đổi Giá vé, Người sử dụng có quyền: Trả thêm tiền cho phần chênh lệch và tiếp tục thực hiện việc ĐẶT CHỖ; hoặc hủy việc ĐẶT CHỖ. Khi quyết định hủy việc ĐẶT CHỖ vì lý do Giá vé máy bay thay đổi, Người sử dụng sẽ nhận lại toàn bộ các khoản đã thanh toán cho Bắc Hải để thực hiện việc ĐẶT CHỖ này. Hãng hàng không là người chịu trách nhiệm về các nguyên nhân của việc thay đổi này.<br>
                                        <br>
                                        24.	Trong trường hợp Hãng hàng không có thay đổi về thời hạn xuất vé, Bắc Hải sẽ không bị buộc phải tuân theo thời hạn xuất vé đã thông báo cho Người sử dụng trước đó. Người sử dụng nếu đồng ý với thời hạn xuất vé mới cần tuân thủ các quy định về thời hạn xuất vé theo thời hạn mới. Nếu không đồng ý với thay đổi về thời hạn xuất vé mới, Người sử dụng có quyền hủy việc ĐẶT CHỖ. Không thanh toán trước thời hạn xuất vé mới đồng nghĩa với việc Người sử dụng đề nghị hủy ĐẶT CHỖ. Khi Người sử dụng hủy việc ĐẶT CHỖ toàn bộ các khoản mà Người sử dụng đã trả cho Bắc Hải để thực hiện việc ĐẶT CHỖ này sẽ được trả lại cho Người sử dụng. ĐẶT CHỖ sẽ được hủy phù hợp với khoản C, mục 9 của Điều khoản sử dụng.<br>
                                        <br>
                                        25.	Bắc Hải không chịu trách nhiệm về những việc xẩy ra, bao gồm cả những chi phí mà Người sử dụng đã bỏ ra để thực hiện việc ĐẶT CHỖ theo xác nhận ĐẶT CHỖ trước đó, mà nguyên nhân là do Người sử dụng đồng ý trả thêm khoản chênh lệch hoặc do Người sử dụng đồng ý hủy ĐẶT CHỖ trong trường hợp Hãng hàng không thay đổi Giá vé hoặc thay đổi thời hạn xuất vé. Điều khoản này không áp dụng với số tiền mà Người sử dụng đã thanh toán để thực hiện việc ĐẶT CHỖ trước thời điểm hủy việc ĐẶT CHỖ, khoản tiền đã trả này, theo điều khoản C, mục 9 của Điều khoản sử dụng, sẽ được hoàn lại toàn bộ cho Người sử dụng.
                                        Thanh toán bằng thẻ tín dụng<br>
                                        <br>
                                        26.	Người sử dụng đồng ý rằng việc thanh toán bằng thẻ tín dụng có thể được thực hiện thông qua các phương thức sau:<br>
                                        <span class="marginLeft20px">•	Thanh toán thông qua cổng thanh toán thanh toán trực tuyến mà Bắc Hảiliên kết;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thanh toán thông qua các máy cà thẻ được cung cấp bởi các Ngân hàng;<br>
                                            <br>
                                        </span>
                                        27.	Người sử dụng chịu trách nhiệm về việc thanh toán bằng thẻ tín dụng của mình theo đúng các điều kiện mà Người sử dụng đã ký với công ty phát hành thẻ tín dụng. Bắc Hải không chịu trách nhiệm dưới mọi hình thức về việc sử dụng thẻ tín dụng của Người sử dụng. Người sử dụng chịu trách nhiệm về độ tin cậy của các thông tin về thẻ tín dụng mà Người sử dụng cập nhật vào các biểu mẫu thanh toán bằng thẻ tín dụng để mua vé máy bay. Bằng việc sử dụng thẻ tín dụng để thanh toán, Người sử dụng đảm bảo rằng Người sử dụng là chủ sở hữu của thẻ tín dụng này hoặc chủ sở hữu thẻ tín dụng đã đồng ý cho Người sử dụng được phép dùng này. Trong trường hợp có nghi ngờ về sự chính xác của thông tin thẻ tín dụng hoặc về danh tính của chủ thẻ, Bắc Hải có quyền từ chối việc thanh toán bằng thẻ tín dụng và thông báo lại ngay cho Người sử dụng.<br>
                                        <br>
                                        28.	Người sử dụng đồng ý rằng việc cung cấp các thông tin về thẻ tín dụng cho Bắc Hải (Họ và Tên của chủ sở hữu, loại thẻ, số thẻ, thời gian hết hạn thẻ, mã CVV2/CV2) không đồng nghĩa với việc đơn vị phát hành thẻ sẽ đồng ý cho Người sử dụng thực hiện khoản thanh toán này. Bắc Hải không chịu trách nhiệm trong trường hợp việc thanh toán bị từ chối và sẽ thông báo ngay cho Người sử dụng khi việc thanh toán bị từ chối. Trong trường hợp này, Người sử dụng có thể chọn các hình thức thanh toán khác.<br>
                                        <br>
                                        29.	Người sử dụng đồng ý rằng với việc thanh toán bằng thẻ tín dụng, tài khoản thẻ tín dụng của Người sẽ dụng sẽ bị thu một khoản tương đương với Giá vé máy bay,Phí dịch vụ trả cho Bắc Hải và phí thanh toán thẻ tín dụng (nếu có).<br>
                                        <br>
                                        30.	 Bằng việc cung cấp các thông tin, Người sử dụng đồng ý dùng thẻ tín dụng để trả một số tiền tương đương với Giá vé máy bay cộng với Phí dịch vụ cho Bắc Hải và phí thanh toán thẻ tín dụng (nếu có). Việc trả tiền này được hiểu là việc thanh toán cho vé máy bay theo ĐẶT CHỖ.<br>
                                        <br>
                                        31.	 Việc xác thực thẻ tín dụng của Người sử dụng chỉ được thực hiện trong giờ làm việc của trung tâm hỗ trợ Bắc Hải. Quy định về giờ làm việc được chỉ ra trong khoản A, mục 7 của Điều khoản sử dụng. Trong trường hợp Người sử dụng thực hiện các YÊU CẦU ĐẶT VÉ và thanh toán bằng thẻ tín dụng trực tiếp với các tư vấn viên của Bắc Hải, vé sẽ được xuất ngay nếu thẻ tín dụng được chấp thuận thanh toán. Trong trường hợp thẻ bị từ chối, tư vấn viên của Bắc Hải sẽ thông báo ngay cho Người sử dụng.<br>
                                        <br>
                                        32.	Trong trường hợp việc ĐẶT CHỖ được thực hiện thông qua trung tâm hỗ trợ Bắc Hải và việc thanh toán bằng thẻ tín dụng được thực hiện thông qua một tư vấn viên của Bắc Hải, tư vấn viên của Bắc Hải sẽ gửi vé máy bay tới cho Người sử dụng nếu thẻ tín dụng được chấp thuận thanh toán. Trường hợp thẻ không được chấp thuận, tư vấn viên của Bắc Hảicũng sẽ thông báo ngay cho Người sử dụng.<br>
                                        <br>
                                        33.	Bắc Hải sẽ ngay lập tức liên hệ với Người sử dụng trong trường hợp thiếu thông tin để xác thực thẻ tín dụng của Người sử dụng.<br>
                                        <br>
                                        34.	Trong trường hợp việc thanh toán bằng thẻ tín dụng không thực hiện được, Người sử dụng có thể chọn hình thức thanh toán khác hoặc hủy ĐẶT CHỖ trước thời hạn. Người sử dụng tự chịu trách nhiệm về các rủi ro có liên quan tới việc thanh toán bằng thẻ tín dụng bị từ chối.<br>
                                        <br>
                                        35.	Đồng ý thanh toán bằng thẻ tín dụng là hình thức thanh toán cho ĐẶT CHỖ. Tuy nhiên Bắc Hải khẳng định rằng việc này không đảm bảo rằng Giá vé sẽ không thay đổi. Hãng hàng không hoàn toàn có thể thay đổi Giá vé sau khi Người sử dụng đã đồng ý thực hiện việc thanh toán bằng thẻ tín dụng. Nếu có sự thay đổi về Giá vé trong khoảng thời gian từ sau thời điểm việc thanh toán bằng thẻ tín dụng đã được thực hiện cho tới trước khi vé được xuất, Người sử dụng có quyền quyết định theo quy định trong khoản C, mục 9 của Điều khoản sử dụng.<br>
                                        <br>
            
                                        <span class="b">Thanh toán bằng chuyển khoản ngân hàng<br>
                                            <br>
                                        </span>
                                        36.	Người sử dụng có thể sử dụng hình thức chuyển khoản để thanh toán nếu hình thức thanh toán này được chấp nhận trong các xác nhận về việc ĐẶT CHỖ. Khi thanh toán bằng hình thức chuyển khoản, Người sử dụng sẽ nhận được các thông tin xác nhận từ ngân hàng về việc chuyển khoản. Xác nhận từ ngân hàng này không có nghĩa là Bắc Hải đã nhận được tiền và không có nghĩa là hợp đồng vận chuyển đã được ký kết.<br>
                                        <br>
                                        <span class="b">Thanh toán bằng tiền mặt</span><br>
                                        <br>
                                        37.	Người sử dụng có thể trả bằng tiền mặt tại các văn phòng của Bắc Hải. Người sử dụng cũng có thể trả bằng cách nộp tiền mặt trực tiếp tại các ngân hàng mà Bắc Hải có tài khoản. Trong trường hợp sử dụng dịch vụ của ngân hàng, Người sử dụng có thể phải trả phí giao dịch theo quy định của từng ngân hàng. Thông tin về tài tài khoản ngân hàng của Bắc Hải có trong các xác nhận ĐẶT CHỖ.<br>
                                        <br>
                                        <span class="b">Thanh toán qua các cổng thanh toán điện tử</span><br>
                                        <br>
                                        38.	Người sử dụng có thể sử dụng hình thức thanh toán bằng ví điện tử. Trong các ĐẶT CHỖ, có một đường dẫn tới trang web để Người sử dụng có thể thực hiện việc thanh toán bằng ví điện tử. Để truy cập vào trang web này, Người sử dụng cần tuân theo các hướng dẫn trong các ĐẶT CHỖ.<br>
                                        <br>
                                        39.	Sau khi đã truy cập vào website, Người sử dụng cần tuân theo các quy định, thông báo và hướng dẫn của website.<br>
                                        <br>
                                        40.	Bắc Hải không phải là người quản lý trang web thanh toán thanh toán trực tuyến, do vậy Bắc Hải không chịu trách nhiệm về các việc có liên quan tới việc thanh toán bằng ví điện tử. Việc thanh toán bằng ví điện tử được thực hiện theo hợp đồng, thỏa thuận giữa Người sử dụng với bên cung cấp dịch vụ thanh toán trực tuyến. Bắc Hải không chịu trách nhiệm về bất cứ sai sót nào có liên quan tới việc thanh toán qua ví điện tử, bao gồm cả các sai sót xảy ra do Người sử dụng cung cấp thông tin không chính xác, không đầy khi thực hiện thanh toán.<br>
                                        <br>
                                        41.	Sau khi thực hiện việc thanh toán bằng ví điện tử, Người sử dụng sẽ nhận được một xác nhận về việc thanh toán đã thành công từ cổng thanh toán. Trong vòng tối đa 1 giờ kể từ khi thực hiện việc thanh toán, nếu Người sử dụng không nhận được xác nhận về việc thanh toán đã thành công, Người sử dụng cần liên lạc ngay với bên cung cấp dịch vụ thanh toán và Bắc Hải (Trong giờ làm việc của Trung tâm hỗ trợ Bắc Hải) để tìm cách giải quyết.<br>
                                        <br>
                                        42.	Thời điểm mà việc thanh toán đã thành công là thời điểm mà Bắc Hải đã nhận được xác nhận về việc Người sử dụng đã thanh toán từ cổng thanh toán trực tuyến.<br>
                                        <br>
            
                                        <span class="b">Hủy đặt chỗ</span><br>
                                        <br>
                                        43.	Người sử dụng có thể hủy bỏ các ĐẶT CHỖ trong thời hạn mua vé, trước khi vé đã được xuất bằng cách liên lạc với Trung tâm hỗ trợ Bắc Hải trong giờ làm việc. Hủy ĐẶT CHỖ trước thời hạn mua vé sẽ không bị tính phí hủy.<br>
                                        <br>
                                        44.	Hãng hàng không có thể hủy các ĐẶT CHỖ trong thời hạn mua vé, trước khi vé đã được xuất vì một vài lý do từ phía Hãng hàng không hoặc trong các trường hợp bất khả kháng. Nếu trường hợp này xẩy ra, Trung tâm hỗ trợ Bắc Hải sẽ liên lạc ngay và thông báo cho Người sử dụng ngay trong giờ làm việc. Hình thức liên lạc bằng điện thoại hoăc email. Trong trường hợp này, Người sử dụng có quyền tạo các ĐẶT CHỖ mới. Bắc Hải không đảm bảo rằng các điều kiện trong các ĐẶT CHỖ mới sẽ giống như các điều kiện trong ĐẶT CHỖ đã bị hủy.<br>
            
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">D.&nbsp;Yêu cầu đặt vé máy bay và các dịch vụ khác</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        YÊU CẦU ĐẶT VÉ (ORDERING): là việc người sử dụng vào trang web của Bắc Hải hoặc thông qua Trung tâm hỗ trợ Bắc Hải để mua vé máy bay trên các LCC. Các ĐẶT CHỖ trên các Hãng hàng không truyền thống cũng được coi là các YÊU CẦU ĐẶT VÉ nếu vì một lý do nào đó ngoài tầm kiểm soát của Bắc Hải, mà việc ĐẶT CHỖ trên các Hãng hàng không truyền thống không thể thực hiện được.<br>
            
                                        1.	 Người sử dụng thực hiện YÊU CẦU ĐẶT VÉ thông qua webiste của Bắc Hải hoặc thông qua Bắc Hải bằng cách gặp mặt trao đổi trực tiếp hoặc thông qua điện thoại.<br>
                                        <br>
                                        2.	Người sử dụng đồng ý các Điều khoản sử dụng Bắc Hải khi thực hiện YÊU CẦU ĐẶT VÉ với Bắc Hải.<br>
                                        <br>
                                        3.	Để thực hiện YÊU CẦU ĐẶT VÉ, Người sử dụng được yêu cầu cung cấp dữ liệu cho Bắc Hải hoặc Trung tâm hỗ trợ Bắc Hải:<br>
                                        <br>
                                        <span class="marginLeft20px">•	Thông tin cá nhân của Người sử dụng, đặc biệt là tên và họ, địa chỉ e mail và số điện thoại. Trong trường hợp Người sử dụng mua vé cho người khác thì Người sử dụng cũng cần cung cấp thông tin cá nhân của người trực tiếp sử dụng vé;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Yêu cầu về các dịch vụ bổ sung – Nếu Người sử dụng yêu cầu dịch vụ bổ sung;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thông tin cần thiết để phát hành hóa đơn thuế VAT;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Hình thức thanh toán;<br>
                                        </span>
                                        <br>
                                        4.	YÊU CẦU ĐẶT VÉ có thể sẽ không thực hiện được nếu Người sử dụng bỏ qua một trong bốn mục trên.<br>
                                        <br>
                                        5.	Để thực hiện YÊU CẦU ĐẶT VÉ, Người sử dụng cần cung cấp số một số thông tin liên quan tới việc lựa chọn vé máy bay của Người sử dụng như dưới đây:<br>
                                        <span class="marginLeft20px">•	Nơi khởi hành và nơi đến;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Ngày khởi hành, ngày trở lại;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Số lượng người lớn, bao gồm cả người cao tuổi (60 tuổi trở lên). Số lượng trẻ sơ sinh (0-2 tuổi), trẻ em (2-12 tuổi) và thanh thiếu niên (12-24 tuổi);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Chỉ lựa chọn các chuyến bay thẳng;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Linh hoạt ngày khởi hành và ngày trở lại;<br>
                                        </span>
                                        <br>
                                        6.	 Khi bắt đầu thực hiện YÊU CẦU ĐẶT VÉ, Người sử dụng cần kiểm tra và đảm bảo sự chính xác của tất cả các dữ liệu đã cung cấp. Khi quyết định thực hiện YÊU CẦU ĐẶT VÉ, Người sử dụng cần đặc biệt chú ý tới các thông tin có liên quan tới Giá vé, Phí dịch vụ, Tổng chi phí, điều khoản, điều kiện sử dụng vé máy bay của Hãng hàng không truyền thống, các Hãng hãng hàng không giá rẻ và Điều khoản sử dụng Bắc Hải.<br>
                                        <br>
                                        7.	Người sử dụng chịu trách nhiệm về sự chính xác của các thông tin trong mục 3 ở trên cũng như các tham số cho việc lựa chọn các chuyến bay.<br>
                                        <br>
                                        8.	YÊU CẦU ĐẶT VÉ hoàn toàn không tương đồng với việc ĐẶT CHỖ.<br>
                                        <br>
                                        9.	Sau khi nhận được YÊU CẦU ĐẶT VÉ từ Người sử dụng, nhân viên tư vấn của Bắc Hải sẽ liên lạc với Người sử dụng bằng email hoặc điện thoại để xác nhận lại các thông tin trong YÊU CẦU ĐẶT VÉ cũng như thông báo cho Người sử dụng về tình trạng chỗ và Giá vé.<br>
                                        <br>
                                        10.	Liên lạc với Người sử dụng bằng điện thoại hoặc email để xác nhận và khẳng định YÊU CẦU ĐẶT VÉ là cần thiết. Trong trường hợp không liên lạc được với Người sử dụng vì các lý do không thuộc phạm vi kiểm soát của Bắc Hải, YÊU CẦU ĐẶT VÉ sẽ được tự động hủy bởi Bắc Hải. Bắc Hải sẽ thông báo cho Người sử dụng về việc YÊU CẦU ĐẶT VÉ đã được hủy bỏ, lý do hủy thông qua email.<br>
                                        <br>
                                        11.	Bắc Hải sẽ gửi xác nhận về việc đã nhận được YÊU CẦU ĐẶT VÉ tới Người sử dụng bằng email. Nội dung xác nhận sẽ bao gồm mã số của YÊU CẦU ĐẶT VÉ và toàn bộ các thông tin có liên quan tới việc đặt vé máy bay. Cụ thể như sau:<br>
                                        <br>
                                        <span class="marginLeft20px">•	Mã YÊU CẦU ĐẶT VÉ;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Hành trình;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Giá vé (Xem quy định về Giá vé trong mục 13 dưới đây);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thông tin về người sử dụng vé máy bay theo thông báo từ Người sử dụng;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Các hình thức thanh toán có thể;<br>
                                        </span>
                                        12.	 Xác nhận YÊU CẦU ĐẶT VÉ mà Bắc Hải gửi tới Người sử dụng không phải là vé máy bay và không có giá trị để thực hiện các chuyến bay.<br>
                                        <br>
                                        13.	Người sử dụng đồng ý rằng Giá vé mà Người sử dụng đã nhận được trong xác nhận YÊU CẦU ĐẶT VÉ từ Bắc Hải hoàn toàn có thể thay đổi cho tới khi việc mua vé đã được thực hiện xong (vé đã được xuất). Giá vé có thể thay đổi ngay cả sau thời điểm Người sử dụng đã thực hiện việc thanh toán cho các YÊU CẦU ĐẶT VÉ.<br>
                                        <br>
                                        14.	Trong các trường hợp khi Giá vé thay đổi sau thời điểm Người sử dụng thực hiện YÊU CẦU ĐẶT VÉ, bao gồm cả các trường hợp thay đổi trong khoảng thời gian từ thời điểm Người sử dụng đã nhận được xác nhận về YÊU CẦU ĐẶT VÉ hoặc đã thanh toán cho tới trước thời điểm vé đã được xuất, Bắc Hải sẽ thông báo ngay cho Người sử dụng bằng email hoặc qua điện thoại. Trong trường hợp này, Người sử dụng có quyền: Chấp nhận trả thêm tiền chênh lệch để thực hiện YÊU CẦU ĐẶT VÉ hoặc hủy YÊU CẦU ĐẶT VÉ. Trong trường hợp hủy YÊU CẦU ĐẶT VÉ, Người sử dụng sẽ nhận lại toàn bộ số tiền đã trả để thực hiện YÊU CẦU ĐẶT VÉ. LCC là người chịu trách nhiệm về các thay đổi Giá vé của các LCC và không chịu trách nhiệm về các chi phí có thể có cho Người sử dụng do sự thay đổi Giá vé. Phù hợp với Điều khoản sử dụng, Bắc Hải sẽ mua vé cho Người sử dụng theo các YÊU CẦU ĐẶT VÉ ngay sau khi nhận được thanh toán từ Người sử dụng.<br>
                                        <br>
                                        15.	 Người sử dụng đồng ý rằng tình trạng chỗ và giá vé của các LCC thường xuyên thay đổi. Tình trạng chỗ và Giá vé của các LCC có thể thay đổi tại bất kỳ thời điểm nào sau khi Người sử dụng thực hiện YÊU CẦU ĐẶT VÉ.<br>
                                        <br>
                                        16.	Trong trường hợp Người sử dụng thực hiện việc thanh toán sau thời hạn mua vé đã được chỉ ra trong xác nhận YÊU CẦU ĐẶT VÉ và LCC thay đổi giá vé, Bắc Hải sẽ thông báo ngay cho Người sử dụng về sự thay đổi này. Người sử dụng có quyền hủy YÊU CẦU ĐẶT VÉ hoặc thanh toán thêm khoản chênh lệch để tiếp tục thực hiện YÊU CẦU ĐẶT VÉ. Không thanh toán thêm các khoản chênh lệch đồng nghĩa với việc hủy YÊU CẦU ĐẶT VÉ. Trong trường hợp hủy YÊU CẦU ĐẶT VÉ, Người sử dụng sẽ nhận lại toàn bộ số tiền đã trả để thực hiện YÊU CẦU ĐẶT VÉ.<br>
                                        <br>
                                        17.	YÊU CẦU ĐẶT VÉ chỉ có thể được thực hiện khi trong suốt khoảng thời gian từ ngày YÊU CẦU ĐẶT VÉ được gửi tới Bắc Hải cho tới khi vé đã được xuất, Bắc Hải có thể liên lạc được với Người sử dụng bằng email hay điện thoại trong giờ làm việc của Trung tâm hỗ trợ Bắc Hải.<br>
                                        <br>
                                        18.	 Khi thực hiện việc mua vé trên các LCC, Bắc Hải đóng vai trò là đại diện cho Người sử dụng. Bắc Hải không chịu trách nhiệm về các hành động, sai sót của các LCC. Người sử dụng chấp thuận các nguyên tắc, điều khoản sử dụng dịch vụ của các LCC.<br>
                                        <br>
                                        19.	Việc thay đổi các thông tin trong YÊU CẦU ĐẶT VÉ có thể dẫn tới việc phải làm các YÊU CẦU ĐẶT VÉ mới. Khi có bất cứ sự thay đổi nào về thông tin trong các YÊU CẦU ĐẶT VÉ, Bắc Hải không đảm rằng chuyến bay, tình trạng chỗ, Giá vé sẽ không thay đổi.<br>
                                        <br>
                                        20.	 Người sử dụng đồng ý rằng một số giao diện của trang web Bắc Hải có thể đưa ra một số tư vấn về các chuyến bay. Các tư vấn này được thực hiện hoàn toàn vì mục đích phục vụ cho các chương trình khuyến mại và Người sử dụng hoàn toàn có thể chấp nhận hay từ chối các tư vấn này. Việc lựa chọn hay từ chối các tư vấn này là quyền của Người sử dụng và Bắc Hải không chịu trách nhiệm về các lựa chọn của Người sử dụng.<br>
                                        <br>
                                        21.	Trong xác nhận về YÊU CẦU ĐẶT VÉ mà Bắc Hải gửi tới Người sử dụng có đường link dẫn tới trang web Bắc Hải. Người sử dụng có thể đọc nội dung Điều khoản sử dụng này bằng cách bấm con chuột máy tính vào mục Điều khoản sử dụng trong phần footer của trang web Bắc Hải. Điều khoản sử dụng Bắc Hải cũng có thể được Trung tâm hỗ trợ Bắc Hải thông báo trực tiếp tới Người sử dụng. Bằng việc thanh toán để thực hiện YÊU CẦU ĐẶT VÉ , Người sử dụng xác nhận rằng Người sử dụng đã hiểu và chấp thuận các điều khoản của Điều khoản sử dụng Bắc Hải.<br>
                                        <br>
                                        22.	 Xác nhận YÊU CẦU ĐẶT VÉ mà Bắc Hải gửi tới Người sử dụng không phải là vé máy bay và không có giá trị để thực hiện các chuyến bay.<br>
                                        <br>
                                        23.	 Tổng chi phí, bao gồm Giá vé máy bay và Phí dịch vụ, được tính bằng đơn vị là Đồng Việt nam và đã bao gồm thuế giá trị gia tăng (VAT), nếu có.<br>
                                        <br>
                                        24.	Người sử dụng sẽ nhận được vé máy bay điện tử sau khi đã thực hiện việc thanh toán đầy đủ cho các YÊU CẦU ĐẶT VÉ, bao gồm cả các khoản tăng thêm do Giá vé thay đổi theo khoản D, mục 14 của Điều khoản sử dụng.<br>
                                        <br>
                                        25.	 Người sử dụng hiểu rằng việc cung cấp đầy đủ thông tin vào mục Thanh toán theo yêu cầu trong xác nhận YÊU CẦU ĐẶT VÉ sẽ là cơ sở để thực hiện YÊU CẦU ĐẶT VÉ. Bất kể sự chậm trễ, cung cấp thiếu thông tin nào cũng có thể dẫn tới tình trạng không thực hiện được YÊU CẦU ĐẶT VÉ.<br>
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">E.&nbsp;Mua vé máy bay và các dịch vụ khác</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1.	Người sử dụng có thể mua vé máy bay theo hình thức ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ cho bản thân Người sử dụng hoặc cho một bên thứ ba khi:<br>
                                        <span class="marginLeft20px">•	Người sử dụng có đủ năng lực để thực hiện và chịu trách nhiệm về các hành vi của mình;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Người sử dụng cung cấp thông tin thật về cá nhân hoặc về hành khách (bên thứ ba);<br>
                                        </span>
                                        <span class="marginLeft20px">•	Người sử dụng hoặc hành khách có đầy đủ giấy tờ hợp pháp phục vụ cho việc đi lại;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Người sử dụng sử dụng thẻ tín dụng mà bản thân Người sử dụng là chủ sở hữu hoặc được sự cho phép của chủ sở hữu để thực hiện việc thanh toán vé máy bay. Người sử dụng hiểu rằng, việc sử dụng thẻ tín dụng giả hoặc lấy trộm là hành vi vi phạm Bộ Luật Hình sự;<br>
                                            <br>
                                        </span>
                                        2.	Bắc Hải thực hiện việc xuất vé máy bay sau khi đã nhận được đầy đủ các khoản thanh toán từ Người sử dụng trong giờ làm việc của Bắc Hải và phù hợp với các quy định trong Điều khoản sử dụng. Phụ thuộc vào hình thức thanh toán và trong một số trường hợp nhất định, Bắc Hải có thể thực hiện việc xuất vé ngoài giờ làm việc. Thông tin về ngày nghỉ lễ, ngày Trung tâm hỗ trợ Bắc Hải không làm việc được thông báo trên trang web của Bắc Hải và có thể sẽ được thông báo bằng điện thoại tới Người sử dụng. Với những vé có thời hạn xuất vé trùng với những ngày nghỉ, Bắc Hải có thể sẽ thực hiện việc xuất vé cho Người sử dụng vào những ngày trước đó.<br>
                                        <br>
                                        3.	Bắc Hải sẽ gửi vé máy bay điện tử tới Người sử dụng qua email trong ngày mà vé điện tử được xuất. Bắc Hải không chịu trách nhiệm về việc Người sử dụng không nhận được vé điện tử do Người sử dụng cung cấp địa chỉ email sai. Trong trường hợp không nhận được vé máy bay, Người sử dụng nên kiểm tra lại các chương trình chống virus, chống spam xem các chương trình đó có ngăn cản việc nhận vé máy bay không hoặc liên hệ với Bắc Hải.
                                         <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
            
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">F.&nbsp;Hủy vé máy bay và các dịch vụ khác</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="5%"></td>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1. Người sử dụng chấp thuận rằng các Hãng hàng không truyền thống cũng như các LCC có thể hủy vé máy bay (Hãng hàng không hoặc LCC kết thúc hợp đồng vận chuyển) sau khi vé máy bay đã được xuất vì một số lý do chủ quan từ Hãng hàng không hoặc LCC hoặc vì các lý do bất khả kháng. Hãng hàng không truyền thống hoặc LCC chịu trách nhiệm về việc hủy vé máy bay này. Trong trường hợp nhận được thông tin về việc hủy vé từ các Hãng hàng không hoặc LCC, Bắc Hải sẽ thông báo ngay cho Người sử dụng cũng như giải pháp đề nghị của các Hãng hàng không hoặc LCC.<br>
                                        <br>
                                        2. Trong trường hợp Hãng hàng không truyền thống hoặc LCC có các điều kiện về việc hủy vé trong bảng giá thì Người sử dụng có quyền hủy vé theo đúng các điều kiện đó (Người sử dụng kết thúc hợp đồng vận chuyển).<br>
                                        <br>
                                        3. Trong trường hợp hủy vé, các khoản Phí dịch vụ mà Người sử dụng đã trả cho Bắc Hải sẽ không được trả lại.<br>
                                        <br>
                                        4. Để thực hiện việc hủy vé, Người sử dụng liên hệ với Trung tâm hỗ trợ Bắc Hải bằng điện thoại hoặc email.<br>
                                        <br>
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
            
            
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">G.&nbsp;Đổi vé máy bay và các dịch vụ khác</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1. Người sử dụng chấp thuận rằng các Hãng hàng không truyền thống cũng như các LCC có thể thay đổi các thông số của vé máy bay (ví dụ như: Thay đổi giờ khởi hành) sau khi vé máy bay đã được xuất vì một số lý do chủ quan từ Hãng hàng không hoặc LCC hoặc vì các lý do bất khả kháng. Hãng hàng không truyền thống hoặc LCC chịu trách nhiệm về thay đổi này. Trong trường hợp nhận được thông tin về việc thay đổi từ các Hãng hàng không hoặc LCC, Bắc Hải sẽ thông báo ngay cho Người sử dụng cũng như giải pháp đề nghị của các Hãng hàng không hoặc LCC.<br>
                                        <br>
                                        2. Thông thường các Hãng hàng không truyền thống và các LCC không cho phép việc đổi tên hành khách. Trong một số đặc biệt, nếu Hãng hàng không hoặc các LCC cho phép đổi tên hành khách thì Bắc Hải sẽ thực hiện việc đổi tên theo yêu cầu của Người sử dụng. Người sử dụng đồng ý trả Phí dịch vụ cho Bắc Hải để thực hiện việc đổi tên hành khách.
                                         <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">H.&nbsp;Bảo vệ thông tin cá nhân</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1. Bắc Hải là đơn vị quản lý các dữ liệu cá nhân của Người sử dụng.<br>
                                        <br>
                                        2. Bắc Hải cam kết rằng các dữ liệu cá nhân của Người sử dụng được dùng cho mục đích:<br>
                                        <span class="marginLeft20px">•	Thực hiện việc ĐẶT CHỖ, YÊU CẦU ĐẶT VÉ và làm trung gian trong việc ký kết hợp đồng vận chuyển và các dịch vụ du lịch khác theo hợp đồng mua dịch vụ;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Cung cấp các dịch vụ điện tử;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Đảm bảo liên lạc giữa Người sử dụng và Bắc Hải;<br>
                                            <br>
                                        </span>
                                        3.	Người sử dụng có quyền truy cập các dữ liệu cá nhân đã cung cấp để chỉnh sửa lại hoặc yêu cầu dừng việc xử l‎ý các dữ liệu này.<br>
                                        <br>
                                        4.	Việc cung cấp các dữ liệu cá nhân là tự nguyện, nhưng cần thiết để thực hiện các mục đích đã nêu trên.<br>
                                        <br>
                                        5.	Bắc Hải cam kết rằng việc xử lý các dữ liệu cá nhân của Người sử dụng tuân thủ Luật pháp của nước Việt nam và Bắc Hải sẽ sử dụng các giải pháp kỹ thuật cần thiết để đảm bảo các thông tin cá nhân không bị truy cập trái phép.<br>
                                        <br>
                                        6.	Bắc Hải khẳng định không xử lý các thông tin cá nhân mà Người sử dụng cung cấp cho các hệ thống thanh toán.<br>
                                        <br>
                                        7.	Người sử dụng có thể tiến hành thực hiện mọi thay đổi trong phạm vi thông tin cá nhân của mình bằng cách gửi thư yêu cầu, kèm theo những chi tiết cần thay đổi đến địa chỉ thư điện tử sau của Bắc Hải: band@bachailogistics.com<br>
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">I.&nbsp;Khiếu nại</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1. Người sử dụng có quyền khiếu nại về những dịch vụ được cung cấp bởi Bắc Hải.<br>
                                        <br>
                                        2. Nội dung khiếu nại của Người sử dụng cần có:<br>
                                        <span class="marginLeft20px">•	Lý do khiếu nại;<br>
                                        </span>
                                        <span class="marginLeft20px">•	Thông tin Người sử dụng, bao gồm cả thông tin liên lạc và bản khiếu nại phải có chữ ký của Người sử dụng;<br>
                                            <br>
                                        </span>
                                        3.	Bắc Hải sẽ tiến hành xác minh và trả lời khiếu nại trong vòng 30 ngày kể từ ngày nhận được khiếu nại.<br>
                                        <br>
                                        4.	Trong trường hợp hồ sơ khiếu nại không đáp ứng được các yêu cầu như ở mục 2, người có thẩm quyền đại diện Bắc Hải sẽ thông báo ngay cho Người sử dụng và hướng dẫn Người sử dụng hoàn thành hồ sơ khiếu nại. Bắc Hải chỉ tiến hành xác minh và trả lời khiếu nại khi Người sử dụng hoàn thành hồ sơ khiếu nại theo đúng yêu cầu như trong mục 2.<br>
                                        <br>
                                        5.	Khiếu nại có thể được viết dưới dạng văn bản hoặc thư điện tử và gửi đến địa chỉ: band@bachailogistics.com<br>
                                        <br>
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">J.&nbsp;Bản tin</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1. Bản tin Bắc Hải (Bản tin) là dịch vụ nhằm cung cấp cho Người sử dụng những thông tin thương mại thông qua thư điện tử. Bản tin này sẽ được gửi đến
                                        Người sử dụng theo yêu cầu của Người sử dụng và khi Người sử dụng đồng ý nhận các bản tin.<br>
                                        <br>
                                        2. Để nhận Bản tin, Người sử dụng cần:<br>
                                        <span class="marginLeft20px">•	Gửi yêu cầu và cung cấp địa chỉ thư điện tử theo mẫu có sẵn tại trang thông tin điện tử https://bachaicompany.com/ và đồng ‎ý tiếp nhận Bản tin;</span><br>
                                        <span class="marginLeft20px">•	Có một địa chỉ thư điện tử đang hoạt động;<br>
                                            <br>
                                        </span>
                                        3.	Người sử dụng có thể từ chối việc tiếp tục nhận Bản tin bất cứ lúc nào bằng cách sử dụng đường dẫn trong các phần footer của các Bản tin hoặc gửi thông báo từ chối tiếp tục nhận Bản tin tới Bắc Hải. Bắc Hải sẽ khẳng định việc từ chối tiếp tục nhận Bản tin của Người sử dụng bằng cách gửi thông báo tới email của Người sử dụng.<br>
                                        <br>
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <h3 style="padding-left: 26px; line-height: 40px;"><span class="titleBlueDKSDOpen">K.&nbsp;Điều khoản cuối cùng</span></h3>
                    <div>
                        <table>
                            <tbody><tr>
                                <td width="95%">
                                    <p class="TextDKSD marginLeft10px ">
                                        1. Các tài liệu đi kèm theo văn bản này là một phần không thể tách rời của văn bản này.<br>
                                        <br>
                                        2. Tất cả các tranh chấp phát sinh sẽ được giải quyết tại Tòa án nước CHXHCN Việt Nam, quyết định của Toà án là quyết định cuối cùng và buộc hai bên phải thực hiện.<br>
                                        <br>
                                        3. Bản Điều khoản sử dụng được đăng tải trên trang web https://bachaicompany.com/.<br>
                                        <br>
                                        <a href="" class="scoll-upArr close">Ấn vào đây để thu gọn</a>
                                    </p>
                                </td>
            
                            </tr>
                        </tbody></table>
                    </div>
            
                </div>
            </div>
            
            ',
                'img' => 'dieukhoansudung.png'
            ],
            [
                'id' => 'c18e7f92-8533-4bce-a134-29248d5900cc',
                'slug' => 'huong-dan-dat-ve',
                'name' => 'Hướng dẫn đặt vé',
                'content' => '
                <h3>Hãy cùng Bắc Hải trải nghiệm tính năng Đặt Vé Máy Bay Tự Động chỉ trong 3 phút với các thao tác đơn giản dưới đây nhé!
                </h3>
                <div id="main">
                                
<h4 style="text-align:center">
	&nbsp;</h4>
<p>
	&nbsp;</p>
<p>
	<u><strong>Bước 1</strong></u>: Tại ô tìm kiếm&nbsp;ở trang chủ, bạn hãy chọn:ĐI TỪ,ĐI ĐẾN, NGÀY ĐI, NGÀY VỀ (nếu là vé khứ hồi), SỐ LƯỢNG NGƯỜI BAY (người lớn, trẻ em/bé). Sau đó bấm nút TÌM CHUYẾN BAY. (Hình 1)</p>
<p>
	<em><strong>Lưu ý</strong>: Bạn có thể chọn điểm đi và điểm đến trong danh sách được hiển thị sẵn đối với cả hành trình nội địa và quốc tế. Để tiết kiệm thời gian, bạn cũng có thể nhập tên thành phố hoặc mã sân bay tại ô tìm kiếm để chọn điểm đi/ đến&nbsp;</em></p>
<h4 style="text-align: center;">
	&nbsp;</h4>
<h4 style="text-align:center">
	&nbsp;</h4>
<p>
	<em><img alt="" src="https://i.upanh.org/2024/01/28/timkiemchuyenbayf8866664c131f956.png" ></em></p>
<p>
	<em>Hình 1</em></p>
<p>
	&nbsp;</p>
<p style="text-align: justify;">
	<u><strong>Bước 2</strong></u>: Bạn sẽ tới trang hiển thị thông tin của tất cả các chuyến bay để so sánh và lựa chọn hành trình phù hợp. Trong đó, mỗi chuyến bay sẽ&nbsp;có thông tin đầy đủ&nbsp;về giá vé, thuế &amp; phí, ngày giờ bay, hãng hàng không, hành lý, ... Hãy bấm chọn vào chuyến bay bạn thấy ưng ý.&nbsp;</p>
<p>
	<img alt="so sánh kết quả chuyến bay khứ hồi" src="https://i.upanh.org/2024/01/28/ketquatimkiem402ba07fa8d60e96.png" ></p>

	<em>Hình 3</em></p>
	<em>Hình 4</em></p>
<p style="text-align: justify;">
	<u><strong>Bước 3</strong></u>: Tại cột bên phải của trang thông tin khách hàng có hiển thị điều kiện vé tương ứng với hạng vé bạn đã lựa chọn. (Hình 5)</p>
<p style="text-align: justify;">
	Tại trang thông tin khách hàng, bạn cần điền đầy đủ và chính xác các thông tin cần thiết, gồm có: THÔNG TIN HÀNH KHÁCH&nbsp;<em>(Quý danh, Họ và tên chuẩn xác của người bay)</em>. THÔNG TIN NGƯỜI LIÊN HỆ&nbsp;<em>(Người liên hệ là người trực tiếp đặt mua vé, có thể mua cho mình hoặc mua hộ cho người khác. Tại phần này, bạn cũng cần nhập đầy đủ họ tên, số điện thoại, email liên hệ để Bắc Hải có thể phục vụ tốt nhất)</em>. (Hình 6)</p>
<p>
	&nbsp;</p>
<p>
	<em><img alt="nhập thông tin hành khách" src="https://i.upanh.org/2024/01/28/thongtindatve7db37b4b4dff4bea.md.png" ></em></p>
<p>
	<em>Hình 5</em></p>
<p>
	&nbsp;</p>
<p style="text-align: justify;">
	Ngoài ra, tại bước này, nếu có nhu cầu mua thêm hành lý ký gửi, xuất hóa đơn hay ghi chú gì đặc biệt về đơn hàng, đừng quên lựa chọn nhé! Bạn có thể mua thêm hành lý ký gửi với các mức phí khác&nbsp; nhau.</p>
<p style="text-align: justify;">
	Sau khi click "Đặt vé", trang xác nhận số điện thoại hiện lên, bấm xác nhận một lần nữa để thanh toán.</p>
<img src="https://i.upanh.org/2024/01/28/datvethanhcong5fb01709fd0de3bb.png">
	<em>Hình 7</em></p>
<p style="text-align: justify;">
	<u><strong>Bước 4</strong></u>: Tại Trang Thanh Toán, bạn hãy chọn hình thức thanh toán thuận tiện với mình nhất. Bắc Hải có rất nhiều hình thức thanh toán tiện lợi cho khách hàng lựa chọn.</p>

	<u><strong>Bước 5</strong></u>: Sau khi đã chọn xong hình thức thanh toán, Bắc Hải sẽ đưa bạn tới trang thông tin về đơn hàng. Vậy là bạn đã hoàn thành các bước đặt vé trên website bachaicompany.com. Ngay sau đó nhân viên Bắc Hải sẽ liên hệ với bạn để xác nhận đơn hàng.</p>
<p>
	&nbsp;</p>
<h4 style="text-align: center;">
	&nbsp;</h4>

                        </div>
                ',
                'img' => 'huongdandatve.jpg',

            ],
            [
                'id' => '27f5723f-f813-4b9e-87d2-86df0082784a',
                'slug' => 'cau-hoi-thuong-gap',
                'name' => 'Câu hỏi thường gặp',
                'content' => '
                <div class=" py-4">
                <div class="accordion" id="accordionExample">
  
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
 Làm thế nào để tôi tìm được vé máy bay giá rẻ nhất?

      </button>
    </h2>
    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
Hệ thống của Bắc Hải hiển thị và so sánh giá vé máy bay của tất cả các hãng hàng không nội địa VietJet, Jetstar, Vietnam Airlines, Bamboo cùng hàng trăm hãng hàng không uy tín trên thế giới. Hãy chọn hành trình bay cho mình và lựa chọn chuyến bay có giá rẻ nhất cho dự định của bạn. Vui lòng xem hướng dẫn chi tiết tìm vé máy bay giá rẻ nhất tại đây.

           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
Đi máy bay cần mang những loại giấy tờ gì?

      </button>
    </h2>
    <div id="collapse2" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
Khi đi máy bay bạn hãy mang chứng minh thư để làm thủ tục . Trong trường hợp mất chứng minh thư thì có thể dùng một số loại giấy tờ khác để thay thế như:
- Hộ chiếu
- Bằng lái xe
- Giấy xác nhận nhân thân...


           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
Tại sao Bắc Hải là website bán vé máy bay giá rẻ tốt nhất?

      </button>
    </h2>
    <div id="collapse3" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
Bắc Hải sở hữu nhiều ưu điểm vượt trội như:

- Giao diện website thân thiện, dễ sử dụng và được hỗ trợ đa nền tảng.

Đặc biệt Bắc Hải luôn hướng đến chất lượng dịch vụ chăm sóc khách hàng, với mong muốn đem đến lợi ích tốt nhất cho khách hàng !

- Chức năng tìm kiếm hành trình bay theo đúng yêu cầu của khách hàng với đầy đủ thông số: chặng bay, giá vé, giờ bay.

- Có chức năng so sánh giá vé của các hãng hàng không.

- Chức năng tự động đặt vé máy bay nội địa và quốc tế.


           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
Giá vé máy bay của trẻ em được tính như thế nào?


      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
Giá vé máy bay của trẻ em/em bé mỗi hãng hàng không sẽ khác nhau, cụ thể như sau:

Vietnam Airlines:

- Em bé dưới 2 tuổi giá vé bằng 10% giá vé cơ bản của người lớn

- Trẻ em từ 2 tuổi đến 12 tuổi giá vé bằng 90% giá vé cơ bản của người lớn

VietJet Air và Jetstar:

- Em bé dưới 2 tuổi miễn phí giá vé cơ bản

- Trẻ em từ 2 tuổi đến 12 tuổi giá vé bằng giá vé cơ bản của người lớn
Bamboo Airways:

- Trẻ em: Trẻ em từ 2 tuổi đến dưới 12 tuổi được tính là 75% giá vé người lớn.

- Em bé: Em bé dưới 2 tuổi chỉ cần thanh toán phí phục vụ trên chuyến bay 100.000VND/em bé (chưa bao gồm VAT).

           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
Khi đi máy bay tôi được mang theo bao nhiêu kg hành lý xách tay?


      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
Quy định về hành lý xách tay khi đi máy bay
- Hạng vé Skyboss của VietJet Air bạn sẽ có 10kg hành lý xách tay miễn phí.

- Hạng vé Business của Bamboo Airways bạn sẽ có 14kg hành lý xách tay miễn phí.
Các hạng vé còn lại bạn sẽ được mang 7kg hành lý xách tay miễn phí mỗi người. Và số cân này là tính riêng từng người, không được phép gộp chung. Nếu quá 7kg bạn phải mua thêm hành lý ký gửi.


           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
Phụ nữ mang thai đi máy bay cần lưu ý những gì?


      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
1. Phụ nữ mang thai đi máy bay bắt buộc phải xuất trình CMND/ CCCD/ Hộ chiếu
 
Khi làm thủ tục bay, phụ nữ mang thai cũng cần xuất trình giấy CMND/ CCCD/ Hộ chiếu và có thể thay thế bằng những loại giấy tờ được hãng hàng không chấp nhận trong trường hợp không có CMND/ CCCD/ Hộ chiếu. Cụ thể các loại giấy tờ đó là:
 
- Giấy phép lái xe 
- Giấy chứng nhận của các lực lượng vũ trang 
- Thẻ Đảng viên
- Thẻ Nhà báo
- Thẻ Đại biểu Quốc hội
- Thẻ Kiểm soát an ninh hàng không, sân bay
- Thẻ nhận dạng của Hãng hàng không Việt Nam
 
Tất cả các giấy tờ nói trên đều phải đảm bảo còn thời hạn sử dụng và còn nguyên vẹn, không bị hỏng, rách hoặc mờ số, nhòe ảnh, cắt góc...
 
Trong trường hợp không có CMND/ CCCD/ Hộ chiếu mà cũng không có bất kỳ giấy tờ nào khác để thay thế, hành khách là phụ nữ mang thai cũng buộc phải làm Giấy Xác Nhận Nhân Thân do Công An Phường nơi hành khách cư trú xác nhận. Giấy này có thời hạn là 30 ngày kể từ ngày xác nhận. Trên giấy xác nhận nhân thân phải có ảnh chân dung (chụp theo kiểu của CMND), còn thời hạn và có đóng dấu giáp lai của Công an Phường.
 
Nếu vì một lý do nào đó không thể làm Giấy xác nhận nhân thân, đồng nghĩa với việc hành khách không có bất kỳ một loại giấy tờ tùy thân nào mang theo khi làm thủ tục bay thì chắc chắn sẽ không thể thực hiện được chuyến bay.
2. Phụ nữ mang thai cần mang thêm Giấy Xác Nhận Sức Khỏe

Bên cạnh các loại giấy tờ tùy thân hợp pháp như đã nói ở trên, phụ nữ mang thai đi máy bay còn cần mang thêm Giấy Xác Nhận Sức Khỏe và giấy này phải tuân thủ đúng quy định của từng hãng hàng không


           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
Tôi muốn đổi ngày bay và giờ bay thì có làm như thế nào?


      </button>
    </h2>
    <div id="collapse8" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
- Đối với hãng VietJet Air, vé Skyboss sẽ được miễn phí thay đổi. Các loại vé còn lại mất phí đổi. 

- Đối với hãng Jetstar nếu mua vé Gói Linh hoạt hoặc Gói Tối ưu bạn sẽ được miễn phí thay đổi. Các loại vé còn lại mất phí đổi. 

- Đối với hãng Vietnam Airlines, vé hạng Thương gia linh hoạt và Phổ thông linh hoạt sẽ được miễn phí thay đổi. Các hạng còn lại mất phí.

- Đối với hãng Bamboo Airways, vé Business sẽ được miễn phí thay đổi. Các loại vé còn lại mất phí đổi. 

           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
Em bé bao nhiêu tuổi thì được đi máy bay? Và cần những giấy tờ gì?


      </button>
    </h2>
    <div id="collapse9" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
Em bé/trẻ em được coi là một trong những đối tượng hành khách đặc biệt trên mỗi chuyến bay. Việc làm thủ tục bay cũng như các loại giấy tờ được hãng hàng không yêu cầu đối với em bé/ trẻ em cũng có nhiều khác biệt so với hành khách là người lớn. Theo quy định chung của các hãng hàng không, em bé dưới 14 ngày tuổi KHÔNG ĐƯỢC PHÉP BAY, riêng Vietnam Airlines chấp nhận vận chuyển em bé từ 7 ngày tuổi). Tuổi em bé/ trẻ em được xác định tính đến ngày khởi hành của chuyến bay.

Do đối tượng hành khách bay là em bé/ trẻ em chưa đủ tuổi cấp giấy CMND nên sẽ được phép dùng loại giấy tờ khác khi làm thủ tục bay. Cụ thể:

- Sử dụng Giấy khai sinh bản gốc hoặc Bản sao trích lục 
- Có thể thay thế giấy khai sinh bằng hộ chiếu (hộ chiếu phải còn thời hạn).
- Riêng em bé từ 14 ngày tuổi đến 1 tháng tuổi có thể dùng Giấy chứng sinh (Giấy chứng sinh có thời hạn 1 tháng)
- Đối với trẻ em do tổ chức xã hội đang nuôi dưỡng cần có giấy xác nhận của tổ chức xã hội (có giá trị sử dụng trong thời gian 06 tháng kể từ ngày được xác nhận).
- Đối với trẻ em/em bé mang quốc tịch nước ngoài: Yêu cầu phải có hộ chiếu.

           </div>
    </div>
  </div>

<div class="accordion-item">
    <h2 class="accordion-header ">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
Tôi cần có mặt ở sân bay trước bao nhiêu lâu để làm thủ tục bay?


      </button>
    </h2>
    <div id="collapse10" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body">
Đối với chuyến bay nội địa

- Bạn nên có mặt ở sân bay 2 giờ trước giờ khởi hành dự kiến. Thời gian đóng quầy làm thủ tục (kết thúc chấp nhận hành khách): 40 phút trước giờ khởi hành dự kiến.

Đối với chuyến bay quốc tế xuất phát từ Việt  Nam

- Bạn nên có mặt ở sân bay 3 giờ trước giờ khởi hành dự kiến. Thời gian đóng quầy làm thủ tục (kết thúc chấp nhận hành khách): 50 phút trước giờ khởi hành dự kiến.


           </div>
    </div>
  </div>
  </div>

</div>
                
                ',
                'img' => 'cauhoithuonggap.png',

            ],
            [
                'id' => '6274e5d0-81ff-406b-a658-d84d007b06b9',
                'slug' => 'dat-ve-may-bay',
                'name' => 'Đặt vé máy bay',
                'content' => '
                <div class="container-fluid">
                <div class="text-center">
                <h2>Giới thiệu về dịch vụ đặt vé máy bay
                </h2>
                </div>
                <p>Với dịch vụ đặt vé máy bay của Công ty Bắc Hải, việc lên kế hoạch cho chuyến đi của bạn trở nên dễ dàng và tiện lợi. Đội ngũ nhân viên chuyên nghiệp của chúng tôi không chỉ nhanh chóng trong việc xử lý mọi yêu cầu mà còn tận tâm hỗ trợ từng bước. Chúng tôi tự hào mang đến nhiều ưu đãi hấp dẫn, từ các chương trình khuyến mãi đặc biệt đến giá cả cạnh tranh so với thị trường. Dù là chuyến công tác hay kỳ nghỉ thư giãn, chúng tôi cam kết đồng hành cùng bạn, giúp bạn trải nghiệm mọi hành trình một cách thoải mái và không trắc trở. Hãy để Công ty Bắc Hải là điểm đến đáng tin cậy của bạn trong mỗi hành trình trên bản đồ
                </p>
                <p>Bắc Hải  mang đến sự đa dạng về các hãng hàng không trong nước lẫn quốc tế. Với các chặng bay nội địa, vé máy bay Vietnam Airlines, vé máy bay VietJet Air, vé máy bay Bamboo Airways, vé máy bay Vietravel Airlines và vé máy bay Pacific Airlines vẫn là những cái tên được nhớ đến đầu tiên. Dù bạn muốn dừng chân tại các thành phố lớn như TP. HCM, Hà Nội, Đà Nẵng, hay những địa điểm du lịch nổi tiếng như Nha Trang, Phú Quốc, Đà Lạt… thì chúng tôi cũng sẽ khiến bạn hài lòng với vô vàn sự lựa chọn về thời gian và địa điểm khởi hành</p>
                <p>Tìm kiếm vé máy bay giá rẻ giữa nhiều hãng không chỉ là công việc tốn thời gian, mà còn đôi khi rườm rà và phức tạp. Chúng tôi hiểu điều này và đã phát triển hệ thống thông tin và cơ sở dữ liệu linh hoạt, giúp bạn dễ dàng lọc và chọn lựa theo các tiêu chí quan trọng như giá, thời gian xuất phát, hay ưu đãi đặc biệt.
                </p>
                <p>Đội ngũ chăm sóc khách hàng chuyên nghiệp của chúng tôi hoạt động liên tục 24/7 trên nhiều nền tảng kĩ thuật số. Bất kỳ thắc mắc hay yêu cầu nào của bạn đều được chúng tôi đáp ứng nhanh chóng qua hotline, email, fanpage, zalo OA, và website. Chúng tôi không chỉ giúp bạn tìm vé, mà còn đơn giản hóa quy trình check-in. Đội ngũ nhân viên sẵn sàng hỗ trợ thủ tục check-in online miễn phí và chọn chỗ ngồi, giúp bạn tiết kiệm thời gian và tận hưởng mọi khoảnh khắc trên chuyến đi của mình. Hãy để chúng tôi là đối tác đáng tin cậy trên hành trình của bạn
                </p>
                <p>
                Bắc Hải hỗ trợ 5 hình thức thanh toán đa dạng: thẻ thanh toán quốc tế, ATM nội địa, chuyển khoản, ví điện tử hoặc thanh toán trực tiếp tại địa chỉ văn phòng (địa chỉ công ty). Với những giao dịch trực tuyến, giờ đây thay vì phải nhâp số tài khoản ngân hàng, hệ thống chúng tôi sẽ đưa ra mã thanh toán nhằm giúp quý khách thuận tiện hơn trong việc đặt vé, chỉ một cú nhấp chuột là mọi thủ tục đã hoàn tất.
                </p>
                <p>Nếu còn bất kì thắc mắc hoặc cần hỗ trợ đặt vé, xin vui lòng liên hệ:</p>
                <ul>
                <li>
                Điện thoại: <a href="tel:0906 058 729">0906 058 729</a>
                </li>
                <li>
                Email: <a href="mailto:band@bachailogistics.com">band@bachailogistics.com</a>
                </li>
                <li>
                Fanpage: <a href="https://www.facebook.com/bachaicompany">Fanpage</a>
                </li>
                </ul>
                </div>
            
                ',
                'img' => 'datvemaybay.jpg',

            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}

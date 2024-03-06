<div class="container-fluid pt-4 pb-4">
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-md-8 col-12">
                <h3><strong>Liên hệ với chúng tôi</strong></h3>
                <div class="row">
                    <div class="col-md-6 col-12 px-4">
                        @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <form method="post" wire:submit.prevent="addContact">
                            <div class="mb-3">
                                <label class="form-label">Họ tên</label>
                                <input type="text" class="form-control" wire:model="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" wire:model="mail">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nội dung</label>
                                <textarea style="height:100px" class="form-control" wire:model="message"></textarea>
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
            </div>
            <div class="col-md-4 col-12">
                <livewire:partials.hpny />
                <livewire:partials.page-related />

            </div>
        </div>
    </div>
</div>
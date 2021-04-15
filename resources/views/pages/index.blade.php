@extends('layouts.header')
@section('content')
<div class="slider-container">
            <!--image slider start-->
            <div class="slider">
                <div class="slides">
                    <div class="text-hero">
                        <h3>Chào mừng bạn</h3>
                        <h3>đến với cộng đồng môi giới bất động sản</h3>
                        
                        <p>Hơn 10.000 môi giới chuyên nghiệp đã gia nhập đại gia đình XXX!</p>
                    </div>
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first"><a href=""></a>
                    <img src="./img/7.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./img/1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./img/9.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./img/4.jpg" alt="">
                </div>
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
        
        <!--image slider end-->
    </div>
    <section id="slogan">
        <div class="container">
            <h2>TIẾP CẬN KHÁCH HÀNG NHANH CHÓNG - HIỆU QUẢ</h2>
            <div class="flex">
                <div class="box-down">
                    <span class="fas fa-home"></span>
                    <h4>Tìm kiếm BĐS</h4>
                    <p>Joy horrible moreover man feelings own shy. Request norland neither mistake for yet</p>
                </div>
                <div class="box">
                    <span class="fas fa-dollar-sign"></span>
                    <h4>Mua bán BĐS</h4>
                    <p>Joy horrible moreover man feelings own shy. Request norland neither mistake for yet</p>
                </div>
                <div class="box-down">
                    <span class="fas fa-chart-line"></span>
                    <h4>Đầu tư</h4>
                    <p>Joy horrible moreover man feelings own shy. Request norland neither mistake for yet</p>
                </div>
            </div>
        </div>
    </section>
    <section id="properties">
        <div class="container">
            <h2>Nhà xưởng cho thuê</h2>
            <div id="properties-slider" class="slick">
                <div class="box">
                    <a href="/product"><img src="./img/pro_1.jpg" alt="Property 1" /></a>
                    
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp Chuyên Sâu Phú Mỹ III - Bà Rịa Vũng Tàu</a>
                        <p class="price">$160/m2 - Khu công nghiệp</p>
                        <span class="area">999 ha</span>
                        <span class="address">Bà Rịa-Vũng Tàu</span>
                        <span class="status">Đủ hồ sơ pháp lý</span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_2.jpg" alt="Property 1" /></a>
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp An Phát Complex - Hải Dương</a>
                        
                        <p class="price">$80/m2 - Khu công nghiệp</p>
                        <span class="area">46.4 ha</span>
                        <span class="address">Hải Dương</span>
                        <span class="status">Đủ hồ sơ pháp lý</span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_3.jpg" alt="Property 1" /></a>
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp DEEP C - Quảng Ninh</a>
                        <p class="price">$60/m2 - Khu công nghiệp</p>
                        <span class="area">1500 ha</span>
                        <span class="address">Quảng Ninh</span>
                        <span class="status">Chưa cập nhật</span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_4.jpg" alt="Property 1" /></a>
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp Thủ Thừa - Tỉnh Long An</a>
                        <p class="price">$100/m2 - Khu công nghiệp</p>
                        <span class="area">188.88 ha</span>
                        <span class="address">Long An</span>
                        <span class="status">Đủ hồ sơ pháp lý</span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_1.jpg" alt="Property 1" /></a>
                    
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp DEEP C (Đình Vũ) - Hải Phòng</a>
                        <p class="price">$85/m2 - Khu công nghiệp</p>
                        <span class="area">3000 ha</span>
                        <span class="address">Hải Phòng</span>
                        <span class="status">Đủ hồ sơ pháp lý</span>
                        
                    </div>
                </div>
            </div>
            <a class="rounded" href="/list">Xem tất cả</a>
        </div>
        </div>
        
        <br>
        <br>
        </div>
        <br>
        <div class="container">
            <h2>Nhà xưởng và dự án chuyển nhượng</h2>
            <div id="properties-slider2" class="slick">
                <div>
                    <a href="/product"><img src="./img/pro_1.jpg" alt="Property 1" /></a>
                    
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp Chuyên Sâu Phú Mỹ III - Bà Rịa Vũng Tàu</a>
                        <p class="price">$160/m2 - Khu công nghiệp</p>
                        <span class="area">999 ha </span>
                        <span class="address">Bà Rịa-Vũng Tàu </span>
                        <span class="status">Đủ hồ sơ pháp lý </span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_2.jpg" alt="Property 1" /></a>
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp An Phát Complex - Hải Dương </a>
                        
                        <p class="price">$80/m2 - Khu công nghiệp </p>
                        <span class="area">46.4 ha </span>
                        <span class="address">Hải Dương </span>
                        <span class="status">Đủ hồ sơ pháp lý </span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_3.jpg" alt="Property 1" /></a>
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp DEEP C - Quảng Ninh </a>
                        <p class="price">$60/m2 - Khu công nghiệp</p>
                        <span class="area">1500 ha </span>
                        <span class="address">Quảng Ninh </span>
                        <span class="status">Chưa cập nhật </span>
                        
                    </div>
                </div>
                <div>
                    <a href="/product"><img src="./img/pro_4.jpg" alt="Property 1" /></a>
                    <div class="property-details">
                        <a href="/product" >Khu Công Nghiệp Thủ Thừa - Tỉnh Long An </a>
                        <p class="price">$100/m2 - Khu công nghiệp </p>
                        <span class="area">188.88 ha </span>
                        <span class="address">Long An </span>
                        <span class="status">Đủ hồ sơ pháp lý </span>
                        
                    </div>
                </div>
                <div>
                    <img src="./img/pro_1.jpg" alt="Property 1" />
                    <div class="property-details">
                        <a href="index.php" >Khu Công Nghiệp DEEP C (Đình Vũ) - Hải Phòng </a>
                        <p class="price">$85/m2 - Khu công nghiệp </p>
                        <span class="area">3000 ha </span>
                        <span class="address">Hải Phòng </span>
                        <span class="status">Đủ hồ sơ pháp lý </span>
                        
                    </div>
                </div>
            </div>
            <a class="rounded" href="/list">Xem tất cả</a>
        </div>
    </section>


    
</body>
</html>

@endsection


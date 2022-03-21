@extends('frontend.layouts.master')

@section('title')
    Trang chủ
@endsection
@section('slide')
<div class="slider text-center">
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <div class="slider-img one-img">
                    <div class="container">
                        <div class="slider-info ">
                            <h5>Đắc Nhân Tâm</h5>
                            <div class="bottom-info">
                                <p>Nếu bạn không thể ngẩng cao đầu và thừa nhận lỗi lầm của mình thì lỗi lầm ấy sẽ khống chế bạn. Việc tự nhận lỗi lầm không chỉ làm cho người khác tôn trọng bạn hơn mà còn phát triển sự tự trọng của bản thân mình.</p>
                            </div>
                            <div class="outs_more-buttn">
                                <a href="about.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-img two-img">
                    <div class="container">
                        <div class="slider-info ">
                            <h5>Nhà Giả Kim</h5>
                            <div class="bottom-info">
                                <p>Đừng bao giờ ngừng ước mơ, ước mơ cung cấp dinh dưỡng cho linh hồn cũng như một bữa ăn cho cơ thể.</p>
                            </div>
                            <div class="outs_more-buttn">
                                <a href="about.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-img three-img">
                    <div class="container">
                        <div class="slider-info">
                            <h5>Hành Trình Về Phương Đông</h5>
                            <div class="bottom-info">
                                <p>Nếu biết thức tỉnh quan sát, ta có thể học hỏi bao nhiêu điều hay. Tiếc rằng khi đắc thời người ta quên đi quá khứ rất nhanh. Chỉ trong đau khổ, nhục nhã ê chề mới chịu học</p>
                            </div>
                            <div class="outs_more-buttn">
                                <a href="about.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- This is here just to demonstrate the callbacks -->
    <!-- <ul class="events">
       <li>Example 4 callback events</li>
       </ul>-->
    <div class="clearfix"></div>
</div>
@endsection

@section('content')

<!-- //about -->
<!--new Arrivals -->
<section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Sách Mới</h3>
        <div class="slid-img">
            <ul id="flexiselDemo1">
                @foreach ($products as $product)
                    <li>
                        <div class="agileinfo_port_grid">
                            <img style="height:260px;width:237px; " src="/frontend/images/{{$product->image}}" alt="" class="img-fluid" />
                            <div class="banner-right-icon">
                                <h4 class="pt-3">{{$product->name}}</h4>
                            </div>
                            <div class="outs_more-buttn">
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </li>
                @endforeach
                
               
            </ul>
        </div>
    </div>
</section>
<!--//about -->
<!--Customers Review -->
<section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Review hay</h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="/frontend/images/t1.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Kiều Trang
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img style="width:400px;height:250px" src="/frontend/images/banlaai.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> Chỉ ra và phân tích những kiểu tình yêu điển hình: tình yêu dục vọng, tình yêu đam mê, tình yêu đồng hành và bạn sẽ biết được mối quan hệ của bạn thuộc kiểu nào
                                            Phân tích chi tiết thuyết gắn bó: có những kiểu mẫu gắn bó nào?
                                            Bạn thuộc kiểu gắn bó nào?<span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="/frontend/images/t2.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Thu Phương
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img style="width:400px;height:250px" src="/frontend/images/ngaymai.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> Người anh trai kiếp trước không thích cô, lúc này ở trường học lại kè kè bên cô, ra vẻ là một người cuồng em gái. Người chị kế xinh đẹp luôn xa lánh thờ ơ, nay lại mỗi ngày đón cô tan học, coi cô như em gái cùng một mẹ sinh ra.

                                            Giang Kiều xúc động không thôi. Chẳng lẽ ông trời cho cô sống lại là để đám chó má này đối xử với cô tốt hơn sao? Tuyệt!
                                            
                                            Nhưng buổi sáng hôm ấy, bỗng nhiên cô phát hiện có thể nghe được suy nghĩ của hai người họ. <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="/frontend/images/t1.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Minh Nguyệt
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img style="width:400px;height:250px" src="/frontend/images/chet-giua-mua-he.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> Người anh trai kiếp trước không thích cô, lúc này ở trường học lại kè kè bên cô, ra vẻ là một người cuồng em gái. Người chị kế xinh đẹp luôn xa lánh thờ ơ, nay lại mỗi ngày đón cô tan học, coi cô như em gái cùng một mẹ sinh ra.

                                            Giang Kiều xúc động không thôi. Chẳng lẽ ông trời cho cô sống lại là để đám chó má này đối xử với cô tốt hơn sao? Tuyệt!
                                            
                                            Nhưng buổi sáng hôm ấy, bỗng nhiên cô phát hiện có thể nghe được suy nghĩ của hai người họ. <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="/frontend/images/t3.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>San san
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img style="width:400px;height:250px" src="/frontend/images/nguoiviet.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="/frontend/images/t2.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Milky Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="/frontend/images/tt2.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="/frontend/images/t3.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Sam Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="/frontend/images/tt1.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//Customers Review -->
<!-- Product-view -->
<section class="product py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Sách hay </h3>
        <div class=" img-toy-w3l-top">
        </div>
        <div class="mt-lg-4 mt-3 product-info-img">
            <p>velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere
            </p>
            <div class="clients_more-buttn">
                <a href="shop.html">Shop Now</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 img-toy-w3l-left">
                <div class="toys-img-one">
                </div>
                <div class="mt-lg-4 mt-3 product-info-img">
                    <p>velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 img-toy-agile-right">
                <div class="toys-img-one-two">
                </div>
                <div class="mt-lg-4 mt-3 product-info-img">
                    <p>velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                    </div>
                </div>
                <div class="toys-img-one-three">
                </div>
                <div class="mt-lg-4 mt-3 product-info-img">
                    <p>velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula. Duis posuere velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//Product-view-->
<!--//Product-view-->


@endsection
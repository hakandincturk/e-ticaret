@extends('front.layouts.master')
@section('title') Playstation @endsection
@section('content')

<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Playstation<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                    <li>Playstation</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
    <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
        <div class="container">
             <!-- mens -->
            <div class="col-md-4 products-left">

                <div class="css-treeview">
                    <h4>TÜR</h4>
                    <ul class="tree-list-pad">
                        @foreach($kinds as $kind)
                            <li><a href="#" style="margin: 0; padding: 0; font-size: 16px;">
                                    <input type="checkbox" checked="checked" id="item-0"/>
                                    <label for="item-0">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        {{$kind->name}}
                                    </label>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>YAYINCI</h4>
                    <div class="swit form">
                        <form>
                            @foreach($psPublishers as $publisher)
                                <div class="check_box">
                                    <a href="#">
                                        <div class="radio">
                                            <label><input type="radio" name="radio"><i></i>
                                                {{$publisher->name}}
                                            </label>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        <input type="submit" value="FİLTRELE">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
               <!--   <h5>Ürün <span>Karşılaştırma(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sırala</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Varsayılan</option>
                            <option value="null">İsim (A - Z)</option>
                            <option value="null">İsim (Z - A)</option>
                            <option value="null">Fiyat (Çok - Az)</option>
                            <option value="null">Fiyat (Az - Çok)</option>
                            <option value="null">En Yeni</option>
                            <option value="null">Çok Satan</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Göster</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option>
                            <option value="null">28</option>
                            <option value="null">35</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div> -->
                <div class="men-wear-top">

                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="{{asset('front/images/template-images')}}/banner2.jpg" alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="{{asset('front/images/template-images')}}/banner5.jpg" alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="{{asset('front/images/template-images')}}/banner2.jpg" alt=" "/>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="{{asset('front/images')}}/ps.jpg" alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4>Playstation <span>Oyunları</span></h4>
                        <p style="text-align: justify">PlayStation Oyunları fiyatlarını ve özelliklerini en popüler, en ucuz, en yeni ürünler olarak gruplayabilirsiniz. PlayStation Oyunları fiyatları karşılaştırma listesine ekleyerek size en uygun seçenekleri tek ekranda inceleyin. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="single-pro">
                {{--       PRODUCT DIV         --}}
                @foreach($products as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->coverImage}}" alt="" width="255px" height="248px" class="pro-image-front">
                                <img src="{{$product->coverImage}}" alt="" width="255px" height="248px" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{route('front.product.detail.index', $product->id)}}" class="link-product-add-cart">Hemen İncele</a>
                                    </div>
                                </div>
                                <span class="product-new-top">YENİ!</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{route('front.product.detail.index', $product->id)}}">{{$product->name}}</a></h4>
                                <div class="info-product-price">
                                    @if($product->discountRate !== 0)
                                        <span class="item_price">{{number_format($product->price-($product->price*($product->discountRate / 100)), 2)}}₺</span>
                                        <del>{{$product->price}}₺</del>
                                    @else
                                        <span class="item_price">{{$product->price}} ₺</span>
                                    @endif
                                </div>
                                <div
                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Formal Blue Shirt"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Sepete Ekle" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                {{--        /PRDOCUT DIV        --}}
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //mens -->
<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>ÜCRETSİZ KARGO</h3>
                    <p>Fiziksel olarak almak isterseniz ücretsiz kargo ile gönderebiliriz!</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>7/24 CANLI DESTEK</h3>
                    <p>7/24 Canlı Destek hattımız mevcuttur.</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>İADE GARANTİSİ</h3>
                    <p>Herhangi bir sorunda iade garantisi vardır.</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>HEDİYE KUPONLAR</h3>
                    <p>Alışveriş yaptıkça indirim kuponları kazanın.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!--grids-->
@endsection

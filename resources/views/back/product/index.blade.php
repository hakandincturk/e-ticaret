@extends('back.layouts.master')
@section('title') Ürünler @endsection
@section('content')

    <div class="limiter">
        <div class="d-flex justify-content-center shadow">
            <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            Adı
                        </div>
                        <div class="cell">
                            Yayıncı
                        </div>
                        <div class="cell">
                            Tür
                        </div>
                        <div class="cell">
                            Fiyat
                        </div>
                        <div class="cell">
                            Stok
                        </div>
                        <div class="cell">
                            Platform
                        </div>
                        <div class="cell">
                            Durum
                        </div>
                    </div>

                    @foreach($products as $product)
                        <div class="row">
                            <div class="cell" data-title="Adı">
                                {{$product->name}}
                            </div>
                            <div class="cell" data-title="Yayıncı">
                                @if($product->publisherDetail->isDeleted)
                                    <label class="text-danger">{{$product->publisherDetail->name}}</label>
                                @else
                                    <label class="">{{$product->publisherDetail->name}}</label>
                                @endif
                            </div>
                            <div class="cell" data-title="Tür">
                                @if($product->kindDetail->isDeleted)
                                    <label class="text-danger">{{$product->kindDetail->name}}</label>
                                @else
                                    <label class="">{{$product->kindDetail->name}}</label>
                                @endif
                            </div>
                            <div class="cell" data-title="Fiyat">
                                @if($product->discountRate !== 0)
                                    <label class="text-warning">{{number_format($product->price-($product->price*($product->discountRate / 100)), 2)}}</label>
                                @else
                                    <label class="">{{$product->price}}</label>

                                @endif
                            </div>
                            <div class="cell" data-title="Stok">
                                @if($product->stock < 15)
                                    <label class="text-danger font-weight-bold">{{$product->stock}}</label>
                                @else
                                    <label>{{$product->stock}}</label>
                                @endif
                            </div>
                            <div class="cell" data-title="Platform">
                                @if($product->isPc) <i class="fas fa-desktop text-success" style="font-size: 1.1rem;"></i> @else <i class="fas fa-desktop text-danger" style="font-size: 1.1rem;"></i> @endif
                                @if($product->isPs) <i class="fab fa-playstation text-success mx-1" style="font-size: 1.1rem;"></i> @else <i class="fab fa-playstation text-danger mx-1" style="font-size: 1.1rem;"></i> @endif
                                @if($product->isXbox) <i class="fab fa-xbox text-success" style="font-size: 1.1rem;"></i> @else <i class="fab fa-xbox text-danger" style="font-size: 1.1rem;"></i> @endif
                            </div>
                            <div class="cell" data-title="Durum">
                                @if(!$product->isDeleted) <label class="btn btn-success">Aktif</label> @else <label class="btn btn-danger">Pasif</label> @endif
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="cell" data-title="Full Name">
                            Vincent Williamson
                        </div>
                        <div class="cell" data-title="Age">
                            Sony Interactive Ent.
                        </div>
                        <div class="cell" data-title="Job Title">
                            Rol Yapma
                        </div>
                        <div class="cell" data-title="Location">
                            9999
                        </div>
                        <div class="cell" data-title="Location">
                            9999
                        </div>
                        <div class="cell" data-title="Location">
                            <i class="fas fa-desktop"></i>
                            <i class="fab fa-playstation"></i>
                            <i class="fab fa-xbox"></i>
                        </div>
                        <div class="cell" data-title="Location">
                            Aktif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center pt-3">
        {{ $products->withQueryString()->links('pagination::bootstrap-4') }}
    </div>
@endsection

@section('customPageCss')
    <link rel="stylesheet" type="text/css" href="{{asset('backTemplate/datatableUtils/vendor/animate')}}/animate.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backTemplate/datatableUtils/vendor/select2')}}/select2.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backTemplate/datatableUtils/vendor/perfect-scrollbar')}}/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backTemplate/datatableUtils/css')}}/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backTemplate/datatableUtils/css')}}/main.css">
@endsection

@section('customPageJs')
    <script src="{{asset('backTemplate/datatableUtils/vendor/bootstrap/js')}}/popper.js"></script>
    <script src="{{asset('backTemplate/datatableUtils/vendor/select2')}}/select2.min.js"></script>
    <script src="{{asset('backTemplate/datatableUtils/js')}}/main.js"></script>
@endsection

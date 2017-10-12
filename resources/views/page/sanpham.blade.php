@extends('master')
@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{route('trangchu')}}">Home</a> / <span>Chi tiết sản phẩm {{$sanpham->name}}</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

        <div class="row">
          <div class="col-sm-4">
            <img src="{{asset('source/image/product/1234.jpg')}}" alt="">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
              <p class="single-item-price">
                @if($sanpham->promotion_price==0)
                <span class="flash-sale">{{number_format($sanpham->unit_price)}} VND</span>
                @else
                <span class="flash-del">{{number_format($sanpham->unit_price)}} VND</span>
                <span class="flash-sale">{{number_format($sanpham->promotion_price)}} VND</span>
                @endif
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item-desc">
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo ms id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>
            </div>
            <div class="space20">&nbsp;</div>

            <p>Số lượng:</p>
            <div class="single-item-options">
              <select class="wc-select" name="color">
                <option>Số lượng</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>
        <div class="woocommerce-tabs">
          <ul class="tabs">
            <li><a href="#tab-description">Mô tả</a></li>
            <!-- <li><a href="#tab-reviews">Reviews (0)</a></li> -->
          </ul>

          <div class="panel" id="tab-description">
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
            <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
          </div>
          <div class="panel" id="tab-reviews">
            <p>No Reviews</p>
          </div>
        </div>
        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Sản phẩm tương tự</h4>

          <div class="row">
              @foreach($sanpham_tuongtu as $sp_tt)
            <div class="col-sm-4">
              <div class="single-item">
                @if($sp_tt->promotion_price)
                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                @endif
                <div class="single-item-header">
                  <a href="{{route('chitietsanpham',$sp_tt->id)}}"><img src="{{asset('source/image/product/1234.jpg')}}" alt="" height="150px"></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title">{{$sp_tt->name}}</p>
                  <p class="single-item-price">
                    @if($sp_tt->promotion_price==0)
                    <span class="flash-sale">{{number_format($sp_tt->unit_price)}} VND</span>
                    @else
                    <span class="flash-del">{{number_format($sp_tt->unit_price)}} VND</span>
                    <span class="flash-sale">{{number_format($sp_tt->promotion_price)}} VND</span>
                    @endif
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="{{route('chitietsanpham',$sp_tt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="space50">&nbsp;</div>
            <div class="row">
              {{$sanpham_tuongtu->links()}}
            </div>
          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Best Sellers</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- best sellers widget -->
        <div class="widget">
          <h3 class="widget-title">New Products</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection

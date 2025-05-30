@extends('layouts.app1')
@section('contenu')



      {{--start content--}}
      {{--slider here --}}
      <section id="home-section" class="hero">
            <div class="home-slider owl-carousel">
                @foreach ($sliders as $slider)
                <div class="slider-item" style="background-image: url(/storage/slider_images/{{$slider->slider_image}});">
                    <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
    
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">{{$slider->description1}}</h1>
                        <h2 class="subheading mb-4">{{$slider->description2}}</h2>
                        <p><a href="#" class="btn btn-primary">View Details</a></p>
                    </div>
    
                    </div>
                </div>
                </div>
                @endforeach

        </div>
  </section>

  <section class="ftco-section">
          <div class="container">
              <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Free Shipping</h3>
              <span>On order over $100</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-box"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Always Fresh</h3>
              <span>Product well package</span>
            </div>
          </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality Products</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Support</h3>
              <span>24/7 Support</span>
            </div>
          </div>      
        </div>
      </div>
          </div>
      </section>

      <section class="ftco-section ftco-category ftco-no-pt">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-6 order-md-last align-items-stretch d-flex">
                              <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"  style="background-image: url(images/category.jpg); background-size: contain; background-repeat: no-repeat; background-position: center;">
                                <!-- contenu -->
                                  <div class="text text-center">
                                      <h2>Technologies</h2>
                                      <p>Get the best for you</p>
                                      <p><a href="#" class="btn btn-primary">Shop now</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
                                  <div class="text px-3 py-1">
                                      <h2 class="mb-0"><a href="#">Storage</a></h2>
                                  </div>
                              </div>
                              <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
                                  <div class="text px-3 py-1">
                                      <h2 class="mb-0"><a href="#">Monitor</a></h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
                          <div class="text px-3 py-1">
                              <h2 class="mb-0"><a href="#">Computer</a></h2>
                          </div>		
                      </div>
                      <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
                          <div class="text px-3 py-1">
                              <h2 class="mb-0"><a href="#">Console</a></h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

  <section class="ftco-section">
      <div class="container">
              <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Featured Products</span>
          <h2 class="mb-4">Our Products</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>   		
      </div>

      {{--container of our product --}}
      <div class="container">
          <div class="row">
                @foreach ($produits as $produit)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="/storage/product_images/{{$produit->product_image}}" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{$produit->product_name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">{{$produit->product_price}}</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
          </div>
      </div>
  </section>
      
      <section class="ftco-section img" style="background-image: url(images/bg_3.jpg); background-size: cover; background-position: 140% 40%; background-repeat: no-repeat;">
      <div class="container">
              <div class="row justify-content-end">
        <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading">Best Price For You</span>
          <h2 class="mb-4" style="color: blue">Deal of the day</h2>
          <p style="color: green;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          <h3><a href="#">Spinach</a></h3>
          <span class="price">$10 <a href="#">now $5 only</a></span>
        </div>
      </div>   		
      </div>
  </section>
  <br>
  <br>

      {{--end content --}}



@endsection
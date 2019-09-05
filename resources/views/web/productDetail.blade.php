@extends('layouts.layout')
@section('title','User - Product Detail')
@section('content')
    <div class="page">
        <div class="page-main">
            <div class="header py-4 bg-blue-lighter">
                <div class="container">
                    <div class="d-flex">
                        <h4 class="">Suggestions for baby products</h4>
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">

                                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">{{Auth::user()->name}}
                          @if(Auth::user()->is_admin)
                              <span>&nbsp;( Admin )</span>
                          @else
                              <span></span>
                          @endif
                      </span>
                      <small class="text-muted d-block mt-1">{{Auth::user()->email}}</small>
                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    {{--<a class="dropdown-item" href="#">--}}
                                    {{--<i class="dropdown-icon fe fe-user"></i> Profile--}}
                                    {{--</a>--}}

                                    {{--<a class="dropdown-item" href="#">--}}
                                    {{--<i class="dropdown-icon fe fe-send"></i> Message--}}
                                    {{--</a>--}}
                                    {{--<div class="dropdown-divider"></div>--}}

                                    <a class="dropdown-item" href="{{'/logout'}}">
                                        <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                            <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <span style="position: absolute; color: #454545; top: 22%; font-size: 6rem; font-family: 'Pacifico', cursive;">BABY STORE</span>
                        <img src="{{asset('images/cover1.jpg')}}" alt="">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-3 ml-auto">

                        </div>
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">



                                <li class="nav-item dropdown ">
                                    <a href="{{'/home'}}" class="active nav-link"><i class="fe fe-list"></i> Products</a>
                                </li>




                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-image"></i> About</a>
                                    <div class="dropdown-menu dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item">other</a>
                                        <a href="#" class="dropdown-item ">other</a>
                                        <a href="#" class="dropdown-item ">other</a>
                                        <a href="#" class="dropdown-item ">other</a>
                                        <a href="#" class="dropdown-item ">other</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fe fe-map"></i> Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Product Detail
                        </h1>


                    </div>

                    <div class="row row-deck">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4 text-center">
                                        <img src="{{url('/get-product/'.$product->photo)}}" style="height: 326px;" alt="Apple iPhone 7 128GB" class="img-fluid">
                                    </div>
                                    <h4 class="card-title">{{$product->name}}</h4>
                                    <div class="card-subtitle">
                                        baby boo
                                    </div>
                                    <div class="mt-5 d-flex align-items-center">
                                        <div class="product-price">
                                            <strong>${{$product->price}}</strong>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header">
                        <h1 class="page-title">
                            Suggested Items
                        </h1>


                    </div>
                    <div class="row row-deck">
                        @foreach($sProducts as $p)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4 text-center">
                                            <img src="{{url('/get-product/'.$p->photo)}}" style="height: 326px;" alt="Apple iPhone 7 128GB" class="img-fluid">
                                        </div>
                                        <h4 class="card-title">{{$p->name}}</h4>
                                        <div class="card-subtitle">
                                            baby boo
                                        </div>
                                        <div class="mt-5 d-flex align-items-center">
                                            <div class="product-price">
                                                <strong>${{$p->price}}</strong>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="{{'/products/'.$p->id}}" class="btn btn-primary"><i class="fe fe-plus"></i>See more & buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>
        </div>

    </div>



@endsection

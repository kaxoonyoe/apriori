@extends('layouts.layout')
@section('title','User - Products')
@section('content')
    <div class="page">
        <div class="page-main">
            <div class="header py-4 bg-orange">
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
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ml-auto">

                        </div>
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">


                                <li class="nav-item">
                                    @if(Auth::user()->is_admin)
                                        <a href="{{'/adminlist'}}" class="nav-link"><i class="fe fe-user"></i> Admin</a>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a href="{{'/userlist'}}" class="nav-link"><i class="fe fe-users"></i> User</a>
                                </li>


                                <li class="nav-item dropdown ">
                                    <a href="{{'/products'}}" class="active nav-link"><i class="fe fe-list"></i> Products</a>
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
                            Users
                        </h1>

                            <button type="button" class="btn btn-info ml-auto bg-orange" style="border: 0;" data-toggle="modal" data-target="#addNewProduct">Add product</button>
                    </div>
                    <div class="row row-deck">
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                                        <thead>
                                        <tr>
                                            <th class="text-center w-1"><i class="icon-people"></i></th>
                                            <th>name</th>
                                            <th>price</th>


                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($products as $p)

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div>{{ $p->name }}</div>
                                                </td>
                                                <td>
                                                    <div>{{ $p->price }}</div>
                                                </td>

                                            </tr>
                                        @endforeach
                                        <div class="modal fade" id="addNewProduct">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title normal p-3" >Add user</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"></span>
                                                        </button>

                                                    </div>
                                                    <form method="post" action="{{'/products'}}" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <div class="modal-body">

                                                            <div class="row">

                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Name</label>
                                                                        <input type="text" class="form-control"  name="name" placeholder="Enter name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Price</label>
                                                                        <input type="text" class="form-control" name="price" placeholder="Enter price">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="photo">Input image</label>
                                                                        <input name="photo" type="file" class="form-control-file" id="photo" required>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Add</button>
                                                            </div>

                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection

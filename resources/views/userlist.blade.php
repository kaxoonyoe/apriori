@extends('layouts.layout')
@section('title','User - Userlist')
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
                                    <a href="{{'/userlist'}}" class="nav-link active"><i class="fe fe-users"></i> User</a>
                                </li>
                                @if(!Auth::user()->is_admin)
                                    <li class="nav-item dropdown">
                                        <a href="{{'/products'}}" class="nav-link"><i class="fe fe-list"></i> Products</a>
                                    </li>
                                @endif

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
                                            <th>email</th>


                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($users as $u)

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div>{{ $u->name }}</div>
                                                </td>
                                                <td>
                                                    <div>{{ $u->email }}</div>
                                                </td>
                                                {{--<td class="text-center">--}}
                                                    {{--@if(Auth::user()->is_admin)--}}
                                                        {{--<div class="item-action dropdown">--}}
                                                            {{--<a href="#" data-toggle="dropdown" style="height: 25px; margin-right:0.6rem;" class="icon btn-sm btn btn-secondary"><i class="fe fe-more-horizontal text-blue"></i></a>--}}
                                                            {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                                                {{--<button class="dropdown-item" data-target="#editUserModal" data-toggle="modal"><i class="dropdown-icon fe fe-edit"></i> Edit </button>--}}
                                                                {{--<form  action="{{'/delete/'.$u->id}}" method="post">--}}
                                                                    {{--{{csrf_field()}}--}}

                                                                    {{--<button class="dropdown-item"><i class="dropdown-icon fe fe-trash"></i> Delete</button>--}}
                                                                {{--</form>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--@else--}}
                                                        {{--<span></span>--}}
                                                    {{--@endif--}}

                                                {{--</td>--}}
                                            </tr>
                                            <div class="modal fade" id="editUserModal" >
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title normal p-3" >Edit user</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"></span>
                                                            </button>

                                                        </div>
                                                        <form method="post" action="{{'/edit/'.$u->id}}">
                                                            {{csrf_field()}}
                                                            <div class="modal-body">


                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Name</label>
                                                                            <input type="text" class="form-control"  name="name" value="{{$u->name}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Email</label>
                                                                            <input type="email" class="form-control" name="email" value="{{$u->email}}">
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>

                                                            </div>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


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

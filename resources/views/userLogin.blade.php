@extends('layouts.layout')
@section('title','Login')
@section('content')
    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col col-login mx-auto">

                        <form class="card" action="{{'/login'}}" method="post">
                            {{csrf_field()}}
                            <div class="card-body p-6">
                                <div class="card-title">Login to your account</div>
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                {{--<div class="form-group">--}}
                                {{--<label class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" />--}}
                                {{--<span class="custom-control-label">Remember me</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-muted">
                            Don't have account yet? <a href="{{'/register'}}">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
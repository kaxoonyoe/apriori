<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <h4 class="text-muted">Project management</h4>
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
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> Profile
                        </a>

                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-send"></i> Message
                        </a>
                        <div class="dropdown-divider"></div>

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
                            <a href="{{'/adminlist'}}" class="nav-link active"><i class="fe fe-calendar"></i> Adminlist</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="{{'/userlist'}}" class="nav-link"><i class="fe fe-file"></i> Userlist</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="category.html" class="nav-link"><i class="fe fe-check-square"></i> Category</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-image"></i> Other</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a href="promocode.html" class="dropdown-item">other</a>
                            <a href="./icons.html" class="dropdown-item ">other</a>
                            <a href="./store.html" class="dropdown-item ">other</a>
                            <a href="./blog.html" class="dropdown-item ">other</a>
                            <a href="./carousel.html" class="dropdown-item ">Carousel</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="report.html" class="nav-link"><i class="fe fe-file-text"></i> Reports</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
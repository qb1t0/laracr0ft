@extends('app')

@section('includes')
    <link rel="stylesheet" href="css/dashboard.css">
@stop

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-wrench"></i> Management</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                        {{--<li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>--}}
                        {{--<li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>--}}
                        {{--<li class="submenu">--}}
                            {{--<a href="#">--}}
                                {{--<i class="glyphicon glyphicon-list"></i> Pages--}}
                                {{--<span class="caret pull-right"></span>--}}
                            {{--</a>--}}
                            {{--<!-- Sub menu -->--}}
                            {{--<ul>--}}
                                {{--<li><a href="login.html">Login</a></li>--}}
                                {{--<li><a href="signup.html">Signup</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                @yield('datacontent')
            </div>
        </div>
    </div>
@stop
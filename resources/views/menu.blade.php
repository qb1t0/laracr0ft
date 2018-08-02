@extends('app')

@section('includes')
    <link rel="stylesheet" href="css/dashboard.css">
    @yield('styles')
@stop

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class= "{{ $p == 1 ? "current": ""}}"><a href="dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        {{--<li><a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a></li>--}}
                        <li class = "{{ $p == 0 ? "current": ""}}"><a href="management"><i class="glyphicon glyphicon-wrench"></i> Management</a></li>
                        <li class = ""><a href="{{route("logout")}}"><i class="glyphicon glyphicon-wrench"></i> Logout</a></li>
                        {{--<li><a href="#"><i class="glyphicon glyphicon-list"></i> Tables</a></li>--}}
                        {{--<li><a href="#"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>--}}
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
                <header>
                    @yield('header')
                    <hr>
                </header>
                @yield('datacontent')
            </div>
        </div>
    </div>
@stop
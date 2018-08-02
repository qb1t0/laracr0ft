@extends('menu')

@section('styles')
    <!-- Scripts -->
    <script src="{{asset('js/masks.js') }}"></script>
    <script src="{{asset('js/jquery.mask.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/management.css') }}">
@stop

@section('header')
    USERS MANAGEMENT
@stop

@section('datacontent')
    <div class="row">
            <div class="alert alert-success" role="alert">
                <a href="#" class="alert-link">User profile was successfully created.</a>
            </div>
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">CREATE USER</div>
            </div>
            <div class="panel-body">
                <form action=" {{ route('management') }}" method="POST">
                    @csrf
                    <fieldset>

                        <div class="row">
                            <div class="col-sm-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label>First Name</label>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input type="text" class="form-control"  value="{{ Request::old('name') }}" placeholder="Name" name ="name" maxlength="32" >
                            </div>
                            <div class="col-sm-6 {{ $errors->has('surname') ? 'has-error' : '' }}">
                                <label>Last Name</label>
                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                                <input type="text" class="form-control" value="{{ Request::old('surname') }}" placeholder="Surname" name ="surname" maxlength="32" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label>Email</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control"  value="{{ Request::old('email') }}" placeholder="Email" name ="email" maxlength="32" >
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Password</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control" value="{{ Request::old('pasword') }}" placeholder="Password" name ="password" minlength="8" >
                                    <span class="input-group-addon" ><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="h-input">Date of Birth</label>
                                @if ($errors->has('date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group {{ $errors->has('date') ? 'has-error' : '' }}">
                                    <input type="text" name="date" value="{{ Request::old('date') }}" class="form-control" id="dateholder" maxlength="10" >
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Phone</label>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    <input type="text" name="phone" value="{{ Request::old('phone') }}" class="form-control" id="phoneholder" maxlength="10" >
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class = "submit">
                        <button type= "submit" class="btn btn-primary" value="submit">
                            <i class="fa fa-save"></i>
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">DELETE USER</div>
            </div>
                <div class="panel-body">
                    <form action="#" method="POST">
                        @csrf
                        <fieldset>
                            <label>Input Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email">
                                <span class="input-group-btn">
                               <div class="btn btn-outline-secondary">
                                    <i class="fa fa-trash"></i>
                                    DELETE
                                </div>
                            </span>
                            </div>
                        </fieldset>
                    </form>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">USERS LIST</div>
            </div>

            @if(1)
                <div class="panel-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @else
                <div class="panel-body"
                     style=
                     "text-align: center;">
                    <h5>USERS DATABASE IS EMPTY</h5>
                </div>
            @endif

        </div>
    </div>
@stop
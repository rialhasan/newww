@extends('master')

@section('content')


<div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="{{url('/')}}" class="logo-name text-lg text-center m-t-xs">{{ env('APP_NAME ')}}</a>
                                        <p class="text-center m-t-md">Please reset your account.</p>
                                        <form class="m-t-md" action="{{ route('login') }}" method="post">
                                        @csrf 
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" >
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success btn-block">Reset</button>
                                            
                                        </form>
                                        <p class="text-center m-t-xs text-sm">2015 - {{date('Y')}} &copy; stacks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
@endsection


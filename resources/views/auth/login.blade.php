@extends('layouts.app')

@section('stylesheet')
 @include('partials.stylesheet.login')
@stop

@section('class-body')
    login
@endsection

@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
           <div class="login-logo ">
            <div class="logo-section">
                <img alt="" src="{{ asset('assets/build/images/3H1.png')}}">
            </div>
        </div><!-- /.login-logo -->
            <section class="login_content">
                <h5 class="text-center" style="font-size: 30px;">3Hammers</h5>
                <h4>
                    <strong>Infant Record Management System</strong>
                </h4>
              
                <form  method="POST" action="{{ url('/login') }}" >
                               {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{ old('email') }}" />
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>



                    <div class="form-group">
                        {{-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div> --}}
                        <button type="submit" class="btn btn-primary btn-block btn-large">Log in</button>
                        <div class="form-group">
                                
                        </div>
                        {{--<a class="reset_pass" href="{{ route('password.request') }}" style="margin-right: 120px;">Lost your password?</a>--}}
                    </div>


                    <div class="clearfix"></div>

                    {{--<div class="separator">--}}
                        {{--<p class="change_link">New to site?--}}
                            {{--<a href="{{route('register')}}"  > Create Account </a>--}}
                        {{--</p>--}}

                        {{--<div class="clearfix"></div>--}}
                        {{--<br />--}}
                    {{--</div>--}}

                 
                </form>
            </section>
        </div>


    </div>
</div>
@endsection

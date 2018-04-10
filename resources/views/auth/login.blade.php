@extends('layout.app')

@section('title')登录@endsection

@section('content')
    <main class="auth_container">
        <h1>SING IN
            <h1>
                <form action="{{ route('login') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="input_item{{ $errors->has('username')?' has_error':'' }}">
                        <label>用户名</label>
                        <input placeholder="请输入用户名" type="text" name="username" value="{{old('username')}}">
                        @if($errors->has('username'))
                            <p class="error">{!! $errors->first('username') !!}</p>
                        @endif
                    </div>
                    <div class="input_item{{ $errors->has('password')?' has_error':'' }}">
                        <label>密码</label>
                        <input placeholder="请输入密码" type="password" name="password">
                        @if($errors->has('password'))
                            <p class="error">{!! $errors->first('password') !!}</p>
                        @endif
                    </div>
                    <input type="hidden" name="remember" value="1">
                    <button class="btn" type="submit">
                        登录 <i class="iconfont icon-arrow-right-copy-copy-copy"></i>
                    </button>
                </form>
                <div class="tip">还没有账号？ <a href="{{ route('register') }}">现在注册</a></div>
    </main>
@endsection
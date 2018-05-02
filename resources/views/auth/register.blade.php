@extends('layout.app')

@section('title')注册@endsection
@section('content')
    <main class="auth_container">
        <h1>SING UP
            <h1>
                <form action="{{route('register')}}" method="post">
                    {{csrf_field()}}
                    <div class="input_item{{$errors->has('username')?' has_error':''}}">
                        <label>用户名</label>
                        <input placeholder="请输入用户名" type="text" name="username" value="{{old('username')}}">
                        @if($errors->has('username'))
                            <p class="error">{{$errors->first('username')}}</p>
                        @endif
                    </div>
                    <div class="input_item{{$errors->has('password')?' has_error':''}}">
                        <label>密码</label>
                        <input placeholder="请输入密码" type="password" name="password">
                        @if($errors->has('password'))
                            <p class="error">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                    <div class="input_item">
                        <label>确认密码</label>
                        <input placeholder="请重复输入密码" type="password" name="password_confirmation">
                    </div>
                    <button class="btn" type="submit">
                        注册 <i class="iconfont icon-arrow-right-copy-copy-copy"></i>
                    </button>
                </form>
                <div class="tip">已有账号？ <a href="{{ route('login') }}">登录</a></div>
    </main>
@endsection
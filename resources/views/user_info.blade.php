@extends('layout.app')
@section('title'){{$user->username}} 的个人信息@endsection
@section('content')
    <div id="msg" style="display:none;">修改成功</div>
    <main class="user_wrapper">
        <form action="{{route('users.ajaxUpdate', $user->id)}}" method="post" enctype="multipart/form-data">
            {{method_field('put')}}
            <div class="user_inner">
                <div class="avatar">
                    <img src="{{$user->avatar==''?asset('default_avatar.jpg'):\Storage::disk('public')->url(auth()->user()->avatar)}}">
                    <input type="file" name="avatar" onblur="updateUser(this)">
                </div>
                <input type="text" class="uname" name="username" value="{{$user->username}}" onblur="updateUser(this)">
                <hr/>
                <input type="text" class="intro" name="intro" value="{{$user->intro}}" placeholder="没有简介"
                       onblur="updateUser(this)">
            </div>
            <input type="submit" value="修改">
        </form>
    </main>
@endsection

{{--@section('js')--}}
{{--<script src="https://cdn.bootcss.com/jquery/1.12.3/jquery.js"></script>--}}
{{--<script>--}}

{{--// ajax--}}
{{--function updateUser(inputDom) {--}}
{{--$.ajax({--}}
{{--url: '{{ route('users.ajaxUpdate', $user->id) }}',--}}
{{--method: 'put',--}}
{{--data: {--}}
{{--[inputDom.name]: inputDom.value--}}
{{--},--}}
{{--success: function (res) {--}}
{{--$("#msg").show();--}}
{{--setTimeout(function () {--}}
{{--$("#msg").hide()--}}
{{--}, 3000);--}}
{{--},--}}
{{--error: function (res) {--}}
{{--console.log('出错了')--}}
{{--}--}}
{{--});--}}
{{--}--}}
{{--</script>--}}
{{--@endsection--}}

@extends('layout.app')
@section('title')首页@endsection
@section('content')
    <header>
        <div id="option_btn" class="option">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo">
            <span>F</span>orum
        </div>
        <div class="search">
            <i class="iconfont icon-search"></i>
        </div>
    </header>
    <div style="transform: scale(0)" id="type_mask" class="type_mask mask">
        <div class="body">
            <i id="type_mask_close" class="iconfont icon-cha"></i>
            <div class="type_body">
                <div class="user_info">
                    <a class="avatar" href="{!! route('users.show', auth()->id()) !!}"><img width="64" height="64" src="{!! \Storage::disk('public')->url(auth()->user()->avatar) !!}"></a>
                    <div class="right">
                        <a href="{!! route('users.show', auth()->id()) !!}"
                           class="uname">{{auth()->user()->username}}</a>
                        <p>{{auth()->user()->intro}}</p>
                    </div>
                </div>
                <ul class="type_list">
                    <li{!! is_null($currentCategory)?' class="current"':'' !!}><a href="{{route('index')}}">全部</a></li>
                    @foreach(\App\Category::all() as $category)
                        <li{!! $category->is($currentCategory)?' class="current"':'' !!}>
                            <a href="{{route('category', $category->slug)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <main class="post-list">
        <h2 class="division_title">{{is_null($currentCategory)?'全部':$currentCategory->name}}</h2>
        <ul>
            @foreach($posts as $post)
                <li class="item">
                    <a class="cover" href="#">
                        <img src="https://y.gtimg.cn/music/photo_new/T002R150x150M000000I7qBn0uP42l.jpg?max_age=2592000"
                             alt="">
                    </a>
                    <div class="center">
                        <a href="#" class="title">{{$post->title}}</a>
                        <div class="info">
                            <a class="user" href="#">一家专卖店</a>
                            • 最后由 <a href="#" class="user">jakit</a> 回复于 12 天前
                        </div>
                    </div>
                    <a href="#" class="count">15</a>
                </li>
            @endforeach
        </ul>
        <ul class="page">
            <li><a href="#"><</a></li>
            <li class="current"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">></a></li>
        </ul>
    </main>
@endsection

@section('js')
    <script>
        var typeMaskDom = document.querySelector('#type_mask')
        document.querySelector('#option_btn').onclick = function () {
            typeMaskDom.style.transform = 'scale(1)';
        };
        document.querySelector('#type_mask_close').onclick = function () {
            typeMaskDom.style.transform = 'scale(0)';
        };
    </script>
@endsection
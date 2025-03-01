@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcgk4-2.fna.fbcdn.net/vp/109860358cfdd4c552dc7aca31a02cf1/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fcgk4-2.fna.fbcdn.net&_nc_cat=109" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>200</strong> posts</div>
                <div class="pr-5"><strong>2,5K</strong> followers</div>
                <div class="pr-5"><strong>23</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fcgk5-1.fna.fbcdn.net/vp/26fd2221f3a6dd8a6c32945e7fb773f3/5D5ED43E/t51.2885-15/e35/c1.0.747.747/s150x150/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=107 150w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/9d64d991e84a6c5dc6ca3f8964b4f0d0/5D595C8B/t51.2885-15/e35/c1.0.747.747/s240x240/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=107 240w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/b5b19d3a89560bfa78a053a953a49068/5D60DD33/t51.2885-15/e35/c1.0.747.747/s320x320/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=107 320w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/3250d70d57269caa8a09fb1c0e479575/5D7B8A6F/t51.2885-15/e35/c1.0.747.747/s480x480/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=107 480w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/f4bec967c361a039da0bbebf0b4e350f/5D7E2766/t51.2885-15/sh0.08/e35/c1.0.747.747/s640x640/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=107 640w" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk5-1.fna.fbcdn.net/vp/5c5512bae1d7764e86509e9a764e76e7/5D6BCD44/t51.2885-15/e35/c0.104.918.918/s150x150/60878664_2338951489496025_7878833555420019308_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=109 150w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/1331709d1a1d07db8abf266eeb8e38c3/5D9BFA42/t51.2885-15/e35/c0.104.918.918/s240x240/60878664_2338951489496025_7878833555420019308_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=109 240w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/c9772c9794cd2229a26d8c656dfb5680/5D61FF3C/t51.2885-15/e35/c0.104.918.918/s320x320/60878664_2338951489496025_7878833555420019308_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=109 320w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/33bf7e74fa38953f8f63d3d0ec676174/5D6C2F7B/t51.2885-15/e35/c0.104.918.918/s480x480/60878664_2338951489496025_7878833555420019308_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=109 480w,https://instagram.fcgk5-1.fna.fbcdn.net/vp/25b4bcae9a7441f6f6355b4fd8beb583/5D60DA70/t51.2885-15/sh0.08/e35/c0.104.918.918/s640x640/60878664_2338951489496025_7878833555420019308_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=109 640w" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk4-1.fna.fbcdn.net/vp/169d57e0ac386ce067269998bace2a6c/5D5D0484/t51.2885-15/e35/c0.99.912.912a/s150x150/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_cat=110 150w,https://instagram.fcgk4-1.fna.fbcdn.net/vp/c176b236988479ee8eb9835110826d95/5D978582/t51.2885-15/e35/c0.99.912.912a/s240x240/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_cat=110 240w,https://instagram.fcgk4-1.fna.fbcdn.net/vp/39cf0a79d03dffe7e674afed2f20e480/5D9A94FC/t51.2885-15/e35/c0.99.912.912a/s320x320/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_cat=110 320w,https://instagram.fcgk4-1.fna.fbcdn.net/vp/b24bed10143005f5ab6c31078945c5d2/5D7FDBBB/t51.2885-15/e35/c0.99.912.912a/s480x480/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_cat=110 480w,https://instagram.fcgk4-1.fna.fbcdn.net/vp/ddc9c186bc30f7251f2642ae7456d05c/5D97E3B0/t51.2885-15/sh0.08/e35/c0.99.912.912a/s640x640/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_cat=110 640w" class="w-100">
        </div>
    </div>
</div>
@endsection
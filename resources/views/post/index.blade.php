<x-app-layout>
    　　　　　{{ Auth::user()->name }} さん　こんにちは
    <div class="max-w-md mx-auto overflow-hidden bg-white shadow-lg rounded-xl md:max-w-2xl">
        <div class="p-4 bg-gradient-to-r from-teal-400 to-blue-500">
            <h3 class="text-xl font-bold text-center text-white">ケアクルーの皆様へ【ルールブック】</h3>
        </div>
        <ul class="p-4 m-4 space-y-2 list-disc">
            <li class="text-teal-600">ケアクルーの方は求人の新規作成は出来ませんのでご注意下さい。</li>
            <li class="text-teal-600">求人投稿の権限は施設担当者のみですのでご了承ください。</li>
            <li class="text-teal-600">ご希望の求人がありましたら、掲示板の詳細からLINEのQRコード読み取り、またはメールで問い合わせを行い、施設担当者と直接やりとりを行ってください。</li>
            <li class="text-teal-600">報酬は直接勤務した施設より受け取ってください</li>
            <li class="text-teal-600">不安な事や気になる事があれば、すぐにほいみん事務局へご連絡ください。</li>
            <li class="text-teal-600">ぜひ副業を楽しんで活躍してください♪</li>
        </ul>
    </div>
{{--     
    <div class="max-w-lg mx-auto mt-10">
        <div class="p-5 text-white bg-gray-800 rounded-t-lg">
            <h3 class="text-xl font-semibold text-center">ケアクルーの皆様へ【ルールブック】</h3>
        </div>
        <ul class="bg-white divide-y divide-gray-300 rounded-b-lg">
            <li class="p-3 hover:bg-gray-50">ケアクルーの方は求人の新規作成は出来ませんのでご注意下さい。</li>
            <li class="p-3 hover:bg-gray-50">求人投稿の権限は施設担当者のみですのでご了承ください。</li>
            <li class="p-3 hover:bg-gray-50">ご希望の求人がありましたら、LINEのQRコード読み取り、またはメールで問い合わせを行ってください。</li>
            <li class="p-3 hover:bg-gray-50">報酬は直接勤務した施設より受け取ってください</li>
            <li class="p-3 hover:bg-gray-50">不安な事や気になる事があれば、すぐにほいみん事務局へご連絡ください。</li>
            <li class="p-3 hover:bg-gray-50">ぜひ副業を楽しんで活躍してください♪</li>
        </ul>
    </div>
     --}}



    </p>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            投稿フォーム
        </h2>
    </x-slot>

    <div class="w-3/4 px-6 mx-auto">
        @if (session('message'))
        <div class="font-bold text-red-600">
            {{ session('message') }}
        </div>
        @endif
        @foreach ($posts as $post )
        <div class="p-8 mt-4 bg-white rounded-2xl">

        {{-- 修正部分 --}}
        <div class="flex">
            {{-- <div class="w-12 h-12 rounded-full">
            <!-- アバター表示 -->
            <img src="{{asset('storage/avatar/'.($post->user->avatar??'user_default.jpg'))}}" class="rounded-full">
            </div> --}}
            <h1 class="pt-4 text-lg font-semibold text-gray-700 cursor-pointer hover:underline">
            <a href="{{route('post.show', $post)}}" class="text-blue-700">施設名：{{ $post->title }}</a>
            </h1>
        </div>
        {{-- 修正部分ここまで --}}
            <hr class="w-full">
            <p class="p-4 mt-4">
                {{Str::limit($post->body, 100, '...')}}
            </p>
            <div class="p-4 text-sm font-semibold">
                <p>
                    {{ $post->created_at }} / {{ $post->user->name??'削除されたユーザー' }}
                </p>
            </div>
             {{-- 追加部分 --}}
             <hr class="w-full mb-2">
             @if ($post->comments->count())
             <span class="badge">
                 問い合わせ {{$post->comments->count()}}件
             </span>
             @else
             <span>問い合わせはまだありません。</span>
             @endif
             <a href="{{route('post.show', $post)}}" style="color:white;">
                <div class="flex justify-end mr-4">
                    {{-- 右端にボタンがくっついて寄らない --}}
                    <x-primary-button class="mr-4 ">詳細</x-primary-button>
                </div>
             </a>
        </div>
        @endforeach
    </div>
</x-app-layout>

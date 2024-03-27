<x-app-layout>
    　　　　　{{ Auth::user()->name }} さん　こんにちは
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

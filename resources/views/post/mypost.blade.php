<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            自園のみの投稿
        </h2>
    </x-slot>

    <div class="w-3/4 px-6 mx-auto">
        @if (session('message'))
        <div class="font-bold text-red-600">
            {{ session('message') }}
        </div>
        @else
            @if (count($posts) == 0)
            <p class="mt-4">
                求人はありません
            </p>
            @else
                @foreach ($posts as $post)
                <div class="p-8 mt-4 bg-white rounded-2xl">

                    <h1 class="p-4 font-semibold text-blue-600 test-lg">
                        施設名：
                        <a href="{{ route('post.show', $post) }}" class="text-blue-600">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <hr class="w-full">
                    <p class="p-4 mt-4">
                        {{ Str::limit($post->body, 100, '...') }}
                    </p>
                    <div class="p-4 text-sm font-semibold">
                        <p>
                            {{ $post->created_at }} / {{ $post->user->name ?? '削除されたユーザー'}}
                        </p>
                    </div>
                    <hr class="w-full mb-2">
                    @if ($post->comments->count())
                        <span class="ml-4 badge">
                            問い合わせ件数 {{$post->comments->count()}}件
                        </span>
                    @else
                        <div class="ml-4">
                        <span>問い合わせはまだありません。</span>
                        </div>
                    @endif
                    {{-- <a href="{{ route('post.show', $post) }}" style="color:white;">
                        <div class="flex justify-end mr-4">
                            <x-primary-button class="mr-4">問い合わせする</x-primary-button>
                            <x-primary-button class="mb-12 mr-4 text-white bg-green-600 hover:bg-green-700">メールで問い合わせる</x-primary-button>
                        </div>
                    </a> --}}
                </div>
                @endforeach
            @endif
        @endif
    </div>
</x-app-layout>

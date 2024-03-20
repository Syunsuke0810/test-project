<x-app-layout>
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
        @else
            @if (count($comments) == 0)
            <p class="mt-4">
                あなたはまだ投稿していません
            </p>
            @else
                @foreach ($comments->unique('post_id') as $comment)
                @php
                    $post=$comment->post;
                @endphp
                <div class="p-8 mt-4 bg-white rounded-2xl">
                    <h1 class="p-4 font-semibold test-lg">
                        件名：
                        {{-- "件名がCSS効かず全然青くならない" --}}
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
                            {{ $post->created_at }} / {{ $post->user->name ?? '削除されたユーザー' }}
                        </p>
                    </div>
                    {{-- 追加部分 --}}
                    <hr class="w-full mb-2">
                    @if ($post->comments->count())
                        <span class="ml-4 badge">
                            問い合わせ {{$post->comments->count()}}件
                        </span>
                    @else
                        <div class="ml-4">
                        <span>問い合わせはまだありません。</span>
                        </div>
                    @endif
                    <a href="{{ route('post.show', $post) }}" style="color:white;">
                        <div class="flex justify-end mr-4">
                            {{-- 全然mrが効かないで右端に寄っている --}}
                            <x-primary-button class="mr-4">問い合わせする</x-primary-button>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif {{-- この @endif が追加された部分 --}}
        @endif
    </div>
</x-app-layout>

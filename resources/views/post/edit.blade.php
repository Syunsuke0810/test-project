<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            投稿の編集画面
        </h2>
    </x-slot>

    <div class="px-6 mx-auto max-w-7xl">
        @if (session('message'))
        <div class="font-bold text-red-600">
            {{ session('message') }}
        </div>

        @endif
        <form method="post" action="{{ route('post.update',$post) }}">
            @csrf
            @method('patch')
            <div class="mt-8">
                <div class="flex flex-col w-full">
                    <label for="title" class="mt-4 font-semibold">件名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                        <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title" value="{{old('title', $post->title)}}" placeholder="Enter Title">
                </div>
            </div>

            <div class="flex flex-col w-full mt-4">
                <label for="body" class="font-semibold">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2"/>
                <textarea name="body" class="w-full py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="5">{{ old('body',$post->body) }}</textarea>
            </div>

            {{-- <div class="flex flex-col w-full">
                <label for="image" class="mt-4 font-semibold leading-none">LINE QRコード</label>
                <div>
                    <input id="image" type="file" name="image">
                </div>
            </div> --}}

            <div class="flex flex-col w-full">
                @if($post->image)
                    <div>
                        (画像ファイル：{{$post->image}})
                    </div>
                    <img src="{{ asset('storage/images/'.$post->image)}}" class="mx-auto" style="height:300px;">
                @endif
                <label for="image" class="mt-4 font-semibold leading-none">新しいQRコード </label>
                <div>
                    <input id="image" type="file" name="image">
                </div>
            </div>
            
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            個別表示
        </h2>
    </x-slot>

    <div class="px-6 mx-auto max-w-7xl">
        <div class="w-full bg-white rounded-2xl">
                <div class="p-4 mt-4">
                <h1 class="text-lg font-semibold">
                {{ $post->title }}
                </h1>

                <div class="flex text-right">
                    @can('update', $post)
                    <a href="{{ route('post.edit',$post) }}" class="flex-1 mr-1">
                    <x-primary-button>
                        編集
                    </x-primary-button>
                    </a>
                    @endcan
                    @can('delete', $post)
                    <form method="post" action="{{ route('post.destroy',$post) }}" class="flex-2">
                    @csrf
                    @method('delete')
                    {{-- 本当に削除しますか？が表示されない --}}
                    <x-primary-button  class="bg-red-500 flex-text-right" onClick="return confirm('本当に削除しますか？');">
                    消すよ
                    </x-primary-button>
                    </form>
                    @endcan
                </div>

                    <hr class="w-full">
                    <p class="mt-4 whitespace-pre-line">
                    {{ $post->body }}
                    </p>

                    {{-- <p class="py-4 mt-4 text-gray-600">{{$post->body}}</p> --}}
                        @if($post->image)
                            <div>
                                (画像ファイル：{{$post->image}})
                            </div>
                            <img src="{{ asset('storage/images/'.$post->image)}}" class="mx-auto" style="height:300px;">
                        @endif

                 <div class="flex justify-end w-full text-sm font-semibold">
                    <p>  {{ $post->user->name??'削除されたユーザー'}}　/　{{ $post->created_at }} </p>
                 </div>
            </div>
        </div>


        @foreach ($post->comments as $comment)
        <div class="w-full px-10 py-2 mt-8 whitespace-pre-line bg-white shadow-lg rounded-2xl">
            {{$comment->body}}
            <div class="flex flex-row-reverse text-sm font-semibold">
                <p> {{ $comment->user->name??'削除されたユーザー' }} • {{$comment->created_at->diffForHumans()}}</p>
            </div>
        </div>
        @endforeach

        {{-- 追加部分 --}}
        {{-- cssが適用されない --}}

                <div class="mt-4 mb-12 ">
                <form method="post" action="{{route('comment.store')}}">
                @csrf
                <input type="hidden" name='post_id' value="{{$post->id}}">
                <textarea name="body" class="w-full px-4 py-4 mt-4 transition duration-200 bg-white border-none rounded-lg shadow-lg hover:shadow-2xl" id="body" cols="30" rows="3" placeholder="コメントを入力してください">{{old('body')}}</textarea>
                </div>
                <div class="flex justify-end">
                <x-primary-button class="mb-12 mr-4 ">コメントする</x-primary-button>
                </div>
                </form>
        </div>
        {{-- 追加部分終わり --}}
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            求人情報の新規作成
        </h2>

        <x-validation-errors class="mb-4" :errors="$errors" />

        <x-message :message="session('message')" />
    </x-slot>

    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="items-center mt-8 md:flex">
                    <div class="flex flex-col w-full">
                    <label for="body" class="mt-4 font-semibold leading-none">施設名</label>
                    <input type="text" name="title" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="title" value="{{old('title')}}" placeholder="Enter Title">
                    </div>
                </div>

                <div class="flex flex-col w-full">
                    <label for="body" class="mt-4 font-semibold leading-none">求人情報</label>
                    <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('body', "施設住所：\n募集時間：\n必要資格：\n時　　給：")}}</textarea>
                </div>


                <div class="flex flex-col w-full">
                    <label for="image" class="mt-4 font-semibold leading-none">LINE QRコード</label>
                    <div>
                    <input id="image" type="file" name="image">
                    </div>
                </div>

                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>

            </form>
        </div>
    </div>
</x-app-layout>

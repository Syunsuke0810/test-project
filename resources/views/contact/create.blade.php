<x-guest-layout>

    <div class="h-screen px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-yellow-50">
        <div class="mx-4 sm:p-8">
            <h1 class="text-xl font-semibold text-gray-700 cursor-pointer hover:underline">
                お問い合わせ
            </h1>
            <x-validation-errors class="mb-4" :errors="$errors" />
            <x-message :message="session('message')" />

            <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="items-center mt-8 md:flex">
                    <div class="flex flex-col w-full">
                        <label for="title" class="mt-4 font-semibold leading-none">件名</label>
                        <input type="text" name="title" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="title" value="{{old('title')}}" placeholder="Enter Title">
                    </div>
                </div>

                <div class="flex flex-col w-full">
                    <label for="body" class="mt-4 font-semibold leading-none">本文</label>
                    <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('body')}}</textarea>
                </div>

                <div class="items-center md:flex">
                    <div class="flex flex-col w-full">
                        <label for="email" class="mt-4 font-semibold leading-none">メールアドレス</label>
                        <input type="text" name="email" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="email" value="{{old('email')}}" placeholder="Enter Email">
                    </div>
                </div>
                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>

            </form>
        </div>
    </div>
</x-guest-layout>

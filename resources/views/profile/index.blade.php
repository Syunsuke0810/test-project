<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            ユーザー一覧
        </h2>
        <x-message :message="session('message')" />
    </x-slot>

    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="my-6">
            <table class="w-full mt-8 text-left border-collapse">
                <tr class="bg-green-600">
                    <th class="p-3 text-left text-white">＃</th>
                    <th class="p-3 text-left text-white">名前</th>
                    <th class="p-3 text-left text-white">Email</th>
                    <th class="p-3 text-left text-white">アバター</th>
                    <th class="p-3 text-left text-white">編集</th>
                    <th class="p-3 text-left text-white">削除</th>
                </tr>
                @foreach($users as $user)
                <tr class="bg-white">
                    <td class="p-3 border border-gray-light hover:bg-gray-100">{{$user->id}}</td>
                    <td class="p-3 border border-gray-light hover:bg-gray-100">{{$user->name}}</td>
                    <td class="p-3 border border-gray-light hover:bg-gray-100">{{$user->email}}</td>
                    <td class="p-3 border border-gray-light hover:bg-gray-100">
                        <div class="w-12 h-12 rounded-full">
                            <img src="{{asset('storage/avatar/'.($user->avatar??'user_default.jpg'))}}">
                        </div>
                    </td>
                    <td class="p-3 border border-gray-light hover:bg-gray-100">
                        <a href="{{route('profile.adedit', $user)}}"><x-primary-button class="bg-teal-700">編集</x-primary-button></a>
                    </td>
                    <td class="p-3 border border-gray-light hover:bg-gray-100">
                        <form method="post" action="{{route('profile.addestroy', $user)}}">
                            @csrf
                            @method('delete')
                            <x-primary-button class="bg-red-700" onClick="return confirm('本当に削除しますか？');">削除</x-primary-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
         </div>
    </div>
</x-app-layout>

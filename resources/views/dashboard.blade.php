<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <p>
        　　　{{ Auth::user()->name }} さん　こんにちは
    </p>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    <x-primary-button>
                        ボタン
                    </x-primary-button>
                    <x-primary-button>
                        ボタン
                    </x-primary-button>
                    <x-danger-button>
                        ボタン
                    </x-danger-button>
                    <x-secondary-button>
                        ボタン
                    </x-secondary-button>
                    <x-dropdown-link>
                        ボタン
                    </x-dropdown-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

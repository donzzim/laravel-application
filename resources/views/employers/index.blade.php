{{-- resources/views/employers.blade.php --}}
<x-layout>
    <x-slot:heading>
        Employers
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($employers as $employer)
            <a class="bg-white rounded-lg p-6 shadow-md min-h-48 transition transform hover:scale-105 duration-150 ease-in-out"
                href="/employers/{{ $employer['id'] }}">
                <h2 class="text-xl text-right font-bold mb-2 pb-1 pr-1 text-gray-800 border-b-2 border-blue-500">
                    {{ $employer['id'] }}
                </h2>
                <p class="text-gray-600">{{ $employer['name'] }}</p>
            </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $employers->links() }}
    </div>
</x-layout>

<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="flex justify-end mb-2">
        <x-button href="/jobs/create">Create Job</x-button>
    </div>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
                class="block px-4 py-6 border border-gray-300 rounded-lg mb-4 hover:bg-gray-100">
                {{-- O valor de $job['title'] e $job['salary'] será exibido --}}
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>

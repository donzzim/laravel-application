<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job['title'] }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf <!-- Proteção contra CSRF , gera um input escondido-->
        @method('PATCH')
        <!-- HTML forms só suportam GET e POST, então usamos esse truque para simular outros verbos HTTP como PATCH, PUT, DELETE -->

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-400 focus-within:border-indigo-400">
                                <input id="title" type="text" name="title"
                                    class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Shift Leader" value="{{ $job->title }}" required />
                            </div>

                            @error('title')
                                <p class="text-sm text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:ring-2 focus-within:ring-indigo-400 focus-within:border-indigo-400">
                                <input id="salary" type="text" name="salary"
                                    class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="$50,000 Per Year" value="{{ $job->salary }}" required />
                            </div>

                            @error('salary')
                                <p class="text-sm text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button type="submit"
                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                    form="delete-form">Delete</button>
            </div>

            <div class="flex items-center justify-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>

    <form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>


</x-layout>

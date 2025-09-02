{{-- filepath: c:\dev\laravel-application\laravel-app\resources\views\home.blade.php --}}
<x-layout>
    <x-slot:heading>
        Welcome
    </x-slot:heading>

    <div class="flex flex-col items-center justify-center min-h-[60vh]">
        <div class="bg-white rounded-xl shadow-lg p-10 max-w-xl w-full text-center">
            <h1 class="text-3xl font-bold text-blue-700 mb-4">Work Administration</h1>
            <p class="text-gray-600 mb-8">
                Explore job openings, submit your resume, and connect with top employers in the market.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('jobs.index') }}"
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">
                    Jobs
                </a>
                <a href="{{ route('employers.index') }}"
                    class="px-6 py-3 bg-gray-200 text-blue-700 rounded-lg font-semibold shadow hover:bg-gray-300 transition">
                    Employers
                </a>
            </div>
        </div>
    </div>
</x-layout>

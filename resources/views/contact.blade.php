{{-- filepath: c:\dev\laravel-application\laravel-app\resources\views\contact.blade.php --}}
<x-layout>
    <x-slot:heading>
        Contact
    </x-slot:heading>

    <div class="flex flex-col items-center justify-center min-h-[60vh]">
        <div class="bg-white rounded-xl shadow-lg p-10 max-w-lg w-full text-center">
            <h1 class="text-3xl font-bold text-blue-700 mb-4">Send your Feedback</h1>
            <p class="text-gray-600 mb-6">
                If you have any questions or need support, please fill out the form below and we will get back to you
                soon.
            </p>
            <form class="space-y-4">
                <input type="text" placeholder="Your Name"
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                <input type="email" placeholder="Your Email"
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                <textarea placeholder="Your Message" rows="4"
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</x-layout>

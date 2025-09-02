<a
    {{ $attributes->merge(['class' => 'relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md leading-5 hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150']) }}>
    {{ $slot }} </a>

{{-- o merge serve para juntar mais classes que vc escrever ou até msm sobrescrever uma classe (Ex: text-blue-800 vai sobrescrever text-gray-700) --}}

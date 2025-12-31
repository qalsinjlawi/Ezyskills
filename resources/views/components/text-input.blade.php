@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full px-4 py-3 border-gray-300 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 focus:ring-2 rounded-lg shadow-sm transition duration-150 ease-in-out']) }}>
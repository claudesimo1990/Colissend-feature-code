<div class="border-b border-gray-200 bg-white px-4 py-2 sm:px-6 my-10">
    <div class="-ml-4 border-b border-gray-200 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
        <div class="ml-4 mt-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $post->user->firstname }}</h3>
                    <p class="text-sm text-gray-500">
                        <a href="#">{{ $post->user->email }}</a>
                    </p>
                </div>
            </div>
        </div>
        <div>
            <span class="text-xl font-medium leading-6 text-gray-900">{{ $post->kilo }}Kg a {{ $post->price }}Euro/Kg</span>
        </div>
        <div class="ml-4 mt-4 flex flex-shrink-0">
            <button type="button" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                </svg>
                <span>Details</span>
            </button>
        </div>
    </div>
    <ul role="list" class="divide-y divide-gray-200">
        <li>
            <div class="px-4 py-4 sm:px-4">
                <div class="flex items-center justify-between">
                    <div class="truncate text-sm font-medium text-indigo-600">Depart</div>
                    <div class="ml-2 flex flex-shrink-0">
                            <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/map-pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $post->from }}
                            </span>
                    </div>
                </div>
                <div class="mt-2 flex justify-between">
                    <div class="sm:flex">
                        <div class="flex items-center text-sm text-gray-500">
                            Date
                        </div>
                    </div>
                    <div class="ml-2 flex items-center text-sm text-gray-500">
                        {{ $post->dateFrom }}
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="px-4 py-4 sm:px-4">
                <div class="flex items-center justify-between">
                    <div class="truncate text-sm font-medium text-indigo-600">Arrive</div>
                    <div class="ml-2 flex flex-shrink-0">
                            <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/map-pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $post->to }}
                            </span>
                    </div>
                </div>
                <div class="mt-1 flex justify-between">
                    <div class="sm:flex">
                        <div class="flex items-center text-sm text-gray-500">
                            Date
                        </div>
                    </div>
                    <div class="ml-2 flex items-center text-sm text-gray-500">
                        {{ $post->dateTo }}
                    </div>
                </div>
            </div>
        </li>

        <li>
            <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">Obajects acceptes: </span>
            <span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">Badge</span>
            <span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">Badge</span>
            <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">Badge</span>
            <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">Badge</span>
            <span class="inline-flex items-center rounded-full bg-indigo-100 px-2.5 py-0.5 text-xs font-medium text-indigo-800">Badge</span>
            <span class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800">Badge</span>
            <span class="inline-flex items-center rounded-full bg-pink-100 px-2.5 py-0.5 text-xs font-medium text-pink-800">Badge</span>
        </li>
    </ul>
</div>

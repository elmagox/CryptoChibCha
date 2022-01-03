<div>
    <div class="text-bold text-lg my-4">My Preferred Coins</div>
    <div class="flex flex-wrap justify-content-between">
        @foreach($preferreds as $prefer)
            <div wire:click="addOrRemovePreferred({{$prefer->id}})" class="cursor-pointer px-4 py-5 mb-4 bg-white shadow-lg rounded-lg mx-3 flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-sm"
                             src="{{$prefer->image}}"
                             alt="{{$prefer->alias}}">
                    </div>
                    <div>
                        <div class="mx-3 text-lg uppercase">
                            {{$prefer->alias}}
                        </div>
                        <div class="mx-3 text-xs">
                            {{$prefer->name}}
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
    <div class="flex items-center">
        <div class="text-bold text-lg my-4 mr-4">List Top 100</div>
        <input type="text" wire:model="search" class="form-input px-3 py-1 rounded-lg mr-4" placeholder="Search crypto...">
        <button class="bg-gray-500 text-white rounded-lg px-3 py-1">Create a crypto</button>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($cryptocurrencies as $cryto)
                        <tr >
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-sm"
                                         src="{{$cryto->image}}"
                                         alt="{{$cryto->alias}}">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="bold text-gray-900">
                                            {{$cryto->name}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 uppercase">
                                            {{$cryto->alias}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span wire:click="addOrRemovePreferred({{$cryto->id}})" class="cursor-pointer">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{$cryto->is_prefer ? "text-yellow-300" :"text-gray-300" }} " fill="currentColor" viewBox="0 0 24 24">
                                      <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                   </svg>
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 cursor-pointer" wire:click="showModal({{$cryto->id}})">
                                            Edit
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


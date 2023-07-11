<div>
    <div class="sm:block">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8  m-5">
            <div class="relative w-full max-w-full mb-5">
                <h3 class="font-semibold text-2xl text-gray-900">List of Facilities</h3>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="md:col-span-1 col-span-3">
                    <div class="block relative">
                        <select wire:model.lazy="status"
                                class="appearance-none  h-full border block rounded w-full bg-white text-gray-700 py-2 px-5 pr-8 leading-tight focus:outline-none focus:bg-white">
                                <option value="all">All</option>
                                <option value="1">Open</option>
                                <option value="0">Closed</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div> 
                </div>
                <div class="col-end-6">
                    <div class="md:block relative">
                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                <path
                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                </path>
                            </svg>
                        </span>
                        <input wire:model.lazy="search" placeholder="Search"
                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-200  border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white  focus:text-gray-700 focus:outline-none" 
                            type="search"/>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-auto sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Facilities
                                </th>
                                <th class="md:px-20 px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($facilities as $fac)
                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 truncate whitespace-nowrap text-sm text-gray-900">
                                        <div>
                                            <button class="text-gray-500 font-bold truncate group-hover:text-gray-900">
                                                {{$fac->name}}
                                            </button>
                                        </div>
                                    </td>
                                    <td class="max-w-0 w-full md:px-20 px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
                                        <span class="{{$fac->isOpen ? 'bg-teal-100 text-teal-800' : 'bg-red-100 text-red-800'}}inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium capitalize">
                                            {{$fac->isOpen ? 'Open' : 'Closed'}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <nav class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6" aria-label="Pagination">
                            {{ $facilities->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
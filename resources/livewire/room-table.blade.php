<div>
        @include('backend.admin.users.header')

    <div class="overflow-x-hidden h-30">
        <div class="container mx-auto px-2 sm:px-10">

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 min-w-full" x-data="{show: true}">
            <div class="card min-w-full shadow-md rounded-xl overflow-y-hidden" style="border-radius: 0.5cm">
                <div class="card-header min-w-full border-b-2 border-gray-200 h-14" x-data="{open: false}">
                    <x-jambasangsang.per-page :isEnable="$isPerPageEnabled"/>
                    <x-jambasangsang.shorting :isEnable="$isSortingEnabled"/>

                    @if ($isSearchEnabled)
                        <div class="btn-group float-right">
                            <x-jambasangsang.search-box type="search" name="search" id="search"
                                class="" placeholder="search..." />
                        </div>
                    @endif

                    @if ($isListGridEnabled)
                        <x-table-toggle />
                    @endif

                </div>

                @if (count($rooms) > 0)

                    <x-jambasangsang.table :theaders="$theaders" :data="$checked">
                        @foreach ($rooms as $room)
                            <tr class="border-b border-gray-200">

                                <x-table.td>
                                    <x-fields.checkbox :data="$room" />
                                </x-table.td>

                                ........

                                <x-table.td>
                                    <div class="flex items-center justify-center gap-4">
                                        <x-jambasangsang.link href="#" class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-500/5 focus:outline-none  text-primary-500 focus:bg-primary-500/10 -my-2 ">
                                            <span class="sr-only">
                                               {{__('Edit')}}
                                            </span>

                                            <svg class="w-5 h-5 -icon" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg>
                                        </x-jambasangsang.link>

                                        <button type="button"
                                            class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-500/5 focus:outline-none text-danger-500 focus:bg-danger-500/10 -my-2"
                                            wire:click="mountTableAction('delete', '2')">
                                            <span class="sr-only">
                                               {{__('Delete')}}
                                            </span>

                                            <svg class="w-5 h-5 -icon" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>

                                    </div>
                               </x-table.td>

                            </tr>
                        @endforeach
                    </x-jambasangsang.table>

                    {{--  Here is the Image Grid Section --}}
                    <x-grid :data="$rooms" />

                @else
                    <x-not-found :data="$role"></x-not-found>
                @endif
                <div class="card-footer w-100 h-10 mb-3">
                   {{ $rooms->links() }}
                </div>
            </div>
        </div>

    </div>

    </div>
</div>

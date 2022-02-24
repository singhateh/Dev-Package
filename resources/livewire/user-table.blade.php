<div>
    @include('backend.admin.users.header')
    <div class="overflow-x-hidden h-30">
        <div class="container mx-auto px-2 sm:px-10">
            @if (in_array($currentUrl, ['users.index']))
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="card min-w-full shadow-md rounded-xl overflow-auto" style="border-radius: 0.5cm">
                        <div class="card-header h-14">
                        </div>
                        <x-not-found>
                            @if (empty($role))
                                No {{ Str::ucfirst(str_replace('-', ' ', $role)) ?? '' }} found
                            @else
                                Select a Tab!
                            @endif
                        </x-not-found>
                    </div>
                </div>

            @else
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
                        @if (count($users) > 0)
                            <x-jambasangsang.table :theaders="$theaders" :tbodys="$users"
                                :data="$checked">
                                @foreach ($users as $user)
                                    <tr class="border-b border-gray-200">
                                        <x-table.td>
                                            <x-fields.checkbox :user="$user" />

                                        </x-table.td>

                                        <x-table.td>
                                            <div class="flex">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                        alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $user->name }}
                                                    </p>
                                                    <p class="text-gray-600 whitespace-no-wrap">
                                                        @foreach ($user->getRoleNames() as $role)
                                                            {{ Str::ucfirst(str_replace('-', ' ', $role)) }}
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </x-table.td>

                                        <x-table.td>
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                                        </x-table.td>

                                        <x-table.td>
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $user->phone ?? '+190984847584' }}</p>
                                        </x-table.td>

                                        <td class="1px-3 py-2 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $user->created_at->format('Y/d/m') ?? '-' }}</p>
                                            <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p>
                                        </td>

                                        <td class="1px-3 py-2 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-2 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative">Paid</span>
                                            </span>
                                        </td>

                                        <td class="px-4 border-b py-3 whitespace-nowrap ">
                                            <div class="flex items-center justify-center gap-4">
                                                <a class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-500/5 focus:outline-none  text-primary-500 focus:bg-primary-500/10 -my-2 "
                                                    href="http://127.0.0.1:8000/admin/hr/users/2/edit">
                                                    <span class="sr-only">
                                                        Edit User
                                                    </span>

                                                    <svg class="w-5 h-5 -icon" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg> </a>

                                                <button type="button"
                                                    class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-500/5 focus:outline-none text-danger-500 focus:bg-danger-500/10 -my-2"
                                                    wire:click="mountTableAction('delete', '2')">
                                                    <span class="sr-only">
                                                        Delete User
                                                    </span>

                                                    <svg class="w-5 h-5 -icon" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg> </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </x-jambasangsang.table>
                            <x-grid :data="$users" />
                        @else
                            <x-not-found :data="$role"></x-not-found>
                        @endif
                        <div class="card-footer w-100 h-10 mb-3">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>

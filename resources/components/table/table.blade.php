<table class="min-w-full leading-normal" x-show.transition="show">
    <thead class="h-10">
        <tr
            class="px-0 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider h-5">
                <x-table.th type="th"><x-fields.checkbox-all /></x-table.th>
            <th
                class="1px-3 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Name
            </th>
            <th
                class="1px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Email
            </th>
            <th
                class="1px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Phone
            </th>
            <th
                class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Joined
            </th>
            <th
                class="1px-3 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Status
            </th>
            <th class="1px-5 py-3 border-gray-200 bg-gray-100"></th>
        </tr>
    </thead>
    <tbody>
        @if ($checked)
            <tr class="bg-teal-500" x-show.transition="open">
                <td colspan="12">
                    @if ($checked)
                    <span class="btn-group float-right">
                       <x-bulk-actions></x-bulk-actions>
                    </span>
                @endif
                    <span
                        class="text-white  px-5 inline-flex justify-between items-center  px-2 py-2 rounded-lg cursor-pointer">
                        {{ count($checked) . ' ' . Str::plural('Row', count($checked)) . ' Selected' }}</span>
                </td>
            </tr>
        @endif
        @foreach ($data as $user)
            <tr class="border-b border-gray-200">
                  <x-table.td :user="$user"/>

                <td class="1px-3 py-2 border-b border-gray-200 bg-white text-sm">
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
                </td>
                <td class="1px-5 py-2 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                </td>
                <td class="px-3 py-2 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{ $user->phone ?? '+190984847584' }}</p>
                </td>
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

    </tbody>
</table>

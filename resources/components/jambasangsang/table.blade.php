@props(['data'])
<table class="min-w-full leading-normal" x-show.transition="show">
    <thead class="h-10">
        <tr
            class="px-0 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider h-5">
            <x-table.th type="th">
                <x-fields.checkbox-all />
            </x-table.th>

            @foreach ($theaders as $header)
            <x-table.th type="th" class="{{ $header['classes'] }}">
                    {{ $header['name'] }}
            </x-table.th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @if ($data)
            <tr class="bg-teal-500" x-show.transition="open">
                <td colspan="12">
                    @if ($data)
                        <span class="btn-group float-right">
                            <x-bulk-actions></x-bulk-actions>
                        </span>
                    @endif
                    <span
                        class="text-white  px-5 inline-flex justify-between items-center  px-2 py-2 rounded-lg cursor-pointer">
                        {{ count($data) . ' ' . Str::plural('Row', count($data)) . ' Selected' }}</span>
                </td>
            </tr>
        @endif

        {{ $slot }}

    </tbody>
</table>

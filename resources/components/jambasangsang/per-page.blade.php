@props(['isEnable'])
@if($isEnable)
<div class="flex items-center justify-center float-left pr-2">
    <div
        class="flex items-center space-x-2 rtl:space-x-reverse filament-tables-pagination-records-per-page-selector">
        <label for="perPage" class="text-sm font-medium">
            per page
        </label>
        <x-jambasangsang.select-box wire="perPage" name="" class="h-8 text-sm pr-8 pl-1 text-center leading-none transition duration-75 border-gray-200 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600" >
            @foreach (App\Jambasangsang\Helper::getPerPageNumber() as  $key =>  $perpage)
            <option value="{{ $key }}">{{ $loop->first ? $perpage : $key }}</option>
            @endforeach
        </x-jambasangsang.select-box>
    </div>
</div>
@endif

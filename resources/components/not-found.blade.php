<div class="flex items-center justify-center p-4">
    <div
        class="flex flex-1 flex-col items-center justify-center p-6 mx-auto space-y-6 text-center bg-white filament-tables-empty-state">
            <x-jambasangsang.image style="height: 8rem" src="{{ asset('jambasangsang/assets/img/no-record-found.png') }}" />

            <div class="max-w-xs space-y-1">
            <h2 class="text-xl font-bold tracking-tight filament-tables-empty-state-heading">
                {{ $slot }}
            </h2>

            <p class="text-sm font-medium text-gray-500 filament-tables-empty-state-description">

            </p>
        </div>

    </div>
</div>

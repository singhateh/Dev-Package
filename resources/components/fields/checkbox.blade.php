@props(['data'])
<div>
    <label
        class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
        <input type="checkbox" value="{{ $data->id ?? '' }}" wire:model="checked"
            class="form-checkbox rounded-lg focus:outline-none focus:shadow-outline">
    </label>
</div>

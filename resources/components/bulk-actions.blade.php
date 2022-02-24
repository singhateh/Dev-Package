@props(['data'])

<ul class="pagination px-3 border-0 justify-center">
    <li class="page-item disabled">
        <a class="page-link bg-transparent border-0 text-white" href="#" tabindex="-1">Bulk Actions</a>
    </li>
    <li class="page-item bg-green-600 hover:bg-green-900">
        <a class="page-link bg-green-600 border-0 hover:bg-green-900 text-white" wire:click.prevent="ConfirmBulkDelete"
            href="#">
            Export <span class="fa fa-file-excel-o"></span></a>
    </li>
    <li class="page-item ">
        <a class="page-link bg-red-600 border-0 hover:bg-red-900 text-white" wire:click.prevent="ConfirmBulkDelete"
            href="#">
            Delete <span class="fa fa-trash"></span></a>
    </li>
    <li class="page-item bg-orange-600 hover:bg-orange-900">
        <a class="page-link bg-orange-600  border-0 hover:bg-orange-900 text-white"
            wire:click.prevent="ConfirmBulkDelete" href="#">
            Archived <span class="fa fa-archive"></span></a>
    </li>
</ul>

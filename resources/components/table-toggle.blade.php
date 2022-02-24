<div class="col-auto float-right ml-auto">
    <div class="view-icons">
        <a type="button" x-on:click.prevent="show = !show" x-show.transition="show"
            class="mx-1 px-2 py-1 hover:bg-indigo-900 hover:text-white" class="grid-view btn btn-link active"><i
                class="fa fa-th"></i></a>
        <a type="button" x-on:click.prevent="show = !show" style="display: none" x-show.transition="!show"
            class="mx-1 px-2 py-1 hover:bg-indigo-900 hover:text-white" class="list-view btn btn-link"><i
                class="fa fa-bars"></i></a>
    </div>
</div>

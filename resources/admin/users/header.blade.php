

<ul class="nav nav-tabs nav-tabs-solid mb-2 bg-white" id="myHeader">
    @foreach (App\Jambasangsang\Helper::getRoles() as $key => $role)
    <li class="nav-item"><a wire:click.prevent="getUserDataByRole('{{ $role->name }}')"
        class="nav-link {{ Str::lower($role->name) == Str::replaceFirst('users.', '', $currentUrl) ? 'active' : '' }}"
        href="#">{{ Str::upper(str_replace('-', ' ', $role->name)) }}</a></li>
    @endforeach
</ul>

{{-- {{ route('users.'.Str::lower($role->name)) }} --}}

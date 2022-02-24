@extends('layouts.app')
@once
@push('page-css')
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('jambasangsang/assets/css/select2.min.css') }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css"> --}}
@endpush
@endonce


@section('content')

<div class="pageContainer">
@includeIf('page-header', ['some' => 'data'])


    @livewire('user-table')
</div>
{{-- @include('backend.admin.users.table') --}}


@endsection

@push('page-script')



@endpush

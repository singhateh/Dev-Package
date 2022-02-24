@extends('layouts.app')
@once
@push('page-css')
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('jambasangsang/assets/css/select2.min.css') }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css"> --}}
@endpush
@endonce


@section('content')

@includeIf('page-header', ['some' => 'data'])

@livewire('test2-table')

@endsection

@push('page-script')



@endpush

@extends('layouts.master')

@push('style')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('content')
    <div class="container mt-3">
        <h1>Belajar CRUD dengan Live Wire</h1>
        
        <div class="row" >
            <div class="col-md-6">
                @livewire('user-create')
            </div>
            <div class="col-md">
                @livewire('user-table')
            </div>
        </div>
       
    
    </div>
    
  
 @endsection
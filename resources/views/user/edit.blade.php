@extends('layouts.master')

@push('style')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('content')
    <div class="container mt-3">
        <h1>Edit Data</h1>
        
        <div class="row" >
            <div class="col-md-6">
                @livewire('user-edit',['users' => $users])
            </div>
        </div>
       
    </div>
    
  
 @endsection
@extends('app')
@section('content')
@component('components.form.post_create_update',[
   'edit' => @$edit,
])
    
@endcomponent

@endsection
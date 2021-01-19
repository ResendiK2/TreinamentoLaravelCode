@extends('admin.layouts.app')

@section('content')
   @component('admin.components.show')
      @slot('title', 'Mostrar ' . $person->name)
      @slot('url', route('people.store'))
      @slot('form')
         @include('admin.people.form')
      @endslot
   @endcomponent

   @push('scripts')
      <script>
         $('.form-control').attr('disabled', 'true');
      </script>
   @endpush
@endsection
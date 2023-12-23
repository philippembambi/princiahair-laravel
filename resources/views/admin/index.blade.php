@extends('admin.layouts.app')

@section('content')
    @component('admin.components.header')
    @endcomponent
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">

                        @if ($component)
                        @component($component, [
                            "categories" =>  $categories
                            ]
                            )
                        @endcomponent                
                      @else
                        @component('admin.components.main')
                        @endcomponent
                      @endif
          
        </div>
    </div>

    @component('admin.components.footer')
    @endcomponent
@endsection

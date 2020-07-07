@extends('layout', [
    'title' => 'Tax calculator form TEST'
])

@section('content')

    <div class="form">

        @foreach ($form_configuration['pages'] as $page)

            <div class="page">
                <img src="{{ $page['bg_image'] }}" class="bg" style="width: {{ $page['width'] }}px">

                @foreach ($page['fields'] as $field_uid => $field)

                    <input 
                        type="number" 
                        id="{{ $field_uid }}" 
                        style="position: absolute; 
                               left: {{ $field['left'] }}px; 
                               top: {{ $field['left'] }}px; 
                               font-size: {{ $field['font-size'] }}px;
                               width: {{ $field['width'] }}px;
                               text-align: {{ $field['text-align'] }};
                               color: {{ $field['color'] }};
                               border:none;" 
                        placeholder="{{ $field['placeholder'] }}" 
                    >

                @endforeach

            </div>

        @endforeach

    </div>
    
@endsection
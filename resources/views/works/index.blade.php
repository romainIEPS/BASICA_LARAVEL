{{-- 
    Variable disponible:
    - $works Array(Work)
--}}
@extends('templates.index')

@section('title')
    Portfolio
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/works/index.js') }}"></script>
@endsection

@section('content')
@extends('templates.partials.public._banner')
@section('bannerTitle')
    Our Portfolio
@endsection


<div class="section">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
                <h2>We are leading company</h2>
                <h3>Specializing in Wordpress Theme Development</h3>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis.
                </p>

            </div>
        </div>
    </div>
</div>

<div class="section" id="test">
    <div class="container">
        <div class="row">
            <ul class="grid cs-style-2" id="works_list">
                @include('works._liste')
            </ul>
        </div>

        @include('works._more_btn')

    </div>
</div>
@endsection
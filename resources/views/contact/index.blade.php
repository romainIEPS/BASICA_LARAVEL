@extends('templates.index')

@section('title')
    Contact
@endsection

@section('content')
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="section section-map">


            <div class="col-sm-12" style="padding:0;">
                <!-- Map -->
                <div id="contact-us-map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10127.427348940084!2d5.6826843!3d50.6111977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d5b3cb7b45da7ab!2sIEPS%20Fl%C3%A9ron!5e0!3m2!1sfr!2sbe!4v1612483182395!5m2!1sfr!2sbe"></iframe>
                    <br />
                    <small>
                        <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10127.427348940084!2d5.6826843!3d50.6111977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d5b3cb7b45da7ab!2sIEPS%20Fl%C3%A9ron!5e0!3m2!1sfr!2sbe!4v1612483182395!5m2!1sfr!2sbe"></a>
                    </small>
                    </iframe>
                </div>
                <!-- End Map -->
            </div>


</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h3>Get in Touch with Us</h3>
            </hr>
            <div class="col-sm-6">
                <!-- Contact Info -->
                <p class="contact-us-details">
                    <b>Address:</b> Rue Charles Deliège 9, 4623 Fléron<br/>
                    <b>Phone:</b> +44 123 654321<br/>
                    <b>Fax:</b> +44 123 654321<br/>
                    <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                </p>
                <!-- End Contact Info -->
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</div>
@endsection
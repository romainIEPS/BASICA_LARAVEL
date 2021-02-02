<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($slides as $slide)
                <div class="item {{ $loop->index === 0?'active':'' }}" style="background-image: url('{{ asset('assets/img/portfolio/' . $slide->image) }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">{{ $slide->title }}</h2>
                                    <p class="animation animated-item-2">{{ Str::limit($slide->content, 200) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->  
            @endforeach    
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->
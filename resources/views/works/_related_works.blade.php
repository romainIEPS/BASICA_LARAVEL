{{-- 
    Variable disponible:
    $relatedWorks Array(Work)    
--}}
<div class="section">
    <div class="container">
        <div class="row">

        <div class="section-title">
        <h1>Similar Works</h1>
        </div>

    <ul class="grid cs-style-2">
        @foreach ($relatedWorks as $relatedWork)
            <div class="col-md-3 col-sm-6">
                <figure>
                    <img src="{{ asset('assets/img/portfolio/' . $relatedWork->image) }}" alt="{{ $relatedWork->title }}">
                    <figcaption>
                        <h3>{{ $relatedWork->title }}</h3>
                        <span>{{ $relatedWork->client->name }}</span>
                        <a href="{{ route('portfolio.show', ['work' => $relatedWork->id, 'slug'=> Str::slug($relatedWork->title, '-')]) }}">Take a look</a>
                    </figcaption>
                </figure>
            </div>
        @endforeach
        
    </ul>
        </div>
    </div>
</div>
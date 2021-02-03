@foreach ($works as $work)
    <div class="col-md-4 col-sm-6">
        <figure>
            <img src="{{ asset('assets/img/portfolio/' . $work->image) }}" alt="{{ $work->title }}">
            <figcaption>
                <h3>{{ $work->title }}</h3>
                <span>{{ $work->client->name }}</span>
                <a href="{{ route('portfolio.show', ['work' => $work->id, 'slug'=> Str::slug($work->title, '-')]) }}">Take a look</a>
            </figcaption>
        </figure>
    </div>
@endforeach
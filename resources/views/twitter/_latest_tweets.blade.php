{{-- 
    Variable disponible:
    $data array(array)    
--}}
        
<!-- Latest News FB -->
<div class="col-sm-6 latest-news">
    <h2>Lastest Twitter News</h2>
        @if(!empty($data))
                @foreach($data as $key => $value)
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="https://twitter.com/RGarcia70075352/status/{{ $value['id'] }}" target="_blank">{{ $value['text'] }}</a></div>
                        <div class="date">{{ \Carbon\Carbon::parse($value['created_at'])->format('d F Y') }}</div>
                        <div class="col-xs-4">
                            @if(!empty($value['extended_entities']['media']))
                                @foreach($value['extended_entities']['media'] as $v)
                                    <img src="{{ $v['media_url_https'] }}" style="width:100px;">
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
        @else
        <div class="row">
            <div class="col-sm-12">
                <div class="caption"><a href="#">There are no data.</a></div>
            </div>
        </div>
        @endif
  <!-- End Featured News -->
</div>
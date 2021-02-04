{{-- 
    Varibale disponible: 
    $tags array(Tag)    
    $workTags Tag
--}}

<!-- Checkbox des tags -->
<div class="form-group">
    @foreach ($tags as $tag)
        <label for="{{ $tag->name }}">{{ $tag->name }}</label>
        <input type="checkbox" id="{{ $tag->name }}" name="tags[]" value="{{ $tag->id }}" {{ in_array($tag->id, $workTags->pluck('id')->toArray()) ?'checked="checked"':'' }}>
    @endforeach
</div>
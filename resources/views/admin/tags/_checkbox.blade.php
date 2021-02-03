{{-- 
    Varibale disponible: 
    $tags array(Tags)    
--}}

<!-- Checkbox des tags -->
<div class="form-group">
    @foreach ($tags as $tag)
        <label for="{{ $tag->name }}">{{ $tag->name }}</label>
        <input type="checkbox" id="{{ $tag->name }}" name="tags[]" value="{{ $tag->id }}">
    @endforeach
  </div>
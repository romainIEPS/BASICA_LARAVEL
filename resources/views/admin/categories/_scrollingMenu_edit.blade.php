{{-- 
    Variable disponible: 
    $categories array(Categorie) 
    $post Post   
--}}

<!-- Menu déroulant dynamique des categories -->
<div class="form-group">
    <label for="categorie">Categories</label>
    <select name="categorie" class="form-control" id="categorie">
      @foreach ($categories as $categorie)      
        <option value="{{ $categorie->id }}" {{ $categorie->id === $post->categorie_id?'selected="selected"':''}}>
            {{ $categorie->name }}
        </option>
      @endforeach
    </select>
  </div>
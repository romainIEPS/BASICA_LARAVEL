{{-- 
  Variable disponible: 
  $categories array(Categorie)  
--}}

<!-- Menu déroulant dynamique des catégories -->
<div class="form-group">
    <label for="categorie">Categories</label>
    <select name="categorie" class="form-control" id="categorie">
      @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">
          {{ $categorie->name }}
        </option>
      @endforeach
    </select>
  </div>
{{-- 
    Variable disponible: 
    $clients array(Client) 
    $work Work   
--}}

<!-- Menu déroulant dynamique des clients -->
<div class="form-group">
    <label for="client">Clients</label>
    <select name="client" class="form-control" id="client">
      @foreach ($clients as $client)      
        <option value="{{ $client->id }}" {{ $client->id === $work->client_id?'selected="selected"':''}}>
            {{ $client->name }}
        </option>
      @endforeach
    </select>
  </div>
@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a voyages</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('voyages.store') }}">
          @csrf
          <div class="form-group">    
              <label for="titre">Titre:</label>
              <input type="text" class="form-control" name="titre"/>
          </div>

          <div class="form-group">
              <label for="destination">Destination:</label>
              <input type="text" class="form-control" name="destination"/>
          </div>

          <div class="form-group">
              <label for="prix">Prx:</label>
              <input type="text" class="form-control" name="prix"/>
          </div>

                        
          <button type="submit" class="btn btn-primary-outline">Add voyages</button>
      </form>
  </div>
</div>
</div>
@endsection
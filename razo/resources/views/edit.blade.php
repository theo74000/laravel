@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update voyage</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('change', ['id'=>$voyages->id])}}">
            @method('PUT') 
            @csrf
            <div class="form-group">

                <label for="titre">Titre:</label>
                <input type="text" class="form-control" name="titre" value={{ $voyages->titre }} />
            </div>

            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" class="form-control" name="destination" value={{ $voyages->destination }} />
            </div>

            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="text" class="form-control" name="prix" value={{ $voyages->prix }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</div>
@endsection
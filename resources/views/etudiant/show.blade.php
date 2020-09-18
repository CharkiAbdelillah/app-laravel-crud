@extends('etudiant.layout')

@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('etudiant.index') }}" class="btn btn-success">Retour</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" height="150;" width="150;"/>
 <h3><strong>Nom : </strong>{{ $data->nom }} </h3>
 <h3><strong>Email : </strong> {{ $data->email }}</h3>
<h3><strong>Branche : </strong> {{ $data->branche }}</h3>
<h3><strong>La date de création : </strong> {{date_format (new DateTime($data->created_at), 'd-m-Y') }} </h3>
</div>
@endsection

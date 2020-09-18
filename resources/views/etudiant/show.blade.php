@extends('etudiant.layout')

@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('etudiant.index') }}" class="btn btn-success">Retour</a>
 </div>
 <br />
 <img src="{{ '/images/'.$data->image }}" class="img-thumbnail" height="150;" width="150;"/>
 <h3><strong>Nom : </strong>{{ $data->nom }} </h3>
 <h3><strong>Genre : </strong>{{ $data->genre }} </h3>
 <h3><strong>Email : </strong> {{ $data->email }}</h3>
<h3><strong>Branche : </strong> {{ $data->branche }}</h3>
<h3><strong>La date de création : </strong> {{date_format (new DateTime($data->created_at), 'd-m-Y') }} </h3>
<!--<?php echo getcwd() . "\n"; ?> hadi bax tat 3rf chemin tat 3awn ila image t3ksat bax t3rf lemplacement -->
</div>
@endsection

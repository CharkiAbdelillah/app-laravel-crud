@extends('etudiant.layout')

@section('content')
<!-- hadi tat gol sir ldik fichier layout ofdik blasa fin drt yeild('content') ktb hadxi -->
<br><br><br>


 @if($errors->any())
<div class="alert alert-danger">
 <strong>Erreur !!! : </strong>
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif

  <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
         <h2>  Modifier les informations : <h2>
       </div>

       <div class="pull-right">
       <a class="btn btn-success" href="{{ route('etudiant.index')}}">Retour</a>
      </div>
      </div>



   <form method="post" action="{{ url('update/etudiant/'.$etudiant->id) }}" enctype="multipart/form-data">
   @csrf 
 <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6>
 <div class="form-group">
   <strong>Nom : </strong>
   <input type="text" name="nom" class="form-control" value="{{$etudiant->nom}}" />
  </div>
 </div>
 
 <div class="col-xs-6 col-sm-6 col-md-6>
   <div class="form-group">
   <strong>Email : </strong>
   <input type="text" name="email" class="form-control" value="{{$etudiant->email}}" /><br>
 </div>
 </div>
<br>
        <div class="col-xs-6 col-sm-6 col-md-6>
   <div class="form-group">
       <strong>Branche : </strong>

 <select name="branche" >
    <option >{{$etudiant->branche}}</option>
    <option value="GI">Génie Informatique</option>
    <option value="TM">Technique de Management</option>
    <option value="GA">Génie Agro-environnement</option>
</select>
      </div>
     </div>
 <div class="col-xs-6 col-sm-6 col-md-6>
   <div class="form-group">
  <strong>Photo : </strong>
   <input type="file" name="image" />
   </div>
 </div>

 <div class="col-xs-6 col-sm-6 col-md-6>
   <div class="form-group">
  <strong>Ancien Photo : </strong>
 <img src="{{ URL::to('/') }}/images/{{ $etudiant->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $etudiant->image }}" /> 
  </div>
 </div>
</div>
<?php   
echo getcwd() . "\n"; 
?> 
<div class="col-xs-6 col-sm-6 col-md-6>
  <div class="form-group">
 <button type="submit" class="btn btn-primary">Ok</button>
 </div>
 </div>
  
</form>

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

      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
         <h2>  Saisir les informations : <h2>
       </div>
       <div class="pull-right">
       <a class="btn btn-primary" href="{{ route('etudiant.index')}}">Retour</a>
      </div>
      </div>

   <form method="post" action={{ route('etudiant.store') }} enctype="multipart/form-data">
  @csrf

  <div class="col-xs-12 col-sm-12 col-md-12>
 <div class="form-group">
   <strong>Nom : </strong>
   <input type="text" name="nom" class="form-control" placeholder="Nom" />
    </div>
  </div>

<div class="col-xs-12 col-sm-12 col-md-12>
 <div class="form-group">
<br> <strong>Genre : </strong>
     <div class="radio">
      <label><input type="radio" name="genre" value="Homme" >Homme</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="genre" value="Femme">Femme</label>
    </div>
    </div>
  </div>

 <div class="col-xs-12 col-sm-12 col-md-12>
   <div class="form-group">
   <strong>Email : </strong>
   <input type="text" name="email" class="form-control" placeholder="Email" /><br>
  </div>
 </div> 
        <div class="col-xs-12 col-sm-12 col-md-12>
   <div class="form-group">
       <strong>Branche : </strong>

 <select name="branche">
    <option value="">--selectionner une option--</option>
    <option value="GI">Génie Informatique</option>
    <option value="TM">Technique de Management</option>
    <option value="GA">Génie Agro-environnement</option>
</select>
      </div>
     </div>

 <div class="col-xs-12 col-sm-12 col-md-12>
   <div class="form-group">
 <br> <strong>Photo : </strong>
   <input type="file" name="image" />
  </div>
 </div>

 <div class="text-center">
  <div class="form-group">
 <button type="submit" class="btn btn-primary">Envoyer</button>
 </div>
 </div>

</form>

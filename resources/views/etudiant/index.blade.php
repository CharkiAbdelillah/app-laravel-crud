
@extends('etudiant.layout')

@section('content')
<!-- hadi tat gol sir ldik fichier layout ofdik blasa fin drt yeild('content') ktb hadxi -->
 
<br> 
  <div class="col-md-11.5 text-right">
   <a class="btn btn-danger" href="{{URL::to('deletehaha')}}" onclick="return confirm('confirmer !!')">Supprimer La liste</a>
 </div> 
    <div class="row">
    <div class="col-md-6">
        <h2>Listes des etudiants de EST Sidi Bennour<h2>  
       </div>
<br><br><br>
    <div class="col-md-3 text-center" >
    <form action="/search" methode="get">
      <div class="input-group">
      <input type="search" name="search"  class="form-control">
       <span class="input-group-prepend">
   <button type="submit"  class="btn btn-primary">Chercher</button>
   </span>
   </div>
   </form>
    </div>
     <div class="col-md-2 text-right">
       <a class="btn btn-success" href="{{ route('create.etudiant')}}">Ajouter un nouveau etudiant</a>
     </div>
   </div> 
     <!-- dyl class="row" bax dikxi li class row maybanx bl khdr fax creer xi haja .bsbab dik success li drna lta7t -->
    @if($message=Session::get('success'))
     <div class="alert alert-success">
      <p>{{$message}}</p>
      </div>
     @endif
   
<table class="table table-bordered table-striped">
 <tr>
  <th width="8%">Photo</th>
  <th width="16%">Nom Complet</th>
 <th width="12%">Genre</th>
  <th width="16%">Email</th>
   <th width="10%">Branche</th>
 <th width="28%">Action</th>
 </tr>
  
    
  @foreach($etudiant as $pro) <!-- hadi tat jbd mn DB -->
   <tr>
   <td><img src="{{URL::to('/') }}/images/{{ $pro->image }}" class="img-thumbnail" height="90px;" width="90px;"></td>
    <td> {{ $pro->nom }} </td>
    <td> {{ $pro->genre }} </td>
    <td> {{ $pro->email }} </td>
    <td> {{ $pro->branche }} </td>
    <td>
       <a class="btn btn-info" href="{{URL::to('show/etudiant/'.$pro->id)}}">Montrer</a>
         <a class="btn btn-primary" href="{{URL::to('edit/etudiant/'.$pro->id)}}">Modifier</a>
           <a class="btn btn-danger" href="{{URL::to('delete/etudiant/'.$pro->id)}}" onclick="return confirm('confirmer !!')">Supprimer</a>
     </td>
     </tr>
   @endforeach
</table>    
{!! $etudiant->links() !!}
@endsection


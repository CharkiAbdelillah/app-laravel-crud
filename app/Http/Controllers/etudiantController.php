<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\etudiant;
use DB;

class etudiantController extends Controller
{
    public function index()
      {
           $etudiant = DB::table('etudiants')->latest()->paginate(6);
           return view('etudiant.index',compact('etudiant'));
      }

     public function create()
       {
       return view('etudiant.create');
       }

      public function store(Request $request)
    {

        $request->validate([ //<!-- had validate darorir bax dik any error li drt f create tkhdm. o ila 7ydt validate okhlit xi champ khawi fdik create ghay dini page store) -->
            'nom'    =>  'required',
            'email'     =>  'required',
             'branche'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
         $data=array(
            'nom' => $request->nom,
            'email'  => $request->email,
            'branche'   => $request->branche,
            'image'=> $new_name
         );
         $etudiant=DB::table('etudiants')->insert($data);
        return redirect()->route('etudiant.index')
              ->with('success', 'Données ajoutées avec succès.');
          }
    public function Edit($id){
     $etudiant=DB::table('etudiants')->where('id',$id)->first(); 
     return view('etudiant.edit',compact('etudiant'));
    }

   public function Update(Request $request,$id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '') //hna dima ayb9a idkhl had if 7it dima image tat kon fiha xi haja . dik sa3a bghina ndiro update mr7ba mabghinax rah atkon fiha ancien photo donc ghat doz mn dik image => required.
        {
            $request->validate([ //here is the validation part where you can specify any of the input files that you want to validate okay.
            'nom'    =>  'required',
            'email'     =>  'required',
             'branche'     =>  'required',
            'image'         =>  'image|max:2048' //the image max size will be 2048mb if not it will no inserted okay.

          ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension(); //here is the image extension by the original name of the image and the rand function will generate random numbers for the image name okay.
            $image->move(public_path('images'), $image_name); //this move function will move our image inside the public folder and create new folder name it images
     }
        else //had else gol ha zayda
        {
            $request->validate([
                'nom'    =>  'required',
                'email'    =>  'required',
                'branche'     =>  'required'
            ]);
        }
        $data=array(
           'nom' => $request->nom,
            'email'  => $request->email,
            'branche'   => $request->branche,
            'image'=> $image_name
         );
       $etudiant=DB::table('etudiants')->where('id',$id)->update($data);

        return redirect()->route('etudiant.index')
              ->with('success', 'Données Modifier avec succès.');
}

   public function Delete($id)
    {
    $data = DB::table('etudiants')->where('id',$id)->first();
    $image1=$data->image;
    echo getcwd() . "\n"; //hadi tat warak chemin
    unlink('images/'.$image1); //hadi hir bax tm7i image mn dossier 
    $etudiant=DB::table('etudiants')->where('id',$id)->delete();

     return redirect()->route('etudiant.index')
              ->with('success', 'Données Supprimer avec succès.');

    }

      public function Show($id){
             $data=DB::table('etudiants')->where('id',$id)->first();
             return view('etudiant.show',compact('data'));
            }
}

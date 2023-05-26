<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Candidat;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cette methode seras utlisée plus tard l'ors de la creattion de la fil d'actualité
        return redirect("/dashboard/vote/create");

    }

    // afficher le formulaire pour faire le vote de candidat
    public function person_vote_form(){
        return view("vote.person-vote-form");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vote.simple-vote-form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validation = true;

        $validation = $request->validate([
            'titre' => 'required|max:100',
            'whyToDo' => 'max:100',
            'dateDebut' => 'required',
            'dateFin' => 'required'
        ]);

        

        if($validation == true){ // si les données sont au complet
            $data = $request->all(); // recuperation des données

            $motivations = [];
            $candidats = [];
            $voteType = $data['voteType'];
        
            // $user_data = session('LoggedUser');
            $user_data['id'] = 2;

            foreach($data as $key => $item){ // recuperation séaparée des données
                $is_candidat = stristr($key, 'candidat');
                $is_motivation = stristr($key, 'motivation');
                if($is_candidat){
                    array_push($candidats, $item);
                }

                if($is_motivation){
                    array_push($motivations, $item);
                }
            }
            echo "candidats: " . count($candidats) . " motivations: " . count($motivations);

            // creation du vote + recuperer son ID
            $newVote = Vote::create([
                    'admin' => $user_data['id'],
                    'titre' => addslashes($data['titre']),
                    'description' => addslashes($data['subject']),
                    'dateDebut' => $data['dateDebut'],
                    'dateFin' => $data['dateFin']
            ]);

           echo $newVote->id;
            // creation des candiats
                // vote de choix
            if($voteType != "person"){
                for($i=0; $i< count($candidats); $i++ ){
                    $newCanddat = Candidat::create([
                        'vote_id' => $newVote->id,
                        'nom' => addslashes($candidats[$i]),
                        'is_human' => false,
                        'motivation' => $motivations[$i]
                    ]);
                }
                // return redirect() vers l'actualité
                echo "Fin du vote de choix";
            }
                // votes de personnes
            if($voteType == "person"){
                for($i=0; $i< count($candidats); $i++ ){
                    $newCanddat = Candidat::create([
                        'vote_id' => $newVote->id,
                        'nom' => addslashes($candidats[$i]),
                        'email' => addslashes($data[$i]['email']),
                        'is_human' => true,
                        'motivation' => addslashes($motivations[$i])
                    ]);
                }
                return redirect('dashboard/actualite');
                echo "Fin du vote de choix";
            }
            if(!$newCanddat){
                $newVote->delete();
            }

        }
        return redirect()->back()->with("flash", "Echec de l'operation, veuillez reessayer");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("vote.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "<h1>Formulaire d'edition de vote</h1>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vote::find($id)->delete(); // supression des votes

        Candidat::where('vote_id', $id)->delete();
    }
}
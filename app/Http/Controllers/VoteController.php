<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Candidat;
use App\Models\Votant;

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

    // fonction sui vas permettre de gere l'actualite
    public function actualite(){
        $votes = Vote::where('admin', session('LoggedUser.id'))->get();
        return view("dashboard.actualite", [
            'votes' => $votes,
        ]);
    }

    // afficher le formulaire pour creer un vote de candidat
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
        // $validation = true;

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
        
            $user_data = session('LoggedUser');

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
            $dateDebut = strtotime($data['dateDebut']) ;
            $dateFin = strtotime($data['dateFin']);

            echo $dateDebut;
            if($dateFin > $dateDebut ){
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
                            // 'email' => addslashes($data[$i]['email']),
                            'is_human' => true,
                            'motivation' => addslashes($motivations[$i])
                        ]);
                    }
                    echo "Fin du vote de choix";
                }
                return redirect('dashboard/actualite');
            }else{
                return redirect()->back()->with("flash", "Echec de l'operation, entrer des dates valides veuillez reessayer");
                
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
        $vote = Vote::find($id);
        $cand = Candidat::where('vote_id', $id)->get();
        return view("vote.voteInterface", compact('cand', 'vote'));



        // return view("vote.show");
    }

    function voteInterface($id){
        $vote = Vote::find($id);
        $cand = Candidat::where('vote_id', $id)->get();
        return view("vote.voteInterface", compact('cand', 'vote'));
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
        $validation = $request->validate([
            'votant_email'=> 'required'
        ]);

        if(!$validation){ // si la validation n'est pas complete, retourner les messages
            return redirect()->back();
        }

        $data = $request->all();
        // dd($data);

        if( isset($data['choix']) ){

            $already_voted_info = Votant::where('vote_id', $data['vote_id'])->get(); // recuperer tout les user qui ont dejas voter

            foreach($already_voted_info as $item){
                // si l'user qui a l'email courante a dejas voter, on le fait rentrer de page
                if( strtolower($item->votant_email)  == strtolower($data['votant_email'])  ){
                    // $have_already_voted = true;
                    return redirect()->back()->with('message', "Vous ne pouvez pas voter deux fois");
                }
            }
            Votant::create([
                'vote_id' => $data['vote_id'],
                'candidat_id' => $data['choix'],
                'votant_email' => $data['votant_email'],
            ]);

            return redirect('/');

        }else{
            return redirect()->back()->with("message", "Veuillez selectionner exactement un choix");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Candidat::where("vote_id" , $id)->delete();
        Votant::where("vote_id" , $id)->delete();

        Vote::find($id)->delete(); // supression du votes, des candidats et des votes


        // return redirect()->back("flash", "operation reussie");
        return VoteController::actualite();
    }
// ====== Partie reservée au sondage

    public function sondage(){

        $candidats = Vote::join( 'candidats',
            'votes.id', '=', 'candidats.vote_id'
        )->where('admin', session('LoggedUser.id'))->get() ; // reucperai=tion des choix
        $votes = Vote::where('admin', session('LoggedUser.id'))->get();   // recuperation des candidats

        $cand = []; // infos a propos des canddats (choix)
        $result_vote = []; // infos a propos des votes

        foreach($candidats as $candidat){ // boucle sur chaque candidat avoir la combi nom-vote_id-nbreVote
            array_push($cand, [
                $candidat->nom,
                $candidat->vote_id,
                count(
                    Votant::where('vote_id', $candidat->vote_id)->get()
                )
            ]);
        }

        foreach($votes as $vote){
            array_push($result_vote, [
                $vote,
                count(
                    Votant::where('vote_id', $vote->id)->get()
                )
            ]);
        }

        $result = [];

        return view('vote.show', [
            'candidats' => $cand,
            'votes' => $result_vote,
        ]);
    }
}
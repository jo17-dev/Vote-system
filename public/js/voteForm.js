var numCandidat = 1; // variable qui vas permettre d'e changer le nom du candidat
var nbreFois = 0; // utilité


function Add(nom){
    const cand = document.getElementById("cand");
    // newField.name = "candidat";
    numCandidat++;
    for(let i=0; i<2; i++){
        var newField = document.createElement('input');
        newField.type = "text";
        
        newField.name = "candidat"+'_'+numCandidat;
        if(i==1){
            newField.name = "motivation"+'_'+numCandidat;
        }

        // On change le placeholder en fcontion du name input et on ajoute aux tableaux concernés
        if(nom == "candidat"){
            newField.placeholder = "nom du choix..";
        }else{
            newField.placeholder = "Motivation du candidat";
        }
    
        cand.append(newField);
    }
    // var again = document.getElementById("again");
    console.log(numCandidat);
}

function remove(nom){
    // var Nom = nom+'_'+numCandidat;
    var motivation = "motivation_"+numCandidat;
    var candidat = "candidat_"+numCandidat;
    const cand  = document.getElementById("cand");
    const Field1 = cand.querySelectorAll("input[name="+motivation+"]");
    const Field2 = cand.querySelectorAll("input[name="+candidat+"]");
    console.log(motivation);
    console.log(candidat);
    if (Field1.length > 0){
        cand.removeChild(Field1[Field1.length - 1]);
        cand.removeChild(Field2[Field2.length - 1]);
        numCandidat--;
    }
}
const candidats = document.querySelectorAll('#data tr td'),
    candidats_vote_id = document.querySelectorAll('#data tr .input'), // id du vote au quel apartien chaque candidat
    vote_id = document.querySelectorAll('.vote_id'); // id des vote_id presents en haut en ordre;

// let i=0;

var idPremierVote = vote_id[0].value;

candidats_vote_id.forEach(item => { // initialisation des infos du premier vote
    // console.log(item.value);
    if( item.value != idPremierVote){
        item.parentNode.style.display = "none";
    }else{
        item.parentNode.style.display = "block";
    }
});


vote_id.forEach( vote => {
    var pere = vote.parentNode;
    pere.addEventListener("click", function(){
        var currenId = vote.value;
        candidats_vote_id.forEach(cand =>{
            if(cand.value == vote.value){
                cand.parentNode.style.display = "block";
            }else{
                cand.parentNode.style.display = "none";
            }
        })

    })
});
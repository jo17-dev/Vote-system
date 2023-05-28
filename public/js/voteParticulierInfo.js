const candidats = document.querySelectorAll('#data tr td'),
    candidats_vote_id = document.querySelectorAll('#data tr .input'), // id du vote au quel apartien chaque candidat
    vote_id = document.querySelectorAll('.vote_id'); // id des vote_id presents en haut en ordre;

let i=0;

var idPremierVote = vote_id[0].value;

candidats_vote_id.forEach(item => { // initialisation des infos du premier vote
    // console.log(item.value);
    if( item.value != idPremierVote){
        item.parentNode.style.display = "none";
    }else{
        item.parentNode.style.display = "block";
    }
});

// let a=0;
// candidats_vote_id.forEach(item => {
//     if(a == 0){
//         item.parentNode.style.display = "none";
//         a++;
//     }
//     else if(a == 1){
//         a = 0;
//     }
// })


vote_id.forEach( vote => {
    var pere = vote.parentNode;
        // fils = vote;
    pere.addEventListener("click", function(){
        // console.log(fils);
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



// vote_id.forEach(item => { // bourcles sur mes section d'en haut: un section d'en = un item
//         function appel(){
//             return parent.item;
//         }
//     item.parentNode.addEventListener("click", function(){ // on les ajoutes les evenements
//         candidats_vote_id.forEach(test => {
//             test.parentNode.style.display = "block";
//         });

//         candidats_vote_id.forEach( cand => {
//             vote_id.forEach(vote => {
//                 console.log("vote: "+vote.value+ " cand "+cand.value);
//                 if(vote.value == cand.value){
//                     cand.parentElement.style.display = "block";
//                 }else{
//                     cand.parentElement.style.display = "none";
//                 }
//             });


//             // if(cand.value != appel().value){
//             //     cand.parentNode.style.display = "none";
//             //     console.log(cand.value);
//             // }else{
//             //     cand.parentNode.style.display = "block";
//             // }
//         })

//         // vote_id.forEach(vote => {
//         //     if()
//         // })
//     });
// });


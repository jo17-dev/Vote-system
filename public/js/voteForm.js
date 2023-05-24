function Add(){
    const cand = document.getElementById("cand");
    var newField = document.createElement('input');
    newField.type = "text";
    newField.name = "candidat[]";
    newField.placeholder = "nom du candidat..";

    cand.append(newField);
    // var again = document.getElementById("again");
}
function remove(){
    const cand  = document.getElementById("cand");
    const Field = cand.querySelectorAll('input[name="candidat[]"]');
    //alert(Field);
    if (Field.length > 0){
        cand.removeChild(Field[Field.length - 1]);
    }
}
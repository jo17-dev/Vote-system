console.log(document.getElementById('email'))

function envoyer_email(){
   var to = document.getElementById('email').value,
      from = document.getElementById('phone').value,
      subject = document.getElementById('subject').value;



   var email = { 
      "to": to,
      "from": "procompter1@gmail.com",
      "subject": subject,
      "bodyHtml": "<p>"+ message +"</p><br/> <strong>"+ document.getElementById('phone') +"</strong>", 
      "apikey": "5540DB6297A8C0902410B61A9EB0FA65EE70"
   };
   
   var xhr = new XMLHttpRequest();
   xhr.open("POST", "https://api.elasticemail.com/v2/email/send", true);
   xhr.setRequestHeader("Content-type", "application/json");
   
   xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
         console.log(xhr.responseText);
      }
  
      if(xhr.readyState == 4){
         console.log("messge partis");
      }
   };
   
   xhr.send(email);
}
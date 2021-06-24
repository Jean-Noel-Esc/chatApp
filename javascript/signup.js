console.log("Hello");
const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

// form.onsubmit = (e)=>{
//     e.preventDefault(); // previent la soumission du form
// }

// continueBtn.onclick = ()=>{
//     //console.log("Hello2");
//     //console.log("Hello3");
//     // AJAX
//     let xhr = new XMLHttpRequest(); //creation objet XML
//     xhr.open("POST", "php/signup.php", true); //method url async
//     xhr.onload = ()=>{
//         if(xhr.readyState === XMLHttpRequest.DONE){
//             if(xhr.status === 200){
//                 console.log("Hello2");
//              let data = xhr.response;
//              //console.log(data);
//              if(data == "success"){
//                 console.log("Hello3");
//              }else{
//                 errorText.textContent = data;
//                 errorText.style.display = "block";
                
//              }

//             }
//         }
//     }
//     //envoie des data du form par ajax a php
//     let formData = new FormData(form); // nouvel objet formData 
//     xhr.send(formData); //envoie du formdta a php
// }
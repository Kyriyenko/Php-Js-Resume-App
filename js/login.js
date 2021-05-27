let checkBoxExe=document.querySelector(".check-exe");
let radioBtn=document.querySelector(".radio-1");
let name=document.querySelector("#name");
let pass=document.querySelector("#pass");
let passExe=document.querySelector(".pass-exe");
let nameExe=document.querySelector(".name-exe");


let regCheckLatinSymblos=/[A-Za-zA]/;
let regNum=/[0-9]/;
let ruSymb=/[Яа-яЁё]/;
let pattern=/^[^]+@[^ ]+\.[a-z]{2,3}$/;

let isNameOk=false;
let isPasswordOk=false;

$("form").submit(function (event){
    event.preventDefault();
    nameExe.innerText="";
    passExe.innerText="";
    checkBoxExe.innerText="";
if (radioBtn.checked){
   nameCheck();
   passwordCheck();

   if(isNameOk===true&&isPasswordOk===true){
       $.ajax({
           url:'../auth.php',
           type:'POST',
           cache:false,
           data:{
               'name':name.value,
               'password':pass.value
           },
           dataType:'html',
           beforeSend:function (){
             console.log("waiting.....");
           },
           success:function (data){
               window.open (data,'_self',false);

           }


       });


   }


}
else {
    checkBoxExe.innerText="checkbox must be checked";
}

});

function passwordCheck(){

    if(pass.value.length<4){
        passExe.innerText='password is too short';
        return;
    }
    isPasswordOk=true;
}

function nameCheck(){

    if(name.value.length<2){
        nameExe.innerText='name is too short';
        return;
    }

    if(!regCheckLatinSymblos.test(name.value)) {
        nameExe.innerText='incorect name';
        return;
    }

    if(pattern.test(name.value)){
        nameExe.innerText='name cant include [/%$#@!*&^}]';
        return;
    }

    if(regNum.test(name.value)){
        nameExe.innerText='incorect name[delete symbols]';
        return;
    }

    if(ruSymb.test(name.value)){
        nameExe.innerText='incorect name[delete  Ru symbols]';
        return;
    }
    isNameOk=true;
}








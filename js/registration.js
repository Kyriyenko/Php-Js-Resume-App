let firstName=document.querySelector(".input-firstName");
let email=document.querySelector(".input-ema");
let firstPassword=document.querySelector(".first-pass");
let lastPassword=document.querySelector(".last-pass");
let check=document.querySelector(".r1");
let firstNameExe=document.querySelector(".first-name-exe");
let emailExe=document.querySelector(".email-exe");
let passExe=document.querySelector(".pass-exe");
let checkBoxExe=document.querySelector(".checkbox-exe");

let isNameOk=false;
let isEmailOk=false;
let isPasswordOk=false;

let regCheckLatinSymblos=/[A-Za-zA]/;
let regNum=/[0-9]/;
let ruSymb=/[Яа-яЁё]/;
let pattern=/^[^]+@[^ ]+\.[a-z]{2,3}$/;


$("form").submit(function (event){
    event.preventDefault();
    firstNameExe.innerText="";
    emailExe.innerText="";
    passExe.innerText="";
    checkBoxExe.innerText="";
    if (check.checked){
    nameCheck(firstName,firstNameExe);
    checkEmail();
    checkPass();

   if(isNameOk===true&&isEmailOk===true&&isPasswordOk===true){
    $.ajax({
       url:'../check.php',
       type:'POST',
       cache:'false',
       data:{
           'name':firstName.value,
           'email':email.value,
           'password':firstPassword.value
       },
        dataType:'html',
        beforeSend:function (){
            $("#send-val").prop("disable",true);
        },
        success:function (data){
           if(data){
               firstNameExe.innerText="";
               emailExe.innerText="";
               passExe.innerText="";
               checkBoxExe.innerText="account was created";
           }
            $("#send-val").prop("disable",false);
        }

    });


   }


    }else {
        checkBoxExe.innerText="checkbox must be checked";
    }
});

function checkPass(){

    if(firstPassword.value.length<4){
        passExe.innerText='password  length must have 4+ symbols';
        return;
    }

    if(ruSymb.test(firstPassword.value)){
        passExe.innerText='the password must not have Russian letters';
        return;
    }

    if(firstPassword.value!==lastPassword.value){
        passExe.innerText='both password should bo the same';
        return;
    }

    isPasswordOk=true;
}


function checkEmail(){
    if(email.value.match(pattern)) {
        emailExe.innerText=" ";
    }
    else {
        emailExe.innerText="wrong Email";
        return;
    }

    isEmailOk=true;
}


function nameCheck(name,nameExe){

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
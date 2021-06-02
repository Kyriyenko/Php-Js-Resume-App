var firstNameReg=document.querySelector(".input-firstName");
var email=document.querySelector(".input-ema");
var firstPassword=document.querySelector(".first-pass");
var lastPassword=document.querySelector(".last-pass");
var check=document.querySelector(".r1");
var firstNameExe=document.querySelector(".first-name-exe");
var emailExe=document.querySelector(".email-exe");
var passExe=document.querySelector(".pass-exe");
var checkBoxExe=document.querySelector(".checkbox-exe");

var isNameOkReg=false;
var isEmailOkReg=false;
var isPasswordOkReg=false;

var regCheckLatinSymblosReg=/[A-Za-zA]/;
var regNum=/[0-9]/;
var ruSymb=/[Яа-яЁё]/;
var pattern=/^[^]+@[^ ]+\.[a-z]{2,3}$/;


$("form").submit(function (event){
    event.preventDefault();
    firstNameExe.innerText="";
    emailExe.innerText="";
    passExe.innerText="";
    checkBoxExe.innerText="";
    if (check.checked){
    nameCheck(firstNameReg,firstNameExe);
    checkEmail();
    checkPass();

   if(isNameOkReg===true&&isEmailOkReg===true&&isPasswordOkReg===true){
    $.ajax({
       url:'../functionality/check.php',
       type:'POST',
       cache:'false',
       data:{
           'name':firstNameReg.value,
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

    isPasswordOkReg=true;
}


function checkEmail(){
    if(email.value.match(pattern)) {
        emailExe.innerText=" ";
    }
    else {
        emailExe.innerText="wrong Email";
        return;
    }

    isEmailOkReg=true;
}


function nameCheck(name,nameExe){

    if(name.value.length<2){
        nameExe.innerText='name is too short';
        return;
    }

    if(!regCheckLatinSymblosReg.test(name.value)) {
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

    isNameOkReg=true;
}
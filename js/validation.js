let nameExe=document.querySelector('.name-exe');
let passExe=document.querySelector('.pass-exe');
let emailExe=document.querySelector('.ema-exe');
let dateExe=document.querySelector('.date-exe');
let checkBoxExe=document.querySelector('.check-exe');
let check=document.querySelector('.check');
let date = new Date();

let reg=/[A-Za-zA]/;
let regNum=/[0-9]/;
let ruSymb=/[Яа-яЁё]/;
let pattern=/^[^]+@[^ ]+\.[a-z]{2,3}$/;


btnOK.addEventListener('click',function (e){
    e.preventDefault();

    if(check.checked) {
        checkName();
        checkPass();
        checkEmail();
        checkDate();
        addToObject();
    }
    else
        checkBoxExe.innerText="checkbox must be checked!";


});


function checkDate(){
    dateExe.innerText=" ";
    let inputDate=new Date(birthdate.value);
    if(+date.getFullYear()-150>(+inputDate.getFullYear())) {
        dateExe.innerText="Wrong date(>150)";
        return;
    }

    if(+date.getFullYear()===(+inputDate.getFullYear())&&
        +date.getMonth()===(+inputDate.getMonth())&&
        +date.getDate()===(+inputDate.getDate()) ){
        dateExe.innerText="Wrong date (it cant be today)";
        return;
    }

    console.log("all good");
}


function checkEmail(){
    if(email.value.match(pattern)) {
        emailExe.innerText=" ";
    }
    else {
        emailExe.innerText="wrong";
        return;
    }
}


function checkPass(){
    passExe.innerText="";

    if(pass.value.length<6){
        passExe.innerText='password  length must have 6+ symbols';
        return;
    }

    if(!reg.test(pass.value)) {
        passExe.innerText='password must have eng symbols';
        return;
    }

    if(!regNum.test(pass.value)){
        passExe.innerText='password must have numbers';
        return;
    }

    if(ruSymb.test(pass.value)){
        nameExe.innerText='the password must not have Russian letters';
        return;
    }

}


function checkName()
{
    nameExe.innerText=" ";
    if(!reg.test(name.value)) {
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
}




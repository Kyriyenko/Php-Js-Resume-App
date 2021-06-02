var name=document.querySelector('.input-name');
var email=document.querySelector('.input-email');
var pass=document.querySelector('.input-password');
var gender=document.querySelectorAll('.gen');
var birthdate=document.querySelector('.input-birthdate');
var hobbies=document.querySelector('.input-hobbies');
var someWords=document.querySelector('.input-somewords');
var btnUpdate=document.querySelector('.update-btn');
var btnOK=document.querySelector('.ok-btn');
var btnCancel=document.querySelector('.next-btn');
var showData=document.querySelector('.showData');

var user={
    name:" ",
    email:" ",
    password:" ",
    gender:" ",
    birthdate:" ",
    hobbies:" ",
    someWords:" ",
};

btnCancel.addEventListener('click', cleanInput);

function cleanInput(event) {
    event.preventDefault();
    name.value=" ";
    email.value=" ";
    pass.value=" ";
    gender.value=" ";
    birthdate.value=" ";
    hobbies.value=" ";
    someWords.value=" ";
}


function addToObject(){

    user.name=name.value;
    user.email=email.value;

    console.log(user.email);
    user.password=pass.value;
    if (document.getElementById('r1').checked) {
        user.gender = document.getElementById('r1').value;
    }
    if(document.getElementById('r2').checked) {
        user.gender = document.getElementById('r2').value;
    }
    user.birthdate=birthdate.value;
    user.hobbies=hobbies.value;
    user.someWords=someWords.value;
            showData.innerHTML=+user.name+" "+user.email+"   "+user.password+"   "+user.birthdate+
            "   "+user.hobbies+"   "+user.someWords;

}




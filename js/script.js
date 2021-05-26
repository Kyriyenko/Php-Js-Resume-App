let name=document.querySelector('.input-name');
let email=document.querySelector('.input-email');
let pass=document.querySelector('.input-password');
let gender=document.querySelectorAll('.gen');
let birthdate=document.querySelector('.input-birthdate');
let contact=document.querySelector('.contact-input');
let hobbies=document.querySelector('.input-hobbies');
let someWords=document.querySelector('.input-somewords');
let btnOK=document.querySelector('.update-btn');
let btnCancel=document.querySelector('.next-btn');
let showData=document.querySelector('.showData');

let user={
    name:" ",
    email:" ",
    password:" ",
    gender:" ",
    birthdate:" ",
    contact:" ",
    hobbies:" ",
    someWords:" "
};

btnCancel.addEventListener('click', cleanInput);
btnOK.addEventListener('click',addToObject);


function cleanInput(event) {
    event.preventDefault();
    name.value=" ";
    email.value=" ";
    pass.value=" ";
    gender.value=" ";
    birthdate.value=" ";
    contact.value=" ";
    hobbies.value=" ";
    someWords.value=" ";
}


function addToObject(event){
    event.preventDefault();
    user.name=name.value;
    user.email=email.value;
    user.password=pass.value;
    if (document.getElementById('r1').checked) {
        user.gender = document.getElementById('r1').value;
    }
    if(document.getElementById('r2').checked) {
        user.gender = document.getElementById('r2').value;
    }
    user.birthdate=birthdate.value;
    user.contact=contact.value;
    user.hobbies=hobbies.value;
    user.someWords=someWords.value;

    for (let key in user) {
        showData.innerHTML+=user[key]+"   ";
    }

}















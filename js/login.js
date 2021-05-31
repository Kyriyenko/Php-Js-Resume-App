    var checkBoxExeLog=document.querySelector(".check-exe");
    var radioBtnLog=document.querySelector(".radio-1");
    var nameLog=document.querySelector("#name");
    var passLog=document.querySelector("#pass");
    var passExeLog=document.querySelector(".pass-exe");
    var nameExeLog=document.querySelector(".name-exe");

    var regCheckLatinSymblos=/[A-Za-zA]/;
    var regCheckNum=/[0-9]/;
    var regCheckRuSymb=/[Яа-яЁё]/;
    var regCheckemail=/^[^]+@[^ ]+\.[a-z]{2,3}$/;

    var isNameOk=false;
    var isPasswordOk=false;

    $("form").submit(function (event){
        event.preventDefault();

        nameExeLog.innerText="";
        passExeLog.innerText="";
        checkBoxExeLog.innerText="";
        if (radioBtnLog.checked){
            nameCheck();
            passwordCheck();

            if(isNameOk===true&&isPasswordOk===true){
                $.ajax({
                    url:'../auth.php',
                    type:'POST',
                    cache:false,
                    data:{
                        'namee':nameLog.value,
                        'passw':passLog.value
                    },
                    dataType:'html',
                    beforeSend:function (){

                    },
                    success:function (data){

                        if(data=="done")
                        {
                            checkBoxExeLog.innerText="You are successfully logged in";
                            setTimeout(function() {
                                window.location.href = '../index.php';
                            }, 1000);
                        }
                        else
                        {
                            checkBoxExeLog.innerText="wrong password or name";
                        }

                    }

                });

            }


        }
        else {
            checkBoxExeLog.innerText="checkbox must be checked";
        }

    });

    function passwordCheck(){

        if(passLog.value.length<4){
            passExeLog.innerText='password is too short';
            return;
        }
        isPasswordOk=true;
    }

    function nameCheck(){

        if(nameLog.value.length<2){
            nameExeLog.innerText='name is too short';
            return;
        }

        if(!regCheckLatinSymblos.test(nameLog.value)) {
            nameExeLog.innerText='incorect name';
            return;
        }

        if(regCheckemail.test(nameLog.value)){
            nameExeLog.innerText='name cant include [/%$#@!*&^}]';
            return;
        }

        if(regCheckNum.test(nameLog.value)){
            nameExeLog.innerText='incorect name[delete symbols]';
            return;
        }

        if(regCheckRuSymb.test(nameLog.value)){
            nameExeLog.innerText='incorect name[delete  Ru symbols]';
            return;
        }
        isNameOk=true;
    }












window.onload = function () {
    let navLinksBtn=document.querySelectorAll(".nav-btn-r1");



    navLinksBtn.forEach(function (item) {
        item.addEventListener("click", function (e) {
            e.preventDefault();



            if(item.text!=""){
                $.ajax({
                    url:'../api.php',
                    type:'POST',
                    cache:'false',
                    data:{
                        'page':item.text
                    },
                    dataType:'html',
                    beforeSend:function (){

                    },
                    success:function (data){
                        if(data){


                            $('.input-container').empty();

                            $('.input-container').append(data);

                        }

                    }

                });

            }






        });
    })


};


;
window.onload = function () {
    let navLinksBtn=document.querySelectorAll(".nav-btn-r1");



    navLinksBtn.forEach(function (item) {
        item.addEventListener("click", function (e) {
            e.preventDefault();



            if(item.text!=""){
                $.ajax({
                    url:'../functionality/api.php',
                    type:'POST',
                    cache:'false',
                    data:{
                        'page':item.dataset.page
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
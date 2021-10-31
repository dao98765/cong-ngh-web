        // //
        // //
        // //
        //     var txtFruit = document.getElementById('txtFruit');
        //     var btnShowFruit = document.getElementById('btnShowFruit');
        //     var imgContent = document.getElementById('img-content');
            
        //     //
        //     btnShowFruit.addEventListener('click',function(){
        //         var fruit = txtFruit.value;
                
        //         //Kiểm tra có nhập ko ,nếu nhập có khớp với cơ sở dl ko
        //         var aFruits = ['no-image','hanh'];
        //         if(fruit==''){
        //             alert('bạn chưa nhập giá trị');
        //         }else{
        //             imgContent.src = './image/'+fruit+'.jpg';
        //         }
                
        //     })
$document.ready(function(){
    $("#btnShowFruit").click(function(){
       var fruit = $("#txtFruit").val();
       $.ajax({
           url :'process.php',
           type: 'post',
           data: {guiDi:fruit},

           success:function(response){
               alert(response);
           }

       })
    })
})
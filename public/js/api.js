$(document).ready(function(){
    getData();
    $("body").on('click','.random-btn',function(){
        console.log("clicked");
        $(".number").val("");
        let data = {random:true};
        $.ajax({
            type: "post",
            url: "/api/random",
            data:data,
            dataType: 'json',
            cache: false,
            success: function (result) {
                if(result.status){
                    getData();
                }
                } 
            })
    })
    $("body").on('click','.reset-btn',function(){
        console.log("clicked");
        $(".number").val("");
        let data = {random:false};
        $.ajax({
            type: "post",
            url: "/api/random",
            data:data,
            dataType: 'json',
            cache: false,
            success: function (result) {
                if(result.status){
                    getData();
                }
                } 
            })
    })
    function getData(){
        let compare = [];
        let status = true;
        $.ajax({
            type: "get",
            url: "/api/random",
            dataType: 'json',
            cache: false,
            success: function (result) {
                console.log(result);
               if(result.Last_2 == 0 && result.st1_prize == 0 && result.nd2_prize_1 == 0){
                $("#1st").html("");
                $("#2st_1").html("");
                $("#2st_2").html("");
                $("#2st_3").html("");
 
                $("#oc_1").html("");
                $("#oc_2").html("");
                $("#last_two").html("");
                status = false;
                return
               }
               //setdata
               
               $("#1st").html(unside(result.st1_prize));

               $("#2st_1").html(unside(result.nd2_prize_1));
               $("#2st_2").html(unside(result.nd2_prize_2));
               $("#2st_3").html(unside(result.nd2_prize_3));

               $("#oc_1").html(unsideM(result.st1_prize));
               $("#oc_2").html(unsideP(result.st1_prize));
               $("#last_two").html(unside2(result.Last_2));

               compare[0] = unside(result.st1_prize);

               compare[1] = unside(result.nd2_prize_1);
               compare[2] = unside(result.nd2_prize_2);
               compare[3] = unside(result.nd2_prize_3);

               compare[4] = Number(unside(result.st1_prize))-1;
               compare[5] = Number(unside(result.st1_prize))+1;

               compare[6] = Number(unside2(result.Last_2));
            } 
            })
            console.log(compare);


            $("body").on("submit", ".form-inline", function (e) {
                e.preventDefault();
                if(!status){
                    swal("","ยังไม่มีการสุ่มเลข","");
                    return
                }
                let val = $(".number").val();
                let two = val.substring(1,3);
                let newArr=[];
                two = Number(two);
                $.each(compare, function (k, v) {
                    if (v == val) {
                        let obj = {k,v};
                        newArr.push(obj);

                    }
                })
                if(two == compare[6]){
                    let obj = {"k":"9","v":compare[6]}
                    newArr.push(obj);
                }
               if(isEmpty(newArr)){
                   swal(val,"น่าเสียดายคุณไม่ถูกรางวัล","")
               }else{
                   let swaltext = "ถูก";
                   let and = " และ ";
                   let i = 1;
                   let count = newArr.length;
                   $.each(newArr,function(k,v){
                    if(v.k == 0){
                       swaltext += "รางวัลที่ 1";
                    }
                    if(v.k >=1 && v.k <=3){
                        swaltext += "รางวัลที่ 2";
                    }
                    if(v.k >= 4 && v.k <=5){
                        swaltext += "รางวัลที่ใกล้เคียงรางวัลที่ 1";
                    }
                    if(v.k == 9){
                        swaltext += "รางวัลเลขท้าย 2 ตัว";
                    }
                    if(i != Number(count)){
                        swaltext += and;
                    }
                    i++;
                    
                   });
                   swal(val,swaltext,"success")
               }
            });
    }
    function unside(v){
        let mid;
        if (v < 10) {
            mid = "00" + v;
        } else if (v < 100) {
            mid = "0" + v;
        }else{
            mid= v;
        }
        return mid;
    }
    function unsideM(v){
        let mid;
        v = Number(v-1);
        if (v == 0){
            mid = 999;
        } 
        else if (v < 10) {
            mid = "00" + v;
        } else if (v < 100) {
            mid = "0" + v;
        }else{
            mid= v;
        }
        return mid;
    } 
    function unsideP(v){
        let mid;
        v = v+1;
        if (v == 1000){
            mid = "001";
        }
        else if (v < 10) {
            mid = "00" + v;
        } else if (v < 100) {
            mid = "0" + v;
        }else{
            mid= v;
        }
        return mid;
    }
    function unside2(v){
        let mid;
        if (v < 10) {
            mid = "0" + v;
        } else{
            mid= v;
        }
        return mid;
    }
    function isEmpty(obj) {
        for(var key in obj) {
            if(obj.hasOwnProperty(key))
                return false;
        }
        return true;
      }
  });
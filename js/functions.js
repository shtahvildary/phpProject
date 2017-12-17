$("#btn1").click(function(){
    var phone = $(".phone").val();
    if(phone.length == 11 && isValidPhone(phone) && phone.substr(0,2)=='09'){
        alert("Valid Number !")
    }else{
        alert("Invalid Number !");
        return false;
    }
});
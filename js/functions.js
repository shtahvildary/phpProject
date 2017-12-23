$("#btnSubmit").click(function(rdbSurvey){

    var vote = $('input[type=radio]:checked').val();
    if(vote){
        // $query = "INSERT INTO `"+$dbName+"`.`"+$tblName+"` (`vote`) VALUES ('"+$users_name+"');";
        mysql_query($query);
        alert("Your vote is: "+vote);
    }else{
        alert("Invalid vote !");
        return false;
    }
});



$("#btnSubmit").click(function(rdbSurvey){

    var vote = $('input[type=radio]:checked').val();
    var voteText="";
    if(vote){
        switch(vote){
            case 1:
            voteText="بد";
            break;

            case 2:
            voteText="متوسط";
            break;

            case 3:
            voteText="خوب";
            break;

            case 4:
            voteText="عالی";
            break;
        }
        // $query = "INSERT INTO `"+$dbName+"`.`"+$tblName+"` (`vote`) VALUES ('"+$users_name+"');";
        // mysql_query($query);
        // $sql = "INSERT INTO votes (vote) VALUES ('$_POST[rdbSurvey]')";

        alert("Your vote is: "+voteText);
        // $("#diagram").hide();
    }else{
        alert("Invalid vote !");
        return false;
    }
});

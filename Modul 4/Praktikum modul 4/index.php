<?php
//Include and initialize Poll class 
include 'Poll.php';
$poll = new Poll;

//Check whether vote is submitted
if(isset($_POST['voteSubmit'])){
    $voteData = array(
        'poll_id' => $_POST['pollID'],
        'poll_option_id' => $_POST['voteOpt']
    );
    //Submit vote by Poll class
    $voteSubmit = $poll->vote($voteData);
    if($voteSubmit){ 
        //store in $_COOKIE to signify the user has voted for "pemilu"
        //to test the program, you can add a file which contain setcookie($_POST['pollID'], "", time() -60*60*24*365);
        //add that function in a separate file only therefore the php will ignore it if placed in the same function
        setcookie($_POST['pollID'], "", time() +60*60*24*365); //second, minute, hour, day 
        $statusMsg = 'Terima kasih sudah berpartisipasi dalam pesta demokrasi!';
    }else{
        $statusMsg = 'Anda sudah memilih! setiap orang hanya dapat memilih sebanyak 1 kali';
    }
}

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<style type="text/css">
.body{
    margin: auto;
}

.pollContent{
    float: left;
    width: 500px;
}
.pollContent h3 {
    font-size: 18px;
    color: #333;
    text-align: left;
    float: left;
    border-bottom: 2px solid #333;
    width: 100%;
    margin: 0 auto;
    padding-bottom: 10px;
}
.pollContent ul{
    list-style: none;
    float: left;
    width: 100%;
    padding: 10px;
}
.pollContent input[type="submit"], .pollContent a{
    border: none;
    font-size: 16px;
    color: #fff;
    border-radius: 3px;
    padding: 10px 15px 10px 15px; 
    background-color: #34a853;
    text-decoration: none;
    cursor: pointer;
}
.stmsg{font-size: 16px;color:#FBBC05;}
</style>
</head>
<body>
<div class="container" >
    <?php
        //Get poll and options data
        $pollData = $poll->getPolls();
    ?>
    <div class="pollContent">
        <?php echo !empty($statusMsg)?'<p class="stmsg">'.$statusMsg.'</p>':''; ?>
        <form action="" method="post" name="pollFrm">
        <h3><?php echo $pollData['poll']['subject']; ?></h3>
        <ul>
            <?php foreach($pollData['options'] as $opt){
                echo '<li><input type="radio" name="voteOpt" value="'.$opt['id'].'" >'.$opt['name'].'</li>';
            } ?>
        </ul>
        <input type="hidden" name="pollID" value="<?php echo $pollData['poll']['id']; ?>">
        <input type="submit" name="voteSubmit" class="button" value="Vote">
        <a href="results.php?pollID=<?php echo $pollData['poll']['id']; ?>">Results</a>
        </form>
    </div>
</div>
</body>
</html>
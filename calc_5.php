<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debt Splitter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
    #bg {
        background-image: url('img/white.jpg');
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index:-1;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: blur(2px);
    }
    body{
        font-family: 'Viga', sans-serif;
        color:black;
        padding: 150px 0px 50px 30%;
        font-size:35px;
    }
    .container1{
        height:100px;
    }
    </style>
</head>
<body>
    <div id="bg"></div>
<?php
    error_reporting(E_ERROR | E_PARSE);
    $amt_12=$_POST['amt_12'];
    $amt_13=$_POST['amt_13'];
    $amt_21=$_POST['amt_21'];
    $amt_23=$_POST['amt_23'];
    $amt_31=$_POST['amt_31'];
    $amt_32=$_POST['amt_32'];
    $amt_14=$_POST['amt_14'];
    $amt_24=$_POST['amt_24'];
    $amt_34=$_POST['amt_34'];
    $amt_41=$_POST['amt_41'];
    $amt_42=$_POST['amt_42'];
    $amt_43=$_POST['amt_43'];
    $amt_15=$_POST['amt_15'];
    $amt_25=$_POST['amt_25'];
    $amt_35=$_POST['amt_35'];
    $amt_45=$_POST['amt_45'];
    $amt_51=$_POST['amt_51'];
    $amt_52=$_POST['amt_52'];
    $amt_53=$_POST['amt_53'];
    $amt_54=$_POST['amt_54'];
    $N =5;
    $graph=array(array());
  	$graph[0][0]=0; $graph[0][1]=$amt_12; $graph[0][2]=$amt_13; $graph[1][0]=$amt_21;
    $graph[1][1]=0; $graph[1][2]=$amt_23; $graph[2][0]=$amt_31; $graph[2][1]=$amt_32; $graph[2][2]=0; 
    $grpah[0][3]=$amt_14; $graph[1][3]=$amt_24; $graph[2][3]=$amt_34;
    $graph[3][3]=0; $graph[3][0]=$amt_41; $graph[3][1]=$amt_42; $graph[3][2]=$amt_43; $graph[4][4]=0;
    $graph[0][4]=$amt_15; $graph[1][4]=$amt_25; $graph[2][4]=$amt_35; $graph[3][4]=$amt_45;
    $graph[4][0]=$amt_51; $graph[4][1]=$amt_52; $graph[4][2]=$amt_53; $graph[4][3]=$amt_54;
      minCashFlow();

    function getMin($arr)
    {
        $minInd = 0;
        for ($i=1; $i<$GLOBALS['N']; $i++)
            if ($arr[$i] < $arr[$minInd])
                $minInd = $i;
        return $minInd;
    }

    function getMax($arr)
    {
	    $maxInd = 0;
	    for ($i=1; $i<$GLOBALS['N']; $i++)
	    	if ($arr[$i] > $arr[$maxInd])
	    		$maxInd = $i;
	    return $maxInd;
    }

    function minOf2($x, $y)
    {
        if($x<$y)
            return $x;
        else
            return $y;
    }

    function minCashFlowRec($amount)
    {
        $mxCredit = getMax($amount); $mxDebit = getMin($amount);

	// If both amounts are 0, then all amounts are settled
	if ($amount[$mxCredit] == 0 && $amount[$mxDebit] == 0)
		return;

	// Find the minimum of two amounts
    $min = minOf2(-$amount[$mxDebit], $amount[$mxCredit]);
	$amount[$mxCredit] -= $min;
	$amount[$mxDebit] += $min;
	// If minimum is the maximum amount to be ?>
    <div class="container1">
	<?php echo "Person " . $mxDebit+1 . " pays " . $min
		. " rupees to " . "Person " . $mxCredit+1 . "<br>"; ?>
    </div>
    <?php
	// Recur for the amount array
	minCashFlowRec($amount);
    }

    function minCashFlow()
    {
        global $graph;
        $amount=array();
        for($i=0;$i<$GLOBALS['N'];$i++)
            $amount[$i]=0;
        try 
        {
            for ($p=0; $p<$GLOBALS['N']; $p++)
	        for ($i=0; $i<$GLOBALS['N']; $i++)
		        $amount[$p] += ($graph[$i][$p] - $graph[$p][$i]);
            throw new Exception();
        } 
        catch (Exception $e) 
        {
            //print "something went wrong, caught yah! n";
        }
	    minCashFlowRec($amount);
    }
     
?>
</body>
</html>
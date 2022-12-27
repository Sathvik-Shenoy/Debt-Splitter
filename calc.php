<?php
    $N = 3;
    $graph=array(array());
  	$graph[0][0]=0; $graph[0][1]=100; $graph[0][2]=20; $graph[1][0]=30;
      $graph[1][1]=0; $graph[1][2]=45; $graph[2][0]=45; $graph[2][1]=89; $graph[2][2]=0;    
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

	// If minimum is the maximum amount to be
	echo "Person " . $mxDebit+1 . " pays " . $min
		. " rupees to " . "Person " . $mxCredit+1 . "<br>";

	// Recur for the amount array
	minCashFlowRec($amount);
    }

    function minCashFlow()
    {
        global $graph;
        $amount=array();
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
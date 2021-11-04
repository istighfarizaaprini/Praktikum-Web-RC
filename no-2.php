<?php
 
    function mengurutkan($n){
        $data = $n;
        sort($data);
        for ($i=0; $i<=9; $i++)
        {
        echo "<br/> $data[$i]. <br/>";
        }
    }
    $acak = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "rini", "moshi", "mamah");
    echo "Data sebelum diurutkan : ";
    print join(', ', $acak);
    echo "<br>";
    echo "<br/>Data setelah diurutkan :";
    mengurutkan($acak);
?>
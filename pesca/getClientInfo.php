<?php
function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}

$ipAddress=get_ip_address();
//print_r($ipAddress);
$concat=$ipAddress.$_SERVER['HTTP_USER_AGENT'] ;
print_r($concat);
echo'<br/>';
$uid = md5($concat);
print_r($uid);


$savedTime  = strtotime('17-11-2018 18:56:19');
//print_r($savedTime);
//echo'<br/>';
$currentTime = strtotime(date('d-m-Y H:i:s'));
//echo date('d-m-Y H:i:s', $currentTime);
//echo'<br/>';
//print_r($currentTime);
$differenceInMinutes = ($currentTime - $savedTime)/60;
echo'<br/>';
echo $differenceInMinutes;
?>

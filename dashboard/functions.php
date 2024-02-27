<?php

function get_playername($pid)
{
  	include "connect.php";
    
	if ($sconn->connect_error) {
    die("Connection failed: " . $sconn->connect_error);}
  
   $pst = $sconn->prepare("SELECT pname FROM `players_d` where pid=?;");
   $pst->bind_param("i", $pid);
   $pst->execute();
   $pl = $pst->get_result(); 
   $player = $pl->fetch_row();
   return $player[0];
}   

function get_teamnames($tid)
{  
   include "connect.php";
    
   if ($sconn->connect_error) {
   die("Connection failed: " . $sconn->connect_error);}
  
   $tst = $sconn->prepare("SELECT pid1,pid2 FROM `teams` where teamid=?;");
   $tst->bind_param("i", $tid);
   $tst->execute();
   $tl = $tst->get_result(); 
   $team = $tl->fetch_row();
   $pid1=$team[0];$pid2=$team[1];
   $player1=get_playername($pid1);
   $player2=get_playername($pid2);
   
   return $player1." & ".$player2;
} 

?>
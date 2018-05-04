<?php
session_start();
header('Content-disposition: attachment; filename=Bill.txt');
header('Content-type: text/plain');

echo "					NoQ Bill\r\n";
echo "_________________________________________________________________________________________\r\n";
echo "Item					Quantity			Total Price\r\n";
echo "-----					--------			-----------\r\n";
echo $_SESSION['dish_1']."			".$_SESSION['q_dish_1']."				".$_SESSION['total_dish_1']."\r\n";
echo $_SESSION['dish_2']."			".$_SESSION['q_dish_2']."				".$_SESSION['total_dish_2']."\r\n";
echo $_SESSION['dish_3']."			".$_SESSION['q_dish_3']."				".$_SESSION['total_dish_3']."\r\n";
echo $_SESSION['dish_4']."				".$_SESSION['q_dish_4']."				".$_SESSION['total_dish_4']."\r\n";
echo $_SESSION['dish_5']."			".$_SESSION['q_dish_5']."				".$_SESSION['total_dish_5']."\r\n";
echo "\r\n";
echo "								Total Bill = Rs. ".$_SESSION['total']."\r\n";
echo "			Thank You and Have a Nice Day\r\n";
echo "			     Hope To See You Soon";
?>
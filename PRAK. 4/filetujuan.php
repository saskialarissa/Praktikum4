<?php
parse_str($_REQUEST['dataku'], $hasil);
//print_r($_REQUEST);
//$hasil = $_REQUEST;
echo $sql = "INSERT INTO USER VALUES (
					'$hasil[firstname]',
					'$hasil[lastname]',
					'$hasil[username]',
					'$hasil[email]',
					'$hasil[address]',
					'$hasil[address2]',
					'$hasil[country]',
					'$hasil[state]',
					'$hasil[zip]',
					'$hasil[cc_name]',
					'$hasil[cc_number]',
					'$hasil[cc_expiration]',
					'$hasil[cc_cvv]'
					)
					";

//echo $sql = "INSERT INTO PAYMENT (
					//'$hasil[ccName]',
					//'$hasil[ccNumber]',
					//'$hasil[ccExpiration]',
					//'$hasil[ccCvv]'
					//)
					//";

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "billing";
					
$link = mysqli_connect("localhost","root","","billing");

//$sql = "INSERT INTO `tbl_user`(`id_user`, `first_name`, `last_name`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`) VALUES ('1',$hasil[firstName]','$hasil[lastName]','$hasil[username]','$hasil[email]','$hasil[address]','$hasil[address2]','$hasil[country]','$hasil[state]','$hasil[zip]')";

$sql =	"INSERT INTO `user`(`id_user`, `first_name`, `last_name`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`, `cc_name`, `cc_number`, `cc_expiration`, `cc_cvv`) VALUES (1,'$hasil[firstName]','$hasil[lastName]','$hasil[username]','$hasil[email]','$hasil[address]','$hasil[address2]','$hasil[country]','$hasil[state]','$hasil[zip]','$hasil[cc_name]','$hasil[cc_number]','$hasil[cc_expiration]','$hasil[cc_cvv]')";

//$sql2 = "INSERT INTO `payment`(`id_payment`, `cc_name`, `cc_number`, `cc_expiration`, `cc_cvv`) VALUES ('1','$hasil[ccName]','$hasil[ccNumber]','$hasil[ccExpiration]','$hasil[ccCvv]')";


if(mysqli_query($link,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($link);
  }
mysqli_close($link);

?>
<?php
$connection = new mysqli("localhost","root","","Alumny");
if($connection==false){
    die("error.could not connect to the server".mysqli_connect_error());
}


?>

<table border ="1" cellspacing="0" cellpadding="8">
  <tr>
    <th>S.N</th>
    <th>Aname</th>
    <th>Yenrol</th>
    <th>Ygrad</th>
    <th>Henrol</th>
    <th>Hgrad</th>
    <th>Fgrad</th>
    <th>Results</th>
    <th>Adress</th>
    <th>Email</th>
    <th>Occupation</th>
    <th>Mnunber</th>
  </tr>

  <?php
$mysquery = "SELECT * FROM Participants";
$result = $connection ->query($mysquery);



if(mysqli_num_rows($result) > 0){
    $sn=1;
    while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $data['Alumnusname']; ?></td>
            <td><?php echo $data['Yenrol']; ?></td>
            <td><?php echo $data['Ygrad']; ?></td>
            <td><?php echo $data['Henrol']; ?></td>
            <td><?php echo $data['Hgrad']; ?></td>
            <td><?php echo $data['Fgrad']; ?></td>
            <td><?php echo $data['Results']; ?></td>
            <td><?php echo $data['Adress']; ?></td>
            <td><?php echo $data['Email']; ?></td>
            <td><?php echo $data['Occupation']; ?></td>
            <td><?php echo $data['Mnumber']; ?></td>
        </tr><?php
  $sn++;}}else {?>
  <tr>
    <td colspan="11">No data found</td>
  </tr><?php }
?>
</table>
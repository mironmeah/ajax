<?php
//https://www.youtube.com/watch?v=wCsPAquMNVw&t=155s
$connect = mysqli_connect("localhost", "root", "", "tutorial");
$output = '';
$sql = "SELECT * FROM info WHERE name LIKE '%".$_POST["search"]."%'";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0)
{
    $output .= '<h4 align"center">Search Result </h4>';
    $output .= '<div class="table-responsive">
            . <table class="table table-bordered">
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>                   
                 </tr>';
    while ($row = mysqli_fetch_array($result))
    {
        $output .= '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["name"].'</td>
                    <td>'.$row["email"].'</td>
                </tr>
                '; 
    }
    echo $output;
}
else
{
    echo 'Data Not Found; what to do?';
}

?>
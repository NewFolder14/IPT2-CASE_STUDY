
# IPT2-github
Castro, Empacta, Pitacio, Purganan

This is the extension for the github case study.

Capstone meeting today.

This is edited.



 <?php 

    $dbcon = mysqli_connect("localhost", "root", "", "ordering_system");

    $count_sql = ("SELECT COUNT(*) FROM tb_product");
    $res_count = mysqli_query($dbcon, $count_sql);
    $count_row = mysqli_fetch_array($res_count);

    echo "$count_row[0]";
?>

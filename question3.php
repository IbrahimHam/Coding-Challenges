<!DOCTYPE html>
<html>
<style>
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
</style>
<body>
<div class="container">
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    for($row=0;$row<8;$row++)
    {
        echo "<tr>";
        for($column=0;$column<8;$column++)
        {
            $total=$row+$column;
            if($total%2==0)
            {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
</div>
</body>
</html> 





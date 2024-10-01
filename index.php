<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
    
        include 'config.php';

        $query = mysqli_query($con,"SELECT * FROM records") or die("query failed");

        if(mysqli_num_rows($query) > 0){
    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['sclass'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?sid=<?php echo $row['sid']?>'>Edit</a>
                    <a href='delete-inline.php?sid=<?php echo $row['sid']?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php 
        }
    ?>
</div>
</div>
</body>
</html>

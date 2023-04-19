<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        // Delete 
        $('.delete').click(function(){
            var el = this;

            // Delete id
            var deleteid = $(this).data('id');

            $.ajax({
                url: 'deleteEvent.php',
                type: 'POST',
                data: { EventID:deleteid },
                success: function(response){

                    // Remove row from HTML Table
                    $(el).closest('tr').css('background','#8F4D57');
                    $(el).closest('tr').fadeOut(800,function(){
                        $(this).remove();
                    });
                }
            });
        });
    });
</script>

<?php
require_once "config.php";

$sql = "SELECT EventID, EventName, CreatorUsername, EventDate, EventDesc FROM events WHERE CreatorUsername = '{$_SESSION["username"]}'";
$result = $pdo->query($sql);

if($result->rowCount() > 0 ){
    ?>
    <table>
        <thead id="leftJustify">
        <tr>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Details</th>
            <th>Event Creator</th>
        </tr>
        </thead>
        <tbody>  
    <?php
    foreach($result as $row){
    ?>   
        <tr>
            <td id="eventItems"><?php echo $row['EventName']?></td>
            <td id="eventItems"><?php echo $row['EventDate']?></td>
            <td id="eventItems"><?php echo $row['EventDesc']?></td>
            <td id="eventItems"><?php echo $row['CreatorUsername']?></td>
            <td><span class='delete' data-id='<?php echo $row['EventID']?>'>Delete</span></td>
        </tr>   
<?php
    }
    
} else {

    echo "You haven't made an event!";
}
?>

</tbody>
           
</table>




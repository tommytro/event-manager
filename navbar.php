<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
<div class="navbar">
    <div id="navbar">
        <ul>
            <li><a href="create_event.php" id="navbar">Create Event</a></li>
            <li><a href="friends.php" id="navbar">Friends</a></li>
            <li><a href="events.php" id="navbar">Events</a></li>

            
        
        </ul>
    </div>
</div>

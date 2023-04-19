<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

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
    <ul>
        <li><a href="create_event.php" class="navbar-button">Create Event</a></li>
        <li><a href="friends.php" class="navbar-button">Friends</a></li>
        <li><a href="events.php" class="navbar-button">Events</a></li>
        <li><a href="search.php" class="navbar-button">Search</a></li>
    </ul>
</div>


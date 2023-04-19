<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("search").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("search").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","searchEvent.php?search="+str,true);
            xmlhttp.send();
        }
}
</script>


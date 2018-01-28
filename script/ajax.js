
    function showDate(str) {

        if (str == "") {
            document.getElementById("select_date").innerHTML = "  ";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("select_date").innerHTML = this.responseText;
                }
            };
            var moviename = "<?php echo  $_GET['movie']; ?>";
            var abc= str;

            //alert(moviename);

            //  why an error
            var qry_str= "movie=" + moviename +"&q=" + str;

            //xmlhttp.open("GET","getdatetime.php?movie='Raees'&q="+abc ,true);
            xmlhttp.open("GET","getdatetime.php?"+qry_str ,true);
            xmlhttp.send();
        }
    }







function showTime(str) {

    if (str == "") {
        document.getElementById("select_time").innerHTML = "  ";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("select_time").innerHTML = this.responseText;
            }
        };
        var moviename = "<?php echo  $_GET['movie']; ?>";
        var mov = moviename;

        alert(mov);
        //  why an error

        xmlhttp.open("GET","getdatetime.php?movie='Raees'&q="+str ,true);
        xmlhttp.send();
    }
}


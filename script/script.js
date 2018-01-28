/**
 * Created by ankit on 5/13/2017.
 */

window.onload = function(){ document.getElementById("loading").style.display = "none" }

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("goto-top-button").style.display = "block";
        document.getElementById("top-bar").style.display="none";
        document.getElementById("head").style.position="fixed";
        document.getElementById("head").style.opacity="0.8";
        document.getElementById("fixhead").style.display="block";
    } else {
        document.getElementById("goto-top-button").style.display = "none";
        document.getElementById("top-bar").style.display="block";
        document.getElementById("head").style.position="relative";
        document.getElementById("fixhead").style.display="none";


    }
}
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}


    function validateBookForm() {

        var x = document.forms["booking_form"]["multiplex_name"].value;
        var y = document.forms["booking_form"]["select_date"].value;
        var z = document.forms["booking_form"]["show_name"].value;


        if(x=="" ){
            alert("Please Select Multiplex");
            return false;
        }
        if(y=="" ){
            alert("Please Select Date");
            return false;
        }
        if(z=="" ){
            alert("Please Select Time");
            return false;
        }



    }

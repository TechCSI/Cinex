<?php




?>
<div id="content "   >
    <div class="movieContainer">
        <div class="contentHead">
            <h1 id="movieshow">Ongoing Show</h1>
        </div>
        <div class="contentList">

            <?php
            ongoing_movie();
            ?>
        </div>
    </div>
    <div class="movieContainer" >
        <div class="contentHead">
            <h1>Coming Soon....</h1>
        </div>
        <div class="contentList">
            <?php
            upcoming_movie();
            ?>
        </div>
    </div>
</div>

</div>


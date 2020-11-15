<script>
    function showsubmenu(id) {
        if (document.getElementsByClassName('childmenu')[id - 1].style.display == "none") {
            document.getElementsByClassName('childmenu')[id - 1].style.display = "block";
        }
        else {
            document.getElementsByClassName('childmenu')[id - 1].style.display = "none";
        }
    }
</script>
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left w3-left" style="z-index:3;width:300px;" id="mySidebar">
    <br>
    <div class="w3-container w3-row">
        <div class="w3-col s8 w3-bar" style="text-align: center;">
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="admin_user.php?action=show" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <a href="main.php" class="w3-container w3-bar-item w3-button w3-padding w3-blue w3-center" style="width: 100%;">
        <b>
            Dashboard</b></a>
    <div class="w3-bar-block  w3-left-align">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black w3-left-align"
           onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  close</a>

        <b class="w3-button w3-green w3-border" style="width: 100%;" onclick="showsubmenu(1)">System</b>
        <div class="childmenu" style="display: none;">
            <a href="admin_user.php?action=show" class="w3-bar-item w3-button w3-padding w3-left-align"><i
                        class="fa fa-bullseye fa-fw"></i> 
                System admin</a>
        </div>
        <b class="w3-button w3-green w3-border" style="width: 100%;" onclick="showsubmenu(2)">restaurant</b>
        <div class="childmenu" style="display: none;">
            <a href="restaurant_name.php?action=show" class="w3-bar-item w3-button w3-padding w3-left-align"><i
                        class="fa fa-bullseye fa-fw"></i> 
                manage restaurants</a>
            <a href="catagory.php?action=show" class="w3-bar-item w3-button w3-padding w3-left-align"><i
                        class="fa fa-bullseye fa-fw"></i> 
                food category</a>
            <a href="products.php?action=show" class="w3-bar-item w3-button w3-padding w3-left-align"><i
                        class="fa fa-bullseye fa-fw"></i> 
                products</a>
        </div>

        <b class="w3-button w3-green w3-border" style="width: 100%;" onclick="showsubmenu(3)">customers</b>
        <div class="childmenu" style="display: none;">
            <a href="customers.php?action=show" class="w3-bar-item w3-button w3-padding w3-left-align"><i
                        class="fa fa-bullseye fa-fw"></i> 
                customers</a>
        </div>

        <br><br>
        <br><br>
    </div>
</nav>


<style type="text/css">
    {
        box-sizing: border-box;

        ?margin: 0!important;
        padding: 0;
    }
    .nav-link{
        padding: 3px 8px!important;

    }
    body{
        margin: 0!important;
        padding:0!important;
    }
    .navbar .dropdown-toggle, .navbar .dropdown-menu a {
    cursor: pointer;
}

.navbar .dropdown-item.active, .navbar .dropdown-item:active {
    color: inherit;
    text-decoration: none;
    background-color: inherit;
}

.navbar .dropdown-item:focus, .navbar .dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
}

@media (min-width: 767px) {
    .navbar .dropdown-toggle:not(.nav-link)::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .5em;
        vertical-align: 0;
        border-bottom: .3em solid transparent;
        border-top: .3em solid transparent;
        border-left: .3em solid;
    }
}
@media screen and (min-width: 767px)
{
    #navbarCollapse{
        padding-left: 970px;
    }
}
.activenav{
    color: white!important;
    background-color: tomato!important;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" width="65px" height="65px"alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div style="float: right" class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=="index.php") {echo "activenav"; } ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if (basename($_SERVER['PHP_SELF'])=="football.php" ||basename($_SERVER['PHP_SELF'])=="cricket.php"||basename($_SERVER['PHP_SELF'])=="basketball.php") {echo "activenav"; } ?>" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: red;">Live</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" ><a href="boxing.php"style="text-decoration: none;">Boxing</a></li>
                    <li class="dropdown-item" ><a href="karate.php" style="text-decoration: none;">Karate</a></li>
                    <li class="dropdown-item" ><a  href="golf.php"style="text-decoration: none;">Golf</a></li>

                </ul>
            </li>





            <li class="nav-item">
                <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=="news.php") {echo "activenav"; } ?>" href="news.php">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=="gallery.php") {echo "activenav"; } ?>" href="gallery.php">Gallery</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=="aboutus.php") {echo "activenav"; } ?> " href="aboutus.php">About Us</a>
            </li>
            <!---<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if (basename($_SERVER['PHP_SELF'])=="changepassword.php") {echo "activenav"; } ?>" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Account</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" ><a href="changepassword.php"style="text-decoration: none;">Change Password</a></li>
                    
                </ul>
            </li>-->

            
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        
    </div>
</div>



<script type="text/javascript">
$(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});
</script>
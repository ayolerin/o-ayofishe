<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="home.php">
                        <img src="images/icons/wazobia2.jpg" alt="IMG-LOGO" data-logofixed="images/icons/wazobia2.jpg">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="home.php">Home</a>
                            </li>

                            <li>
                                <a href="menu.php">Menu</a>
                            </li>

                            <li>
                                <a href="reservation.php">Reservation</a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a href="https://www.instagram.com/wazobiachopsrw/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/wazobiachopsrw/"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/wazobiachopsrw/"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
            <h4> Welcome,  <?php echo $_SESSION['email']; ?> </h4>
        </li>
        <li class="t-center m-b-13">
            <a href="home.php" class="txt19">Home</a>
        </li>

        <li class="t-center m-b-13">
            <a href="menu.php" class="txt19">Menu</a>
        </li>

        <li class="t-center m-b-13">
            <a href="reservation.php" class="txt19">Reservation</a>
        </li>

<br>

        <li class="t-center">
            <!-- Button3 -->
            <form action="logout.php" method="POST"> 
          
          <button type="submit" name="logout_btn" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">Logout</button>

        </form>
        </li>
    </ul>

    <!-- - -->
    <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
        <!-- - -->
        <h4 class="txt20 m-b-33">
            Gallery
        </h4>

        <!-- Gallery -->
        <div class="wrap-gallery-sidebar flex-w">
            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
            </a>

            <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
                <img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
            </a>
        </div>
    </div>
</aside>

<!-- Slide1 -->
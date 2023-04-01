<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-university"></i>BroKar</a>

         <ul>
            <li><a href="post_property.php" class="post-property-btn">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">listings<i class="fas fa-caret-down"></i></a>
                  <ul>
                     <li><a href="listings.php">all listings</a></li>
                     <li><a href="my_listings.php">my listings</a></li>
                  </ul>
               </li>
               <li><a href="#">options<i class="fas fa-caret-down"></i></a>
                  <ul>
                     <li><a href="search.php">filter search</a></li>
                     <li><a href="post_property.php">post property</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-caret-down"></i></a>
                  <ul>
                     <li><a href="about.php">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
               <?php if($user_id == ''){ ?>
               <li><a href="login.php">login now</a></li>
                  <li><a href="register.php">register now</a></li>
                  <?php } ?>
            </ul>
         </div>


         <?php if($user_id != ''){ ?>
         <ul>
            <li><a href="saved.php">saved <i class="far fa-check-circle"></i></a></li>
            <li><a href="#">account <i class="fas fa-caret-down"></i></a>
               <ul>
                  <li><a href="update.php">update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                  </li>
               </ul>
            </li>
         </ul>
         <?php } ?>
      </section>
   </nav>

</header>

<!-- header section ends -->
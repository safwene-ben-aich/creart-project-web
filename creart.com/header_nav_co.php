<div id="header">
     
          <ul id="nav3">
<b id="welcome"><?php echo $lang['WELCOME']; ?> : <i><?php echo $row['username']?></i></b>
<b id="logout"><a href="http://localhost/creart.com/logout.php">(<?php echo $lang['LOG_OUT']; ?>)</a></b>
     </ul>
     
           <ul id="social">
      
        <li class="search1">

  <script src="cinema/ajax_cinema_safwene.js"></script>


<div id='search-box'>
  <form action='/search' id='search-form' method='get' target='_top' onkeyup="submitForm()" >
    <input id='search-text' name='q' placeholder='<?php echo $lang['TYPE_HERE']; ?>' type='text'/>
    <button id='search-button' type='submit'><span><?php echo $lang['SEARCH']; ?></span></button>
  </form>
</div>
        </li>
     <li><a href="https://twitter.com/CreartWebsite" ><img src="/creart.com/images/Twitter.png" width="33" height="38"/></a></li>
     <li><a href="https://www.facebook.com/pages/Creart/471236503051389?__mref=message_bubble" ><img src="/creart.com/images/Facebook.png" width="33" height="38"/></a></li>
     <li><a href="https://plus.google.com/u/0/117614243785122905117/about" ><img src="/creart.com/images/g+.png" width="33" height="38"/></a></li>

     </ul>
     
          <logo><a href="/creart.com/home.php" ><img src="/creart.com/images/LogoSite.png" alt="logo" width="215" height="148" /></a></logo>
     

     
     
     
     </div> <!--end header-->
     
     
       <nav>
    <div class="wrapper">
      <ul id="menu" class="clearfix">
            <li><a href="/creart.com/home.php" ><?php echo $lang['HOME']; ?></a></li> 
     <li><a href="/creart.com/myaccount.php" ><?php echo $lang['PROFIL']; ?></a>
     
     
 <ul>
 <li class="purple"><a href="/creart.com/myaccount.php"><?php echo $lang['MY_ACCOUNT']; ?></a></li>
 <li class="green"><a href="/creart.com/aymen/upload_work.php"><?php echo $lang['ADD_WORK']; ?></a></li>
 <li class="aqua"><a href="/creart.com/aymen/my_items.php"><?php echo $lang['MY_WORK']; ?></a></li>
  <li class="red"><a href="/creart.com/ghada/addevents.php"><?php echo $lang['ADD_EVENTS']; ?></a></li>

 </ul>
   
      </li>
     
     <li><a href="/creart.com/cinema/cinema.php?sort=date_pub" target=""><?php echo $lang['CINEMA'];?></a>
      <ul>
 <li class="purple"><a href="/creart.com/cinema/cinema.php?sort=kind"><?php echo $lang['CATEGORY'];?></a></li>
 <li class="green"><a href="/creart.com/cinema/cinema.php?sort=taux_rating"><?php echo $lang['HIT_PARADE']; ?></a></li>
 <li class="aqua"><a href="/creart.com/cinema/cinema.php?sort=nb_view"><?php echo $lang['MOST_VIEWED']; ?></a></li>
  <li class="red"><a href="/creart.com/cinema/cinema.php?sort=date_pub"><?php echo $lang['LATEST']; 


  ?></a></li>
      </ul>

     </li> 
     <li><a href="/creart.com/music/music.php?sort=date_pub" ><?php echo $lang['MUSIC']; ?></a>
           <ul>
 <li class="purple"><a href="/creart.com/music/music.php?sort=kind"><?php echo $lang['CATEGORY']; ?></a></li>
 <li class="green"><a href="/creart.com/music/music.php?sort=taux_rating"><?php echo $lang['HIT_PARADE']; ?></a></li>
 <li class="aqua"><a href="/creart.com/music/music.php?sort=nb_view"><?php echo $lang['MOST_VIEWED']; ?></a></li>
  <li class="red"><a href="/creart.com/music/music.php?sort=date_pub"><?php echo $lang['LATEST']; ?></a></li>
      </ul>
     </li> 
     <li><a href="/creart.com/photography/photography.php?sort=date_pub" ><?php echo $lang['PHOTOGRAPHY']; ?></a>
           <ul>
           
 <li class="purple"><a href="/creart.com/photography/photography.php?sort=kind"><?php echo $lang['CATEGORY']; ?></a></li>
 <li class="green"><a href="/creart.com/photography/photography.php?sort=taux_rating"><?php echo $lang['HIT_PARADE']; ?></a></li>
 <li class="aqua"><a href="/creart.com/photography/photography.php?sort=nb_view"><?php echo $lang['MOST_VIEWED']; ?></a></li>
  <li class="red"><a href="/creart.com/photography/photography.php?sort=date_pub"><?php echo $lang['LATEST']; ?></a></li>
      </ul>
     </li>
     <li><a href="/creart.com/literature/literature.php?sort=date_pub" ><?php echo $lang['LITERATURE']; ?></a>
           <ul>
 <li class="purple"><a href="/creart.com/literature/literature.php?sort=kind"><?php echo $lang['CATEGORY']; ?></a></li>
 <li class="green"><a href="/creart.com/literature/literature.php?sort=taux_rating"><?php echo $lang['HIT_PARADE']; ?></a></li>
 <li class="aqua"><a href="/creart.com/literature/literature.php?sort=nb_view"><?php echo $lang['MOST_VIEWED']; ?></a></li>
  <li class="red"><a href="/creart.com/literature/literature.php?sort=date_pub"><?php echo $lang['LATEST']; ?></a></li>
      </ul>
     
     </li> 
     <li><a href="/creart.com/aboutus.php" ><?php echo $lang['ABOUT_US']; ?></a>
           <ul>
 <li class="purple"><a href="#">Facebook</a></li>
 <li class="green"><a href="#">Twiter</a></li>
 <li class="aqua"><a href="#">Instagram</a></li>
  <li class="red"><a href="#">E_mail</a></li>
      </ul>
     </li>
      </ul>
    </div>
  </nav>
<script type="text/javascript">
$(function(){
  $('a[href="#"]').on('click', function(e){
    e.preventDefault();
  });
  
  $('#menu > li').on('mouseover', function(e){
    $(this).find("ul:first").show();
    $(this).find('> a').addClass('active');
  }).on('mouseout', function(e){
    $(this).find("ul:first").hide();
    $(this).find('> a').removeClass('active');
  });
  
  $('#menu li li').on('mouseover',function(e){
    if($(this).has('ul').length) {
      $(this).parent().addClass('expanded');
    }
    $('ul:first',this).parent().find('> a').addClass('active');
    $('ul:first',this).show();
  }).on('mouseout',function(e){
    $(this).parent().removeClass('expanded');
    $('ul:first',this).parent().find('> a').removeClass('active');
    $('ul:first', this).hide();
  });
});
</script>
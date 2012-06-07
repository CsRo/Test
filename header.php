<div id="header">
      <div id="logo-block">
        <!-- type your logo and small slogan here 
        <p id="logo">Vota Hoy <span class="logoblue">IFE</span></p>
        <p id="slogan">El cambio está en tus manos</p>-->
        <!-- end logo and small slogan -->
      </div>
      <div id="definels">
        <!-- login -->
        <div id="login_top">
            <?php
                if(!isset($_SESSION['user'])){
            ?>
        
              <p>login:&nbsp;&nbsp;</p>
                <form name="login" method="post" action="main_function/login.php" >		
                <input name="user" type="text" value="" class="topinputstyle" />
                <p>&nbsp;&nbsp;</p>
                <div class="formspace"><input name="pass" type="password" value="" class="topinputstyle" /></div>
                <p>&nbsp;&nbsp;</p>
                <div class="formspace"><input type="submit" value="" class="loginbutton" /></div>
              </form>
              
            <?php
                }else{
            ?>
                <p>Bienvenido <?=$_SESSION['user']?> | <a href="main_function/close_session.php">Cerrar sesion</a></p>
                
                <?php
                    }
                ?>	
          
        </div>
        <!-- end login -->
        <!-- search -->
        <div id="search">
        <? if($_GET['msg'] == "error") {?>
            <label id="msgWarning"> usuario o contraseña incorrecta</label>
        <? } ?>
          <form name="search" method="get" action="" target="_parent">
            <input type="text" class="box" />
            <button class="btn" title="Submit Search">Search</button>
          </form>
        </div>
        <!-- end search -->
      </div>
      <div class="cls"></div>
      <div id="top-nav-bg">
        <div id="top-nav">
          <!-- start top navigation bar -->
          <ul>
            <li><a <?=( ($menu == 1)? 'class="selected_menu"' : '')?> href="index.php">Home</a></li>
            <li><a <?=( ($menu == 2)? 'class="selected_menu"' : '')?> href="#">Products</a></li>
            <li><a <?=( ($menu == 3)? 'class="selected_menu"' : '')?> href="#">Services</a></li>
            <li><a <?=( ($menu == 4)? 'class="selected_menu"' : '')?> href="#">Portfolio</a></li>
            <li><a <?=( ($menu == 5)? 'class="selected_menu"' : '')?> href="#">About Us</a></li>
            <li><a <?=( ($menu == 6)? 'class="selected_menu"' : '')?> href="contact.php">Contact</a></li>
            <li><a <?=( ($menu == 7)? 'class="selected_menu"' : '')?> style="background-image: none;" href="#">Support</a></li>
          </ul>
          <!-- end top navigation bar -->
        </div>
      </div>
</div>
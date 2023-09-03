<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'My Account'; include_once 'inc/nav.php'; ?>
    
    <section class="tmp-profile">
      <ul>
        <li><img src="img/user.png" alt="" /></li>
        <li>
          <table border="0">
            <tr>
              <td><i class="fas fa-address-card"></i></td>
              <td>
                <?php echo ucwords($_USER['names']); ?>
                <label>Names</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-transgender-alt"></i></td>
              <td>
                <?php echo enum_f(Lists::GENDER,$_USER['gender']); ?>
                <label>Gender</label>
              </td>
            </tr>                
            <tr>
              <td><i class="fa fa-user-alt"></i></td>
              <td>
                <?php echo $_USER['username']; ?>
                <label>Username</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-paper-plane"></i></td>
              <td>
                <?php echo null_f($_USER['email']); ?>
                <label>Email</label>
              </td>
            </tr>
          </table>        
        </li>
        <li>
          <table border="0">            
            <tr>
              <td><i class="fas fa-phone fa-flip-horizontal"></i></td>
              <td>
                <?php echo null_f($_USER['phone']); ?>
                <label>Mobile</label>
              </td>
            </tr>          
            <tr>
              <td><i class="fa fa-lock"></i></td>
              <td>
                **** **** 
                <label>Password <a href="settings.php">(Update)</a></label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-wheelchair"></i></td>
              <td>
                <?php echo enum_f(Lists::ADMIN, $_USER['access']); ?>
                <label>Priviledge</label>
              </td>
            </tr>
            <tr>
              <td><i class="far fa-calendar-alt"></i></td>
              <td>
                <?php echo date_f($_USER['DATE']); ?>
                <label>Created</label>
              </td>
            </tr>
          </table>        
        </li>        
      </ul>
    </section>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>



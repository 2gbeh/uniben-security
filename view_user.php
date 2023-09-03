<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Employee Profile'; include_once 'inc/nav.php'; ?>
    
    <section class="tmp-profile tmp-profile-lg">
      <ul>
        <li>
        	<img src="<?php echo $pass_buf; ?>" alt="" />
          <p></p>
          <img src="<?php echo $sign_buf; ?>" alt="" />
          <p>&nbsp; <i class="fas fa-signature"></i> Signature</p>
          <img src="<?php echo $thumb_buf; ?>" alt="" />
          <p>&nbsp; <i class="fas fa-fingerprint"></i> Fingerprint</p>
          <div class="action">
            <button class="btn btn-sec" onClick="onDelete(<?php echo $row['ID']; ?>)" title="Delete">
            	<i class="fa fa-trash"></i>
            </button> &nbsp;
            <button class="btn btn-pri" onClick="onEdit(<?php echo $row['ID']; ?>)" title="Edit">
            	<i class="fa fa-pencil-alt"></i>
            </button>        
          </div>          
        </li>
        <li>
          <table border="0">
            <tr>
              <td><i class="fa fa-user-alt"></i></td>
              <td>
                <?php echo ucwords($row['surname']); ?>
                <label>Surname</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-address-card"></i></td>
              <td>
                <?php echo ucwords($row['fname'].' '.$row['mname']); ?>
                <label>Other Names</label>
              </td>
            </tr>         
            <tr>
              <td><i class="fa fa-transgender-alt"></i></td>
              <td>
                <?php echo enum_f(Lists::GENDER, $row['sex']); ?>
                <label>Gender</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-baby"></i></td>
              <td>
                <?php echo $row['dob']; ?>
                <label>Date of Birth</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-home"></i></td>
              <td>
                <?php echo $row['address']; ?>
                <label>Home Address</label>
              </td>
            </tr> 
           <tr>
              <td><i class="fas fa-map-marker-alt"></i></td>
              <td>
                <?php echo enum_f(Lists::COUNTRY, $row['country']); ?>
                <label>Nationality</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-paper-plane"></i></td>
              <td>
                <?php echo $row['email']; ?>
                <label>Email Addess</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-phone fa-flip-horizontal"></i></td>
              <td>
                <?php echo $row['phone']; ?>
                <label>Phone Number</label>
              </td>
            </tr>                      
          </table>        
        </li>
        <li>
          <table border="0">           
            <tr>
              <td><i class="fas fa-city"></i></td>
              <td>
                <?php echo enum_f(Lists::STATE, $row['state']); ?>
                <label>State of Origin</label>
              </td>
            </tr>           
            <tr>
              <td><i class="fas fa-landmark"></i></td>
              <td>
                <?php echo $row['lgo']; ?>
                <label>Local Govt. of Origin</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-graduation-cap"></i></td>
              <td>
                <?php echo $row['edu']; ?>
                <label>Educational Qualification</label>
              </td>
            </tr>          
            <tr>
              <td><i class="fas fa-laptop-code"></i></td>
              <td>
                <?php echo enum_f(Lists::BOOL, $row['ict']); ?>
                <label>Computer Literate</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-briefcase"></i></td>
              <td>
                <?php echo $row['emp']; ?>
                <label>Name of Previous Employer</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-building"></i></td>
              <td>
                <?php echo $row['emp_addr']; ?>
                <label>Address of Previous Employer</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-restroom"></i></td>
              <td>
                <?php echo enum_f(Lists::MARITAL, $row['marital']); ?>
                <label>Marital Status</label>
              </td>
            </tr>           
            <tr>
              <td><i class="fas fa-phone-square"></i></td>
              <td>
                <?php echo $row['spouse_bio']; ?>
                <label>Spouse Contact Info</label>
              </td>
            </tr>                                   
          </table>        
        </li>
        <li>
          <table border="0">
           <tr>
              <td><i class="fas fa-child"></i></td>
              <td>
                <?php echo $row['children']; ?>
                <label>No. of Children</label>
              </td>
            </tr>            
            <tr>
              <td><i class="fas fa-user-friends"></i></td>
              <td>
                <?php echo $row['kin_name']; ?>
                <label>Name of Next-of-Kin</label>
              </td>
            </tr>            
            <tr>
              <td><i class="fas fa-hands-helping"></i></td>
              <td>
                <?php echo $row['kin_rel']; ?>
                <label>Rel. with Next-of-Kin</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-phone-square"></i></td>
              <td>
                <?php echo $row['kin_bio']; ?>
                <label>Next-of-Kin Contact Info</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-balance-scale"></i></td>
              <td>
                <?php echo '('.enum_f(Lists::BOOL, $row['crime']).') '.$row['crime_reason']; ?>
                <label>Convicted of any Crime</label>
              </td>
            </tr>  
            <tr>
              <td><i class="fas fa-user-secret"></i></td>
              <td>
                <?php echo '('.enum_f(Lists::BOOL, $row['cult']).') '.$row['cult_name']; ?>
                <label>Member of Secret Cult</label>
              </td>
            </tr> 
            <tr>
              <td><i class="fa fa-calendar-day"></i></td>
              <td>
                <?php echo date_f($row['reg_date']); ?>
                <label>Registration Date</label>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-calendar-alt"></i></td>
              <td>
                <?php echo $row['DATE']; ?>
                <label>Entry Date</label>
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



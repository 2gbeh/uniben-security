<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Add Employee'; include_once 'inc/nav.php'; ?>
    
    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>    
        <table class="tmp-grid" border="0">
        	<tr>           
          	<td colspan="1">
              <label><x>*</x> Upload Passport :</label>
					    <input type="file" name="pass" accept="image/*" required />
            </td>
            <td colspan="3">&nbsp;</td>
        	</tr>   
        	<tr>                          
          	<td colspan="1">            
              <label><x>*</x> Surname :</label>
              <input type="search" name="surname" value="<?php echo $_POST['surname']; ?>" maxlength="15" list="hint_surname" required />
              <?php echo $hint_surname; ?>
            </td>
          	<td colspan="1">            
              <label>Middle Name :</label>
              <input type="search" name="mname" value="<?php echo $_POST['mname']; ?>" maxlength="15" list="hint_mname" />
              <?php echo $hint_mname; ?>
            </td>
          	<td colspan="1">            
              <label><x>*</x> First Name :</label>
              <input type="search" name="fname" value="<?php echo $_POST['fname']; ?>" maxlength="15" list="hint_fname" required />
              <?php echo $hint_fname; ?>
            </td>
          	<td colspan="1">
              <label><x>*</x> Select Gender :</label>
              <select name="sex" required>
                <option></option>
                <?php echo $ddl_sex; ?>
              </select>
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Date of Birth :</label>
              <input type="date" name="dob" value="<?php echo alt_f($_POST['dob'],date('Y-m-d')); ?>" required />
            </td>          
          	<td colspan="2">
              <label><x>*</x> Home Address :</label>
              <input type="text" name="address" value="<?php echo $_POST['address']; ?>" required />
            </td> 
          	<td colspan="1">
              <label><x>*</x> Nationality :</label>
              <select name="country" required>
                <option></option>
                <?php echo $ddl_country; ?>
              </select>              
            </td>
          </tr>
        	<tr>   
          	<td colspan="1">
              <label><x>*</x> State of Origin: :</label>
              <select name="state" required>
                <option></option>
                <?php echo $ddl_state; ?>
              </select>
            </td> 
          	<td colspan="1">
              <label><x>*</x> Local Govt. of Origin :</label>
              <input type="search" name="lgo" value="<?php echo $_POST['lgo']; ?>" list="hint_lgo" required />
              <?php echo $hint_lgo; ?>
            </td>                             
          	<td colspan="1">
              <label>Email Address :</label>
              <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" />
            </td>
          	<td colspan="1">
              <label><x>*</x> Phone Number :</label>
              <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Ex. +234(0)" maxlength="15" required />
            </td>
          </tr>
        	<tr>                          
          	<td colspan="1">            
              <label><x>*</x> Educational Qualification :</label>
              <input type="search" name="edu" value="<?php echo $_POST['edu']; ?>" placeholder="Ex. B.Sc." list="hint_edu"  required />
              <?php echo $hint_edu; ?>
            </td>
          	<td colspan="1">            
              <label><x>*</x> Are you Computer Literate :</label>
              <select name="ict" required>
                <option></option>
                <?php echo $ddl_ict; ?>
              </select>
            </td>
          	<td colspan="1">
              <label>Name of Previous Employer :</label>
              <input type="text" name="emp" value="<?php echo $_POST['emp']; ?>" />
            </td>
          	<td colspan="1">
              <label>Office Address of Previous Employer :</label>
              <input type="text" name="emp_addr" value="<?php echo $_POST['emp_addr']; ?>" />              
            </td>
          </tr>           
        	<tr>                          
          	<td colspan="1">            
              <label><x>*</x> Marital Status :</label>
              <select name="marital" required>
                <option></option>
                <?php echo $ddl_marital; ?>
              </select>
            </td>
          	<td colspan="2">
              <label>Address &amp; Phone No. of Spouse (if Married) :</label>
              <input type="text" name="spouse_bio" value="<?php echo $_POST['spouse_bio']; ?>" />
            </td>
          	<td colspan="1">
              <label>No. of Children (if any) :</label>
              <input type="number" name="children" value="<?php echo alt_f($_POST['children'],0); ?>" min="0" />              
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Name of Next-of-Kin :</label>
              <input type="text" name="kin_name" value="<?php echo $_POST['kin_name']; ?>" required />
            </td>
          	<td colspan="1">
              <label><x>*</x> Relationship with Next-of-Kin :</label>
              <input type="search" name="kin_rel" value="<?php echo $_POST['kin_rel']; ?>" list="hint_kin_rel" required />
              <?php echo $hint_kin_rel; ?>
            </td>
          	<td colspan="2">
              <label><x>*</x> Address &amp; Phone No. of Next-of-Kin :</label>
              <input type="text" name="kin_bio" value="<?php echo $_POST['kin_bio']; ?>" required />              
            </td>
          </tr> 
        	<tr>                          
          	<td colspan="1">            
              <label><x>*</x> Have you been previously <br/>convicted of any Crime :</label>
              <select name="crime" required>
                <option></option>
                <?php echo $ddl_crime; ?>
              </select> 
            </td>
          	<td colspan="3">
              <label>If YES, why :</label>
              <input type="text" name="crime_reason" value="<?php echo $_POST['crime_reason']; ?>" />              
            </td>
          </tr>   
        	<tr>                          
          	<td colspan="1">            
              <label><x>*</x> Are you currently a member <br/>of any Secret Cult :</label>
              <select name="cult" required>
                <option></option>
                <?php echo $ddl_cult; ?>
              </select> 
            </td>
          	<td colspan="3">
              <label>If YES, which :</label>
              <input type="text" name="cult_name" value="<?php echo $_POST['cult_name']; ?>" maxlength="25" />              
            </td>
          </tr>             
        	<tr>           
          	<td colspan="1">
              <label><x>*</x> Upload Signature :</label>
					    <input type="file" name="sign" accept="image/*" required />
            </td>
          	<td colspan="1">
              <label>Date of Registration :</label>
              <input type="date" name="reg_date" value="<?php echo alt_f($_POST['reg_date'],date('Y-m-d')); ?>" />
            </td>             
            <td colspan="1">&nbsp;</td>
          	<td colspan="1">
              <label><x>*</x> Upload Thumbprint :</label>
					    <input type="file" name="thumb" accept="image/*" required />
            </td>        
        	</tr>
         </table>
		      <div style="color:#E11; padding:20px 0 0;">
          	<b>NOTE</b>: Any wrong information given will be used against you or will result to outright dismissal!
          </div>         
        <div class="action">
	        <!--<input type="hidden" name="admin_id" value="<?php echo $_USER['ID']; ?>" readonly />-->        
          <button type="reset" class="sec">Clear</button> &nbsp;
          <button type="submit" class="pri">Save</button>
        </div>
      </fieldset>
    </form>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>


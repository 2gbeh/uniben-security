<?php include_once 'inc/top.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Manage Employees'; include_once 'inc/nav.php'; ?>
    
    <form class="tmp-form tmp-form-toolbar" <?php echo FORM_ATTRIB_GET; ?>>
      <table border="0">
      	<tr valign="bottom">
        	<td>
            <select name="q" required>
              <option disabled selected>Search employee records..</option>
              <?php echo $ddl_user; ?>
            </select>
		      </td>
        	<td align="right" width="1">
	          <input type="hidden" name="v" value="true" />
		        <button type="submit" class="pri">Search</button>
		      </td>        
        </tr>
      </table>        
    </form>
  
    <table class="tmp-table" border="0">
      <tr>
	      <th width="1">&nbsp;</th>
        <th width="1">#</th>
        <th nw>Surname</th>
        <th nw>Other Names</th>
        <th>Sex</th>
        <th>Date of Birth</th>
        <th>Phone Number</th>
        <th>Home Address</th>
        <th>State of Origin</th>
        <th>Local Govt.</th>
        <th>Qualification</th>
        <th>Reg. Date</th>
        <th>&nbsp;</th>
      </tr>
      
			<tbody>
      	<?php echo $rows; ?>
      </tbody>
<!--      <tbody id="x"></tbody>-->
    </table> 
		<p></p>
    
		<?php echo $pager->nav; ?>      
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>
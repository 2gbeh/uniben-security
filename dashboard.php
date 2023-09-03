<?php include_once 'inc/top.php'; ?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td>
  <td>  
    <main class="tmp-base"> 
			<?php $list_nav_key = 'Dashboard'; include_once 'inc/nav.php'; ?>
     
      <table class="chart_grid" border="0">
        <tr>
          <td colspan="2">
            <?php echo Charts::bar('Age Demographic', $bar_labels, $bar_values); ?>
          </td>
          <td colspan="1">
            <?php echo Charts::ring('Gender Demographic','Male Staff', $ring_rate_sex, 2); ?>
          </td>          
          <td colspan="1">
            <?php echo Charts::ring('Technical Demographic','ICT Literacy', $ring_rate_ict, 2); ?>
          </td>
				</tr>         
          <td colspan="4">
			      <?php echo Charts::column('State of Origin Demographic', $col_labels, $col_values, true); ?>
          </td>          
				</tr>      
      </table>      
    </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>
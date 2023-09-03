<?php include_once 'inc/top.php'; ?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.php'; ?>  
  </td>
  <td>  
    <main class="tmp-base">  
			<?php $list_nav_key = 'Home'; include_once 'inc/nav.php'; ?>
      <table class="tmp-ribbon" border="0">
      	<caption>Weekly sales analysis</caption>
        <tr>
          <td> C1 Total</td>
          <td> C2 Total</td>
          <td> C3 Total</td>
          <td> C4 Total</td>
          <td> C5 Total</td>
          <td> C6 Total</td>
          <td>Total Books</td>
          <td>NET Sales</td>    
        </tr>    
        <tr>
          <th>8,040</th>
          <th>4,960</th>
          <th>2,085</th>
          <th>6,525</th>
          <th>3,510</th>
          <th>3,420</th>
          <th>28,540</th>
          <th>&#8358; 13,114,040</th>
        </tr>
      </table>
      <p></p>
      
      <table class="tmp-table" border="0">
        <tr>
          <th>#</th>
          <th>Book Title</th>
          <th ar>C1</th>
          <th ar>C2</th>
          <th ar>C3</th>
          <th ar>C4</th>
          <th ar>C5</th>
          <th ar>C6</th>
          <th ar>Total</th>
          <th ar>Rate (&#8358;)</th>
          <th>Gross (&#8358;)</th>
          <th>Discount (&#8358;)</th>
          <th>NET (&#8358;)</th>
        </tr>
          <tr>
            <td>1</td>
            <td>RETINKEN Basic Mathematics</td>
            <td ar>536</td>
            <td ar>324</td>
            <td ar>139</td>
            <td ar>435</td>
            <td ar>234</td>
            <td ar>228</td>
            <td ar>1,896</td>
            <td ar>900</td>
            <td>1,706,400</td>
            <td>246,480</td>
            <td>1,459,920</td>
          </tr>        
				<tbody id="x"></tbody>
      </table>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.php'; ?>
<?php include_once 'inc/end.php'; ?>
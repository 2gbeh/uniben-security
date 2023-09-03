<script type="text/javascript">
	activeMenu();
	autofill(0);
	activeWeb();
	if (document.getElementById('x') !== null)	
	{
		var buf = '</tr><tr> \
			<td> \
				<button class="btn btn-alt" onClick="onView(1)" title="View">&#128065;</button>							 \
			</td> \
			<td>1</td> \
		<td nw>DOE</td> \
			<td nw>John </td> \
			<td>M</td> \
			<td>2021-01-20</td>		 \
			<td>08012345678</td> \
			<td>No. 1 College Road, Agbor, Delta State</td>			 \
			<td>Delta</td> \
			<td>Agbor-Obi</td> \
			<td>B.Sc.</td> \
			<td>Wed, Jan 20, 2021</td> \
			<td nw ar> \
				<button class="btn btn-pri" onClick="onEdit(2)" title="Edit">&#9998;</button>  \
				<button class="btn btn-sec" onClick="onDelete(2)" title="Delete">&#10006;</button> \
			</td> \
		</tr><tr> \
			<td> \
				<button class="btn btn-alt" onClick="onView(1)" title="View">&#128065;</button>							 \
			</td> \
			<td>2</td>			 \
			<td nw>EJENWENGBE</td> \
			<td nw>Monday Martins</td> \
			<td>M</td> \
			<td>1968-05-13</td>		 \
			<td>08058766449</td> \
			<td>2 Utomwen Street, off new Lagos Road, Benin City</td>			 \
			<td>Edo</td> \
			<td>Orhionmwon</td> \
			<td>First Degre</td>	 \
			<td>Thu, Jan 21, 2021</td> \
			<td nw ar> \
				<button class="btn btn-pri" onClick="onEdit(1)" title="Edit">&#9998;</button>  \
				<button class="btn btn-sec" onClick="onDelete(1)" title="Delete">&#10006;</button> \
			</td> \
		</tr><tr> \
			<td> \
				<button class="btn btn-alt" onClick="onView(4)" title="View">&#128065;</button>							 \
			</td> \
			<td>3</td>			 \
			<td nw>TUGBEH</td> \
			<td nw>Emmanuel Osaretin</td> \
			<td>M</td> \
			<td>1992-09-15</td>		 \
			<td>08169960927</td> \
			<td>39B Uwasota Road, Ugbowo, Benin City, Edo State</td>			 \
			<td>Edo</td> \
			<td>Uhunmwode</td> \
			<td>M.Sc.</td> \
			<td>Thu, Jan 21, 2021</td> \
			<td nw ar> \
				<button class="btn btn-pri" onClick="onEdit(4)" title="Edit">&#9998;</button>  \
				<button class="btn btn-sec" onClick="onDelete(4)" title="Delete">&#10006;</button> \
			</td> \
		</tr>';		
		set('x', repeatUntil(buf,2));
	}
</script>
</body>
</html>
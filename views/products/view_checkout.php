<table border="solid 1px">
	<tr>
	
		
		<td colspan="" rowspan="" headers="">ID</td>
		<td colspan="" rowspan="" headers="">Khách hàng</td>
		<td colspan="" rowspan="" headers="">SĐT</td>
		<td colspan="" rowspan="" headers="">Email</td>
		<td colspan="" rowspan="" headers="">bank</td>
		<td colspan="" rowspan="" headers="">time</td>
		<td colspan="" rowspan="" headers="">deliveried</td>
		<td colspan="" rowspan="" headers="">payed</td>
		<td colspan="" rowspan="" headers="">total</td>
		<td></td>
	</tr>
	<?foreach ($checkout as $p) { ?>
	<tr>
	   <td><?echo $p['id']?></td>
	   <td><?echo $p['name_customer']?></td>
	   <td><?echo $p['phone']?></td>
	   <td><?echo $p['email']?></td>
	   <td><?echo $p['bank']?></td>
	   <td><?echo $p['time']?></td>
	    <td><?echo $p['deliveried']?></td>
	    <td><?echo $p['payed']?></td>
	   <td><?echo $p['total']?></td>
	   </td>


	<?}

	?>


</table>
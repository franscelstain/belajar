<h1>Inventories</h1>
<p>
    <?php
	echo $this->Html->link("Add Inventories", array('action' => 'add'));
    ?>
</p>
<table>
    <thead>
	<tr>
	    <th>No</th>
	    <th>Name</th>
	    <th>Vendor SN</th>
	    <th colspan=2>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
	    $i=1;
	    foreach ($inventory as $a):
         ?>
	    
            <tr>
                <td><?php echo $i; ?></td>
		<td><?php echo $a['Inventory']['name'] ?></td>
                <td><?php echo $a['Inventory']['vendor_sn'] ?></td>
		<td><?php echo $this->Html->link("Edit", array('action' => 'edit', $a['Inventory']['id'])); ?>
			<?php
			      echo $this->Form->postLink(
				    'Delete',
				    array('action' => 'delete', $a['Inventory']['id']),
				    array('confirm' => 'Are you sure?'));
			?>
	        </td>
            </tr>
	    
        <?php
	    $i++;
	    endforeach;
        ?>
    </tbody>
</table>
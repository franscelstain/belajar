<h1>Add People</h1>
<?php
    echo $this->Form->create('Inventories');
    echo $this->Form->input('name');
    echo $this->Form->input('vendor_sn');
    echo $this->Form->end('Save');
?>
    
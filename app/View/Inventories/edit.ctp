<h1>Edit People</h1>
<?php
    echo $this->Form->create('Inventory');
    echo $this->Form->input('name');
    echo $this->Form->input('vendor_sn');
    echo $this->Form->end('Save');
?>
    
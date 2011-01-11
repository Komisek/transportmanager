<h2>Login</h2>
<?php
echo $this->Form->create('Employee', array('url' => array('controller' => 'employees', 'action' =>'login')));
echo $this->Form->input('Employee.name');
echo $this->Form->input('Employee.passwd');
echo $this->Form->end('Login');
?>


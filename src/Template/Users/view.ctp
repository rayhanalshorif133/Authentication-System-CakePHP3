<?php

$this->assign('title', "User Profile");
?>
<div class="card card-primary w-50 align-content-center m-auto">
    <div class="card-header">
        <h3 class="card-title">User Details</h3>
    </div>
    <div class="card-body">
        <div class="card-title"> Name: <?php echo $user->name ?></div>
        <div class="card-text"> Email: <?php echo $user->email ?></div>
        <div class="card-text"> Phone: <?php echo $user->phone ?></div>
        <div class="card-text"> Address: <?php echo $user->address ?></div>
    </div>
    <div class="card-footer">
        <?php echo $this->Html->link(
            'Back',
            ['action' => 'index'],
            ['class' => 'btn btn-danger btn-sm ml-1']
        ); ?>
    </div>
</div>

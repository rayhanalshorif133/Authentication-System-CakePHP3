<?php

$this->assign('title', "Users");
?>
<div class="card card-primary w-50 align-content-center m-auto">
    <div class="card-header">
        <h3 class="card-title">Create New User</h3>
    </div>

    <!--  -->
    <?php echo $this->Form->create('$user', ['url' => ['action' => 'add'], 'type' => 'post']) ?>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('name', ['type' => 'text', 'class' => "form-control", "placeholder" => "Enter name", 'name' => 'name']) ?>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Email', ['type' => 'email', 'class' => "form-control", "placeholder" => "Enter email", 'name' => 'email']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Phone', ['type' => 'number', 'class' => "form-control", "placeholder" => "Enter phone", 'name' => 'phone']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Address', ['type' => 'text', 'class' => "form-control", "placeholder" => "Enter address", 'name' => 'address']) ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Password', ['type' => 'password', 'class' => "form-control", "placeholder" => "Enter password", 'name' => "password"]) ?>
                </div>
            </div>

        </div>
    </div>

    <div class="card-footer">
        <div class="btn-group">
            <?php echo $this->Form->button(_('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary btn-sm']) ?>
            <?php echo $this->Html->link(
                'Back',
                ['action' => 'index'],
                ['class' => 'btn btn-danger btn-sm ml-1']
            ); ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>

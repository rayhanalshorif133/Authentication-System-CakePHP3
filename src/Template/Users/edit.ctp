<?php

$this->assign('title', "Edit User");
?>
<div class="card card-primary w-50 align-content-center m-auto">
    <div class="card-header">
        <h3 class="card-title">Update User</h3>
    </div>

    <!--  -->
    <?php echo $this->Form->create('$user', ['url' => ['action' => 'edit', 'id' => $user->id], 'type' => 'post']) ?>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('name', ['type' => 'text', 'class' => "form-control", "placeholder" => "Enter name", 'name' => 'name', 'value' => $user->name]) ?>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Email address', ['type' => 'email', 'class' => "form-control", "placeholder" => "Enter email", 'name' => 'email', 'value' => $user->email]) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Phone', ['type' => 'number', 'class' => "form-control", "placeholder" => "Enter phone", 'name' => 'phone', 'value' => $user->phone]) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('User address', ['type' => 'text', 'class' => "form-control", "placeholder" => "Enter address", 'name' => 'address', 'value' => $user->address]) ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $this->Form->input('Password', ['type' => 'password', 'class' => "form-control", "placeholder" => "Enter password", 'name' => "password"]) ?>
                </div>
            </div>

        </div>



        <div class="form-check d-done">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
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

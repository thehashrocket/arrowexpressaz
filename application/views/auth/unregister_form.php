<div class="row">
    <div class="small-10 small-centered">
        <div id="" class="row">
            <div id="" class="small-12 medium-9 columns">
                <p>
                <h1>Unregister</h1>
                </p>
                <?php
                $password = array(
                    'name' => 'password',
                    'id' => 'password',
                    'size' => 30,
                );
                ?>
                <?php echo form_open($this->uri->uri_string()); ?>
                <table>
                    <tr>
                        <td><?php echo form_label('Password', $password['id']); ?></td>
                        <td><?php echo form_password($password); ?></td>
                        <td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></td>
                    </tr>
                </table>
                <?php echo form_submit('cancel', 'Delete account'); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

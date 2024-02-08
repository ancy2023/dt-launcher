<?php
$this->layout('layouts/plugin');
?>

<div>
    <dt-launcher-app-grid id="appGrid" app-data='<?php echo htmlspecialchars($data); ?>'
                          app-url='<?php echo esc_url($app_url); ?>'>
        <!-- Add more app icons as needed -->
    </dt-launcher-app-grid>
    <div>
        <?php echo $this->section('content') ?>
    </div>

    <b>
        Name: <?php echo $this->e($user->user_nicename); ?>
    </b>

    <a href="<?php echo esc_url($subpage_url); ?>">
        <?php $this->esc_html_e('Visit subpage', 'dt-launcher'); ?>
    </a>

    <dt-launcher-footer></dt-launcher-footer>
</div>

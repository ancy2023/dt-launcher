<?php
$this->layout( 'layouts/plugin' );
?>

<div>
    <dt-tile>
        <div class="section__inner">
            <div>
                <dt-copy-text value="<?php echo esc_url($magic_url ); ?>"></dt-copy-text>
            </div>
            <div>
                <?php echo $this->section( 'content' ) ?>
            </div>

            <b>
                Name: <?php echo $this->e( $user->user_nicename ); ?>
            </b>

            <a href="<?php echo esc_url( $subpage_url ); ?>">
                <?php $this->esc_html_e( 'Visit subpage', 'dt-launcher' ); ?>
            </a>

            <dt-launcher-footer></dt-launcher-footer>
        </div>
    </dt-tile>
</div>

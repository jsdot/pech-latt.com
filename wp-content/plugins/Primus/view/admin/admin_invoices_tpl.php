<div class="wrap">

    <h1>Demande client de Facture</h1>

    <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">`


        <div class="options">
            <p>
                <label>What message would you like to display above each post?</label>
                <br />
                <input type="text" name="acme-message" value="" />
            </p>
        </div><!-- #universal-message-container -->

        <?php
        wp_nonce_field( 'acme-settings-save', 'acme-custom-message' );
        submit_button();
        ?>






    </form>

</div><!-- .wrap -->
<?php wp_footer() ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php wp_nav_menu(array("menu"=>"footer")); ?>
            </div>
            <div class="col-md-4">
                <h3>ABOUT</h3>
                <?php
                    $page = get_page_by_title( 'ABOUT' );
                    echo $page -> post_content;
                ?>
            </div>
            <div class="col-4">
                <h3>Newsletter</h3>
                <form action="post">
                    <label for="mail">Email</label>
                    <input type="email" name="" id="mail">
                    <button class=" btn btn-primary" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</footer>
</body>

</html>

<?php wp_footer(); ?>


<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
            <a href="<?php echo get_site_url(); ?>">
                <?php 
                    $title = get_bloginfo('name');
                    $split_title = preg_split("/( |-|,)/", $title);
                ?>
                <strong><?php echo $split_title[0]; ?></strong> <?php echo $split_title[1]; ?>
            </a>
            </h1>
            <p><a class="site-footer__link" href="#">123.456.7890</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
              <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                  ));                
                ?>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="/privacy-policy">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
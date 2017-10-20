<footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <?php
              $args=array(
                  'theme_location' => 'footer', // nom du slug
                  'menu' => 'footer_fr', // nom à donner cette occurence du menu
                  'menu_class' => 'menu_footer', // class à attribuer au menu
                  'menu_id' => 'menu_footer_id' // id à attribuer au menu
                  // voir les autres arguments possibles sur le codex
              );
              wp_nav_menu($args);
              ?>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-12 col-md-4">
              <?php
              if ( is_active_sidebar( 'Sidebar Footer' ) ) { ?>
                  <ul id="sidebar">
                      <?php dynamic_sidebar( 'Sidebar Footer' ); ?>
                  </ul>
               <?php } ?>
            </div>
            <div class="col-xs-12 col-md-4">
              <?php
              if ( is_active_sidebar( 'Sidebar Footer 2' ) ) { ?>
                  <ul id="sidebar">
                      <?php dynamic_sidebar( 'Sidebar Footer 2' ); ?>
                  </ul>
               <?php } ?>
            </div>
            <div class="col-xs-12 col-md-4">
              <?php
              if ( is_active_sidebar( 'Sidebar Footer 3' ) ) { ?>
                  <ul id="sidebar">
                      <?php dynamic_sidebar( 'Sidebar Footer 3' ); ?>
                  </ul>
               <?php } ?>
            </div>

          </div>
        </div>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>

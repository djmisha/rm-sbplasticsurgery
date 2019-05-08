  <div class="flexible-split-section">
    <div style="background-image: url('<?php the_sub_field('image'); ?>');" class="with-bg" ></div>
    <div class="flexible-jump-links">
      <div class="jump-link-list">
        <div class="jump-link-list-border">
          <?php if(have_rows('link_list')): ?>
            <ul>
              <?php while(have_rows('link_list')): the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('label'); ?>"><?php the_sub_field('link'); ?></a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

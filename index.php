<?php get_header(); ?>

  <section class="row title-bar">
    <div class="container">
      <div class="col-md-12">
        <h1><?php echo __('Blog'); ?></h1>
      </div>
    </div>
  </section>

  <section class="row main">
    <div class="container">
      <?php if(is_active_sidebar('sidebar')) : ?>
        <div class="col-md-8">
      <?php else : ?>
        <div class="col-md-12">
      <?php endif; ?>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <article class="post">
              <div class="col-md-5">
                <div class="post-thumbnail">
                  <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block"><?php echo __('Read More'); ?></a>
                </div>
                <div class="col-md-7">
                <ul class="meta">
                  <li>By <a href="#">Admin</a></li>
                  <li>May 11, 2016</li>
                  <li><a href="#">Business</a></li>
                </ul>
                  <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</p>
                </div>
              </article>
              <?php endwhile; ?>
              <div class="clr"></div>
        <?php endif; ?>
    </div>

    <?php if(is_active_sidebar('sidebar')) : ?>
        <div class="col-md-4">
          <?php dynamic_sidebar('sidebar'); ?>
        </div>
    <?php endif; ?>
    </div>
  </section>

  <?php if(is_active_sidebar('content-region-1')) : ?>
    <?php dynamic_sidebar('content-region-1'); ?>
  <?php endif; ?>

  <?php if(is_active_sidebar('content-region-2')) : ?>
    <?php dynamic_sidebar('content-region-2'); ?>
  <?php endif; ?>

<?php get_footer(); ?>

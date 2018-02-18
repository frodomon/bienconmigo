<section id="news" class="group">
  <div class="subtitle" style="margin:1.5rem 10%; width:80%; ">
    <h2 class="no-margin" style="text-align:center; text-transform:uppercase;font-family:'Montserrat-Bold';color: #5d5e5e;">Artículos Recientes</h2>
  </div>  
  <div id="news-posts" class="group">
    <?php 
      $posts= query_posts(array(
        'posts_per_page' => '3',
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => 
          array(  
            array(
              'taxonomy' => 'post_format',
              'field' => 'slug',
              'terms' => array('post-format-quote', 'post-format-status','post-format-gallery','post-format-chat','post-format-video','post-format-audio','post-format-link'),
              'operator' => 'NOT IN'
            )
          )
      ));
      foreach ($posts as $post) :  setup_postdata($post); 
    ?>      
      <div class="news-post group">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php $post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
          <div class="news-thumbnail" style="background:url(<?php echo $post_thumbnail_url; ?>) no-repeat center center; background-size:cover">
          </div>
        </a>
        <div class='news-post-content group'>
          <h3 class="news-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="news-post-excerpt"><?php print get_the_excerpt($post); ?></p>
        </div>
      </div>
    <?php endforeach;
    wp_reset_postdata(); ?>
  </div>
</section>
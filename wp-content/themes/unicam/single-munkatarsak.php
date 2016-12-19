<?php get_header(); ?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php while ( have_posts() ) : the_post(); ?>
  <?php

  						/*
  						*  Query posts for a relationship value.
  						*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
  						*/

  						$doctors = get_posts(array(
  							'post_type' => 'termekeink',
  							'meta_query' => array(
  								array(
  									'key' => 'relation', // name of custom field
  									'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
  									'compare' => 'LIKE'
  								)
  							)
  						));

  						?>

              <?php if( $doctors ): ?>
							<ul>
							<?php foreach( $doctors as $doctor ): ?>
								<?php

								$photo = get_field('photo', $doctor->ID);

								?>
								<li>
									<a href="<?php echo get_permalink( $doctor->ID ); ?>">
										<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" width="30" />
										<?php echo get_the_title( $doctor->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
<?php endwhile; ?>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php get_footer(); ?>

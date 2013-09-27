<?php get_header() ?>
  <?php if(is_front_page()) { ?>
    <div id="event-specifics">
      <div id="mini-schedule">
        <div class="day">
          <h3>Friday, September 27</h3>
          <ul>
            <li>
              <a href="http://wherecamppdx.org/2013/09/26/join-us-tomorrow-for-our-opening-party/">Opening Party</a>, sponsored by <a href="http://esri.com">Esri</a><br>

              6–9pm at <a href="https://temboo.com/">Temboo</a> / <a href="http://vimeo.com/63625331">NXT Industries</a><br>
              <a href="https://www.google.com/maps/preview#!q=+123+NW+2nd+Ave%2C+Portland&data=!4m10!1m9!4m8!1m3!1d190015!2d-122.654422!3d45.5434085!3m2!1i1190!2i816!4f13.1">123 NW 2nd Ave</a>
            </li>
          </ul>
        </div>
        <div class="day">
          <h3>Saturday, September 28</h3>
          <ul>
            <li>
              Unconference Day!<br>
              10am–6pm at <a href="http://www.oregonmetro.gov/index.cfm/go/by.web/id=3315">Metro Regional Center</a><br>
              <a href="https://www.google.com/maps/preview#!q=Metro+Regional+Center%2C+Northeast+Grand+Avenue%2C+Portland%2C+OR&data=!4m11!1m10!2i21!4m8!1m3!1d190015!2d-122.654422!3d45.5434085!3m2!1i1190!2i816!4f13.1">600 NE Grand</a>
            </li>
          </ul>
        </div>
        <div class="day">
          <h3>Sunday, September 29</h3>
          <ul>
            <li>
              Fun and mapmaking!<br>
              10am–4pm at <a href="http://fluxlab.io/">Flux Hacker Space</a><br>
              <a href="https://www.google.com/maps/preview#!q=422+NW+Couch+St%2C+Portland%2C+OR&data=!4m10!1m9!4m8!1m3!1d11879!2d-122.660508!3d45.5275313!3m2!1i1190!2i816!4f13.1">412 NW Couch #222</a>
            </li>
            <li>
              <a href="https://twitter.com/maptimepdx">MaptimePDX</a> – 1–4pm at Flux
            </li>
          </ul>
        </div>
      </div>
      <!--<a class="register" href="http://wherecamppdx6.eventbrite.com/">Register for free today!</a>-->
    </div>
    <div id="what-is-wherecamp">
      <h2>What's a WhereCamp?</h2>

      <p><a href="http://wherecamp.org">WhereCamps</a> are <a
        href="http://en.wikipedia.org/wiki/Unconference">unconferences</a>
      that aim to connect geo-enthusiasts, developers, social place hackers,
      artists, activists, grad students, geographers, earth scientists and
      anybody else who wants to "know their place".</p>

      <p>Popular topics include social cartography, software and
      hardware, context awareness, mobile experimentation,
      humanitarian mapping efforts, food webs and local food
      transparency, transit, psychogeography, geo games, paper
      maps, and place hacking.</p>
    </div>

    <div id="background-credit">Our 2013 background map is <a href="http://dealloc.me/2013/06/30/the-making-of-pdx.html"><em>Portland, Oregon: The Age of a City</em></a> by <a href="http://labratrevenge.com/">Justin Palmer</a></div>
  <?php } ?>
	<div id="container">
		<div id="content">

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>



    <?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
				<div class="entry-content">
<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</div>
			</div><!-- .post -->

<?php comments_template() ?>

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

		</div><!-- #content -->

	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>

<footer class="footer dark">
  <div class="container">
    <div class="row footer-contact">
        <div class="col-lg-3 col-md-3 contact-block">
          <b>Címünk:</b> <a target="_blank" href="https://www.google.com/maps/place/Budapest,+Kőszeg+u.+27,+1144+Magyarország/@47.507508,19.1372863,17z/data=!3m1!4b1!4m5!3m4!1s0x4741db5425bf4339:0xc9f1878597f5823d!8m2!3d47.507508!4d19.139475">1144 Budapest, Kőszeg u. 27</a>
        </div>
        <!-- <div class="col-lg-1 col-md-1 contact-bullet">
          <span class="bullet"></span>
        </div> -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 contact-block">
          <b>Tel:</b> <a href="tel: +3612215536">1-2215536</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 contact-block">
          <b>Fax:</b> <a href="tel: +3612215536">1-2215543</a>
        </div>
        <div class="clearfix visible-xs"></div>
        <div class="col-lg-3 col-md-3 contact-block">
          <b>E-mail:</b> <a href="mailto: unicam@unicam.hu">unicam@unicam.hu</a>
        </div>
      </div>
    <div class="row footer-social">

      <div class="col-lg-4 col-md-4 contact-block">
      <div class="social-icon facebook">
        <a href="https://www.facebook.com/unicamhungary/" target="_blank">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
          </svg>
        </a>
      </div>
      <div class="social-icon linkedin">
        <a href="https://www.linkedin.com/company/10567176" target="_blank">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3A2,2 0 0,1 7,5A2,2 0 0,1 5,7A2,2 0 0,1 3,5A2,2 0 0,1 5,3Z" />
          </svg>
        </a>
      </div>
      <div class="social-icon youtube">
        <a href="https://www.youtube.com/channel/UCHsx4rQJA18Fm5UYLRUvgJw" target="_blank">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 contact-block">
      <div class="copyright">
        Copyright 2016. Minden jog fenntartva.
      </div>
    </div>
    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs contact-block language-selector">
      <?php
      	if ( is_page('about-us')) : ?>
      		<?php echo '<a href="/"><div class="flag flag-hungary"></div></a>'; ?>
      	<?php else : ?>
          <?php echo '<a href="/about-us"><div class="flag flag-english"></div></a>'; ?>
        <?php endif; ?>

    </div>

      </div>
    </div>
  </div>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
        <g id="next-button">
		      <path class="arrow" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
	      </g>
        <g id="prev-button">
		      <path class="arrow" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
	      </g>
        <g id="plus-icon">
		      <path fill="#ffffff" class="plus" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
	      </g>
    </svg>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

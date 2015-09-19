<div class="right_side_menu">
            <div class="bubble4">
          <div class="rectangle4"><h2>Tradycje szkoły</h2></div>
          <div class="triangle-l4"></div>
          <div class="triangle-r4"></div>
          <?php wp_nav_menu(array('menu' => 'Tradycje szkoły')); ?>
          </div>
               
               <div id="picture_box_01"><a href="http://www.sos-wd.org/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/wioski dziecece.jpg" alt="wioski_sos" title="wioski_sos" /></a></div>
               <div id="picture_box_02"><a href="http://www.cyfrowaszkola.men.gov.pl/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/cyfrowa_szkola.png" alt="cyfrowa_szkola" title="cyfrowa_szkola" /></a></div>
               <div id="picture_box_03"><a href="http://www.ps.org.pl/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/szkolaprzyjazna.jpg" title="przyjazna szkola" alt="przyjazna szkola" /></a></div>
               <div id="picture_box_04"><a href="http://www.efs.gov.pl/Strony/default.aspx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/efs.jpg" alt="efs" title="europejski fundusz spoleczny" /></a></div>
               <div id="picture_box_04"><a href="http://www.rodzinny-krakow.pl/artykul/TPD---wszystkie-dzieci-sa-nasze.aspx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/przyjaciel dzieci.png" alt="przyjaciel dzieci" title="przyjaciel dzieci" /></a></div>
   <div id="picture_box_04"><a href="http://sp4bilgoraj.bip.e-zeto.eu/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/redbox_footer.png" alt="Bip" title="Biuletyn Informacji Publicznej" /></a></div>
        </div>
    </div>
    </div>
    
<?php wp_footer(); ?>
<div class="footer">
  <div class="footer_wrapper">
    <div id="name_footer">Szkoła Podstawowa nr 4 w Biłgoraju ul. Polna 3a, tel: 84 686 60 23
    </div><div id="info"><?php
if(is_active_sidebar('Footer Sidebar 1')){
dynamic_sidebar('Footer Sidebar 1');
}
?></div>

</div>
</body>
</html>
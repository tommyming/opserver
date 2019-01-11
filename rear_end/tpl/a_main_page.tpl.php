<!DOCTYPE html>
<html lang="en">
	<?php include($head_page);?>
<body>
<!--Header-part-->
<?php include($header_page);?>
<!--close-Header-part-->
<!--top-Header-menu-->
<?php include($top_header_menu_page);?>
<!--close-top-Header-menu-->
<!--start-top-search-->
<?php include($top_top_search_page);?>
<!--close-top-search-->
<!--sidebar-menu-->
<?php include($sidebar_page); ?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <?php include($breadcrumbs_page); ?>
<!--End-breadcrumbs-->
	
	<?php include($container__page); ?>

</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include($footer_page);?>

<!--end-Footer-part-->

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
<?php if(isset($login_title)&& isset($login_text)):?>
$.gritter.add({
	title:	'<?php echo $login_title ?>',
	text:	'<?php echo $login_text ?>',
	image: 	'img/demo/av1.jpg',
	sticky: false
});	
<?php endif; ?>
</script>
</body>
</html>

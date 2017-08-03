<?php
  $value = $_GET['s'] ? $_GET['s'] : null; // Show the last entered search in the input field
?>
<form class="searchform aligncenter" action="<?php bloginfo("url");?>" method="get" role="search">
  <div class="inner-search">
    <input type="text" name="s" id="search-input" placeholder=" ex. Eyrun, Idunn, etc" class="text-input" value="<?php echo $value ?>" autofocus />
    <input class="btn btn-danger button detail submit-search" type="submit" value="Search" />
  </div>
</form>

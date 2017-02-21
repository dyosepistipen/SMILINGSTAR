<?php
$theme_url = base_url() . "theme/";
?>

<div id="sidebar" class="span3">
  <?php
  if (!$obj->hidecartlist) {
    ?>
    <div class="well well-small">
      <img src="<?php echo $theme_url; ?>themes/images/ico-cart.png" alt="cart">
      <a id="myCart" href="<?php echo base_url() . "checkout"; ?>">
        <span title="Checkout" class="show-tooltip" data-rel="tooltip" style="margin-right: 5px;"><span
            class="item-cart-count"><?php echo $obj->carttotalitems; ?></span> Item(s) in your cart  </span><span
          class="badge badge-warning "><span
            class="cart-price">₱. <?php echo number_format($obj->carttotalprice); ?></span> /-</span>
      </a>
    </div>
    <?php
  }
  ?>
  <ul id="sideManu" class="nav nav-tabs nav-stacked">
    <?php
    if ($categoryData) {
      //		echo "<pre>";print_r($categoryData);die;

      foreach ($categoryData as $category) {
        $submenu = (empty($category["sub_categories"])) ? "" : "subMenu";
        echo
          '
							<li class="' . $submenu . '"><a href = "' . base_url() . 'categories/' . $category['category_id'] . '"> ' . $category['category_name'] . ' [' . $category['prod_cnt'] . ']</a>	
							<ul style = "display:none;">
						';
        if (!empty($category["sub_categories"])) {
          foreach ($category["sub_categories"] as $subcats) {
            echo '<li>
										<a href="' . base_url() . 'subcategories/' . $category['category_id'] . '/' . $subcats['category_id'] . '">
											<i class="icon-chevron-right"></i>' . $subcats['category_name'] . ' (' . $subcats['prod_cnt'] . ')
										</a>
									</li>';
          }
        }
        echo '</ul></li>';
      }
    }
    ?>
  </ul>

  <br/>
</div>
<!-- Sidebar end=============================================== -->
<div class="span9">	
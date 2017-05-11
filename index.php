<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Gift Shop</title>
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <div class="content">
<div class="container">

<!-- HEADER -->

<?php include ("header/header.html") ?>  

<!-- Men's wear block -->

    <div class="main-content-block clearfix">

        <div class="main-content-block__rect wear-mens">
          <div class="wear__panel wear__panel_mens">
            <div class="panel__summary">
              <h2 class="summary__title">Men’s Wear</h2>
              <p class="summary__text">Lorem Ipsum is simply dummy text of the
                  printing and typesetting industry. Lorem</p>
            </div>
            <div class="panel__btn">Lorem Ipsum is simply dummy text</div>
          </div>

            <!-- <div class="hover-block">
                <h3><a href="/giftshop/section/section.php">Men’s shop</a></h3>
                <div class="add-to-whishlist">add to wishlist</div>
                <div class="add-to-cart">add to cart</div>
                <b>$99.00</b>
            </div> -->
        </div>

        <!--Блок "Женская одежда"-->
        <div class="main-content-block__rect wear-womens">
          <div class="wear__panel wear__panel_s">
            <div class="panel__summary panel__summary_s">
              <h2  class="summary__title summary__title_s">Women’s Wear</h2>
              <p class="summary__text summary__text_s">Lorem Ipsum is simply dummy text
                  of the printing and typesetting</p>
            </div>
          </div>

            <!-- <div class="hover-block">
                <h3><a href="/giftshop/section/section.php">Women’s shop</a></h3>
                <div class="add-to-whishlist">add to wishlist</div>
                <div class="add-to-cart">add to cart</div>
                <b>$99.00</b>
            </div> -->
        </div>

        <!--Блок "Детская одежда"-->
        <div class="main-content-block__rect wear-kids">
          <div class="wear__panel wear__panel_s">
            <div class="panel__summary panel__summary_s panel__summary_kids">
              <h2  class="summary__title summary__title_s">Baby’s Wear</h2>
              <p class="summary__text summary__text_s">Lorem Ipsum is simply dummy text
              of the printing and typesetting</p>
            </div>
          </div>

          <!-- <div class="hover-block">
              <h3><a href="/giftshop/section/section.php">Baby shop</a></h3>
              <div class="add-to-whishlist">add to wishlist</div>
              <div class="add-to-cart">add to cart</div>
              <b>$99.00</b>
          </div> -->
        </div>
    

<!--Блок поиска-->
    <div class="main-content-block__rect search-block">
      <div class="search-block__wrapper">
        <input class="search-block__field" type="text" name="search" id="search-field" placeholder="( e.g.: Silver diamond ring )">
        <label class="search-block__label" for="search-field">Search your product here</label>
        <input class="search-block__btn" type="submit" name="submit-btn" id="submit-btn-field" value="Search">
        <a href="/giftshop/section/section.php">
          <svg class="search-block__magnifer">
            <rect class="search-block__handle" width="50" height="10" x="-34" y="37" rx="5" ry="20" fill="#ffffff"/>
            <circle r="26" cx="56%" cy="45%" fill="#f0626e"/> 
            <circle r="23" cx="56%" cy="45%" fill="#ffffff"/> 
            <circle r="18" cx="56%" cy="45%" fill="#f0626e"/>
          </svg> 
        </a>
      </div> 
    </div>

    <!--Блок "Ювелирные изделия"-->

    <div class="main-content-block__rect jewelry-block">
      <div class="panel__summary panel__summary_jewelry">
        <div class="summary__btn">
          <a href="/giftshop/section/section.php">
            <svg class="btn__arrow-block">
              <circle r="26" cx="50%" cy="50%" fill="#ffffff"/>
              <rect class="btn__arrow" width="17" height="2" x="54" y="-10" fill="#ee6470"/>
              <rect class="btn__arrow btn__arrow_bottom" width="17" height="2" x="-8" y="70" fill="#ee6470"/>
            </svg> 
          </a>
            <svg class="summary__triangle">
              <polygon points="0,0 11,0 11,12" fill="#c6535d">
            </svg>
        </div>
        
        <h3  class="summary__title summary__title_s summary__title_jew">Jewelry</h3>
      </div>

    </div>

<!--Блок "Crafts"-->
    <div class="main-content-block__rect crafts-block">
        <div class="panel__summary panel__summary_s panel__summary_crafts">
            <h3 class="block__title"><a class="block__link" href="/giftshop/section/section.php">Crafts</a></h3>
            <a href="/giftshop/section/section.php"><div class="add-to-whishlist"></div></a><a href="/giftshop/section/section.php"><div class="add-to-cart"></div></a>
            <div class="price"><span>$</span>99.<sup>00</sup></div>
        </div>
    </div>
    </div>

<!--Блок "Новые товары"-->

  <?php include ("new_products/new_products.html") ?> 
    
<!--Блок "Рекомендуемые товары"-->

  <?php include ("featured_products/featured_products.html") ?>     

<!-- CONTENT: Who we are block -->

    <div class="who-we-are-block">
        <div class="section-title__wrapper clearfix">
            <h3 class="section-title__title">Who We Are</h3>
        </div>
        <div class="who-we-are-paragraph-wrapper">
            <p class="who-we-are-block__paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <ul class="our-features">
            <li class="rectangle our-features__rectangle">
                <div class="rectangle__title">
                    <h3 class="title">Chose Products</h3>
                </div>
            </li>
            <li class="rectangle our-features__rectangle our-features__rectangle-center">
                <div class="rectangle__title">
                    <h3 class="title">Register/ Login</h3>
                </div>
            </li>
            <li class="rectangle our-features__rectangle our-features__rectangle-right">
                <div class="rectangle__title">
                    <h3 class="title">Checkout</h3>
                </div>
            </li>
        </ul>

        <!--Кнопка "Register now"-->
        <div class="button-register-wrapper">
            <div class="button-register">
                <a href="/giftshop/section/section.php" class="button-register__link">Register Now</a>
            </div>
        </div>
    </div>
   </div> 
   </div>

<!-- FOOTER -->

<?php include("footer/footer.html") ?>
    

</div>

<script src="js/new_products.js"></script>

</body>
</html>
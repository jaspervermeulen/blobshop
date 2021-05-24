<main>
    <section class="banner">
        <div class="info">
            <div class="info__text">
                <h2 class="info__text--title">Bigger blobs</h2>
                <p class="info__text--subtitle">New Collection</p>
                <p class="info__text--paragraph">Just-in, new bigger and improved blobs. "a small lump, drop, splatch, or daub"</p>
            </div>
            <div class="info__cta">
                <p class="info__cta--info">Starting at €9.99</p>
                <a class="info__cta--btn">Shop now</a>
            </div>
        </div>
        <div class="art">
            <svg class="art__svg" width="475" height="537" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M226.554.265c89.55 5.865 108.633 114.138 157.33 182.178 38.677 54.04 97.333 100.175 90.581 164.208-7.734 73.337-52.292 145.597-126.496 176.372-73.066 30.304-157.737 7.184-226.922-29.795-61.501-32.872-98.276-89.523-113.998-152.425-15.66-62.652-5.136-125.512 30.653-181.034C83.307 89.019 136.06-5.662 226.554.265z" fill="#F4F4F8"/></svg>
            <svg class="art__svg" width="614" height="474" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M305.106.273c82.892-4.829 147.757 55.18 201.896 112.311 57.677 60.865 124.875 131.375 102.638 209.054-21.883 76.446-118.792 105.559-200.514 132.854-69.247 23.128-140.938 27.059-210.365 4.378-82.021-26.796-181.34-59.699-197.027-137.473C-13.703 244.859 77.49 193.44 133.31 134.353 185.027 79.61 225.783 4.894 305.106.273z" fill="#D11249"/></svg>
            <svg class="art__svg" width="502" height="528" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M232.35 3.083c93.448-10.087 206.505 2.034 255.285 74.764 46.408 69.191-32.638 146.911-53.888 225.507-20.471 75.718 11.458 178.321-65.032 214.345-76.902 36.219-160.45-31.427-233.407-73.79C77.166 410.148 25.223 368.565 7.797 308.13c-18.123-62.849-4.028-128.275 35.78-182.352C88.741 64.422 151.376 11.823 232.35 3.083z" fill="#F1710A"/></svg>
            <svg class="art__svg" width="543" height="482" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M290.997 17.103c68.284 7.601 136.557 18.352 182.826 64.645 50.244 50.269 79.368 117.384 65.887 184.198-14.16 70.186-67.847 125.933-135.693 161.79-76.313 40.331-167.261 73.946-247.652 40.807C74.506 434.799 42.76 349.672 21.833 270.191.529 189.282-21.745 93.466 41.859 33.661 102.76-23.603 204.04 7.423 290.997 17.103z" fill="#E6C22C"/></svg>
        </div>
    </section>
    <section class="products" id="products">
        <h2 class="hidden">Products</h2>
        <?php foreach($products as $product): ?>
            <div class="product">
                <?php echo '<img class="product__img" src="./assets/img/products/' . $product['img'] . '.png" alt="' . $product['name'] . '" width="380" height="380" />' ?>
                <?php echo '<p class="product__title" >' . $product['name'] . '</p>' ?>
                <?php 
                    if($product['price_promo'] != null){
                        echo '<div class="promo__wrapper">';
                        echo '<p class="product__promo--spe">€' . $product['price_promo'] . '</p>';
                        echo '<p class="product__price--spe">€' . $product['price'] . '</p>';
                        echo '</div>';
                    } else {
                        echo '<p class="product__price" >€' . $product['price'] . '</p>';
                    } 
                ?>
            </div>
        <?php endforeach; ?>
    </section>
</main>
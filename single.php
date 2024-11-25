<?php get_header(); ?>

<main>
<main id="item-page">
    <div class="section-title"><?php the_title()?></div>

    <section class="item-container flex-item">

      <div class="item-left">
        <dl>
          <dt>price</dt>
          <dd><?php
                    $price = get_post_meta(get_the_ID(), 'price', true); ?>
                    ¥<?php echo number_format($price); ?></dd>
          <dt>color</dt>
          <dd>
            <ul class="color">
              <li class="camel"></li>
              <li class="brown"></li>
              <li class="green"></li>
              <li class="black"></li>
            </ul>
          </dd>
          <dt>material</dt>
          <dd>cow hide</dd>
        </dl>

        <section class="main-text">
          <p><?php the_content();?></p>
          <!-- <p>ボタンを１つ開けるだけで小銭、カード、お札にアクセスができ、さらに、もう一つのボタンを開けると、免許証や保険証など、出し入れする機会の少ないカードをまとめて収納しておけるフリーポケットにアクセスできます。</p> -->
        </section>

        <form action="" method="post">
          <select class="color-select" name="" id="" size="1">
            <option value="">color : </option>
            <option value="">camel</option>
            <option value="">brown</option>
            <option value="">green</option>
            <option value="">black</option>
          </select>

          <select class="count" name="count" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>


            <input id="button" type="submit" value="ADD TO CART">
        </form>

        <ul class="accordion-area">

          <li><!--li ~ /li までが一つのアコーディオン-->
            <section>
              <h3 class="title accordion">
                <div class="line">attention</div>
              </h3>
              <div class="box">
                <p>＊端末によっては商品の色が微妙に違って見える場合がございます</p>
                <p>＊天然皮革を使用しているため、多少の傷やシワなどがございます。</p>
              </div>
            </section>
          </li>

          <li>
            <section>
              <h3 class="title accordion">
                <div class="line">
                  maintenance
                </div>
              </h3>
              <div class="box">
                <p>お財布などのよく手に触れるものは
                  3ヶ月〜半年に1度程度で大丈夫です。</p>
                <ol>
                  <li>ホコリを落とします。</li>
                  <li>保湿クリームを薄く塗ります。</li>
                  <li>クリームを伸ばすようにブラッシングします。</li>
                  <li>柔らかい布で表面を磨きます。</li>
                </ol>

                <p>Boabではメンテナンスキットを販売しております。</p>

                <p>お手持ちの革製品にも使うことができますので，<br>
                  ぜひこの機会にお買い求めください。</p>
              </div>
            </section>
          </li>

          <li>
            <section>
              <h3 class="title accordion">
                <div class="line">
                  repair
                </div>
              </h3>
              <div class="box">
                <p>＊ボタン交換は無償で行っております。<br>
                  （郵送の場合は，送料のみお客様にご負担いただいております。）</p>
                <p>＊その他修理等はコンタクトページにてお気軽にお問い合わせください。</p>
              </div>
            </section>
          </li>

        </ul>
      </div>


      <div class="item-right">
        <div class="item-right-main">
        <?php the_post_thumbnail(null, array('class' => 'post-thumb')); ?>
        </div>
        <ul class="item-right-sub">
          <li class="current"><img src="http://boab.local/wp-content/uploads/2024/11/mclip_ca2.jpg" alt="マネークリップ"></li>
          <li><img src="http://boab.local/wp-content/uploads/2024/11/mclip_ca3.jpg" alt="マネークリップ"></li>
          <li><img src="http://boab.local/wp-content/uploads/2024/11/mclip_ca4.jpg" alt="マネークリップ"></li>
          <li><img src="http://boab.local/wp-content/uploads/2024/11/mclip_ca5.jpg" alt="マネークリップ"></li>
          <li><img src="http://boab.local/wp-content/uploads/2024/11/mclip_gr.jpg" alt="マネークリップ"></li>
          <li><img src="http://boab.local/wp-content/uploads/2024/11/mclip_bk.jpg" alt="マネークリップ"></li>
        </ul>
      </div>
    </section>
  </main>
</main>

<?php get_footer(); ?>
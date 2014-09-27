<?php go('docs') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="features section">
    <h2 class="beta">Features</h2>

    <ul class="feature-list list-3">
      <?php foreach($pages->find('home/features')->children()->limit(6) as $feature): ?><!--
   --><li class="text smaller">
        <?php if($image = $feature->image()): ?>
        <img src="<?php echo thumb($image, array('width' => 640, 'height' => 400, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $feature->title() ?>" />
        <?php endif ?>
        <h3 class="gamma"><?php echo html($feature->title()) ?></h3>
        <p>
          <?php echo $feature->text() ?>
          <?php if($feature->link() != ''): ?>
          <a class="read-more" href="<?php echo $feature->link() ?>">Read more →</a>
          <?php endif ?>
        </p>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="random-refs section">
    <h2 class="beta"><a href="<?php echo url('made-with-kirby-and-love') ?>">Made with Kirby and &#9829;</a></h2>

    <ul class="reference-list list-3">
      <?php foreach($pages->find('made-with-kirby-and-love')->children()->shuffle()->limit(3) as $reference): ?><!--
   --><li class="screenshot">
        <div class="screen-wrap">
          <?php if($image = $reference->image()): ?>
          <img src="<?php echo thumb($image, array('width' => 350, 'height' => 220, 'crop' => true))->url() ?>" alt="Screenshot: <?php echo $reference->title() ?>" />
          <?php endif ?>
          <div class="screen-refl"><a class="btn-white" href="<?php echo $reference->link() ?>">visit</a></div>
        </div>
        <a href="<?php echo $reference->link() ?>">
          <h2 class="gamma truncate"><?php echo html($reference->title()) ?></h2>
          <p><?php echo url::short($reference->link()) ?></p>
        </a>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="latest-posts section">
    <h2 class="beta"><a href="<?php echo url('blog') ?>">Latest blog posts</a></h2>
    <ul class="list-2">
      <?php $latest = $pages->find('blog')->children()->visible()->flip()->limit(2) ?>
      <?php foreach($latest as $post): ?><!--
   --><li class="text smaller">
        <time datetime="<?php echo $post->date('c') ?>"><?php echo $post->date('d M y') ?></time>
        <h3 class="gamma"><a href="<?php echo $post->url() ?>"><?php echo html($post->title()) ?></a></h3>
        <p><?php echo excerpt($post->text(), 180) ?> <a class="read-more" href="<?php echo $post->url() ?>">read more →</a></p>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="section">
    <h2 class="beta">Featured on...</h2>
    <ul class="featured-on-list list-4">
      <?php foreach(page('about/featured-on')->images()->shuffle()->limit(4) as $featured): ?><!--
   --><li><?php if($featured->link() != ''): ?><a href="<?php echo $featured->link() ?>"><?php endif ?><img src="<?php echo $featured->url() ?>" alt="<?php echo $featured->title() ?>" /><?php if($featured->link() != ''): ?></a><?php endif ?></li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="random-voices section">
    <h2 class="beta"><a href="<?php echo url('voices') ?>">What others say about Kirby</a></h2>

    <ul class="voice-list list-2">
      <?php foreach(page('voices')->children()->visible()->shuffle()->limit(4) as $voice): ?><!--
   --><li>
        <a href="http://twitter.com/<?php echo $voice->username() ?>">
          <?php if($voice->image()): ?>
          <img class="avatar" src="<?php echo thumb($voice->image(), array('width' => 100, 'height' => 100, 'crop' => true))->url() ?>" alt="Avatar of <?php echo $voice->title() ?>" />
          <?php endif ?>
          <h2 class="gamma"><?php echo $voice->title() ?></h2>
          <p class="zeta">@<?php echo $voice->username() ?></p>
        </a>
        <blockquote>
          <?php echo kirbytext($voice->text()) ?>
        </blockquote>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section class="connect section last">
    <h2 class="beta">Connect</h2>
    <ul class="list-2"><!--
   --><li>
        <a class="cf" href="http://twitter.com/getkirby">
          <img class="" src="<?php echo url() ?>/assets/images/twitter.svg">
          <div class="">
            <h3 class="gamma">Follow Kirby on Twitter!</h3>
            <p class="zeta">@getkirby</p>
          </div>
        </a>
      </li><!--
   --><li>
        <a class="grid" href="http://forum.getkirby.com">
          <img class="" src="<?php echo url() ?>/assets/images/forum.svg">
          <div class="">
            <h3 class="gamma">Be part of the community!</h3>
            <p class="zeta">forum.getkirby.com</p>
          </div>
        </a>
      </li><!--
 --></ul>
  </section>

</main>

<?php snippet('footer') ?>
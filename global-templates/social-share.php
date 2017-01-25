<?php
/**
 * Social Share Buttons
 *
 * @package understrap
 */

/**
 * Generates a social share partial template
 */

function understrap_social_icon($name, $size = 'lg'){
return <<<ICO
<span class="icon-$name fa-stack fa-$size">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-$name fa-stack-1x fa-inverse"></i>
</span>
ICO;
}

function understrap_social($icon_size = 'lg'){
  $url = wp_get_shortlink();
  $title = get_the_title();
  // TODO allow admin to set this
  $twitter_handle = 'democratscom';
  // This just measures the tweet
  $tweet_len = strlen($title . ': ' . $url . ' via @' . $twitter_handle);
  $tweet_diff = 140 - $tweet_len;
  // If it's too long, cut off the title
  $twitter_text = $tweet_diff < 0 ? substr($title, 0, $tweet_diff - 4) . '... ' . $url : $title . ': ' . $url;

  $tweet_custom = get_post_meta(get_the_ID(), 'tweet', true);

  if ($tweet_custom) {
    $twitter_text = urlencode($tweet_custom) . ' ' . $url;
  }

$facebook_href = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url) . '&t=';
$facebook_icon = understrap_social_icon('facebook', $icon_size);

$twitter_href = 'https://twitter.com/intent/tweet?source=' . urlencode($url) . '&text=' . $twitter_text . '&via=' . $twitter_handle;
$twitter_icon = understrap_social_icon('twitter', $icon_size);

$google_href = 'https://plus.google.com/share?url=' . urlencode($url);
$google_icon = understrap_social_icon('google', $icon_size);

$mail_href = 'mailto:?subject=' . $title . '&body=Check this out:%0A%0A' . urlencode($url);
$mail_icon = understrap_social_icon('envelope', $icon_size);

return <<<OUT
<ul class="share-buttons">
  <li>
    <a href="$facebook_href" target="_blank" title="Share on Facebook" >
    $facebook_icon
    <span class="sr-only">Share on Facebook</span>
    </a>
  </li>
  <li>
    <a href="$twitter_href" target="_blank" title="Tweet">
      $twitter_icon
      <span class="sr-only">Tweet</span>
    </a>
  </li>
</ul>
OUT;
}
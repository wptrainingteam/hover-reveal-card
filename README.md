# 'Hover reveal' card

This WordPress plugin extends the core Cover block to create a 'hover reveal' card experience with subtle animation and considerations for [`prefers-reduced-motion`](https://developer.mozilla.org/en-US/docs/Web/CSS/@media/prefers-reduced-motion) respecting a visitors preference for non-essential motion.

The final pattern is registered within the plugin, but it could also potentially be included directly in a custom WordPress theme. It can also be found on the WordPress Pattern Directory as [Grid Cards](https://wordpress.org/patterns/pattern/grid-cards/).

The accompanying post resides on the WordPress Developer Blog: [__Building a card layout with a “hover reveal” effect__](https://developer.wordpress.org/news/2024/07/30/building-a-card-layout-with-a-hover-reveal-effect/).

## How to use

1. Download this plugin as a zip (click on 'Code' and choose 'Download ZIP')
2. Place the un-zipped directory in your WordPress `wp-content/plugins` directory
3. Activate the plugin
4. Create a new post / page and add the 'Hover Reveal Cards' pattern.
5. Save and preview the final 'hover reveal' card effect.

Feel free to fork it and use it however you like!

## Changelog

### August 19, 2024 - v1.0.1

Update CSS to account for editing experience: remove hiding/showing of elements by targeting `:not(.has-child-selected)`.

### July 18, 2024 - v1.0.0

Initial launch.

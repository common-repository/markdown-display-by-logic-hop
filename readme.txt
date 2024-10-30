=== Markdown Display by Logic Hop ===
Contributors: logichop
Donate link: https://logichop.com
Tags: Logic Hop, markdown, post, posting, publishing
Requires at least: 4.9.0
Tested up to: 5.0.3
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Markdown Display by Logic Hop renders markdown as HTML using Parsedown, a Markdown processor written in PHP.


== Description ==

Markdown Display by Logic Hop renders markdown as HTML using <a href="http://parsedown.org">Parsedown</a>, a Markdown processor written in PHP.

This simple plugin was developed to make writing documentation for <a href="https://logichop.com/">Logic Hop</a> easier and more productive.

Your content retains its Markdown formatting in the WordPress editor. The Markdown is rendered as HTML within a __DIV__ with the class __markdown__ when viewed on the frontend or within a preview.

Markdown Display by Logic Hop is also perfect for <a href="https://logichop.com/affiliates/">Logic Hop Affiliates</a> when writing tutorials for Logic Hop as you can easily display code samples.


== Special Features ==
Markdown Display by Logic Hop will process and render both Shortcodes and <a href="https://logichop.com/docs/logic-tags">Logic Tags</a>.

To display <a href="https://logichop.com/docs/logic-tags/#data">Data Logic Tags</a> unprocessed for use in documentation, use the following format:

`` {{{ var: variable_here }}}

To display <a href="https://logichop.com/docs/logic-tags/#conditional">Conditional Logic Tags</a> unprocessed for use in documentation, use the following format:

``{{% if condition: condition_here %}}
``  // YOUR CONTENT
``{{% endif %}}

To display Shortcodes unprocessed for use in documentation, use the following format:

`` [[[shortcode_here]]]


== Installation ==

1. Add the plugin from your WordPress Dashboard
2. In any Page or Post select __Markdown Display Enabled__ in the sidebar under Publish Settings
3. Write your content with Markdown
4. Publish or Preview to view your Markdown as HTML


== Frequently Asked Questions ==

= What does Markdown Display by Logic Hop do? =
Markdown Display by Logic Hop renders markdown as HTML using Parsedown, a Markdown processor written in PHP.

= Does it change my Markdown to HTML in the editor? =
Your content retains its Markdown formatting in the WordPress editor. The Markdown is rendered as HTML when viewed on the frontend or within a preview.

= How do I style my Markdown with CSS? =
Markdown Display by Logic Hop renders Markdown content within a __DIV__ with the class __markdown__.

= Does this plugin work in Gutenberg =
No, Gutenberg converts Markdown content to HTML automatically.

= What is Logic Hop? =
<a href="https://logichop.com/">Logic Hop</a> brings the power of content personalization to WordPress.


== Screenshots ==

1. Markdown Display Enabled in sidebar under Publish Settings
2. Markdown rendered as HTML


== Changelog ==

* Initial version

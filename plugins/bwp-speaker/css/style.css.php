/*
Theme Name: Twenty Fourteen
Theme URI: http://wordpress.org/themes/twentyfourteen
Author: the WordPress team
Author URI: http://wordpress.org/
Description: In 2014, our default theme lets you create a responsive magazine website with a sleek, modern design. Feature your favorite homepage content in either a grid or a slider. Use the three widget areas to customize your website, and change your content's layout with a full-width page template and a contributor page to show off your authors. Creating a magazine website with WordPress has never been easier.
Version: 1.2
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, green, white, light, dark, two-columns, three-columns, left-sidebar, right-sidebar, fixed-layout, responsive-layout, custom-background, custom-header, custom-menu, editor-style, featured-images, flexible-header, full-width-template, microformats, post-formats, rtl-language-support, sticky-post, theme-options, translation-ready, accessibility-ready
Text Domain: twentyfourteen

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

/**
* Table of Contents:
*
* 1.0 - Reset
* 2.0 - Repeatable Patterns
* 3.0 - Basic Structure
* 4.0 - Header
* 5.0 - Navigation
* 6.0 - Content
*   6.1 - Post Thumbnail
*   6.2 - Entry Header
*   6.3 - Entry Meta
*   6.4 - Entry Content
*   6.5 - Galleries
*   6.6 - Post Formats
*   6.7 - Post/Image/Paging Navigation
*   6.8 - Attachments
*   6.9 - Archives
*   6.10 - Contributor Page
*   6.11 - 404 Page
*   6.12 - Full-width
*   6.13 - Singular
*   6.14 - Comments
* 7.0 - Sidebar
*   7.1 - Widgets
*   7.2 - Content Sidebar Widgets
* 8.0 - Footer
* 9.0 - Featured Content
* 10.0 - Multisite
* 11.0 - Media Queries
* 12.0 - Print
* -----------------------------------------------------------------------------
*/


/**
* 1.0 Reset
*
* Resetting and rebuilding styles have been helped along thanks to the fine
* work of Eric Meyer http://meyerweb.com/eric/tools/css/reset/index.html
* along with Nicolas Gallagher and Jonathan Neal
* http://necolas.github.com/normalize.css/ and Blueprint
* http://www.blueprintcss.org/
*
* -----------------------------------------------------------------------------
*/

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
border: 0;
font-family: inherit;
font-size: 100%;
font-style: inherit;
font-weight: inherit;
margin: 0;
outline: 0;
padding: 0;
vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
display: block;
}

audio,
canvas,
video {
display: inline-block;
max-width: 100%;
}

html {
overflow-y: scroll;
-webkit-text-size-adjust: 100%;
-ms-text-size-adjust:     100%;
}

body,
button,
input,
select,
textarea {
color: #2b2b2b;
font-family: Lato, sans-serif;
font-size: 16px;
font-weight: 400;
line-height: 1.5;
}

body {
background: #f5f5f5;
}

a {
color: #24890d;
text-decoration: none;
}

a:focus {
outline: thin dotted;
}

a:hover,
a:active {
outline: 0;
}

a:active,
a:hover {
color: #41a62a;
}

h1,
h2,
h3,
h4,
h5,
h6 {
clear: both;
font-weight: 700;
margin: 36px 0 12px;
}

h1 {
font-size: 26px;
line-height: 1.3846153846;
}

h2 {
font-size: 24px;
line-height: 1;
}

h3 {
font-size: 22px;
line-height: 1.0909090909;
}

h4 {
font-size: 20px;
line-height: 1.2;
}

h5 {
font-size: 18px;
line-height: 1.3333333333;
}

h6 {
font-size: 16px;
line-height: 1.5;
}

address {
font-style: italic;
margin-bottom: 24px;
}

abbr[title] {
border-bottom: 1px dotted #2b2b2b;
cursor: help;
}

b,
strong {
font-weight: 700;
}

cite,
dfn,
em,
i {
font-style: italic;
}

mark,
ins {
background: #fff9c0;
text-decoration: none;
}

p {
margin-bottom: 24px;
}

code,
kbd,
tt,
var,
samp,
pre {
font-family: monospace, serif;
font-size: 15px;
-webkit-hyphens: none;
-moz-hyphens:    none;
-ms-hyphens:     none;
hyphens:         none;
line-height: 1.6;
}

pre {
border: 1px solid rgba(0, 0, 0, 0.1);
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
margin-bottom: 24px;
max-width: 100%;
overflow: auto;
padding: 12px;
white-space: pre;
white-space: pre-wrap;
word-wrap: break-word;
}

blockquote,
q {
-webkit-hyphens: none;
-moz-hyphens:    none;
-ms-hyphens:     none;
hyphens:         none;
quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
content: "";
content: none;
}

blockquote {
color: #767676;
font-size: 19px;
font-style: italic;
font-weight: 300;
line-height: 1.2631578947;
margin-bottom: 24px;
}

blockquote cite,
blockquote small {
color: #2b2b2b;
font-size: 16px;
font-weight: 400;
line-height: 1.5;
}

blockquote em,
blockquote i,
blockquote cite {
font-style: normal;
}

blockquote strong,
blockquote b {
font-weight: 400;
}

small {
font-size: smaller;
}

big {
font-size: 125%;
}

sup,
sub {
font-size: 75%;
height: 0;
line-height: 0;
position: relative;
vertical-align: baseline;
}

sup {
bottom: 1ex;
}

sub {
top: .5ex;
}

dl {
margin-bottom: 24px;
}

dt {
font-weight: bold;
}

dd {
margin-bottom: 24px;
}

ul,
ol {
list-style: none;
margin: 0 0 24px 20px;
}

ul {
list-style: disc;
}

ol {
list-style: decimal;
}

li > ul,
li > ol {
margin: 0 0 0 20px;
}

img {
-ms-interpolation-mode: bicubic;
border: 0;
vertical-align: middle;
}

figure {
margin: 0;
}

fieldset {
border: 1px solid rgba(0, 0, 0, 0.1);
margin: 0 0 24px;
padding: 11px 12px 0;
}

legend {
white-space: normal;
}

button,
input,
select,
textarea {
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
font-size: 100%;
margin: 0;
max-width: 100%;
vertical-align: baseline;
}

button,
input {
line-height: normal;
}

input,
textarea {
background-image: -webkit-linear-gradient(hsla(0,0%,100%,0), hsla(0,0%,100%,0)); /* Removing the inner shadow, rounded corners on iOS inputs */
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
-webkit-appearance: button;
cursor: pointer;
}

button[disabled],
input[disabled] {
cursor: default;
}

input[type="checkbox"],
input[type="radio"] {
padding: 0;
}

input[type="search"] {
-webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-decoration {
-webkit-appearance: none;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
border: 0;
padding: 0;
}

textarea {
overflow: auto;
vertical-align: top;
}

table,
th,
td {
border: 1px solid rgba(0, 0, 0, 0.1);
}

table {
border-collapse: separate;
border-spacing: 0;
border-width: 1px 0 0 1px;
margin-bottom: 24px;
width: 100%;
}

caption,
th,
td {
font-weight: normal;
text-align: left;
}

th {
border-width: 0 1px 1px 0;
font-weight: bold;
}

td {
border-width: 0 1px 1px 0;
}

del {
color: #767676;
}

hr {
background-color: rgba(0, 0, 0, 0.1);
border: 0;
height: 1px;
margin-bottom: 23px;
}

/* Support a widely-adopted but non-standard selector for text selection styles
* to achieve a better experience. See http://core.trac.wordpress.org/ticket/25898.
*/
::selection {
background: #24890d;
color: #fff;
text-shadow: none;
}

::-moz-selection {
background: #24890d;
color: #fff;
text-shadow: none;
}


/**
* 2.0 Repeatable Patterns
* -----------------------------------------------------------------------------
*/

/* Input fields */

input,
textarea {
border: 1px solid rgba(0, 0, 0, 0.1);
border-radius: 2px;
color: #2b2b2b;
padding: 8px 10px 7px;
}

textarea {
width: 100%;
}

input:focus,
textarea:focus {
border: 1px solid rgba(0, 0, 0, 0.3);
outline: 0;
}

/* Buttons */

button,
.button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
background-color: #24890d;
border: 0;
border-radius: 2px;
color: #fff;
font-size: 12px;
font-weight: 700;
padding: 10px 30px 11px;
text-transform: uppercase;
vertical-align: bottom;
}

button:hover,
button:focus,
.button:hover,
.button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="reset"]:hover,
input[type="reset"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus {
background-color: #41a62a;
color: #fff;
}

button:active,
.button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
background-color: #55d737;
}

.search-field {
width: 100%;
}

.search-submit {
display: none;
}

/* Placeholder text color -- selectors need to be separate to work. */

::-webkit-input-placeholder {
color: #939393;
}

:-moz-placeholder {
color: #939393;
}

::-moz-placeholder {
color: #939393;
opacity: 1; /* Since FF19 lowers the opacity of the placeholder by default */
}

:-ms-input-placeholder {
color: #939393;
}

/* Responsive images. Fluid images for posts, comments, and widgets */

.comment-content img,
.entry-content img,
.entry-summary img,
#site-header img,
.widget img,
.wp-caption {
max-width: 100%;
}

/**
* Make sure images with WordPress-added height and width attributes are
* scaled correctly.
*/

.comment-content img[height],
.entry-content img,
.entry-summary img,
img[class*="align"],
img[class*="wp-image-"],
img[class*="attachment-"],
#site-header img {
height: auto;
}

img.size-full,
img.size-large,
.wp-post-image,
.post-thumbnail img {
height: auto;
max-width: 100%;
}

/* Make sure embeds and iframes fit their containers */

embed,
iframe,
object,
video {
margin-bottom: 24px;
max-width: 100%;
}

p > embed,
p > iframe,
p > object,
span > embed,
span > iframe,
span > object {
margin-bottom: 0;
}

/* Alignment */

.alignleft {
float: left;
}

.alignright {
float: right;
}

.aligncenter {
display: block;
margin-left: auto;
margin-right: auto;
}

blockquote.alignleft,
figure.wp-caption.alignleft,
img.alignleft {
margin: 7px 24px 7px 0;
}

.wp-caption.alignleft {
margin: 7px 14px 7px 0;
}

blockquote.alignright,
figure.wp-caption.alignright,
img.alignright {
margin: 7px 0 7px 24px;
}

.wp-caption.alignright {
margin: 7px 0 7px 14px;
}

blockquote.aligncenter,
img.aligncenter,
.wp-caption.aligncenter {
margin-top: 7px;
margin-bottom: 7px;
}

.site-content blockquote.alignleft,
.site-content blockquote.alignright {
border-top: 1px solid rgba(0, 0, 0, 0.1);
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
padding-top: 17px;
width: 50%;
}

.site-content blockquote.alignleft p,
.site-content blockquote.alignright p {
margin-bottom: 17px;
}

.wp-caption {
margin-bottom: 24px;
}

.wp-caption img[class*="wp-image-"] {
display: block;
margin: 0;
}

.wp-caption {
color: #767676;
}

.wp-caption-text {
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
font-size: 12px;
font-style: italic;
line-height: 1.5;
margin: 9px 0;
}

div.wp-caption .wp-caption-text {
padding-right: 10px;
}

div.wp-caption.alignright img[class*="wp-image-"],
div.wp-caption.alignright .wp-caption-text {
padding-left: 10px;
padding-right: 0;
}

.wp-smiley {
border: 0;
margin-bottom: 0;
margin-top: 0;
padding: 0;
}

/* Assistive text */

.screen-reader-text {
clip: rect(1px, 1px, 1px, 1px);
position: absolute;
}

.screen-reader-text:focus {
background-color: #f1f1f1;
border-radius: 3px;
box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
clip: auto;
color: #21759b;
display: block;
font-size: 14px;
font-weight: bold;
height: auto;
line-height: normal;
padding: 15px 23px 14px;
position: absolute;
left: 5px;
top: 5px;
text-decoration: none;
text-transform: none;
width: auto;
z-index: 100000; /* Above WP toolbar */
}

.hide {
display: none;
}

/* Clearing floats */

.footer-sidebar:before,
.footer-sidebar:after,
.hentry:before,
.hentry:after,
.gallery:before,
.gallery:after,
.slider-direction-nav:before,
.slider-direction-nav:after,
.contributor-info:before,
.contributor-info:after,
.search-box:before,
.search-box:after,
[class*="content"]:before,
[class*="content"]:after,
[class*="site"]:before,
[class*="site"]:after {
content: "";
display: table;
}

.footer-sidebar:after,
.hentry:after,
.gallery:after,
.slider-direction-nav:after,
.contributor-info:after,
.search-box:after,
[class*="content"]:after,
[class*="site"]:after {
clear: both;
}

/* Genericons */

.bypostauthor > article .fn:before,
.comment-edit-link:before,
.comment-reply-link:before,
.comment-reply-login:before,
.comment-reply-title small a:before,
.contributor-posts-link:before,
.menu-toggle:before,
.search-toggle:before,
.slider-direction-nav a:before,
.widget_twentyfourteen_ephemera .widget-title:before {
-webkit-font-smoothing: antialiased;
display: inline-block;
font: normal 16px/1 Genericons;
text-decoration: inherit;
vertical-align: text-bottom;
}

/* Separators */

.site-content span + .entry-date:before,
.full-size-link:before,
.parent-post-link:before,
span + .byline:before,
span + .comments-link:before,
span + .edit-link:before,
.widget_twentyfourteen_ephemera .entry-title:after {
content: "\0020\007c\0020";
}


/**
* 3.0 Basic Structure
* -----------------------------------------------------------------------------
*/

.site {
background-color: #fff;
max-width: 1260px;
position: relative;
}

.main-content {
width: 100%;
}


/**
* 4.0 Header
* -----------------------------------------------------------------------------
*/

/* Ensure that there is no gap between the header and
the admin bar for WordPress versions before 3.8. */
#wpadminbar {
min-height: 32px;
}

#site-header {
position: relative;
z-index: 3;
}

.site-header {
background-color: #000;
max-width: 1260px;
position: relative;
width: 100%;
z-index: 4;
}

.header-main {
min-height: 48px;
padding: 0 10px;
}

.site-title {
float: left;
font-size: 18px;
font-weight: 700;
line-height: 48px;
margin: 0;

/* Nav-toggle width + search-toggle width - gutter = 86px */
max-width: -webkit-calc(100% - 86px);
max-width:         calc(100% - 86px);
}

.site-title a,
.site-title a:hover {
color: #fff;
display: block;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}

/* Search in the header */

.search-toggle {
background-color: #24890d;
cursor: pointer;
float: right;
height: 48px;
margin-right: 38px;
text-align: center;
width: 48px;
}

.search-toggle:hover,
.search-toggle.active {
background-color: #41a62a;
}

.search-toggle:before {
color: #fff;
content: "\f400";
font-size: 20px;
margin-top: 14px;
}

.search-toggle .screen-reader-text {
left: 5px; /* Avoid a horizontal scrollbar when the site has a long menu */
}

.search-box-wrapper {
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
position: absolute;
top: 48px;
right: 0;
width: 100%;
z-index: 2;
}

.search-box {
background-color: #41a62a;
padding: 12px;
}

.search-box .search-field {
background-color: #fff;
border: 0;
float: right;
font-size: 16px;
padding: 2px 2px 3px 6px;
width: 100%;
}


/**
* 5.0 Navigation
* -----------------------------------------------------------------------------
*/

.site-navigation ul {
list-style: none;
margin: 0;
}

.site-navigation li {
border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.site-navigation ul ul {
margin-left: 20px;
}

.site-navigation a {
color: #fff;
display: block;
text-transform: uppercase;
}

.site-navigation a:hover {
color: #41a62a;
}

.site-navigation .current_page_item > a,
.site-navigation .current_page_ancestor > a,
.site-navigation .current-menu-item > a,
.site-navigation .current-menu-ancestor > a {
color: #55d737;
font-weight: 900;
}

/* Primary Navigation */

.primary-navigation {
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
font-size: 14px;
padding-top: 24px;
}

.primary-navigation.toggled-on {
padding: 72px 0 36px;
}

.primary-navigation .nav-menu {
border-bottom: 1px solid rgba(255, 255, 255, 0.2);
display: none;
}

.primary-navigation.toggled-on .nav-menu {
display: block;
}

.primary-navigation a {
padding: 7px 0;
}

/* Secondary Navigation */

.secondary-navigation {
border-bottom: 1px solid rgba(255, 255, 255, 0.2);
font-size: 12px;
margin: 48px 0;
}

.secondary-navigation a {
padding: 9px 0;
}

.menu-toggle {
background-color: #000;
border-radius: 0;
cursor: pointer;
height: 48px;
margin: 0;
overflow: hidden;
padding: 0;
position: absolute;
top: 0;
right: 0;
text-align: center;
width: 48px;
}

.menu-toggle:before {
color: #fff;
content: "\f419";
padding: 16px;
}

.menu-toggle:active,
.menu-toggle:focus,
.menu-toggle:hover {
background-color: #444;
}

.menu-toggle:focus {
outline: 1px dotted;
}


/**
* 6.0 Content
* -----------------------------------------------------------------------------
*/

.content-area {
padding-top: 48px;
}

.hentry {
margin: 0 auto 48px;
max-width: 672px;
}

.site-content .entry-header,
.site-content .entry-content,
.site-content .entry-summary,
.site-content .entry-meta,
.page-content {
margin: 0 auto;
max-width: 474px;
}

.page-content {
margin-bottom: 48px;
}


/**
* 6.1 Post Thumbnail
* -----------------------------------------------------------------------------
*/

.post-thumbnail {
background: #b2b2b2 url(images/pattern-light.svg) repeat fixed;
display: block;
position: relative;
width: 100%;
z-index: 0;
}

a.post-thumbnail:hover {
background-color: #999;
}

.full-width .post-thumbnail img {
display: block;
margin: 0 auto;
}


/**
* 6.2 Entry Header
* -----------------------------------------------------------------------------
*/

.entry-header {
position: relative;
z-index: 1;
}

.entry-title {
font-size: 33px;
font-weight: 300;
line-height: 1.0909090909;
margin-bottom: 12px;
margin: 0 0 12px 0;
text-transform: uppercase;
}

.entry-title a {
color: #2b2b2b;
}

.entry-title a:hover {
color: #41a62a;
}

.site-content .entry-header {
background-color: #fff;
padding: 0 10px 12px;
}

.site-content .has-post-thumbnail .entry-header {
padding-top: 24px;
}


/**
* 6.3 Entry Meta
* -----------------------------------------------------------------------------
*/

.entry-meta {
clear: both;
color: #767676;
font-size: 12px;
font-weight: 400;
line-height: 1.3333333333;
text-transform: uppercase;
}

.entry-meta a {
color: #767676;
}

.entry-meta a:hover {
color: #41a62a;
}

.sticky .entry-date {
display: none;
}

.cat-links {
font-weight: 900;
text-transform: uppercase;
}

.cat-links a {
color: #2b2b2b;
}

.cat-links a:hover {
color: #41a62a;
}

.byline {
display: none;
}

.single .byline,
.group-blog .byline {
display: inline;
}

.site-content .entry-meta {
background-color: #fff;
margin-bottom: 8px;
}

.site-content footer.entry-meta {
margin: 24px auto 0;
padding: 0 10px;
}

/* Tag links style */

.entry-meta .tag-links a {
background-color: #767676;
border-radius: 0 2px 2px 0;
color: #fff;
display: inline-block;
font-size: 11px;
font-weight: 700;
line-height: 1.2727272727;
margin: 2px 4px 2px 10px;
padding: 3px 7px;
position: relative;
text-transform: uppercase;
}

.entry-meta .tag-links a:hover {
background-color: #41a62a;
color: #fff;
}

.entry-meta .tag-links a:before {
border-top: 10px solid transparent;
border-right: 8px solid #767676;
border-bottom: 10px solid transparent;
content: "";
height: 0;
position: absolute;
top: 0;
left: -8px;
width: 0;
}

.entry-meta .tag-links a:hover:before {
border-right-color: #41a62a;
}

.entry-meta .tag-links a:after {
background-color: #fff;
border-radius: 50%;
content: "";
height: 4px;
position: absolute;
top: 8px;
left: -2px;
width: 4px;
}


/**
* 6.4 Entry Content
* -----------------------------------------------------------------------------
*/

.entry-content,
.entry-summary,
.page-content {
-webkit-hyphens: auto;
-moz-hyphens:    auto;
-ms-hyphens:     auto;
hyphens:         auto;
word-wrap: break-word;
}

.site-content .entry-content,
.site-content .entry-summary,
.page-content {
background-color: #fff;
padding: 12px 10px 0;
}

.page .entry-content {
padding-top: 0;
}

.entry-content h1:first-child,
.entry-content h2:first-child,
.entry-content h3:first-child,
.entry-content h4:first-child,
.entry-content h5:first-child,
.entry-content h6:first-child,
.entry-summary h1:first-child,
.entry-summary h2:first-child,
.entry-summary h3:first-child,
.entry-summary h4:first-child,
.entry-summary h5:first-child,
.entry-summary h6:first-child,
.page-content h1:first-child,
.page-content h2:first-child,
.page-content h3:first-child,
.page-content h4:first-child,
.page-content h5:first-child,
.page-content h6:first-child {
margin-top: 0;
}

.entry-content a,
.entry-summary a,
.page-content a,
.comment-content a {
text-decoration: underline;
}

.entry-content a:hover,
.entry-summary a:hover,
.page-content a:hover,
.comment-content a:hover,
.entry-content a.button,
.entry-summary a.button,
.page-content a.button,
.comment-content a.button {
text-decoration: none;
}

.entry-content table,
.comment-content table {
font-size: 14px;
line-height: 1.2857142857;
margin-bottom: 24px;
}

.entry-content th,
.comment-content th {
font-weight: 700;
padding: 8px;
text-transform: uppercase;
}

.entry-content td,
.comment-content td {
padding: 8px;
}

.entry-content .edit-link {
clear: both;
display: block;
font-size: 12px;
font-weight: 400;
line-height: 1.3333333333;
text-transform: uppercase;
}

.entry-content .edit-link a {
color: #767676;
text-decoration: none;
}

.entry-content .edit-link a:hover {
color: #41a62a;
}

/* Mediaelements */

.hentry .mejs-container {
margin: 12px 0 18px;
}

.hentry .mejs-mediaelement,
.hentry .mejs-container .mejs-controls {
background: #000;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-loaded,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
background: #fff;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-current {
background: #24890d;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-total,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
background: rgba(255, 255, 255, .33);
}

.hentry .mejs-container .mejs-controls .mejs-time {
padding-top: 9px;
}

.hentry .mejs-controls .mejs-time-rail span,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
border-radius: 0;
}

.hentry .mejs-overlay-loading {
background: transparent;
}

.hentry .mejs-overlay-button {
background-color: #fff;
background-image: none;
border-radius: 2px;
box-shadow: 1px 1px 1px rgba(0,0,0,.8);
color: #000;
height: 36px;
margin-left: -24px;
width: 48px;
}

.hentry .mejs-overlay-button:before {
-webkit-font-smoothing: antialiased;
content: '\f452';
display: inline-block;
font: normal 32px/1.125 Genericons;
position: absolute;
top: 1px;
left: 10px;
}

.hentry .mejs-controls .mejs-button button:focus {
outline: none;
}

.hentry .mejs-controls .mejs-button button {
-webkit-font-smoothing: antialiased;
background: none;
color: #fff;
display: inline-block;
font: normal 16px/1 Genericons;
}

.hentry .mejs-playpause-button.mejs-play button:before {
content: '\f452';
}

.hentry .mejs-playpause-button.mejs-pause button:before {
content: '\f448';
}

.hentry .mejs-volume-button.mejs-mute button:before {
content: '\f109';
font-size: 20px;
position: absolute;
top: -2px;
left: 0;
}

.hentry .mejs-volume-button.mejs-unmute button:before {
content: '\f109';
left: 0;
position: absolute;
top: 0;
}

.hentry .mejs-fullscreen-button button:before {
content: '\f474';
}

.hentry .mejs-fullscreen-button.mejs-unfullscreen button:before {
content: '\f406';
}

.hentry .mejs-overlay:hover .mejs-overlay-button {
background-color: #24890d;
color: #fff;
}

.hentry .mejs-controls .mejs-button button:hover {
color: #41a62a;
}

.content-sidebar .wp-playlist-item .wp-playlist-caption {
color: #000;
}

/* Page links */

.page-links {
clear: both;
font-size: 12px;
font-weight: 900;
line-height: 2;
margin: 24px 0;
text-transform: uppercase;
}

.page-links a,
.page-links > span {
background: #fff;
border: 1px solid #fff;
display: inline-block;
height: 22px;
margin: 0 1px 2px 0;
text-align: center;
width: 22px;
}

.page-links a {
background: #000;
border: 1px solid #000;
color: #fff;
text-decoration: none;
}

.page-links a:hover {
background: #41a62a;
border: 1px solid #41a62a;
color: #fff;
}

.page-links > .page-links-title {
height: auto;
margin: 0;
padding-right: 7px;
width: auto;
}


/**
* 6.5 Gallery
* -----------------------------------------------------------------------------
*/

.gallery {
margin-bottom: 20px;
}

.gallery-item {
float: left;
margin: 0 4px 4px 0;
overflow: hidden;
position: relative;
}

.gallery-columns-1 .gallery-item {
max-width: 100%;
}

.gallery-columns-2 .gallery-item {
max-width: 48%;
max-width: -webkit-calc(50% - 4px);
max-width:         calc(50% - 4px);
}

.gallery-columns-3 .gallery-item {
max-width: 32%;
max-width: -webkit-calc(33.3% - 4px);
max-width:         calc(33.3% - 4px);
}

.gallery-columns-4 .gallery-item {
max-width: 23%;
max-width: -webkit-calc(25% - 4px);
max-width:         calc(25% - 4px);
}

.gallery-columns-5 .gallery-item {
max-width: 19%;
max-width: -webkit-calc(20% - 4px);
max-width:         calc(20% - 4px);
}

.gallery-columns-6 .gallery-item {
max-width: 15%;
max-width: -webkit-calc(16.7% - 4px);
max-width:         calc(16.7% - 4px);
}

.gallery-columns-7 .gallery-item {
max-width: 13%;
max-width: -webkit-calc(14.28% - 4px);
max-width:         calc(14.28% - 4px);
}

.gallery-columns-8 .gallery-item {
max-width: 11%;
max-width: -webkit-calc(12.5% - 4px);
max-width:         calc(12.5% - 4px);
}

.gallery-columns-9 .gallery-item {
max-width: 9%;
max-width: -webkit-calc(11.1% - 4px);
max-width:         calc(11.1% - 4px);
}

.gallery-columns-1 .gallery-item:nth-of-type(1n),
.gallery-columns-2 .gallery-item:nth-of-type(2n),
.gallery-columns-3 .gallery-item:nth-of-type(3n),
.gallery-columns-4 .gallery-item:nth-of-type(4n),
.gallery-columns-5 .gallery-item:nth-of-type(5n),
.gallery-columns-6 .gallery-item:nth-of-type(6n),
.gallery-columns-7 .gallery-item:nth-of-type(7n),
.gallery-columns-8 .gallery-item:nth-of-type(8n),
.gallery-columns-9 .gallery-item:nth-of-type(9n) {
margin-right: 0;
}

.gallery-columns-1.gallery-size-medium figure.gallery-item:nth-of-type(1n+1),
.gallery-columns-1.gallery-size-thumbnail figure.gallery-item:nth-of-type(1n+1),
.gallery-columns-2.gallery-size-thumbnail figure.gallery-item:nth-of-type(2n+1),
.gallery-columns-3.gallery-size-thumbnail figure.gallery-item:nth-of-type(3n+1) {
clear: left;
}

.gallery-caption {
background-color: rgba(0, 0, 0, 0.7);
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
color: #fff;
font-size: 12px;
line-height: 1.5;
margin: 0;
max-height: 50%;
opacity: 0;
padding: 6px 8px;
position: absolute;
bottom: 0;
left: 0;
text-align: left;
width: 100%;
}

.gallery-caption:before {
content: "";
height: 100%;
min-height: 49px;
position: absolute;
top: 0;
left: 0;
width: 100%;
}

.gallery-item:hover .gallery-caption {
opacity: 1;
}

.gallery-columns-7 .gallery-caption,
.gallery-columns-8 .gallery-caption,
.gallery-columns-9 .gallery-caption {
display: none;
}


/**
* 6.6 Post Formats
* -----------------------------------------------------------------------------
*/

.format-aside .entry-content,
.format-aside .entry-summary,
.format-quote .entry-content,
.format-quote .entry-summary,
.format-link .entry-content,
.format-link .entry-summary {
padding-top: 0;
}

.site-content .format-link .entry-title,
.site-content .format-aside .entry-title,
.site-content .format-quote .entry-title {
display: none;
}


/**
* 6.7 Post/Image/Paging Navigation
* -----------------------------------------------------------------------------
*/

.nav-links {
-webkit-hyphens: auto;
-moz-hyphens:    auto;
-ms-hyphens:     auto;
border-top: 1px solid rgba(0, 0, 0, 0.1);
hyphens:         auto;
word-wrap: break-word;
}

.post-navigation,
.image-navigation {
margin: 24px auto 48px;
max-width: 474px;
padding: 0 10px;
}

.post-navigation a,
.image-navigation .previous-image,
.image-navigation .next-image {
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
padding: 11px 0 12px;
width: 100%;
}

.post-navigation .meta-nav {
color: #767676;
display: block;
font-size: 12px;
font-weight: 900;
line-height: 2;
text-transform: uppercase;
}

.post-navigation a,
.image-navigation a {
color: #2b2b2b;
display: block;
font-size: 14px;
font-weight: 700;
line-height: 1.7142857142;
text-transform: none;
}

.post-navigation a:hover,
.image-navigation a:hover {
color: #41a62a;
}

/* Paging Navigation */

.paging-navigation {
border-top: 5px solid #000;
margin: 48px 0;
}

.paging-navigation .loop-pagination {
margin-top: -5px;
text-align: center;
}

.paging-navigation .page-numbers {
border-top: 5px solid transparent;
display: inline-block;
font-size: 14px;
font-weight: 900;
margin-right: 1px;
padding: 7px 16px;
text-transform: uppercase;
}

.paging-navigation a {
color: #2b2b2b;
}

.paging-navigation .page-numbers.current {
border-top: 5px solid #24890d;
}

.paging-navigation a:hover {
border-top: 5px solid #41a62a;
color: #2b2b2b;
}


/**
* 6.8 Attachments
* -----------------------------------------------------------------------------
*/

.attachment .content-sidebar,
.attachment .post-thumbnail {
display: none;
}

.attachment .entry-content {
padding-top: 0;
}

.attachment footer.entry-meta {
text-transform: none;
}

.entry-attachment .attachment {
margin-bottom: 24px;
}


/**
* 6.9 Archives
* -----------------------------------------------------------------------------
*/

.archive-header,
.page-header {
margin: 24px auto;
max-width: 474px;
}

.archive-title,
.page-title {
font-size: 16px;
font-weight: 900;
line-height: 1.5;
margin: 0;
}

.taxonomy-description,
.author-description {
color: #767676;
font-size: 14px;
line-height: 1.2857142857;
padding-top: 18px;
}

.taxonomy-description p,
.author-description p {
margin-bottom: 18px;
}

.taxonomy-description p:last-child,
.author-description p:last-child {
margin-bottom: 0;
}

.taxonomy-description a,
.author-description a {
text-decoration: underline;
}

.taxonomy-description a:hover,
.author-description a:hover {
text-decoration: none;
}


/**
* 6.10 Contributor Page
* -----------------------------------------------------------------------------
*/

.contributor {
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing:      border-box;
padding: 48px 10px;
}

.contributor:first-of-type {
padding-top: 24px;
}

.contributor-info {
margin: 0 auto;
max-width: 474px;
}

.contributor-avatar {
border: 1px solid rgba(0, 0, 0, 0.1);
float: left;
margin: 0 30px 20px 0;
padding: 2px;
}

.contributor-name {
font-size: 16px;
font-weight: 900;
line-height: 1.5;
margin: 0;
}

.contributor-bio a {
text-decoration: underline;
}

.contributor-bio a:hover {
text-decoration: none;
}

.contributor-posts-link {
display: inline-block;
line-height: normal;
padding: 10px 30px;
}

.contributor-posts-link:before {
content: "\f443";
}


/**
* 6.11 404 Page
* -----------------------------------------------------------------------------
*/

.error404 .page-content {
padding-top: 0;
}

.error404 .page-content .search-form {
margin-bottom: 24px;
}


/**
* 6.12 Full-width
* -----------------------------------------------------------------------------
*/

.full-width .hentry {
max-width: 100%;
}


/**
* 6.13 Singular
* -----------------------------------------------------------------------------
*/

.singular .site-content .hentry.has-post-thumbnail {
margin-top: -48px;
}


/**
* 6.14 Comments
* -----------------------------------------------------------------------------
*/

.comments-area {
margin: 48px auto;
max-width: 474px;
padding: 0 10px;
}

.comment-reply-title,
.comments-title {
font: 900 16px/1.5 Lato, sans-serif;
margin: 0;
text-transform: uppercase;
}

.comment-list {
list-style: none;
margin: 0 0 48px 0;
}

.comment-author {
font-size: 14px;
line-height: 1.7142857142;
}

.comment-list .reply,
.comment-metadata {
font-size: 12px;
line-height: 2;
text-transform: uppercase;
}

.comment-list .reply {
margin-top: 24px;
}

.comment-author .fn {
font-weight: 900;
}

.comment-author a {
color: #2b2b2b;
}

.comment-list .trackback a,
.comment-list .pingback a,
.comment-metadata a {
color: #767676;
}

.comment-author a:hover,
.comment-list .pingback a:hover,
.comment-list .trackback a:hover,
.comment-metadata a:hover {
color: #41a62a;
}

.comment-list article,
.comment-list .pingback,
.comment-list .trackback {
border-top: 1px solid rgba(0, 0, 0, 0.1);
margin-bottom: 24px;
padding-top: 24px;
}

.comment-list > li:first-child > article,
.comment-list > .pingback:first-child,
.comment-list > .trackback:first-child {
border-top: 0;
}

.comment-author {
position: relative;
}

.comment-author .avatar {
border: 1px solid rgba(0, 0, 0, 0.1);
height: 18px;
padding: 2px;
position: absolute;
top: 0;
left: 0;
width: 18px;
}

.bypostauthor > article .fn:before {
content: "\f408";
margin: 0 2px 0 -2px;
position: relative;
top: -1px;
}

.says {
display: none;
}

.comment-author,
.comment-awaiting-moderation,
.comment-content,
.comment-list .reply,
.comment-metadata {
padding-left: 30px;
}

.comment-edit-link {
margin-left: 10px;
}

.comment-edit-link:before {
content: "\f411";
}

.comment-reply-link:before,
.comment-reply-login:before {
content: "\f412";
margin-right: 2px;
}

.comment-content {
-webkit-hyphens: auto;
-moz-hyphens:    auto;
-ms-hyphens:     auto;
hyphens:         auto;
word-wrap: break-word;
}

.comment-content ul,
.comment-content ol {
margin: 0 0 24px 22px;
}

.comment-content li > ul,
.comment-content li > ol {
margin-bottom: 0;
}

.comment-content > :last-child {
margin-bottom: 0;
}

.comment-list .children {
list-style: none;
margin-left: 15px;
}

.comment-respond {
margin-bottom: 24px;
padding: 0;
}

.comment .comment-respond {
margin-top: 24px;
}

.comment-respond h3 {
margin-top: 0;
margin-bottom: 24px;
}

.comment-notes,
.comment-awaiting-moderation,
.logged-in-as,
.no-comments,
.form-allowed-tags,
.form-allowed-tags code {
color: #767676;
}

.comment-notes,
.comment-awaiting-moderation,
.logged-in-as {
font-size: 14px;
line-height: 1.7142857142;
}

.no-comments {
font-size: 16px;
font-weight: 900;
line-height: 1.5;
margin-top: 24px;
text-transform: uppercase;
}

.comment-form label {
display: block;
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"] {
width: 100%;
}

.form-allowed-tags,
.form-allowed-tags code {
font-size: 12px;
line-height: 1.5;
}

.required {
color: #c0392b;
}

.comment-reply-title small a {
color: #2b2b2b;
float: right;
height: 24px;
overflow: hidden;
width: 24px;
}

.comment-reply-title small a:hover {
color: #41a62a;
}

.comment-reply-title small a:before {
content: "\f405";
font-size: 32px;
}

.comment-navigation {
font-size: 12px;
line-height: 2;
margin-bottom: 48px;
text-transform: uppercase;
}

.comment-navigation .nav-next,
.comment-navigation .nav-previous {
display: inline-block;
}

.comment-navigation .nav-previous a {
margin-right: 10px;
}

#comment-nav-above {
margin-top: 36px;
margin-bottom: 0;
}


/**
* 7.0 Sidebars
* -----------------------------------------------------------------------------
*/

/* Secondary */

#secondary {
background-color: #000;
border-top: 1px solid #000;
border-bottom: 1px solid rgba(255, 255, 255, 0.2);
clear: both;
color: rgba(255, 255, 255, 0.7);
margin-top: -1px;
padding: 0 10px;
position: relative;
z-index: 2;
}

.site-description {
display: none;
font-size: 12px;
font-weight: 400;
line-height: 1.5;
}

/* Primary Sidebar */

.primary-sidebar {
padding-top: 48px;
}

.secondary-navigation + .primary-sidebar {
padding-top: 0;
}

/* Content Sidebar */

.content-sidebar {
border-top: 1px solid rgba(0, 0, 0, 0.1);
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
color: #767676;
padding: 48px 10px 0;
}


/**
* 7.1 Widgets
* -----------------------------------------------------------------------------
*/

/* Primary Sidebar, Footer Sidebar */

.widget {
font-size: 14px;
-webkit-hyphens: auto;
-moz-hyphens:    auto;
-ms-hyphens:     auto;
hyphens:         auto;
line-height: 1.2857142857;
margin-bottom: 48px;
width: 100%;
word-wrap: break-word;
}

.widget a {
color: #fff;
}

.widget a:hover {
color: #41a62a;
}

.widget h1,
.widget h2,
.widget h3,
.widget h4,
.widget h5,
.widget h6 {
margin: 24px 0 12px;
}

.widget h1 {
font-size: 22px;
line-height: 1.0909090909;
}

.widget h2 {
font-size: 20px;
line-height: 1.2;
}

.widget h3 {
font-size: 18px;
line-height: 1.3333333333;
}

.widget h4 {
font-size: 16px;
line-height: 1.5;
}

.widget h5 {
font-size: 14px;
line-height: 1.7142857142;
}

.widget h6 {
font-size: 12px;
line-height: 2;
}

.widget address {
margin-bottom: 18px;
}

.widget abbr[title] {
border-color: rgba(255, 255, 255, 0.7);
}

.widget mark,
.widget ins {
color: #000;
}

.widget pre,
.widget fieldset {
border-color: rgba(255, 255, 255, 0.2);
}

.widget code,
.widget kbd,
.widget tt,
.widget var,
.widget samp,
.widget pre {
font-size: 12px;
line-height: 1.5;
}

.widget blockquote {
color: rgba(255, 255, 255, 0.7);
font-size: 18px;
line-height: 1.5;
margin-bottom: 18px;
}

.widget blockquote cite {
color: #fff;
font-size: 14px;
line-height: 1.2857142857;
}

.widget dl,
.widget dd {
margin-bottom: 18px;
}

.widget ul,
.widget ol {
list-style: none;
margin: 0;
}

.widget li > ol,
.widget li > ul {
margin-left: 10px;
}

.widget table,
.widget th,
.widget td {
border-color: rgba(255, 255, 255, 0.2);
}

.widget table {
margin-bottom: 18px;
}

.widget del {
color: rgba(255, 255, 255, 0.4);
}

.widget hr {
background-color: rgba(255, 255, 255, 0.2);
}

.widget p {
margin-bottom: 18px;
}

.widget-area .widget input,
.widget-area .widget textarea {
background-color: rgba(255, 255, 255, 0.1);
border-color: rgba(255, 255, 255, 0.2);
color: #fff;
font-size: 16px;
padding: 1px 2px 2px 4px;
}

.widget-area .widget input:focus,
.widget-area .widget textarea:focus {
border-color: rgba(255, 255, 255, 0.3);
}

.widget button,
.widget .button,
.widget input[type="button"],
.widget input[type="reset"],
.widget input[type="submit"] {
background-color: #24890d;
border: 0;
font-size: 12px;
padding: 5px 15px 4px;
}

.widget input[type="button"]:hover,
.widget input[type="button"]:focus,
.widget input[type="reset"]:hover,
.widget input[type="reset"]:focus,
.widget input[type="submit"]:hover,
.widget input[type="submit"]:focus {
background-color: #41a62a;
}

.widget input[type="button"]:active,
.widget input[type="reset"]:active,
.widget input[type="submit"]:active {
background-color: #55d737;
}

.widget .wp-caption {
color: rgba(255, 255, 255, 0.7);
margin-bottom: 18px;
}

.widget .widget-title {
font-size: 14px;
font-weight: 700;
line-height: 1.7142857142;
margin: 0 0 24px 0;
text-transform: uppercase;
}

.widget-title,
.widget-title a {
color: #fff;
}

.widget-title a:hover {
color: #41a62a;
}

/* Calendar Widget*/

.widget_calendar table {
line-height: 2;
margin: 0;
}

.widget_calendar caption {
color: #fff;
font-weight: 700;
line-height: 1.7142857142;
margin-bottom: 18px;
text-align: left;
text-transform: uppercase;
}

.widget_calendar thead th {
background-color: rgba(255, 255, 255, 0.1);
}

.widget_calendar tbody td,
.widget_calendar thead th {
text-align: center;
}

.widget_calendar tbody a {
background-color: #24890d;
color: #fff;
display: block;
}

.widget_calendar tbody a:hover {
background-color: #41a62a;
}

.widget_calendar tbody a:hover {
color: #fff;
}

.widget_calendar #prev {
padding-left: 5px;
}

.widget_calendar #next {
padding-right: 5px;
text-align: right;
}

/* Ephemera Widget*/

.widget_twentyfourteen_ephemera > ol > li {
border-bottom: 1px solid rgba(255, 255, 255, 0.2);
margin-bottom: 18px;
padding: 0;
}

.widget_twentyfourteen_ephemera .hentry {
margin: 0;
max-width: 100%;
}

.widget_twentyfourteen_ephemera .entry-title,
.widget_twentyfourteen_ephemera .entry-meta,
.widget_twentyfourteen_ephemera .wp-caption-text,
.widget_twentyfourteen_ephemera .post-format-archive-link,
.widget_twentyfourteen_ephemera .entry-content table {
font-size: 12px;
line-height: 1.5;
}

.widget_twentyfourteen_ephemera .entry-title {
display: inline;
font-weight: 400;
}

.widget_twentyfourteen_ephemera .entry-meta {
margin-bottom: 18px;
}

.widget_twentyfourteen_ephemera .entry-meta a {
color: rgba(255, 255, 255, 0.7);
}

.widget_twentyfourteen_ephemera .entry-meta a:hover {
color: #41a62a;
}

.widget_twentyfourteen_ephemera .entry-content ul,
.widget_twentyfourteen_ephemera .entry-content ol {
margin: 0 0 18px 20px;
}

.widget_twentyfourteen_ephemera .entry-content ul {
list-style: disc;
}

.widget_twentyfourteen_ephemera .entry-content ol {
list-style: decimal;
}

.widget_twentyfourteen_ephemera .entry-content li > ul,
.widget_twentyfourteen_ephemera .entry-content li > ol {
margin: 0 0 0 20px;
}

.widget_twentyfourteen_ephemera .entry-content th,
.widget_twentyfourteen_ephemera .entry-content td {
padding: 6px;
}

.widget_twentyfourteen_ephemera .post-format-archive-link {
font-weight: 700;
text-transform: uppercase;
}

/* List Style Widgets*/

.widget_archive li,
.widget_categories li,
.widget_links li,
.widget_meta li,
.widget_nav_menu li,
.widget_pages li,
.widget_recent_comments li,
.widget_recent_entries li {
border-top: 1px solid rgba(255, 255, 255, 0.2);
padding: 8px 0 9px;
}

.widget_archive li:first-child,
.widget_categories li:first-child,
.widget_links li:first-child,
.widget_meta li:first-child,
.widget_nav_menu li:first-child,
.widget_pages li:first-child,
.widget_recent_comments li:first-child,
.widget_recent_entries li:first-child {
border-top: 0;
}

.widget_categories li ul,
.widget_nav_menu li ul,
.widget_pages li ul {
border-top: 1px solid rgba(255, 255, 255, 0.2);
margin-top: 9px;
}

.widget_categories li li:last-child,
.widget_nav_menu li li:last-child,
.widget_pages li li:last-child {
padding-bottom: 0;
}

/* Recent Posts Widget */

.widget_recent_entries .post-date {
display: block;
}

/* RSS Widget */

.rsswidget img {
margin-top: -4px;
}

.rssSummary {
margin: 9px 0;
}

.rss-date {
display: block;
}

.widget_rss li {
margin-bottom: 18px;
}

.widget_rss li:last-child {
margin-bottom: 0;
}

/* Text Widget */

.widget_text > div > :last-child {
margin-bottom: 0;
}


/**
* 7.2 Content Sidebar Widgets
* -----------------------------------------------------------------------------
*/

.content-sidebar .widget a {
color: #24890d;
}

.content-sidebar .widget a:hover {
color: #41a62a;
}

.content-sidebar .widget pre {
border-color: rgba(0, 0, 0, 0.1);
}

.content-sidebar .widget mark,
.content-sidebar .widget ins {
color: #2b2b2b;
}

.content-sidebar .widget abbr[title] {
border-color: #2b2b2b;
}

.content-sidebar .widget fieldset {
border-color: rgba(0, 0, 0, 0.1);
}

.content-sidebar .widget blockquote {
color: #767676;
}

.content-sidebar .widget blockquote cite {
color: #2b2b2b;
}

.content-sidebar .widget li > ol,
.content-sidebar .widget li > ul {
margin-left: 18px;
}

.content-sidebar .widget table,
.content-sidebar .widget th,
.content-sidebar .widget td {
border-color: rgba(0, 0, 0, 0.1);
}

.content-sidebar .widget del {
color: #767676;
}

.content-sidebar .widget hr {
background-color: rgba(0, 0, 0, 0.1);
}

.content-sidebar .widget input,
.content-sidebar .widget textarea {
background-color: #fff;
border-color: rgba(0, 0, 0, 0.1);
color: #2b2b2b;
}

.content-sidebar .widget input:focus,
.content-sidebar .widget textarea:focus {
border-color: rgba(0, 0, 0, 0.3);
}

.content-sidebar .widget input[type="button"],
.content-sidebar .widget input[type="reset"],
.content-sidebar .widget input[type="submit"] {
background-color: #24890d;
border: 0;
color: #fff;
}

.content-sidebar .widget input[type="button"]:hover,
.content-sidebar .widget input[type="button"]:focus,
.content-sidebar .widget input[type="reset"]:hover,
.content-sidebar .widget input[type="reset"]:focus,
.content-sidebar .widget input[type="submit"]:hover,
.content-sidebar .widget input[type="submit"]:focus {
background-color: #41a62a;
}

.content-sidebar .widget input[type="button"]:active,
.content-sidebar .widget input[type="reset"]:active,
.content-sidebar .widget input[type="submit"]:active {
background-color: #55d737;
}

.content-sidebar .widget .wp-caption {
color: #767676;
}

.content-sidebar .widget .widget-title {
border-top: 5px solid #000;
color: #2b2b2b;
font-size: 14px;
font-weight: 900;
margin: 0 0 18px;
padding-top: 7px;
text-transform: uppercase;
}

.content-sidebar .widget .widget-title a {
color: #2b2b2b;
}

.content-sidebar .widget .widget-title a:hover {
color: #41a62a;
}

/* List Style Widgets*/

.content-sidebar .widget_archive li,
.content-sidebar .widget_categories li,
.content-sidebar .widget_links li,
.content-sidebar .widget_meta li,
.content-sidebar .widget_nav_menu li,
.content-sidebar .widget_pages li,
.content-sidebar .widget_recent_comments li,
.content-sidebar .widget_recent_entries li,
.content-sidebar .widget_categories li ul,
.content-sidebar .widget_nav_menu li ul,
.content-sidebar .widget_pages li ul {
border-color: rgba(0, 0, 0, 0.1);
}

/* Calendar Widget */

.content-sidebar .widget_calendar caption {
color: #2b2b2b;
font-weight: 900;
}

.content-sidebar .widget_calendar thead th {
background-color: rgba(0, 0, 0, 0.02);
}

.content-sidebar .widget_calendar tbody a,
.content-sidebar .widget_calendar tbody a:hover {
color: #fff;
}

/* Ephemera widget*/

.content-sidebar .widget_twentyfourteen_ephemera .widget-title {
line-height: 1.2857142857;
padding-top: 1px;
}

.content-sidebar .widget_twentyfourteen_ephemera .widget-title:before {
background-color: #000;
color: #fff;
margin: -1px 9px 0 0;
padding: 6px 0 9px;
text-align: center;
vertical-align: middle;
width: 36px;
}

.content-sidebar .widget_twentyfourteen_ephemera .video.widget-title:before {
content: "\f104";
}

.content-sidebar .widget_twentyfourteen_ephemera .audio.widget-title:before {
content: "\f109";
}

.content-sidebar .widget_twentyfourteen_ephemera .image.widget-title:before {
content: "\f473";
}

.content-sidebar .widget_twentyfourteen_ephemera .gallery.widget-title:before {
content: "\f103";
}

.content-sidebar .widget_twentyfourteen_ephemera .aside.widget-title:before {
content: "\f101";
}

.content-sidebar .widget_twentyfourteen_ephemera .quote.widget-title:before {
content: "\f106";
}

.content-sidebar .widget_twentyfourteen_ephemera .link.widget-title:before {
content: "\f107";
}

.content-sidebar .widget_twentyfourteen_ephemera > ol > li {
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.content-sidebar .widget_twentyfourteen_ephemera .entry-meta {
color: #ccc;
}

.content-sidebar .widget_twentyfourteen_ephemera .entry-meta a {
color: #767676;
}

.content-sidebar .widget_twentyfourteen_ephemera .entry-meta a:hover {
color: #41a62a;
}

.content-sidebar.widget_twentyfourteen_ephemera blockquote cite {
font-size: 13px;
line-height: 1.3846153846;
}

.content-sidebar .widget_twentyfourteen_ephemera .post-format-archive-link {
font-weight: 900;
}


/**
* 8.0 Footer
* -----------------------------------------------------------------------------
*/

#supplementary {
padding: 0 10px;
}

.site-footer,
.site-info,
.site-info a {
color: rgba(255, 255, 255, 0.7);
}

.site-footer {
background-color: #000;
font-size: 12px;
position: relative;
z-index: 3;
}

.footer-sidebar {
padding-top: 48px;
}

.site-info {
padding: 15px 10px;
}

#supplementary + .site-info {
border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.site-info a:hover {
color: #41a62a;
}


/**
* 9.0 Featured Content
* -----------------------------------------------------------------------------
*/

.featured-content {
background: #000 url(images/pattern-dark.svg) repeat fixed;
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
position: relative;
width: 100%;
}

.featured-content-inner {
overflow: hidden;
}

.featured-content .hentry {
color: #fff;
margin: 0;
max-width: 100%;
width: 100%;
}

.featured-content .post-thumbnail,
.featured-content .post-thumbnail:hover {
background: transparent;
}

.featured-content .post-thumbnail {
display: block;
position: relative;
padding-top: 55.357142857%;
overflow: hidden;
}

.featured-content .post-thumbnail img {
left: 0;
position: absolute;
top: 0;
}

.featured-content .entry-header {
background-color: #000;
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
min-height: 96px;
overflow: hidden;
padding: 24px 10px;
}

.featured-content a {
color: #fff;
}

.featured-content a:hover {
color: #41a62a;
}

.featured-content .entry-meta {
color: #fff;
font-size: 11px;
font-weight: 700;
line-height: 1.0909090909;
margin-bottom: 12px;
}

.featured-content .cat-links {
font-weight: 700;
}

.featured-content .entry-title {
font-size: 18px;
font-weight: 300;
line-height: 1.3333333333;
margin: 0;
text-transform: uppercase;
}


/* Slider */

.slider .featured-content .hentry {
-webkit-backface-visibility: hidden;
display: none;
position: relative;
}

.slider .featured-content .post-thumbnail {
padding-top: 55.49132947%;
}

.slider-control-paging {
background-color: #000;
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
float: left;
list-style: none;
margin: -24px 0 0 0;
position: relative;
width: 100%;
z-index: 3;
}

.slider-control-paging li {
float: left;
margin: 2px 4px 2px 0;
}

.slider-control-paging li:last-child {
margin-right: 0;
}

.slider-control-paging a {
cursor: pointer;
display: block;
height: 44px;
position: relative;
text-indent: -999em;
width: 44px;
}

.slider-control-paging a:before {
background-color: #4d4d4d;
content: "";
height: 12px;
left: 10px;
position: absolute;
top: 16px;
width: 12px;
}

.slider-control-paging a:hover:before {
background-color: #41a62a;
}

.slider-control-paging .slider-active:before,
.slider-control-paging .slider-active:hover:before {
background-color: #24890d;
}

.slider-direction-nav {
clear: both;
list-style: none;
margin: 0;
position: relative;
width: 100%;
z-index: 3;
}

.slider-direction-nav li {
border-color: #fff;
border-style: solid;
border-width: 2px 1px 0 0;
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
float: left;
text-align: center;
width: 50%;
}

.slider-direction-nav li:last-child {
border-width: 2px 0 0 1px;
}

.slider-direction-nav a {
background-color: #000;
display: block;
font-size: 0;
height: 46px;
}

.slider-direction-nav a:hover {
background-color: #24890d;
}

.slider-direction-nav a:before {
color: #fff;
content: "\f430";
font-size: 32px;
line-height: 46px;
}

.slider-direction-nav .slider-next:before {
content: "\f429";
}

.slider-direction-nav .slider-disabled {
display: none;
}


/**
* 10.0 Multisite
* -----------------------------------------------------------------------------
*/

.site-main .widecolumn {
padding-top: 72px;
width: auto;
}
.site-main .mu_register,
.widecolumn > h2,
.widecolumn > form {
margin: 0 auto 48px;
max-width: 474px;
padding: 0 30px;
}

.site-main .mu_register #blog_title,
.site-main .mu_register #user_email,
.site-main .mu_register #blogname,
.site-main .mu_register #user_name {
font-size: inherit;
width: 90%;
}

.site-main .mu_register input[type="submit"],
.widecolumn #submit {
font-size: inherit;
width: auto;
}


/**
* 11.0 Media Queries
* -----------------------------------------------------------------------------
*/

/* Does the same thing as
<meta name="viewport" content="width=device-width">,
* but in the future W3C standard way. -ms- prefix is required for IE10+ to
* render responsive styling in Windows 8 "snapped" views; IE10+ does not honor
* the meta tag. See http://core.trac.wordpress.org/ticket/25888.
*/
@-ms-viewport {
width: device-width;
}

@viewport {
width: device-width;
}

@media screen and (max-width: 400px) {
.list-view .site-content .post-thumbnail {
background: none;
width: auto;
z-index: 2;
}

.list-view .site-content .post-thumbnail img {
float: left;
margin: 0 10px 3px 0;
width: 84px;
}

.list-view .site-content .entry-header {
background-color: transparent;
padding: 0;
}

.list-view .content-area {
padding: 0 10px;
}

.list-view .site-content .hentry {
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
margin: 0;
min-height: 60px;
padding: 12px 0 9px;
}

.list-view .site-content .cat-links,
.list-view .site-content .type-post .entry-content,
.list-view .site-content .type-page .entry-content,
.list-view .site-content .type-post .entry-summary,
.list-view .site-content .type-page .entry-summary,
.list-view .site-content footer.entry-meta {
display: none;
}

.list-view .site-content .entry-title {
clear: none;
font-size: 15px;
font-weight: 900;
line-height: 1.2;
margin-bottom: 6px;
text-transform: none;
}

.list-view .site-content .format-aside .entry-title,
.list-view .site-content .format-link .entry-title,
.list-view .site-content .format-quote .entry-title {
display: block;
}

.list-view .site-content .entry-meta {
background-color: transparent;
clear: none;
margin: 0;
text-transform: none;
}

.archive-header,
.page-header {
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
margin: 24px auto 0;
padding-bottom: 24px;
}

.error404 .page-header {
border-bottom: 0;
margin: 0 auto 24px;
padding: 0 10px;
}
}

@media screen and (min-width: 401px) {
a.post-thumbnail:hover img {
opacity: 0.85;
}

.full-size-link:before,
.parent-post-link:before,
.site-content span + .byline:before,
.site-content span + .comments-link:before,
.site-content span + .edit-link:before,
.site-content span + .entry-date:before {
content: "";
}

.attachment span.entry-date:before,
.entry-content .edit-link a:before,
.entry-meta .edit-link a:before,
.site-content .byline a:before,
.site-content .comments-link a:before,
.site-content .entry-date a:before,
.site-content .featured-post:before,
.site-content .full-size-link a:before,
.site-content .parent-post-link a:before,
.site-content .post-format a:before {
-webkit-font-smoothing: antialiased;
display: inline-block;
font: normal 16px/1 Genericons;
text-decoration: inherit;
vertical-align: text-bottom;
}

.site-content .entry-meta > span {
margin-right: 10px;
}

.site-content .format-video .post-format a:before {
content: "\f104";
}

.site-content .format-audio .post-format a:before {
content: "\f109";
}

.site-content .format-image .post-format a:before {
content: "\f473";
}

.site-content .format-quote .post-format a:before {
content: "\f106";
margin-right: 2px;
}

.site-content .format-gallery .post-format a:before {
content: "\f103";
margin-right: 4px;
}

.site-content .format-aside .post-format a:before {
content: "\f101";
margin-right: 2px;
}

.site-content .format-link .post-format a:before {
content: "\f107";
position: relative;
top: 1px;
}

.site-content .featured-post:before {
content: "\f308";
margin-right: 3px;
position: relative;
top: 1px;
}

.site-content .entry-date a:before,
.attachment .site-content span.entry-date:before {
content: "\f303";
margin-right: 1px;
position: relative;
top: 1px;
}

.site-content .byline a:before {
content: "\f304";
}

.site-content .comments-link a:before {
content: "\f300";
margin-right: 2px;
}

.entry-content .edit-link a:before,
.entry-meta .edit-link a:before {
content: "\f411";
}

.site-content .full-size-link a:before {
content: "\f402";
margin-right: 1px;
}

.site-content .parent-post-link a:before {
content: "\f301";
}

.list-view .site-content .hentry {
border-top: 1px solid rgba(0, 0, 0, 0.1);
padding-top: 48px;
}

.list-view .site-content .hentry:first-of-type,
.list-view .site-content .hentry.has-post-thumbnail {
border-top: 0;
padding-top: 0;
}

.archive-header,
.page-header {
margin: 0 auto 60px;
padding: 0 10px;
}

.error404 .page-header {
margin-bottom: 24px;
}
}

@media screen and (min-width: 594px) {
.site-content .entry-header {
padding-right: 30px;
padding-left: 30px;
}

.site-content .has-post-thumbnail .entry-header {
margin-top: -48px;
}
}

@media screen and (min-width: 673px) {
.header-main {
padding: 0 30px;
}

.search-toggle {
margin-right: 18px;
}

.search-box .search-field {
width: 50%;
}

.content-area {
float: left;
width: 100%;
}

.site-content {
margin-right: 33.33333333%;
}

.site-content .has-post-thumbnail .entry-header {
margin-top: 0;
}

.archive-header,
.comments-area,
.image-navigation,
.page-header,
.page-content,
.post-navigation,
.site-content .entry-content,
.site-content .entry-summary,
.site-content footer.entry-meta {
padding-right: 30px;
padding-left: 30px;
}

.singular .site-content .hentry.has-post-thumbnail {
margin-top: 0;
}

.full-width .site-content {
margin-right: 0;
}

.full-width .site-content .has-post-thumbnail .entry-header,
.full-width .site-content .hentry.has-post-thumbnail:first-child {
margin-top: -48px;
}

#secondary,
#supplementary {
padding: 0 30px;
}

.content-sidebar {
border: 0;
float: right;
margin-left: -33.33333333%;
padding: 48px 30px 24px;
position: relative;
width: 33.33333333%;
}

.grid .featured-content .hentry {
float: left;
width: 50%;
}

.grid .featured-content .hentry:nth-child( 2n+1 ) {
clear: both;
}

.grid .featured-content .entry-header {
border-color: #000;
border-style: solid;
border-width: 12px 10px;
height: 96px;
padding: 0;
}

.slider .featured-content .entry-title {
font-size: 22px;
line-height: 1.0909090909;
}

.slider .featured-content .entry-header {
min-height: inherit;
padding: 24px 30px 48px;
position: absolute;
left: 0;
bottom: 0;
width: 50%;
z-index: 3;
}

.slider-control-paging {
background: transparent;
margin-top: -48px;
padding-left: 20px;
width: 50%;
}

.slider-direction-nav {
clear: none;
float: right;
margin-top: -48px;
width: 98px;
}

.slider-direction-nav li {
border: 0;
padding: 0 1px 0 0;
}

.slider-direction-nav li:last-child {
padding: 0 0 0 1px;
}

.slider-direction-nav a {
height: 48px;
}

.slider-direction-nav a:before {
line-height: 48px;
}

.site-info {
padding: 15px 30px;
}
}

@media screen and (min-width: 783px) {
.site-title {
/* Search-toggle width = 48px */
max-width: -webkit-calc(100% - 48px);
max-width:         calc(100% - 48px);
}

.header-main {
padding-right: 0;
}

.search-toggle {
margin-right: 0;
}

/* Fixed Header */

.masthead-fixed .site-header {
position: fixed;
top: 0;
}

.admin-bar.masthead-fixed .site-header {
top: 32px;
}

.masthead-fixed .site-main {
margin-top: 48px;
}

/* Navigation */

.site-navigation li .current_page_item > a,
.site-navigation li .current_page_ancestor > a,
.site-navigation li .current-menu-item > a,
.site-navigation li .current-menu-ancestor > a {
color: #fff;
}

/* Primary Navigation */

.primary-navigation {
float: right;
font-size: 11px;
margin: 0 1px 0 -12px;
padding: 0;
text-transform: uppercase;
}

.primary-navigation .menu-toggle {
display: none;
padding: 0;
}

.primary-navigation .nav-menu {
border-bottom: 0;
display: block;
}

.primary-navigation.toggled-on {
border-bottom: 0;
margin: 0;
padding: 0;
}

.primary-navigation li {
border: 0;
display: inline-block;
height: 48px;
line-height: 48px;
position: relative;
}

.primary-navigation a {
display: inline-block;
padding: 0 12px;
white-space: nowrap;
}

.primary-navigation ul ul {
background-color: #24890d;
float: left;
margin: 0;
position: absolute;
top: 48px;
left: -999em;
z-index: 99999;
}

.primary-navigation li li {
border: 0;
display: block;
height: auto;
line-height: 1.0909090909;
}

.primary-navigation ul ul ul {
left: -999em;
top: 0;
}

.primary-navigation ul ul a {
padding: 18px 12px;
white-space: normal;
width: 176px;
}

.primary-navigation li:hover > a,
.primary-navigation li.focus > a {
background-color: #24890d;
color: #fff;
}

.primary-navigation ul ul a:hover,
.primary-navigation ul ul li.focus > a {
background-color: #41a62a;
}

.primary-navigation ul li:hover > ul,
.primary-navigation ul li.focus > ul {
left: auto;
}

.primary-navigation ul ul li:hover > ul,
.primary-navigation ul ul li.focus > ul {
left: 100%;
}

.primary-navigation .menu-item-has-children > a,
.primary-navigation .page_item_has_children > a {
padding-right: 26px;
}

.primary-navigation .menu-item-has-children > a:after,
.primary-navigation .page_item_has_children > a:after {
-webkit-font-smoothing: antialiased;
content: "\f502";
display: inline-block;
font: normal 8px/1 Genericons;
position: absolute;
right: 12px;
top: 22px;
vertical-align: text-bottom;
}

.primary-navigation li .menu-item-has-children > a,
.primary-navigation li .page_item_has_children > a {
padding-right: 20px;
width: 168px;
}

.primary-navigation .menu-item-has-children li.menu-item-has-children > a:after,
.primary-navigation .menu-item-has-children li.page_item_has_children > a:after,
.primary-navigation .page_item_has_children li.menu-item-has-children > a:after,
.primary-navigation .page_item_has_children li.page_item_has_children > a:after {
content: "\f501";
right: 8px;
top: 20px;
}
}

@media screen and (min-width: 810px) {
.attachment .entry-attachment .attachment {
margin-right: -168px;
margin-left: -168px;
max-width: 810px;
}

.attachment .site-content .attachment img {
display: block;
margin: 0 auto;
}

.contributor-avatar {
margin-left: -168px;
}

.contributor-summary {
float: left;
}

.full-width .site-content blockquote.alignleft,
.full-width .site-content blockquote.alignright {
width: -webkit-calc(50% + 130px);
width:         calc(50% + 130px);
}

.full-width .site-content blockquote.alignleft,
.full-width .site-content img.size-full.alignleft,
.full-width .site-content img.size-large.alignleft,
.full-width .site-content img.size-medium.alignleft,
.full-width .site-content .wp-caption.alignleft {
margin-left: -168px;
}

.full-width .site-content .alignleft {
clear: left;
}

.full-width .site-content blockquote.alignright,
.full-width .site-content img.size-full.alignright,
.full-width .site-content img.size-large.alignright,
.full-width .site-content img.size-medium.alignright,
.full-width .site-content .wp-caption.alignright {
margin-right: -168px;
}

.full-width .site-content .alignright {
clear: right;
}
}

@media screen and (min-width: 846px) {
.content-area,
.content-sidebar {
padding-top: 72px;
}

.site-content .has-post-thumbnail .entry-header {
margin-top: -48px;
}

.comment-list .trackback,
.comment-list .pingback,
.comment-list article {
margin-bottom: 36px;
padding-top: 36px;
}

.comment-author .avatar {
height: 34px;
top: 2px;
width: 34px;
}

.comment-author,
.comment-awaiting-moderation,
.comment-content,
.comment-list .reply,
.comment-metadata {
padding-left: 50px;
}

.comment-list .children {
margin-left: 20px;
}

.full-width .site-content .hentry.has-post-thumbnail:first-child {
margin-top: -72px;
}

.featured-content {
margin-bottom: 0;
}
}

@media screen and (min-width: 1008px) {
.search-box-wrapper {
padding-left: 182px;
}

.main-content {
float: left;
}

.site-content {
margin-right: 29.04761904%;
margin-left: 182px;
}

.site-content .entry-header {
margin-top: 0;
}

.site-content .has-post-thumbnail .entry-header {
margin-top: 0;
}

.content-sidebar {
margin-left: -29.04761904%;
width: 29.04761904%;
}

.site:before {
background-color: #000;
content: "";
display: block;
height: 100%;
min-height: 100%;
position: absolute;
top: 0;
left: 0;
width: 182px;
z-index: 2;
}

#secondary {
background-color: transparent;
border: 0;
clear: none;
float: left;
margin: 0 0 0 -100%;
min-height: 100vh;
width: 122px;
}

.primary-sidebar {
padding-top: 0;
}

.site-description {
display: block;
margin: 0 0 18px;
}

.site-description:empty {
margin: 0;
}

.secondary-navigation {
font-size: 11px;
margin: 0 -30px 48px;
width: 182px;
}

.secondary-navigation li {
border-top: 1px solid rgba(255, 255, 255, 0.2);
position: relative;
}

.secondary-navigation a {
padding: 10px 30px;
}

.secondary-navigation ul ul {
background-color: #24890d;
position: absolute;
top: 0;
left: -999em;
width: 182px;
z-index: 99999;
}

.secondary-navigation li li {
border-top: 0;
}

.secondary-navigation li:hover > a,
.secondary-navigation li.focus > a {
background-color: #24890d;
color: #fff;
}

.secondary-navigation ul ul a:hover,
.secondary-navigation ul ul li.focus > a {
background-color: #41a62a;
}

.secondary-navigation ul li:hover > ul,
.secondary-navigation ul li.focus > ul {
left: 162px;
}

.secondary-navigation .menu-item-has-children > a {
padding-right: 38px;
}

.secondary-navigation .menu-item-has-children > a:after {
-webkit-font-smoothing: antialiased;
content: "\f501";
display: inline-block;
font: normal 8px/1 Genericons;
position: absolute;
right: 26px;
top: 14px;
vertical-align: text-bottom;
}

.footer-sidebar .widget,
.primary-sidebar .widget {
font-size: 12px;
line-height: 1.5;
}

.footer-sidebar .widget {
-webkit-box-sizing: border-box;
-moz-box-sizing:    border-box;
box-sizing:         border-box;
float: left;
padding: 0 30px;
width: 25%;
}

.footer-sidebar .widget h1,
.primary-sidebar .widget h1 {
font-size: 20px;
line-height: 1.2;
}

.footer-sidebar .widget h2,
.primary-sidebar .widget h2 {
font-size: 18px;
line-height: 1.3333333333;
}

.footer-sidebar .widget h3,
.primary-sidebar .widget h3 {
font-size: 16px;
line-height: 1.5;
}

.footer-sidebar .widget h4,
.primary-sidebar .widget h4 {
font-size: 14px;
line-height: 1.7142857142;
}

.footer-sidebar .widget h5,
.primary-sidebar .widget h5 {
font-size: 12px;
line-height: 2;
}

.footer-sidebar .widget h6,
.primary-sidebar .widget h6 {
font-size: 11px;
line-height: 2.1818181818;
}

.footer-sidebar .widget code,
.footer-sidebar .widget kbd,
.footer-sidebar .widget tt,
.footer-sidebar .widget var,
.footer-sidebar .widget samp,
.footer-sidebar .widget pre,
.primary-sidebar .widget code,
.primary-sidebar .widget kbd,
.primary-sidebar .widget tt,
.primary-sidebar .widget var,
.primary-sidebar .widget samp,
.primary-sidebar .widget pre {
font-size: 11px;
line-height: 1.6363636363;
}

.footer-sidebar .widget blockquote,
.primary-sidebar .widget blockquote {
font-size: 14px;
line-height: 1.2857142857;
}

.footer-sidebar .widget blockquote cite,
.primary-sidebar .widget blockquote cite {
font-size: 12px;
line-height: 1.5;
}

.footer-sidebar .widget input,
.footer-sidebar .widget textarea,
.primary-sidebar .widget input,
.primary-sidebar .widget textarea {
font-size: 12px;
padding: 3px 2px 4px 4px;
}

.footer-sidebar .widget input[type="button"],
.footer-sidebar .widget input[type="reset"],
.footer-sidebar .widget input[type="submit"],
.primary-sidebar .widget input[type="button"],
.primary-sidebar .widget input[type="reset"],
.primary-sidebar .widget input[type="submit"] {
padding: 5px 15px 4px;
}

.footer-sidebar .widget .widget-title,
.primary-sidebar .widget .widget-title {
font-size: 11px;
font-weight: 900;
line-height: 1.6363636363;
margin-bottom: 18px;
}

.footer-sidebar .widget_twentyfourteen_ephemera .entry-title,
.footer-sidebar .widget_twentyfourteen_ephemera .entry-meta,
.footer-sidebar .widget_twentyfourteen_ephemera .wp-caption-text,
.footer-sidebar .widget_twentyfourteen_ephemera .post-format-archive-link,
.footer-sidebar .widget_twentyfourteen_ephemera .entry-content table,
.primary-sidebar .widget_twentyfourteen_ephemera .entry-title,
.primary-sidebar .widget_twentyfourteen_ephemera .entry-meta,
.primary-sidebar .widget_twentyfourteen_ephemera .wp-caption-text,
.primary-sidebar .widget_twentyfourteen_ephemera .post-format-archive-link,
.primary-sidebar .widget_twentyfourteen_ephemera .entry-content table {
font-size: 11px;
line-height: 1.6363636363;
}

.footer-sidebar .widget_archive li,
.footer-sidebar .widget_categories li,
.footer-sidebar .widget_links li,
.footer-sidebar .widget_meta li,
.footer-sidebar .widget_nav_menu li,
.footer-sidebar .widget_pages li,
.footer-sidebar .widget_recent_comments li,
.footer-sidebar .widget_recent_entries li,
.primary-sidebar .widget_archive li,
.primary-sidebar .widget_categories li,
.primary-sidebar .widget_links li,
.primary-sidebar .widget_meta li,
.primary-sidebar .widget_nav_menu li,
.primary-sidebar .widget_pages li,
.primary-sidebar .widget_recent_comments li,
.primary-sidebar .widget_recent_entries li {
border-top: 0;
padding: 0 0 6px;
}

.footer-sidebar .widget_archive li:last-child,
.footer-sidebar .widget_categories li:last-child,
.footer-sidebar .widget_links li:last-child,
.footer-sidebar .widget_meta li:last-child,
.footer-sidebar .widget_nav_menu li:last-child,
.footer-sidebar .widget_pages li:last-child,
.footer-sidebar .widget_recent_comments li:last-child,
.footer-sidebar .widget_recent_entries li:last-child,
.primary-sidebar .widget_archive li:last-child,
.primary-sidebar .widget_categories li:last-child,
.primary-sidebar .widget_links li:last-child,
.primary-sidebar .widget_meta li:last-child,
.primary-sidebar .widget_nav_menu li:last-child,
.primary-sidebar .widget_pages li:last-child,
.primary-sidebar .widget_recent_comments li:last-child,
.primary-sidebar .widget_recent_entries li:last-child {
padding: 0;
}

.footer-sidebar .widget_categories li ul,
.footer-sidebar .widget_nav_menu li ul,
.footer-sidebar .widget_pages li ul,
.primary-sidebar .widget_categories li ul,
.primary-sidebar .widget_nav_menu li ul,
.primary-sidebar .widget_pages li ul {
border-top: 0;
margin-top: 6px;
}

#supplementary {
padding: 0;
}

.footer-sidebar {
font-size: 12px;
line-height: 1.5;
}

.featured-content {
padding-left: 182px;
}

.grid .featured-content .hentry {
width: 33.3333333%;
}

.grid .featured-content .hentry:nth-child( 2n+1 ) {
clear: none;
}

.grid .featured-content .hentry:nth-child( 3n+1 ) {
clear: both;
}

.grid .featured-content .entry-header {
height: 120px;
}
}

@media screen and (min-width: 1040px) {
.site-content .has-post-thumbnail .entry-header {
margin-top: -48px;
}

.archive-header,
.comments-area,
.image-navigation,
.page-header,
.page-content,
.post-navigation,
.site-content .entry-header,
.site-content .entry-content,
.site-content .entry-summary,
.site-content footer.entry-meta {
padding-right: 15px;
padding-left: 15px;
}

.full-width .archive-header,
.full-width .comments-area,
.full-width .image-navigation,
.full-width .page-header,
.full-width .page-content,
.full-width .post-navigation,
.full-width .site-content .entry-header,
.full-width .site-content .entry-content,
.full-width .site-content .entry-summary,
.full-width .site-content footer.entry-meta {
padding-right: 30px;
padding-left: 30px;
}
}

@media screen and (min-width: 1080px) {
.search-box .search-field {
width: 324px;
}

.site-content,
.site-main .widecolumn {
margin-left: 222px;
}

.site:before {
width: 222px;
}

.search-box-wrapper,
.featured-content {
padding-left: 222px;
}

#secondary {
width: 162px;
}

.secondary-navigation,
.secondary-navigation ul ul {
width: 222px;
}

.secondary-navigation ul li:hover > ul,
.secondary-navigation ul li.focus > ul {
left: 202px;
}

.slider .featured-content .entry-title {
font-size: 33px;
}

.slider .featured-content .entry-header,
.slider-control-paging {
width: 534px;
}

.slider-control-paging {
padding-left: 24px;
}

.slider-control-paging li {
margin: 12px 12px 12px 0;
}

.slider-control-paging a {
height: 24px;
width: 24px;
}

.slider-control-paging a:before {
top: 6px;
left: 6px;
}
}

@media screen and (min-width: 1110px) {
.archive-header,
.comments-area,
.image-navigation,
.page-header,
.page-content,
.post-navigation,
.site-content .entry-header,
.site-content .entry-content,
.site-content .entry-summary,
.site-content footer.entry-meta {
padding-right: 30px;
padding-left: 30px;
}
}

@media screen and (min-width: 1218px) {
.archive-header,
.comments-area,
.image-navigation,
.page-header,
.page-content,
.post-navigation,
.site-content .entry-header,
.site-content .entry-content,
.site-content .entry-summary,
.site-content footer.entry-meta {
margin-right: 54px;
}

.full-width .archive-header,
.full-width .comments-area,
.full-width .image-navigation,
.full-width .page-header,
.full-width .page-content,
.full-width .post-navigation,
.full-width .site-content .entry-header,
.full-width .site-content .entry-content,
.full-width .site-content .entry-summary,
.full-width .site-content footer.entry-meta {
margin-right: auto;
}
}

@media screen and (min-width: 1260px) {
.site-content blockquote.alignleft,
.site-content blockquote.alignright {
width: -webkit-calc(50% + 18px);
width:         calc(50% + 18px);
}

.site-content blockquote.alignleft {
margin-left: -18%;
}

.site-content blockquote.alignright {
margin-right: -18%;
}
}


/**
* 12.0 Print
* -----------------------------------------------------------------------------
*/

@media print {
body {
background: none !important; /* Brute force since user agents all print differently. */
color: #2b2b2b;
font-size: 12pt;
}

.site,
.site-header,
.hentry,
.site-content .entry-header,
.site-content .entry-content,
.site-content .entry-summary,
.site-content .entry-meta,
.page-content,
.archive-header,
.page-header,
.contributor-info,
.comments-area,
.attachment .entry-attachment .attachment {
max-width: 100%;
}

#site-header img,
.search-toggle,
.site-navigation,
.site-content nav,
.edit-link,
.page-links,
.widget-area,
.more-link,
.post-format-archive-link,
.comment-respond,
.comment-list .reply,
.comment-reply-login,
#secondary,
.site-footer,
.slider-control-paging,
.slider-direction-nav {
display: none;
}

.site-title a,
.entry-meta,
.entry-meta a,
.featured-content .hentry,
.featured-content a {
color: #2b2b2b;
}

.entry-content a,
.entry-summary a,
.page-content a,
.comment-content a {
text-decoration: none;
}

.site-header,
.post-thumbnail,
a.post-thumbnail:hover,
.site-content .entry-header,
.site-footer,
.featured-content,
.featured-content .entry-header {
background: transparent;
}

.header-main {
padding: 48px 10px;
}

.site-title {
float: none;
font-size: 19pt;
}

.content-area {
padding-top: 0;
}

.list-view .site-content .hentry {
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
margin-bottom: 48px;
padding-bottom: 24px;
}

.post-thumbnail img {
margin: 0 10px 24px;
}

.site-content .has-post-thumbnail .entry-header {
padding-top: 0;
}

.site-content footer.entry-meta {
margin: 24px auto;
}

.entry-meta .tag-links a {
color: #fff;
}

.singular .site-content .hentry.has-post-thumbnail {
margin-top: 0;
}

.gallery-columns-1.gallery-size-medium,
.gallery-columns-1.gallery-size-thumbnail,
.gallery-columns-2.gallery-size-thumbnail,
.gallery-columns-3.gallery-size-thumbnail {
display: block;
}

.archive-title,
.page-title {
margin: 0 10px 48px;
}

.featured-content .hentry {
margin-bottom: 48px;
}

.featured-content .post-thumbnail,
.slider .featured-content .post-thumbnail {
padding-top: 0;
}

.featured-content .post-thumbnail img {
position: relative;
}

.featured-content .entry-header {
padding: 0 10px 24px;
}

.featured-content .entry-meta {
font-size: 9pt;
margin-bottom: 11px;
}

.featured-content .cat-links {
font-weight: 900;
}

.featured-content .entry-title {
font-size: 25pt;
line-height: 36px;
}
}
/* KMC */
#bwp_speakerfrm div {
clear:both;
display:block;
float:left;
}
#bwp_speakerfrm input, #bwp_speakerfrm select {
float:right;
margin-bottom:20px;
}

BostonWP.org
=============

This repo is the new home of the BostonWP.org website! Currently living at [hackday.bostonwp.org](http://hackday.bostonwp.org/).

## About

This repo contains a subset of `wp-content`. Once the hack day is finished, we should have the theme folder in `themes`, and the plugin folders in `plugins`. 

_Do not commit any existing plugins, themes, or the uploads directory!_

## Local Development

> __Note:__ If [hackday.bostonwp.org](http://hackday.bostonwp.org/) doesn't work for you, update your hosts file to point the domain to `192.185.36.125`.
>
> - [Instructions for Win, Mac, and Linux](http://www.rackspace.com/knowledge_center/article/how-do-i-modify-my-hosts-file) 
> - [Gas Mask (Mac app)](http://www.clockwise.ee/gasmask/)

If you don't already have git set up, download the GitHub app: [Windows](https://windows.github.com/) or [Mac](https://mac.github.com/).

Set up a local install of WordPress, using whatever method works for you. I prefer [Vagrant](https://github.com/Varying-Vagrant-Vagrants/VVV/), but you can use [MAMP](http://www.mamp.info/en/), [XAMPP](https://www.apachefriends.org/index.html), or even [Desktop Server](http://serverpress.com/products/desktopserver/).

Rename your `wp-content` folder to anything, we're going to end up deleting it later.

Fork this repo so you can work on it under your own account: [Using the app](https://guides.github.com/activities/forking/), or [using command line](https://help.github.com/articles/fork-a-repo/).

Clone your new repo into the root WP directory, and rename it to `wp-content`

Move the default themes back into the new `wp-content` (at least one, so we can use the site while the new theme is being developed), and delete the now-renamed original.

### How to Work

If you're not familiar with git, read through the linked articles before getting started.

[Create branches for your work](https://help.github.com/articles/branching-out/#branches). How you'll break tasks down will depend on the teams, so talk about workflow before getting started.

Write your code and commit in small chunks. ([How to make changes](https://help.github.com/articles/making-changes/))

- [Follow the WordPress coding standards](https://make.wordpress.org/core/handbook/coding-standards/php/)
- [Use WP_DEBUG to test for errors locally](http://codex.wordpress.org/Editing_wp-config.php#Debug)

Push your work to your github account, and [Create a Pull Request](https://help.github.com/articles/creating-a-pull-request/) against [the BostonWP repo](https://github.com/bostonwp/2015-bostonwp/) to submit your code.

Your team lead can merge in your PR after a review, and it will be automatically deployed to [hackday.bostonwp.org](http://hackday.bostonwp.org/).

__Don't be afraid to ask questions! your team is your first resource, but the organizers and leads are available for questions too.__

### Other Resources

- [Another git app, not github-specific, for Mac](http://rowanj.github.io/gitx/)
- [_s starter theme](http://underscores.me/)


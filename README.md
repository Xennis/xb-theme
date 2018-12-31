# WordPress Theme xb-wp-theme

[![Build Status](https://travis-ci.org/Xennis/xb-wp-theme.svg?branch=master)](https://travis-ci.org/Xennis/xb-wp-theme)

WordPress theme build with [jQuery](https://jquery.com/) as JavaScript library
and [Skeleton](http://getskeleton.com/) as responsive CSS boilerplate.

![Desktop](screenshot.png)

### Setup

Install requirements
* `npm install`

Run
* `./node_modules/gulp/bin/gulp.js`

#### Sync required files

```sh
rsync -r --relative *.md *.php *.png *.css src/php dist images/ <host>:<wordpress-dir>/wp-content/themes/xb-wp-theme/
```

### Credits

Inspired by the theme [onetone](https://wordpress.org/themes/onetone/) by MageeWP

Patterns
* [GPlay](http://subtlepatterns.com/gplay/) by Dimitrie Hoekstra
* [Black linen 2](http://subtlepatterns.com/black-linen-2/) by Atle Mo
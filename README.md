# WP Dependencies
Provides Function To Check if a plugin is active/inactive & function to compare versions.

[![Latest Stable Version](https://poser.pugx.org/varunsridharan/wp-dependencies/version)](https://packagist.org/packages/varunsridharan/wp-dependencies)
[![Latest Unstable Version](https://poser.pugx.org/varunsridharan/wp-dependencies/v/unstable)](https://packagist.org/packages/varunsridharan/wp-dependencies)
[![Total Downloads](https://poser.pugx.org/varunsridharan/wp-dependencies/downloads)](https://packagist.org/packages/varunsridharan/wp-dependencies)
[![Latest Unstable Version](https://poser.pugx.org/varunsridharan/wp-dependencies/v/unstable)](//packagist.org/packages/varunsridharan/wp-dependencies)
[![WP](https://img.shields.io/badge/WordPress-Standar-1abc9c.svg)](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/)
[![License](https://poser.pugx.org/varunsridharan/wp-dependencies/license)](https://packagist.org/packages/varunsridharan/wp-dependencies)
[![composer.lock available](https://poser.pugx.org/varunsridharan/wp-dependencies/composerlock)](https://packagist.org/packages/varunsridharan/wp-dependencies)

## Installation
The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **VSP_Framework library**, simply:

    $ composer require varunsridharan/wp-dependencies

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require varunsridharan/wp-dependencies --prefer-source

You can also **clone the complete repository** with Git:

    $ git clone https://github.com/varunsridharan/wp-dependencies.git

Or **install it manually**:

   [Download Dependencies.php](https://raw.githubusercontent.com/varunsridharan/wp-dependencies/master/src/dependencies.php):
    
    $ wget https://raw.githubusercontent.com/varunsridharan/wp-dependencies/master/src/dependencies.php
   
   [Download Functions.php](https://raw.githubusercontent.com/varunsridharan/wp-dependencies/master/src/functions.php):
    
    $ wget https://raw.githubusercontent.com/varunsridharan/wp-dependencies/master/src/functions.php

## Usage

```php
include __DIR__.'/dependencies.php';
```

### `wp_is_plugin_active( $plugin_file )`
This function can be used to check if the given plugin is active for the Current WP Install (It can be a network / single site)
```php
/**
 * You Need To Pass Main Plugin File To Check If Its Active.
 */
$is_wc_active        = wp_is_plugin_active( 'woocommerce/woocommerce.php' );
$is_gutenberg_active = wp_is_plugin_active( 'gutenberg/gutenberg.php' );
```

### `wp_is_plugin_network_active( $plugin_file )`
This function can be used to check if the given plugin is active network wide (Usefull Only If its a WP Network Install)
```php
/**
 * You Need To Pass Main Plugin File To Check If Its Active.
 */
$is_wc_active        = wp_is_plugin_network_active( 'woocommerce/woocommerce.php' );
$is_gutenberg_active = wp_is_plugin_network_active( 'gutenberg/gutenberg.php' );
```

### `wp_is_site_plugin_active( $plugin_file )`
This function can be used to check if the given plugin is active only in the current site (Usefull only if its a WP Network Install)
```php
/**
 * You Need To Pass Main Plugin File To Check If Its Active.
 */
$is_wc_active        = wp_is_site_plugin_active( 'woocommerce/woocommerce.php' );
$is_gutenberg_active = wp_is_site_plugin_active( 'gutenberg/gutenberg.php' );
```

### `wp_is_plugin_inactive( $plugin_file )`
This function can be used to check if given plugin is inactive for the current WP install.
```php
/**
 * You Need To Pass Main Plugin File To Check If Its InActive.
 */
$is_wc_inactive        = wp_is_plugin_inactive( 'woocommerce/woocommerce.php' );
$is_gutenberg_inactive = wp_is_plugin_inactive( 'gutenberg/gutenberg.php' );
```

### `plugin_version( $plugin_file )`
Passing a plugin's main file will return the plugin's version.
```php
$wc_version = plugin_version( 'woocommerce/woocommerce.php' );

if($wc_version === '3.0.1'){
    // Do your stuff.
}
```

### `plugin_version_gt( $plugin_file, $compare_version )`
Use this function to check if the plugin's version is greater than then version you pass.

**Alias Name:** `is_version_gt( $plugin_file, $compare_version )`

```php
$wc_version = plugin_version_gt( 'woocommerce/woocommerce.php', '3.0.1' );

if( true === $wc_version ){
    // Do your stuff.
}
```

### `plugin_version_gte( $plugin_file, $compare_version )`
Use this function to check if the plugin's version is greater than or equal to the version you pass.

**Alias Name:** `is_version_gte( $plugin_file, $compare_version )`

```php
$wc_version = plugin_version_gte( 'woocommerce/woocommerce.php', '3.0.1' );

if( true === $wc_version ){
    // Do your stuff.
}
```

### `plugin_version_lt( $plugin_file, $compare_version )`
Use this function to check if the plugin's version is less than to the version you pass.

**Alias Name:** `is_version_lt( $plugin_file, $compare_version )`

```php
$wc_version = plugin_version_lt( 'woocommerce/woocommerce.php', '3.0.1' );

if( true === $wc_version ){
    // Do your stuff.
}
```

### `plugin_version_lte( $plugin_file, $compare_version )`
Use this function to check if the plugin's version is less than or equal to the version you pass.

**Alias Name:** `is_version_lte( $plugin_file, $compare_version )`

```php
$wc_version = plugin_version_lte( 'woocommerce/woocommerce.php', '3.0.1' );

if( true === $wc_version ){
    // Do your stuff.
}
```

### Software Versions
```php
$is_wp_5_0 = is_version_gte('wordpress','5.0');
$is_php_5_0 = is_version_gte('php','5.0');
$is_mysql_5_0 = is_version_gte('mysql','5.0');
```


---

<!-- START common-footer.mustache  -->
## 📝 Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

[Checkout CHANGELOG.md](https://github.com/varunsridharan/wp-dependencies/blob/main/CHANGELOG.md)


## 🤝 Contributing
If you would like to help, please take a look at the list of [issues](https://github.com/varunsridharan/wp-dependencies/issues/).


## 📜  License & Conduct
- [**GNU General Public License v3.0**](https://github.com/varunsridharan/wp-dependencies/blob/main/LICENSE) © [Varun Sridharan](website)
- [Code of Conduct](https://github.com/varunsridharan/.github/blob/main/CODE_OF_CONDUCT.md)


## 📣 Feedback
- ⭐ This repository if this project helped you! :wink:
- Create An [🔧 Issue](https://github.com/varunsridharan/wp-dependencies/issues/) if you need help / found a bug


## 💰 Sponsor
[I][twitter] fell in love with open-source in 2013 and there has been no looking back since! You can read more about me [here][website].
If you, or your company, use any of my projects or like what I’m doing, kindly consider backing me. I'm in this for the long run.

- ☕ How about we get to know each other over coffee? Buy me a cup for just [**$9.99**][buymeacoffee]
- ☕️☕️ How about buying me just 2 cups of coffee each month? You can do that for as little as [**$9.99**][buymeacoffee]
- 🔰         We love bettering open-source projects. Support 1-hour of open-source maintenance for [**$24.99 one-time?**][paypal]
- 🚀         Love open-source tools? Me too! How about supporting one hour of open-source development for just [**$49.99 one-time ?**][paypal]

<!-- Personl Links -->
[paypal]: https://sva.onl/paypal
[buymeacoffee]: https://sva.onl/buymeacoffee
[twitter]: https://sva.onl/twitter/
[website]: https://sva.onl/website/


## Connect & Say 👋
- **Follow** me on [👨‍💻 Github][github] and stay updated on free and open-source software
- **Follow** me on [🐦 Twitter][twitter] to get updates on my latest open source projects
- **Message** me on [📠 Telegram][telegram]
- **Follow** my pet on [Instagram][sofythelabrador] for some _dog-tastic_ updates!

<!-- Personl Links -->
[sofythelabrador]: https://www.instagram.com/sofythelabrador/
[github]: https://sva.onl/github/
[twitter]: https://sva.onl/twitter/
[telegram]: https://sva.onl/telegram/


---

<p align="center">
<i>Built With ♥ By <a href="https://sva.onl/twitter"  target="_blank" rel="noopener noreferrer">Varun Sridharan</a> <a href="https://en.wikipedia.org/wiki/India">
   <img src="https://cdn.svarun.dev/flag-india.jpg" width="20px"/></a> </i> <br/><br/>
   <img src="https://cdn.svarun.dev/codeispoetry.png"/>
</p>

---


<!-- END common-footer.mustache  -->

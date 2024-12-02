<h2 style="text-align: center">
FontAwesome Free asset bundle for Yii 2.0 Framework
</h2>

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <a href="https::/fontawesome.io">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Font_Awesome_logomark_blue.svg/768px-Font_Awesome_logomark_blue.svg.png?20220809042108" width="100px">
    </a>
</p>

## Installation #

___

[Changelog](CHANGELOG.md) of package

The preferred way to install this extension is through [composer](http://getcomposer.org/download/)

Either run:

`composer require mylistryx/yii2-fontawesome-free`  or add `"mylistryx/yii2-font-awesome-free": "~6.0.0"` into your `composer.json` file.

Then register assets in your view file:

`FontAwesomeAsset::register($this)` OR `FontAwesomeCdnAsset::register($this)` to use CDN files.

and use:

`<?= FA::icon('name') ?>`

`<?= FA::icon('pencil') ?>`

`<?= FA::icon('gear') ?>`

`<?= FAS::icon('pencil) ?>` is same as `<?= FA::icon('pencil') ?>`

`<?= FAB::icon('facebook') ?>` - FAB helper for Brands collection

... and so on. Full list of free icons see on fontawesome home page:  https://fontawesome.com/icons

### <span style="color:#A32">Attention!</span>

---

Other helpers exists only for backward capability with PRO version! Some Solid icons excluded from Free version!

### Animation

---

Animations are represented:

`<?= FA::i('gear')->animate((new Beat(3.0))) ?>`

`<?= FA::i('gear')->animate((new Shake())) ?>`

`<?= FA::i('gear')->animate((new Spin())) ?>`

`<?= FA::i('gear')->animate((new Flip())) ?>`

`<?= FA::i('gear')->animate((new Bounce())) ?>`

see source files for more.


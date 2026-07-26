# Yii2 Animate

![License](https://img.shields.io/packagist/l/cinghie/yii2-animate.svg)
![Latest Stable Version](https://img.shields.io/github/release/cinghie/yii2-animate.svg)
![Latest Release Date](https://img.shields.io/github/release-date/cinghie/yii2-animate.svg)
![Latest Commit](https://img.shields.io/github/last-commit/cinghie/yii2-animate.svg)
[![Total Downloads](https://packagist.org/packages/cinghie/yii2-animate)](https://packagist.org/packages/cinghie/yii2-animate)

Yii 2 asset bundles for [Animate.css](https://animate.style/) **v4**.

## Requirements

- Yii 2 (`^2.0.15`)
- `bower-asset/animate.css` (`^4.1.1` — latest upstream as of this release is still **4.1.1**)

Configure the `@bower` alias to `vendor/bower-asset` (standard Yii 2 advanced / composer-asset setup).

## Installation

```bash
composer require cinghie/yii2-animate "^1.0.4"
```

or in `composer.json`:

```json
"cinghie/yii2-animate": "^1.0.4"
```

## Usage

Register the asset in a view (or layout):

```php
use cinghie\animate\AnimateMinifyAsset;

// Production / default: minified CSS only
AnimateMinifyAsset::register($this);
```

Development (readable CSS):

```php
use cinghie\animate\AnimateAsset;

AnimateAsset::register($this);
```

### Animate.css v4 class names

v4 uses the `animate__` prefix (the old `.animated` class is gone unless you load `animate.compat.css` yourself):

```html
<div class="animate__animated animate__fadeIn">Hello</div>
<div class="animate__animated animate__bounce animate__delay-1s">Bounce</div>
```

See the full list at [animate.style](https://animate.style/).

### Production tip

Prefer `AnimateMinifyAsset` in production. Both bundles publish **only** their CSS file from the bower package (no docs / source tree).

## License

BSD-3-Clause. Animate.css itself is MIT (see the upstream package).

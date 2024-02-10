# pith-pack-animate-css
Pack Animate.css for Pith


-------

# About

This project packs Animate.css so that it can be used with the Pith Framewok.

For info on Animate.css, see the Animate.css website at https://animate.style/

For info on Pith, see the Pith website at https://pith-framework.org/

# Install

Install to an existing Pith Framework project

Use Composer to install pack to the `vendor` folder.
```bash
php composer.phar require pith-front/pith-pack-animate-css
```

Add new route to your Route List:

```php
public array $routes = [
    // Other routes....
    // ...
    
    // Add route to call aero-gel from
    ['route', 'GET', '/resources/vendor/library/animate.css/{filepath:.+}', '\\PithFront\\PithPackAnimateCss\\AnimateCssResourceRoute'],
];
```

-------------


# Licensing Info

### Animate.css
- Animate.css
- The MIT License (MIT)
- Copyright (c) 2020 Daniel Eden
- Link: https://animate.style/

### pith-pack-animate-css
- pith-pack-animate-css
- The MIT License (MIT)
- Copyright (c) Ian Maurmann
- Link: https://github.com/pith-front/pith-pack-animate-css
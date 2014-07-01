Social Buttons 
==============

We use the [Social Buttons for BootstrapSocial Buttons for Bootstrap](http://lipis.github.io/bootstrap-social)
that made in pure CSS with [Bootstrap](http://twbs.github.io/bootstrap/) and [Font Awesome](http://fortawesome.github.io/Font-Awesome/)!


Installation
============

Enable the plugin in your ProjectConfiguration.class.php:
```
$this->enablePlugins('sfSocialButtonsPlugin');
```

Publish the Assets:
```
php symfony plugin:publish-assets
```

Add following lines into your view.yml:
```
all:
  stylesheets:
    [...]
    - /sfSocialButtonsPlugin/css/bootstrap-social.css
    - http:////maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css
```

Enable the module in the settings.yml
```
all:
  .settings:
    enabled_modules: [..., sfSocialButtons]
```
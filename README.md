# Adminer.Plugins.IpRestriction

This plugin that adds the functionality of the IP restrictions to [Adminer](https://www.adminer.org/).
You can specify the IP address to be permitted at the time of plugin call.

BUT PLEASE USE SUCH AS .htaccess AS POSSIBLE.


```php
    $plugins = array(
        // specify enabled plugins here
        new AdminerIpRestriction("203.0.113.1", "203.0.113.2", "203.0.113.3"),
    );
```


これれは[Adminer](https://www.adminer.org/)にIPアドレスによるアクセス制限を追加するプラグインです。
許可するIPアドレスは、プラグインの呼び出し時に指定できます。

しかし、この目的のためには、.htaccessなど別の手段を考慮することをおすすめします。

```php
    $plugins = array(
        // specify enabled plugins here
        new AdminerIpRestriction("203.0.113.1", "203.0.113.2", "203.0.113.3"),
    );
```

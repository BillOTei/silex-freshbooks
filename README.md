silex-freshbooks
================

A silex service wrapper for FreshBooks API
https://github.com/rtconner/freshbooks-api

```
$app['freshbooks'] = $app->share(function () use ($app) {
return new FreshBooksApi($app['freshbooks_domain'], $app['freshbooks_token']);
});
```

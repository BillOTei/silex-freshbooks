<?php

namespace Freshbooks;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class FreshbooksServiceProvider
 * @package Freshbooks
 * @author Bill'O <ateilhet@gmail.com>
 */
class FreshbooksServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function register(Application $app)
    {
        $app['freshbooks'] = $app->share(function () use ($app) {
                return new FreshBooksApi($app['freshbooks_domain'], $app['freshbooks_token']);
            });
    }

    /**
     * {@inheritDoc}
     */
    // @codeCoverageIgnoreStart
    public function boot(Application $app)
    {
    }
    // @codeCoverageIgnoreEnd
}

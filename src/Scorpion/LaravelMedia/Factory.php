<?php
namespace Scorpion\LaravelMedia;

use Illuminate\Foundation\Application;

class Factory
{
    /**
     * Available embed providers.
     *
     * @var array
     */
    protected $providers;

    /**
     * Create LaravelMedia factory and set providers from config.
     *
     * @param  array  $config
     * @return void
     */
    public function __construct(array $config)
    {
        $this->providers = $config['providers'];
    }

    /**
     * Create a new Media instance.
     *
     * @param  array  $url
     * @param  array  $options  Extra options like iframe attributes or params.
     * @return Scorpion\LaravelMedia\Media
     */
    public function make($url = null, $options = null)
    {
        $media = new Media($url, $options);
        $media->setProviders($this->providers);

        return $media;
    }
}

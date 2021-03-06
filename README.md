# Media

Generate media html (YouTube, Vimeo, Kickstarter etc.) based on the url.

Original Package: https://github.com/KaneCohen/embed

## Installation

Add following require to your `composer.json` file:

For Laravel 5*:

~~~
    "davodavodavo3/media": "dev-master"
    // or
    "davodavodavo3/media": "5.4.*@dev",
~~~
Then run `composer install` or `composer update` to download it and autoload.

Or simple run:
~~~
composer require "davodavodavo3/media":"5.4.*@dev"
~~~

Then in your config/app.php add

~~~
'providers' => array(

	//...
	Scorpion\LaravelMedia\MediaServiceProvider::class,
	//...

)
~~~

In aliases:

~~~
'aliases' => array(

	//...
	'Media' => Scorpion\LaravelMedia\Facades\Media::class,
	//...

)
~~~

## Usage

~~~
$media = Media::make('http://youtu.be/uifYHNyH-jA')->parseUrl()
// Will return Media class if provider is found. Otherwie will return false - not found. No fancy errors for now.
if ($media) {
	// Set width of the media embed.
	$media->setAttribute(['width' => 600]);

	// Print html: '<iframe width="600" height="338" src="//www.youtube.com/embed/uifYHNyH-jA" frameborder="0" allowfullscreen></iframe>'.
	// Height will be set automatically based on provider width/height ratio.
	// Height could be set explicitly via setAttr() method.
	echo $media->getHtml();
}
~~~

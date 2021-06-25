# REST ACF Example

You can find the following code in the `functions.php` for the twentytwentyone theme in this codebase.

You will need to add it to the `functions.php` file in your active theme, but you will be substituting this with your custom post types.

```php
// function to create the custom post type
function create_post_type()
{
	register_post_type(
		'artists',
		array(
			'labels' => array(
				'name' => __('Artists'),
				'singular_name' => __('Artist'),
			),
			'public' => true,
			'has_archive' => true,
			'description' => 'Artists.',
			'map_meta_cap' => true,
			'rewrite' => array('slug' => 'artists'),
			'capability_type' => 'page',
			'hierarchical' => false,
			// This is the important property. This must be true.
			'show_in_rest'    => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
			'exclude_from_search' => true,
			'show_in_menu'    => true
		)
	);
}

add_action('init', 'create_post_type');

// This function adds the ACF fields for the post to the response under a key 'acf'
function acf_to_rest_api($response, $post, $request)
{
	if (!function_exists('get_fields')) return $response;

	if (isset($post)) {
		$acf = get_fields($post->id);
		$response->data['acf'] = $acf;
	}
	return $response;
}

// This one specifically targets the post type artists. If you want to add this to multiple post types you would add another one of these for that specific post type.
add_filter('rest_prepare_artists', 'acf_to_rest_api', 10, 3);

```

## Making the REST Call

There are two urls for accessing a custom post type.

### Index

```
/wp-json/wp/v2/{custom-post-type}
```

This url gives you an array of all posts in the passed in post type. For the example in the code above the url would be `/wp-json/wp/v2/artists`

### Single

```
/wp-json/wp/v2/{custom-post-type}/{id}
```

This url gives you the post for the passed in post type and id. For the example in the code above the url would be `/wp-json/wp/v2/artists/8`

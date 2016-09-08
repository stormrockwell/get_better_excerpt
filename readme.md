# get_better_excerpt for WordPress
Simple function for better results than get_the_excerpt

1. If you already have the $post object you can pass it to the function to prevent fetching for it again
2. Reliably gets the excerpt first, if there is no excerpt it gets the content
3. Add a count to easily change the excerpt length 

`get_better_excerpt( $post, $count = 150 )`

## Parameters
**$post**(int or object) - Either the post ID or the post object. Use the post object if available

**$count**(int) - Length of the excerpt

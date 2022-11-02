<?php

$query = new WP_Query( 
    array( 
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => -1
    ) 
);

if( $query->have_posts() ){

    $amazon = new Amazon_S3_And_CloudFront(); 
    while( $query->have_posts())
    {
        $query->the_post();
        echo $post->ID . " -> " . wp_get_attachment_url($post->ID) ;
        $amazon->wp_update_attachment_metadata([],$post->ID);
        echo " --> ". wp_get_attachment_url($post->ID) ."\n";
        
    }

}


/*
$current_date = date('d/m/Y == H:i:s');
echo $current_date;

echo apply_filters('the_content', get_post_field('post_content', $post->ID));



foreach($image_query->posts() as $image){
    echo "<br>" . $image->ID;
}


//$amazon->wp_update_attachment_metadata([],44);
*/
<?php

function practice_areas(){

    $query = new WP_Query(
        array(
            'post_type' => 'practice-areas',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $i = 1;   
    while ($query -> have_posts()):
        $query->the_post();

        $str .='
        <div class="full-row">
            <div class=full-row">
                <a class="icon" href="'.get_the_permalink().'"><i aria-hidden="true" class="'.do_shortcode('[acf field="icon"]').'></i>	</a>
            </div>
            <div class="full-row">
                <span>
                    <h3>'.get_the_title().'	</h3>				
                </span>
            </div>
            <div class="full-row">
                <span>
                    <p>'.do_shortcode('[acf field="blurb"]').'</p>	
                </span>
            </div>
        </div>       
            ';            
    endwhile;
    
    wp_reset_postdata();
    return $str;

    



}

function practice_areas_link(){
    $query = new WP_Query(
        array(
            'post_type' => 'practice-areas',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $links = '';
    while ($query -> have_posts()):
        $query->the_post();
        $links .= '<a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a><br>';
    endwhile;
    wp_reset_postdata();
    return $links;
}


add_shortcode('practice_areas_link', 'practice_areas_link');
add_shortcode('practice_areas', 'practice_areas');

//add_filter('manage_practice-areas_posts_columns', 'practice_areas_columns')

/*function practice_areas_columns($columns) {
    $columns = array(
        'cb' => 'cb',
        'title' => 'Title',
        'order' => 'Order',
        'date' => 'date'
    );
}

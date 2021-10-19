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
    $str = '<div class="elementor-row">';
    while ($query -> have_posts()):
        $query->the_post();

        $str .= '
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element data-element_type="column">
            <div class="practice-area-box homepage-services">
                <div class="content">
                    <a class="icon" href="'.get_the_permalink().'"><i aria-hidden="true" class="'.do_shortcode('[acf field="icon"]').'></i>	</a>
                    <h3 class="title">'.get_the_title().'</h3>
                    <p class="description">'.do_shortcode('[acf field="blurb"]').'</p>
                </div>
            </div>
        </div>
        ';

        if($i % 3 == 0):
            $str .= '</div>';
            $str .= '<div class="elementor-row">';
        endif;
        $i++;
    endwhile;
    
    wp_reset_postdata();
    return $str;

    /*
     

    <div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-dfeee8c" data-id="dfeee8c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-6f8db4b elementor-view-stacked elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="6f8db4b" data-element_type="widget" data-widget_type="icon-box.default">
				    <div class="elementor-widget-container">
					    <div class="elementor-icon-box-wrapper">
						    <div class="elementor-icon-box-icon">
				                <span class="elementor-icon elementor-animation-">
				                    <i aria-hidden="true" class="fas fa-users"></i>				
                                </span>
			                </div>
			                <div class="elementor-icon-box-content">
                                <h3 class="elementor-icon-box-title">
                                    <span>
                                        This is the heading					
                                    </span>
                                </h3>
                                <p class="elementor-icon-box-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                </p>
			                </div>
		                </div>
				    </div>
				</div>
			</div>
		</div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-42f65f1" data-id="42f65f1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a51ce1c elementor-view-stacked elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a51ce1c" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">
                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-">
                                        <i aria-hidden="true" class="fas fa-users"></i>				
                                    </span>
                                </div>
                                <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                        <span>
                                            This is the heading					
                                        </span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-735d41d" data-id="735d41d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1e08b67 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1e08b67" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">
                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-">
                                        <i aria-hidden="true" class="fas fa-users"></i>				
                                    </span>
                                </div>
                            <div class="elementor-icon-box-content">
                                <h3 class="elementor-icon-box-title">
                                    <span>
                                        This is the heading					
                                    </span>
                                </h3>
                                <p class="elementor-icon-box-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>

     */



}

/*function practice_areas_link(){
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
}*/

add_shortcode('practice_areas_link', 'practice_areas_link');
add_shortcode('practice_areas', 'practice_areas');




<?php
/**
 * Wds Basic widgets
 */
use \Elementor\Widget_Base;
class Wds_Basic_widgets extends Widget_Base {



	/**
	 * Get widget name.
	 */
	public function get_name() {
		return 'Wds_Basic_widget';
	}



	/**
	 * Get widget title.
	 */
	public function get_title() {
		return __( 'Basic widget', 'wds_ele_textdomain' );
	}



	/**
	 * Get widget icon.
	 */
	public function get_icon() {
		return 'fa fa-battery-three-quarters';
	}



	/**
	 * Get widget categories.
	 */
	public function get_categories() {
		return [ 'wds-custom-cat' ];
	}


	
	/**add Stylesheet  Dependency in weidget */
	public function get_style_depends(){
        return ["wds_style_css",];
        
        
	}



	/**add Javascript Dependency in weidget */
	public function get_script_depends(){  
		 return ["main"];

		
	}


	// Registert contorls
//start Content paragraph
	
//End Register control section

//start render

	protected function render(){
		$settings = $this->get_settings_for_display();
		?>




        <!-- Add your site or application content here -->
        <section>
            <div class="customer-feedback">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xl-8 offset-2">
                            <div>
                                <h2 class="section-title">What Clients Say</h2>
                            </div>
                        </div><!-- /End col -->
                    </div><!-- /End row -->
        
                    <div class="row">
                        <div class="col-xl-8  offset-xl-2 col-lg-8 offset-lg-2">
                            <div class="owl-carousel feedback-slider">
        
                                <!-- slider item -->
                                <div class="feedback-slider-item">
                                    <div class="client-thumb">
                                        <img src="https://images.unsplash.com/photo-1505377059067-e285a7bac49b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80">
                                    </div>
                                    <h3 class="customer-name">Lisa Redfern</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                                    <span class="light-bg customer-rating" data-rating="5">
                                        5
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <!-- /slider item -->
                                <!-- slider item -->
                                <div class="feedback-slider-item">
                                    <div class="client-thumb">
                                        <img src="https://images.unsplash.com/photo-1505377059067-e285a7bac49b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80">
                                    </div>
                                    <h3 class="customer-name">Lisa Redfern</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                                    <span class="light-bg customer-rating" data-rating="5">
                                        5
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <!-- /slider item -->
                                <!-- slider item -->
                                <div class="feedback-slider-item">
                                    <div class="client-thumb">
                                        <img src="https://images.unsplash.com/photo-1505377059067-e285a7bac49b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80">
                                    </div>
                                    <h3 class="customer-name">Lisa Redfern</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                                    <span class="light-bg customer-rating" data-rating="5">
                                        5
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <!-- /slider item -->
                                <!-- slider item -->
                                <div class="feedback-slider-item">
                                    <div class="client-thumb">
                                        <img src="https://images.unsplash.com/photo-1505377059067-e285a7bac49b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80">
                                    </div>
                                    <h3 class="customer-name">Lisa Redfern</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
                                    <span class="light-bg customer-rating" data-rating="5">
                                        5
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <!-- /slider item -->
                                
                            </div><!-- /End feedback-slider -->
        
                            <!-- side thumbnail -->
                            <div class="feedback-slider-thumb hidden-xs">
                                <div class="thumb-prev">
                                    <span>
                                        <img src="https://images.unsplash.com/photo-1505377059067-e285a7bac49b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80">
                                    </span>
                                    <span class="light-bg customer-rating">
                                        5
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
        
                                <div class="thumb-next">
                                    <span>
                                        <img src="https://images.unsplash.com/photo-1505377059067-e285a7bac49b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80" alt="Customer Feedback">
                                    </span>
                                    <span class="light-bg customer-rating">
                                        4
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- /side thumbnail -->
        
                        </div><!-- /End col -->
                    </div><!-- /End row -->
                </div><!-- /End container -->
            </div><!-- /End customer-feedback -->
        </section>

<?php

		
	}






}
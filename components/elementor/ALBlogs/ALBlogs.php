<?php

use Elementor\Controls_Manager;

class ALBlogs extends AbstractALElementorWidget
{
    public function get_name()
    {
        return __("Blogs", "");
    }

    public function get_title()
    {
        return __("Blogs", "");
    }

    public function get_icon()
    {
        return __("eicon-kit-details", "");
    }

    public function get_categories()
    {
        return ['al-custom'];
    }

    public function get_style_depends()
    {
        return ['al-blog-style'];
    }

    public function register_controls()
    {
        $this->start_controls_section("content_section", [
            'label' => __("Content", ""),
            'tab'   =>  Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control("posts_per_page", [
            "label" => __("Posts Per Page", ""),
            "type" => Controls_Manager::NUMBER,
            "min" => -1,
            "default" => 12
        ]);

        $this->end_controls_section();

        $this->start_controls_section("style_section", [
            'label' => __("Style", ""),
            'tab'   =>  Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control( \Elementor\Group_Control_Typography::get_type(), [
            "label" => __("Heading Typography", ""),
            "name" => "typography_heading",
            "selector" => "{{WRAPPER}} .al-post-content-heading"
        ]);

        $this->add_control("color_heading", [
            "label" => __("Heading Color", ""),
            "type" => Controls_Manager::COLOR,
            "default" => "#f00",
            "selectors" => [
                "{{WRAPPER}} .al-post-content-heading" => "color: {{VALUE}}",
            ]
        ]);

        $this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
            "label" => __("Description Typography", ""),
            "name" => "typography_description",
            "selector" => "{{WRAPPER}} .al-post-content-description"
        ]);

        $this->add_control("color_description", [
            "label" => __("Description Color", ""),
            "type" => Controls_Manager::COLOR,
            "default" => "#f00",
            "selectors" => [
                "{{WRAPPER}} .al-post-content-description" => "color: {{VALUE}}",
            ]
        ]);

        $this->end_controls_section();
    }

    public function render()
    {
        ob_start();
        require_once "view/blogs.php";
        echo ob_get_clean();
    }

    public function enqueue()
    {
        wp_enqueue_style("al-blog-style", get_theme_file_uri("/components/elementor/ALBlogs/assets/style.css"));
    }
}
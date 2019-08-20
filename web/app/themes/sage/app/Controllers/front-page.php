<?php

// Data available in the Front Page view

namespace App;

use App\Traits\Field;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function landingFields()
    {
        return (object) [
            'logo' => get_field('logo'),
            'name' => get_field('name'),
            'slug' => get_field('slug'),
            'slug_ending_1' => get_field('slug_ending_1'),
            'slug_ending_2' => get_field('slug_ending_2'),
            'slug_ending_3' => get_field('slug_ending_3'),
            'button_text' => get_field('button_text'),
            'bottom_text' => get_field('bottom_text')
        ];
    }

    public function projects()
    {
        $args = [
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'oder' => 'DESC',
            'post_type' => 'projects'
        ];
        $the_query = new \WP_Query($args);
        $projects = [];
        if ($the_query->post_count > 0) {
            $projects = array_map(function ($project) {
                $name = get_the_title($project);
                $description = get_field('project_small_description', $project);
                $permalink = get_post_permalink($project);
                $preview_image = get_field('project_preview_image', $project);
                return (object) [
                    'name' => $name,
                    'description' => $description,
                    'preview_image' => $preview_image,
                    'permalink' => $permalink
                ];
            }, $the_query->posts);
            wp_reset_postdata();
        }
        return $projects;
    }
    public function testimonials()
    {
        $testimonials = [];
        $args = [
            'posts_per_page' => -1,
            'orderby' => 'DATE',
            'order' => 'DESC',
            'post_type' => 'testimonial'
        ];
        $the_query = new \WP_Query($args);
        if ($the_query->post_count > 0) {
            $testimonials = array_map(function ($testimonial) {
                $quote = esc_html(get_field('quote', $testimonial));
                $author = esc_html(get_field('author', $testimonial));
                $author_position = esc_html(get_field('author_position', $testimonial));
                return (object) [
                    'quote' => $quote,
                    'author' => $author,
                    'author_position' => $author_position
                ];
            }, $the_query->posts);
            wp_reset_postdata();
        }
        return $testimonials;
    }
    public function aboutFields()
    {
        return (object) [
            'heading' => esc_html(get_field('about_title')),
            'content' => esc_html(get_field('about_content')),
            'image' => get_field('about_image')
        ];
    }
}

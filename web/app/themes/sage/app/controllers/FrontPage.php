<?php

// Data available in the Front Page view

namespace App\Controllers;

use App\Traits\Field;
use Sober\Controller\Controller;

class FrontPage extends Controller
{

    // Main Sections Fields
    public function landingFields()
    {
        return (object) [
            'logo' => get_field('logo'),
            'name' => esc_html(get_field('name')),
            'slug' => esc_html(get_field('slug')),
            'slug_ending_1' =>  esc_html(get_field('slug_ending_1')),
            'slug_ending_2' =>  esc_html(get_field('slug_ending_2')),
            'slug_ending_3' =>  esc_html(get_field('slug_ending_3')),
            'button_text' =>  esc_html(get_field('button_text')),
            'bottom_text' =>  esc_html(get_field('bottom_text'))
        ];
    }
    public function workFields()
    {
        return (object) [
            'title' => esc_html(get_field('work_title'))
        ];
    }
    public function testimonialsFields()
    {
        return (object) [
            'title' => esc_html(get_field('testimonials_title'))
        ];
    }
    public function aboutFields()
    {
        return (object) [
            'heading' => esc_html(get_field('about_title')),
            'content' => esc_html(get_field('about_content')),
            'image' => get_field('about_image')
        ];
    }
    public function packagesFields()
    {
        return (object) [
            'show_section' => get_field_object('packages_show_section'),
            'title' => esc_html(get_field('packages_title')),
            'subtitle' => esc_html(get_field('packages_description'))
        ];
    }
    public function contactFields()
    {
        return (object) [
            'title' => esc_html(get_field('contact_title')),
            'subtitle' => esc_html(get_field('contact_subtitle')),
            'form' => get_field('contact_form'),
            'social_media_title' => esc_html(get_field('contact_social_media_title'))
        ];
    }

        // Custom Post Types Fields

    public function projects()
    {
        $args = [
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
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
                $project_banner = get_field('project_banner_image', $project);
                $project_logo = get_field('project_logo', $project);
                return (object) [
                    'name' => $name,
                    'description' => $description,
                    'preview_image' => $preview_image,
                    'banner' => $project_banner,
                    'logo' => $project_logo,
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
    public function packages()
    {
        $packages = [];
        $args = [
            'posts_per_page' => -1,
            'post_type' => 'package',
            'order_by' => 'DATE',
            'order' => 'ASC'
        ];
        $the_query = new \WP_Query($args);
        if ($the_query->post_count > 0) {
            $packages = array_map(function ($package) {
                return (object)[
                    'title' => esc_html(get_the_title($package)),
                    'subtitle' => esc_html(get_field('package_subtitle', $package)),
                    'description_title' => esc_html(get_field('package_description_title', $package)),
                    'description_column_1' => esc_html(get_field('package_description_column_1', $package)),
                    'description_column_2' => esc_html(get_field('package_description_column_2', $package)),
                    'button_text' => esc_html(get_field('package_button_text', $package))
                ];
            }, $the_query->posts);
            wp_reset_postdata();
        }
        return $packages;
    }
    public function social_media_links()
    {
        $links = [];
            $args = [
                'posts_per_page' => -1,
                'order_by' => 'DATE',
                'order' => 'ASC',
                'post_type' => 'social_media'
            ];
            $the_query = new \WP_Query($args);
            if ($the_query->post_count > 0) {
                $links = array_map(function ($link){
                    return (object) [
                        'title' => esc_html(get_the_title($link)),
                        'link_body' => esc_html(get_field('social_media_link_body', $link)),
                        'URL' => esc_html(get_field('social_media_link_url', $link)),
                        'email' => esc_html(get_field('social_media_link_email', $link)),
                        'phone' => esc_html(get_field('social_media_link_phone', $link))
                    ];
                }, $the_query->posts);
                wp_reset_postdata();
            }
        return $links;
    }
}
new FrontPage();


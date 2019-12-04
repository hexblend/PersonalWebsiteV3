<?php

// Data available in the Front Page view

namespace App;

use App\Traits\Field;
use Sober\Controller\Controller;

class SingleProjects extends Controller
{
    public function contactFields()
    {
        return (object) [
            'title' => esc_html(get_field('contact_title')),
            'subtitle' => esc_html(get_field('contact_subtitle')),
            'form' => get_field('contact_form'),
            'social_media_title' => esc_html(get_field('contact_social_media_title'))
        ];
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

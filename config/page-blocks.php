<?php

/*
|--------------------------------------------------------------------------
| Page Blocks
|--------------------------------------------------------------------------
|
| This configuration file is used to display page blocks and their content,
| where each key is a block and each property is specific to that block.
|
*/
$blocks = array();

// The 'global' fields we'll use on multiple blocks
$spacesField = [
    'field' => 'spaces',
    'display_name' => 'Add Vertical Space',
    'partial' => 'voyager::formfields.select_dropdown',
    'required' => 0,
    'options' => [
        'Bottom',
        'Top',
        'Top & Bottom',
        'None',
    ],
    'placeholder' => 0,
];

$animationsField = [
    'field' => 'animate',
    'display_name' => 'Animate this block (in)?',
    'partial' => 'voyager::formfields.checkbox',
    'placeholder' => 'on',
    'required' => 0,
];

/**
 *
 * 5) Video Banner
 *
 */
$blocks['video_banner'] = [
    'name' => 'Video Banner Slide',
    'template' => 'voyager-page-blocks::blocks.video_banner',
    'fields' => [
        'image' => [
            'field' => "image",
            'display_name' => "Upload Video",
            'partial' => 'voyager::formfields.image',
            'required' => 1,
        ],
    ],
];

/*=====  End of Sections for Banners  ======*/

/*=============================================================
=            Section for BreadCrums and Navigation            =
==============================================================*/
/**
 *
 * 1) Simple Bread Crum
 *
 */
$blocks['breadcrums'] = [
    'name' => 'Plans Navigation Bar',
    'template' => 'voyager-page-blocks::blocks.breadcrums',
    'fields' => [
        'category' => [
            'field' => "category",
            'display_name' => "Category",
            'partial' => 'voyager::formfields.text',
            'required' => 1,
        ],
        'category_link' => [
            'field' => "category_link",
            'display_name' => "Category Page Link",
            'partial' => 'voyager::formfields.text',
            'required' => 1,
        ],
        'page_name' => [
            'field' => "page_name",
            'display_name' => "Title of Page",
            'partial' => 'voyager::formfields.text',
            'required' => 1,
            'placeholder' => '',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'first_button_text' => [
            'field' => 'first_button_text',
            'display_name' => 'First Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'first_button_link' => [
            'field' => 'first_button_link',
            'display_name' => 'First Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'second_button_text' => [
            'field' => 'second_button_text',
            'display_name' => 'Second Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'second_button_link' => [
            'field' => 'second_button_link',
            'display_name' => 'Second Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/**
 *
 * 1) Just For you Navigation bar
 *
 */
$blocks['just_for_u_nav'] = [
    'name' => 'Just for You Navigation Bar',
    'template' => 'voyager-page-blocks::blocks.just_for_u_nav',
    'fields' => [
        'first_button_text' => [
            'field' => 'first_button_text',
            'display_name' => 'First Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'first_button_link' => [
            'field' => 'first_button_link',
            'display_name' => 'First Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'second_button_text' => [
            'field' => 'second_button_text',
            'display_name' => 'Second Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'second_button_link' => [
            'field' => 'second_button_link',
            'display_name' => 'Second Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/*=====  End of Section for BreadCrums  ======*/


/*==========================================
=            Section for Slider            =
==========================================*/
/**
 *
 * 1) Basic Slider
 *
 */
$blocks['slider'] = [
    'name' => 'Basic Slider',
    'template' => 'voyager-page-blocks::blocks.slider',
    'fields' => [
        // 1) Slider 1 Content
        'slider_image_1' => [
            'field' => 'slider_image_1',
            'display_name' => 'First Slider Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'slider_1_background_clr' => [
            'field' => 'slider_1_background_clr',
            'display_name' => 'Background Color of Slider (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_1_text_align' => [
            'field' => "slider_1_text_align",
            'display_name' => "Slider 1 text Align",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'right' => 'Right',
                'left' => 'Left'
            ],
            'placeholder' => 0,
        ],
        'slider_image_1_heading' => [
            'field' => 'slider_image_1_heading',
            'display_name' => 'First Slider Heading (optional)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
        ],
        'slider_image_1_heading_size' => [
            'field' => "slider_image_1_heading_size",
            'display_name' => "First Slider Heading Font Size in (rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '4rem',
        ],
        'slider_image_1_heading_clr' => [
            'field' => 'slider_image_1_heading_clr',
            'display_name' => 'Heading 1 Font Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_image_1_p' => [
            'field' => "slider_image_1_p",
            'display_name' => "First Slider Content",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_1_p_size' => [
            'field' => "slider_image_1_p_size",
            'display_name' => "First Slider Heading Font Size in (rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '1rem',
        ],
        'slider_image_1_p_clr' => [
            'field' => 'slider_image_1_p_clr',
            'display_name' => 'Content 1 Font Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_1_link_type' => [
            'field' => "slider_1_link_type",
            'display_name' => "Link Type",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'btn-box mb-3' => 'Default Button',
                'link' => 'Link'
            ],
            'placeholder' => 0,
        ],
        'slider_image_1_link' => [
            'field' => "slider_image_1_link",
            'display_name' => "Slider Link url (optional)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_1_link_text' => [
            'field' => "slider_image_1_link_text",
            'display_name' => "Slider Link Text (optional)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_1_link_text_color' => [
            'field' => 'slider_image_1_link_text_color',
            'display_name' => 'Link Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_4' => [
            'field' => "br_4",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        // 2) Slider 2 Content
        'slider_image_2' => [
            'field' => 'slider_image_2',
            'display_name' => 'Second Slider Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'slider_2_background_clr' => [
            'field' => 'slider_2_background_clr',
            'display_name' => 'Background Color of Slider (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_5' => [
            'field' => "br_5",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_2_text_align' => [
            'field' => "slider_2_text_align",
            'display_name' => "Slider 2 text Align",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'right' => 'Right',
                'left' => 'Left'
            ],
            'placeholder' => 0,
        ],
        'slider_image_2_heading' => [
            'field' => 'slider_image_2_heading',
            'display_name' => 'Second Slider Heading (optional)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
        ],
        'slider_image_2_heading_size' => [
            'field' => "slider_image_2_heading_size",
            'display_name' => "Second Slider Heading Font Size in (rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '4rem',
        ],
        'slider_image_2_heading_clr' => [
            'field' => 'slider_image_2_heading_clr',
            'display_name' => 'Heading 2 Font Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_6' => [
            'field' => "br_6",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_image_2_p' => [
            'field' => "slider_image_2_p",
            'display_name' => "Second Slider Content",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_2_p_size' => [
            'field' => "slider_image_2_p_size",
            'display_name' => "Second Slider Heading Font Size in (rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '1rem',
        ],
        'slider_image_2_p_clr' => [
            'field' => 'slider_image_2_p_clr',
            'display_name' => 'Content 2 Font Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_7' => [
            'field' => "br_7",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_2_link_type' => [
            'field' => "slider_2_link_type",
            'display_name' => "Link Type",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'btn-box mb-3' => 'Default Button',
                'link' => 'Link'
            ],
            'placeholder' => 0,
        ],
        'slider_image_2_link' => [
            'field' => "slider_image_2_link",
            'display_name' => "Slider Link url (optional)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_2_link_text' => [
            'field' => "slider_image_2_link_text",
            'display_name' => "Slider Link Text (optional)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_2_link_text_color' => [
            'field' => 'slider_image_2_link_text_color',
            'display_name' => 'Link Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_8' => [
            'field' => "br_8",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        // 3) Slider 3 Content
        'slider_image_3' => [
            'field' => 'slider_image_3',
            'display_name' => 'Second Slider Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'slider_3_background_clr' => [
            'field' => 'slider_3_background_clr',
            'display_name' => 'Background Color of Slider (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_9' => [
            'field' => "br_9",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_3_text_align' => [
            'field' => "slider_3_text_align",
            'display_name' => "Slider 3 text Align",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'right' => 'Right',
                'left' => 'Left'
            ],
            'placeholder' => 0,
        ],
        'slider_image_3_heading' => [
            'field' => 'slider_image_2_heading',
            'display_name' => 'Third Slider Heading (optional)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
        ],
        'slider_image_3_heading_size' => [
            'field' => "slider_image_3_heading_size",
            'display_name' => "Third Slider Heading Font Size in (rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '4rem',
        ],
        'slider_image_3_heading_clr' => [
            'field' => 'slider_image_3_heading_clr',
            'display_name' => 'Heading 3 Font Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_10' => [
            'field' => "br_10",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_image_3_p' => [
            'field' => "slider_image_3_p",
            'display_name' => "Third Slider Content",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_3_p_size' => [
            'field' => "slider_image_3_p_size",
            'display_name' => "Third Slider Heading Font Size in (rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '1rem',
        ],
        'slider_image_3_p_clr' => [
            'field' => 'slider_image_3_p_clr',
            'display_name' => 'Content 3 Font Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_11' => [
            'field' => "br_11",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'slider_3_link_type' => [
            'field' => "slider_3_link_type",
            'display_name' => "Link Type",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'btn-box mb-3' => 'Default Button',
                'link' => 'Link'
            ],
            'placeholder' => 0,
        ],
        'slider_image_3_link' => [
            'field' => "slider_image_3_link",
            'display_name' => "Slider Link url (optional)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_3_link_text' => [
            'field' => "slider_image_3_link_text",
            'display_name' => "Slider Link Text (optional)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'slider_image_3_link_text_color' => [
            'field' => 'slider_image_3_link_text_color',
            'display_name' => 'Link Color (optional)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_12' => [
            'field' => "br_12",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
    ],
];

/*=====  End of Section for Slider  ======*/

/*=================================================
=            Section for Support Cards            =
=================================================*/
/**
 *
 * 1) Support Cards
 *
 */
$blocks['support_cards'] = [
    'name' => 'Support Like Cards',
    'template' => 'voyager-page-blocks::blocks.support_cards',
    'fields' => [
        'card_content_background_image_1' => [
            'field' => 'card_content_background_image_1',
            'display_name' => 'First Card Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'heading_card_1' => [
            'field' => "heading_card_1",
            'display_name' => "Card 1 Title ",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => 'Title comes here.',
        ],
        'content_card_1' => [
            'field' => "content_card_1",
            'display_name' => "Card 1 Content",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => 'Lorem ipsum dolor sit amet. Nullam in dui mauris.',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'card_button_text_1' => [
            'field' => 'card_button_text_1',
            'display_name' => 'Card 1 Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'card_button_link_1' => [
            'field' => 'card_button_link_1',
            'display_name' => 'Card 1 Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'card_content_background_image_2' => [
            'field' => 'card_content_background_image_2',
            'display_name' => 'First Card Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'heading_card_2' => [
            'field' => "heading_card_2",
            'display_name' => "Card 2 Title ",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => 'Title comes here.',
        ],
        'content_card_2' => [
            'field' => "content_card_2",
            'display_name' => "Card 2 Content",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => 'Lorem ipsum dolor sit amet. Nullam in dui mauris.',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'card_button_text_2' => [
            'field' => 'card_button_text_2',
            'display_name' => 'Card 2 Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'card_button_link_2' => [
            'field' => 'card_button_link_2',
            'display_name' => 'Card 2 Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];
/**
 *
 * 2) Form
 *
 */
$blocks['form'] = [
    'name' => 'Form',
    'template' => 'voyager-page-blocks::blocks.form',
    'fields' => [
        'background_image' => [
            'field' => 'background_image',
            'display_name' => 'Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'title1' => [
            'field' => "title1",
            'display_name' => "Title",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => 'Title comes here.',
        ],
        'text' => [
            'field' => "text",
            'display_name' => "Text",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => 'Text comes here.',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'background_color' => [
            'field' => 'background_color',
            'display_name' => 'Background Color of Section (Default : #373737)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#373737',
        ],
        'form_background_color' => [
            'field' => 'form_background_color',
            'display_name' => 'Background Color of Form(Default : #373737)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#373737',
        ],
    ],
];
/**
 *
 * 3) Support Enquiry Cards
 *
 */
$blocks['enquiry_block'] = [
    'name' => 'Enquiry Block (2 Text columns)',
    'template' => 'voyager-page-blocks::blocks.enquiry_block',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Text Column (Default : #373737)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#373737',
        ],
        'background_image' => [
            'field' => 'background_image',
            'display_name' => 'Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'text' => [
            'field' => "text",
            'display_name' => "Text Column 1",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => 'Text comes here.',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'enquiry_text' => [
            'field' => "enquiry_text",
            'display_name' => "Enquiry Text Area",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => 'Text comes here.',
        ],
        'enquiry_background_color' => [
            'field' => 'enquiry_background_color',
            'display_name' => 'Background Color of Enquiry Column (Default : #373737)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#373737',
        ],
        'br1' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'text_background_color' => [
            'field' => 'text_background_color',
            'display_name' => 'Background Color of Text Column (Default : #373737)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#373737',
        ],
    ],
];

/*========================================
=            Section for Text            =
========================================*/
/**
 *
 * 1) Simple Text
 *
 */
$blocks['simple_text'] = [
    'name' => 'Simple Text',
    'template' => 'voyager-page-blocks::blocks.simple_text',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'text' => [
            'field' => "text",
            'display_name' => "Title of Flex",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 1,
            'placeholder' => 'Title comes here.',
        ],
        'br' => [
            'field' => "br",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'padding_top' => [
            'field' => 'padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'padding_bottom' => [
            'field' => 'padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'text_padding_top' => [
            'field' => 'text_padding_top',
            'display_name' => 'Padding Top for Text(In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'text_padding_bottom' => [
            'field' => 'text_padding_bottom',
            'display_name' => 'Padding Bottom for Text(In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/*=====  End of Section for Flex  ======*/

/*=====  End of Section for Support Cards  ======*/

/*===============================================================
=            Section for (Html Sections and Columns)            =
================================================================*/
/**
 *
 * 6) Section with Features Block.
 *
 */
$blocks['features'] = [
    'name' => 'Features of Plans',
    'template' => 'voyager-page-blocks::blocks.features',
    'fields' => [
        'section_background_image' => [
            'field' => 'section_background_image',
            'display_name' => 'Section Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Section (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => "section_padding_top",
            'display_name' => "Padding Top in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'section_padding_bottom' => [
            'field' => "section_padding_bottom",
            'display_name' => "Padding Bottom in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'row_padding_top' => [
            'field' => "row_padding_top",
            'display_name' => "Padding Top in rem (Default : 3rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '3rem',
        ],
        'row_padding_bottom' => [
            'field' => "row_padding_bottom",
            'display_name' => "Padding Bottom in rem (Default : 3rem)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '3rem',
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'container_type' => [
            'field' => 'container_type',
            'display_name' => 'Select Container Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'Container',
                'container-fluid' => 'Container Fluid'
            ],
            'placeholder' => 0,
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => "Line Break",
            'partial' => 'break',
        ],
        'image_height' => [
            'field' => "image_height",
            'display_name' => "Images Height in px (Default is 200px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '200px',
        ],
        'column_no' => [
            'field' => 'column_no',
            'display_name' => 'Select Columns Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'col-sm-1' => 'Column Size 1',
                'col-sm-2' => 'Column Size 2',
                'col-sm-3' => 'Column Size 3',
                'col-sm-4' => 'Column Size 4',
                'col-sm-5' => 'Column Size 5',
                'col-sm-6' => 'Column Size 6',
                'col-sm-7' => 'Column Size 7',
                'col-sm-8' => 'Column Size 8',
                'col-sm-9' => 'Column Size 9',
                'col-sm-10' => 'Column Size 10',
                'col-sm-11' => 'Column Size 11',
                'col-sm-12' => 'Column Size 12'
            ],
            'placeholder' => 0,
        ],
        'br_4' => [
            'field' => "br_4",
            'display_name' => "Line Break",
            'partial' => 'break',
        ],
        'feature_type' => [
            'field' => 'feature_type',
            'display_name' => 'Select Feature Types',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                1 => 'Images in Row',
                2 => 'Bullet Points',
                3 => 'Square Boxes Details'
            ],
            'placeholder' => 0,
        ],
        'bullet_type' => [
            'field' => 'bullet_type',
            'display_name' => 'Select Bullet Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'usp-item-image' => 'Small Bullets',
                'feature-item-image' => 'Large Bullets'
            ],
            'placeholder' => 0,
        ],
        'title_font_size' => [
            'field' => 'title_font_size',
            'display_name' => 'Title Font Size (1.5rem)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '1.5rem',
        ],
        'title_font_color' => [
            'field' => 'title_font_color',
            'display_name' => 'Color of Title (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'detail_font_size' => [
            'field' => 'detail_font_size',
            'display_name' => 'Detail Font Size (1.5rem)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '1.5rem',
        ],
        'detail_font_color' => [
            'field' => 'detail_font_color',
            'display_name' => 'Color of Detail (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
    ],
];
for ($col = 1; $col <= 8; $col++) {
    $blocks['features']['fields']["image_{$col}"] = [
        'field' => "image_{$col}",
        'display_name' => "Image {$col}",
        'partial' => 'voyager::formfields.image',
        'required' => 0,
    ];
    $blocks['features']['fields']["inner_block_text_{$col}"] = [
        'field' => "inner_block_text_{$col}",
        'display_name' => "Block Text {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
    ];
    $blocks['features']['fields']["title_{$col}"] = [
        'field' => "title_{$col}",
        'display_name' => "Title {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
    ];
    $blocks['features']['fields']["detail_{$col}"] = [
        'field' => "detail_{$col}",
        'display_name' => "Detail {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
    ];
}

/**
 *
 * 6) Image Section with Text in Center.
 *
 */
$blocks['image_section_with_content_in_center'] = [
    'name' => 'Image Section with Content in Center',
    'template' => 'voyager-page-blocks::blocks.image_section_with_content_in_center',
    'fields' => [
        'section_background_image' => [
            'field' => 'section_background_image',
            'display_name' => 'Section Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'text_alignment' => [
            'field' => "text_alignment",
            'display_name' => "Text Alignment",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'left' => 'left',
                'center' => 'center'
            ],
            'placeholder' => 0,
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'heading' => [
            'field' => "heading",
            'display_name' => "Title",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'content' => [
            'field' => "content",
            'display_name' => "Content Details",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'heading_color' => [
            'field' => 'heading_color',
            'display_name' => 'Heading Color (Default : #63C1BF)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#63C1BF',
        ],
    ],
];
/*=====  End of Section for (Html Sections and Columns)  ======*/

/*======================================================
=            Section for the Links and Buttons on Pages            =
======================================================*/
/**
 *
 * 1) 2 Links for redirecting to Info Pages
 *
 */
$blocks['two_page_links'] = [
    'name' => '2 Links on Page for Info Pages',
    'template' => 'voyager-page-blocks::blocks.two_page_links',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'padding_top' => [
            'field' => 'padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'padding_bottom' => [
            'field' => 'padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'link_one_text' => [
            'field' => 'link_one_text',
            'display_name' => 'First Page Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'link_one_link' => [
            'field' => 'link_one_link',
            'display_name' => 'First Page Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'link_two_text' => [
            'field' => 'link_two_text',
            'display_name' => 'Second Page Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'link_second_link' => [
            'field' => 'link_second_link',
            'display_name' => 'Second Page Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/**
 *
 * 2) Section with Buttons in Row with Links
 *
 */
$blocks['buttons_center_align'] = [
    'name' => 'Section with Multiple Buttons in Row',
    'template' => 'voyager-page-blocks::blocks.buttons_center_align',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => 'section_padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_padding_bottom' => [
            'field' => 'section_padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
    ],
];
for ($col = 1; $col <= 4; $col++) {
    $blocks['buttons_center_align']['fields']["button_image_{$col}"] = [
        'field' => "button_image_{$col}",
        'display_name' => "Button Image {$col}",
        'partial' => 'voyager::formfields.image',
        'required' => 0,
    ];
    $blocks['buttons_center_align']['fields']["button_text_{$col}"] = [
        'field' => "button_text_{$col}",
        'display_name' => "Button {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
    ];
    $blocks['buttons_center_align']['fields']["button_link_{$col}"] = [
        'field' => "button_link_{$col}",
        'display_name' => "Button Link {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $blocks['buttons_center_align']['fields']["text_below_button_{$col}"] = [
        'field' => "text_below_button_{$col}",
        'display_name' => "Text Below Button {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $j = $col + 3;
    $blocks['buttons_center_align']['fields']["br_{$j}"] = [
        'field' => "br_{$j}",
        'display_name' => "Line break",
        'partial' => 'break',
    ];
}

/**
 *
 * 3) Section with Button in Center
 *
 */
$blocks['plain_button'] = [
    'name' => 'Button in Center',
    'template' => 'voyager-page-blocks::blocks.plain_button',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => 'section_padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_padding_bottom' => [
            'field' => 'section_padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'button_color' => [
            'field' => 'button_color',
            'display_name' => 'Button Color (Default : #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'button_text_color' => [
            'field' => 'button_text_color',
            'display_name' => 'Button Color (Default : #ffffff)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#ffffff',
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'text' => [
            'field' => 'text',
            'display_name' => 'Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'link' => [
            'field' => 'link',
            'display_name' => 'Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/*=====  End of Section for the Links on Pages  ======*/

/*==========================================================
=            Section for Images and Video Block            =
============================================================*/
/**
 *
 * 2) Video Block
 *
 */
$blocks['video_block'] = [
    'name' => 'Video Block',
    'template' => 'voyager-page-blocks::blocks.video_block',
    'fields' => [
        'video' => [
            'field' => "video",
            'display_name' => "Upload Video",
            'partial' => 'voyager::formfields.image',
            'required' => 1,
        ],
    ],
];


/*=====  End of Section for Images and Video Block  ======*/

/*================================================================
=            Section for Specific Page Fixed Elements            =
================================================================*/
/**
 *
 * 6) Banner for Cooperate Info Page
 *
 */
$blocks['cooperate_section_banner'] = [
    'name' => 'Cooperate Section Banner',
    'template' => 'voyager-page-blocks::blocks.cooperate_section_banner',
    'fields' => [
        'section_background_image' => [
            'field' => 'section_background_image',
            'display_name' => 'Section Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'content1' => [
            'field' => "content1",
            'display_name' => "Content 1",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 1,
        ],
        'content2' => [
            'field' => "content2",
            'display_name' => "Content 2",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
        ],
    ],
];

/**
 *
 * 7) Board of Directors Block
 *
 */
$blocks['bod_section'] = [
    'name' => 'Board of Directors Block',
    'template' => 'voyager-page-blocks::blocks.bod_section',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'bod_background_color' => [
            'field' => 'bod_background_color',
            'display_name' => 'Background Color of Bod Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'text_color' => [
            'field' => 'text_color',
            'display_name' => 'Color of Text(Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],

    ],
];

/**
 *
 * 10) Contact Address Block Static
 *
 */
$blocks['contact_address_block'] = [
    'name' => 'Contact Address (Static Block)',
    'template' => 'voyager-page-blocks::blocks.contact_address_block',
    'fields' => [],
];

/**
 *
 * 11) Plans
 *
 */
$blocks['plans'] = [
    'name' => 'Plans',
    'template' => 'voyager-page-blocks::blocks.plans',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => 'section_padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_padding_bottom' => [
            'field' => 'section_padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'container_option' => [
            'field' => 'container_option',
            'display_name' => 'Container Options',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'container',
                'container-fluid' => 'container-fluid'
            ],
            'placeholder' => 0,
        ],
        'plan_type' => [
            'field' => 'plan_type',
            'display_name' => 'Plan Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                0 => 'Package Points',
                1 => 'Package Details',
            ],
            'placeholder' => 0,
        ],
        'plan_card_background_gradient_colors' => [
            'field' => 'plan_card_background_gradient_colors',
            'display_name' => 'Graient Colors (Add Hexa Color)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '#5659AD,#36396F',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
    ],
];
for ($col = 1; $col <= 5; $col++) {
    $blocks['plans']['fields']["is_active_{$col}"] = [
        'field' => "is_active_{$col}",
        'display_name' => "Active Plan {$col}",
        'partial' => 'voyager::formfields.select_dropdown',
        'required' => 0,
        'options' => [
            0 => 'false',
            1 => 'true'
        ],
        'placeholder' => 0,
    ];
    $blocks['plans']['fields']["title_{$col}"] = [
        'field' => "title_{$col}",
        'display_name' => "Title {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $blocks['plans']['fields']["detail_{$col}"] = [
        'field' => "detail_{$col}",
        'display_name' => "Detail {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => 'Data-1GB,Voice-20 Min,SMS-',
    ];
    $blocks['plans']['fields']["total_{$col}"] = [
        'field' => "total_{$col}",
        'display_name' => "Total {$col}",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => 'RM10',
    ];
    $j = $col + 3;
    $blocks['plans']['fields']["br_{$j}"] = [
        'field' => "br_{$j}",
        'display_name' => "Line Break {$col}",
        'partial' => 'break',
    ];
}

/*=====  End of Section for Specific Page Fixed Elements  ======*/

/*================================================================
=            Section for Default Home Page             =
================================================================*/
/**
 *
 * 1) Home Page Default Image
 *
 */
$blocks['default_home_page_image'] = [
    'name' => 'Default Home Page image',
    'template' => 'voyager-page-blocks::blocks.default_image',
    'fields' => [
        'default_image' => [
            'field' => 'default_image',
            'display_name' => 'Default Image (Delete this block and Add Page blocks according to requirement)',
            'partial' => 'voyager::formfields.image',
            'required' => 1,
        ],
    ]
];

/**
 *
 * 2) Image
 *
 */
$blocks['image'] = [
    'name' => 'Image',
    'template' => 'voyager-page-blocks::blocks.image',
    'fields' => [
        'image' => [
            'field' => 'image',
            'display_name' => 'Image',
            'partial' => 'voyager::formfields.image',
            'required' => 1,
        ],
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Section (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => "section_padding_top",
            'display_name' => "Padding Top in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'section_padding_bottom' => [
            'field' => "section_padding_bottom",
            'display_name' => "Padding Bottom in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'container_type' => [
            'field' => 'container_type',
            'display_name' => 'Select Container Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'Container',
                'container-fluid' => 'Container Fluid'
            ],
            'placeholder' => 0,
        ],
        'image_height' => [
            'field' => 'image_height',
            'display_name' => 'Image Height (Optional in px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => ''
        ],
        'image_width' => [
            'field' => 'image_width',
            'display_name' => 'Image Width (Optional in px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => ''
        ],
    ]
];

/*=====  End of Section for Default Home Page   ======*/

/*===================================================================
=            Section for text and image horizontal align            =
===================================================================*/
/**
 *
 * 1) Section with Text and image horizontal align.
 *
 */
$blocks['image_with_text_horizontal_align'] = [
    'name' => 'Image and Text (Horizontal Align)',
    'template' => 'voyager-page-blocks::blocks.image_with_text_horizontal_align',
    'fields' => [
        'image_src' => [
            'field' => 'image_src',
            'display_name' => 'Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
        ],
        'image_alignment' => [
            'field' => 'image_alignment',
            'display_name' => 'Select Image Alignment and Text Below it',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'center' => 'Center',
                'left' => 'Left',
                'end' => 'Right',
                'justify' => 'Justify',
                'unset' => 'Unset'
            ],
            'placeholder' => 0,
        ],
        'image_text' => [
            'field' => 'image_text',
            'display_name' => 'Text Below Image (Optional)',
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Section (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => "section_padding_top",
            'display_name' => "Padding Top in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'section_padding_bottom' => [
            'field' => "section_padding_bottom",
            'display_name' => "Padding Bottom in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'text_alignment' => [
            'field' => "text_alignment",
            'display_name' => "Text Alignment",
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'left' => 'left',
                'center' => 'center'
            ],
            'placeholder' => 0,
        ],
        'container_type' => [
            'field' => 'container_type',
            'display_name' => 'Select Container Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'Container',
                'container-fluid' => 'Container Fluid'
            ],
            'placeholder' => 0,
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => "Line Break",
            'partial' => 'break',
        ],
        'image_height' => [
            'field' => "image_height",
            'display_name' => "Images Height in px (Default is 200px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '200px',
        ],
        'image_width' => [
            'field' => "image_width",
            'display_name' => "Max Image width in px (Default is 300px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'image_position' => [
            'field' => 'image_position',
            'display_name' => 'Select Image Position',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                '1' => 'Left',
                '2' => 'Right'
            ],
            'placeholder' => 0,
        ],
        'column_distribution' => [
            'field' => 'column_distribution',
            'display_name' => 'Select Columns Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 1,
            'options' => [
                'col-sm-1,col-sm-11' => 'Left Size 1, Right 11',
                'col-sm-2,col-sm-10' => 'Left Size 2, Right 10',
                'col-sm-3,col-sm-9' => 'Left Size 3, Right 9',
                'col-sm-4,col-sm-8' => 'Left Size 4, Right 8',
                'col-sm-5,col-sm-7' => 'Left Size 5, Right 7',
                'col-sm-6,col-sm-6' => 'Left Size 6, Right 6',
                'col-sm-7,col-sm-5' => 'Left Size 7, Right 5',
                'col-sm-8,col-sm-4' => 'Left Size 8, Right 4',
                'col-sm-9,col-sm-3' => 'Left Size 9, Right 3',
                'col-sm-10,col-sm-2' => 'Left Size 10, Right 2',
                'col-sm-11,col-sm-1' => 'Left Size 11, Right 1',
            ],
            'placeholder' => 0,
        ],
        'br_4' => [
            'field' => "br_4",
            'display_name' => "Line Break",
            'partial' => 'break',
        ],
        'heading' => [
            'field' => "heading",
            'display_name' => "Title of Content",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'content' => [
            'field' => "content",
            'display_name' => "Content",
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => '',
        ],
        'heading_background_color' => [
            'field' => 'heading_background_color',
            'display_name' => 'Heading BAckground Color of Section (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'heading_text_color' => [
            'field' => 'heading_text_color',
            'display_name' => 'Heading Color (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
    ],
];
/*=====  End of Section for text and image horizontal align  ======*/

/*===================================================================
=            Section for Banner                                     =
===================================================================*/
/**
 *
 * 1) Banner
 *
 */
$blocks['banner'] = [
    'name' => 'Banner',
    'template' => 'voyager-page-blocks::blocks.banner',
    'fields' => [
        'section_background_image' => [
            'field' => 'section_background_image',
            'display_name' => 'Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'content_position' => [
            'field' => 'content_position',
            'display_name' => 'Content Position',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'center' => 'Center',
                'flex-start' => 'Left',
                'flex-end' => 'Right'
            ],
            'placeholder' => 0,
        ],
        'banner_height' => [
            'field' => 'banner_height',
            'display_name' => 'Banner Height in (vh. eg: 100vh)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '100vh',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'banner_type' => [
            'field' => 'banner_type',
            'display_name' => 'Banner Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                1 => 'Only Text',
                2 => 'Only Image Inside Banner',
                3 => 'Both'
            ],
            'placeholder' => 0,
        ],
        'opacity_text_background' => [
            'field' => 'opacity_text_background',
            'display_name' => 'Background Opacity of Text',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                0 => 'false',
                1 => 'true',
            ],
            'placeholder' => 0,
        ],
        'br_3' => [
            'field' => "br_3",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'title' => [
            'field' => 'title',
            'display_name' => 'Title',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'title_size' => [
            'field' => 'title_size',
            'display_name' => 'Title Size (optional eg: in rem)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '4rem',
        ],
        'title_background_color_flag' => [
            'field' => 'title_background_color_flag',
            'display_name' => 'Need title Background Color',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                0 => 'false',
                1 => 'true',
            ],
            'placeholder' => 0,
        ],
        'title_background_color' => [
            'field' => 'title_background_color',
            'display_name' => 'Background Color of Title (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '',
        ],
        'title_padding_right' => [
            'field' => 'title_padding_right',
            'display_name' => 'Title Padding Right (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'title_padding_top' => [
            'field' => 'title_padding_top',
            'display_name' => 'Title Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'title_padding_bottom' => [
            'field' => 'title_padding_bottom',
            'display_name' => 'Title Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_4' => [
            'field' => "br_4",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'title_color' => [
            'field' => 'title_color',
            'display_name' => 'Title Color (Default : #ffffff)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#ffffff',
        ],
        'title_font_family' => [
            'field' => 'title_font_family',
            'display_name' => 'Title Font Family',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                "'Oswald', sans-serif"=> 'Oswald and sans-serif',
                "none" => ''
            ],
            'placeholder' => 0,
        ],
        'br_5' => [
            'field' => "br_5",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'detail' => [
            'field' => 'detail',
            'display_name' => 'Detail',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'detail_size' => [
            'field' => 'detail_size',
            'display_name' => 'Title Size (optional eg: in rem)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '4rem',
        ],
        'br_6' => [
            'field' => "br_6",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'detail_color' => [
            'field' => 'detail_color',
            'display_name' => 'Detail Color (Default : #ffffff)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#ffffff',
        ],
        'detail_font_family' => [
            'field' => 'detail_font_family',
            'display_name' => 'Detail Font Family',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                "'Oswald', sans-serif"=> 'Oswald and sans-serif',
                "none" => ''
            ],
            'placeholder' => 0,
        ],
        'br_7' => [
            'field' => "br_7",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'image' => [
            'field' => 'image',
            'display_name' => 'Image Inside Banner',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'buttons' => [
            'field' => 'buttons',
            'display_name' => 'Buttons on Banner',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                0 => 'false',
                1 => 'true'
            ],
            'placeholder' => 0,
        ],
    ],
];
for ($col = 1; $col <= 3; $col++) {
    $blocks['banner']['fields']["button_{$col}_link"] = [
        'field' => "button_{$col}_link",
        'display_name' => "Button {$col} Link",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $blocks['banner']['fields']["button_{$col}_text"] = [
        'field' => "button_{$col}_text",
        'display_name' => "Button {$col} Text",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $blocks['banner']['fields']["button_{$col}_color"] = [
        'field' => "button_{$col}_color",
        'display_name' => "Button {$col} Color",
        'partial' => 'voyager::formfields.color',
        'required' => 0,
        'placeholder' => '',
    ];
}

/*=====  End of Section for Banner  ======*/

/*============================================================
=            Section for Drop Down Implementation            =
============================================================*/
/**
 *
 * 1) Drop Down Implementation
 *
 */
$blocks['dropdown'] = [
    'name' => 'dropdown',
    'template' => 'voyager-page-blocks::blocks.dropdown',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Section (Default #000000)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#000000',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => "section_padding_top",
            'display_name' => "Padding Top in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'section_padding_bottom' => [
            'field' => "section_padding_bottom",
            'display_name' => "Padding Bottom in px (Default : 10px)",
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '10px',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'container_type' => [
            'field' => 'container_type',
            'display_name' => 'Select Container Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'Container',
                'container-fluid' => 'Container Fluid'
            ],
            'placeholder' => 0,
        ],
        'options' => [
            'field' => 'options',
            'display_name' => 'Options for Dropdown comma seperated (www.test.com-iPhone XR, www.test2.com-iPhone XS, www.test3.com-iPhone XS MAX) etc',
            'partial' => 'voyager::formfields.text',
            'required' => 1,
            'placeholder' => 'www.test.com-iPhone XR, www.test2.com-iPhone XS, www.test3.com-iPhone XS MAX'
        ],
        'buttons' => [
            'field' => 'buttons',
            'display_name' => 'Buttons with Dropdown',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                0 => 'false',
                1 => 'true'
            ],
            'placeholder' => 0,
        ],
    ]
];
// Optional Case.
for ($col = 1; $col <= 3; $col++) {
    $blocks['dropdown']['fields']["button_{$col}_link"] = [
        'field' => "button_{$col}_link",
        'display_name' => "Button {$col} Link",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $blocks['dropdown']['fields']["button_{$col}_text"] = [
        'field' => "button_{$col}_text",
        'display_name' => "Button {$col} Text",
        'partial' => 'voyager::formfields.text',
        'required' => 0,
        'placeholder' => '',
    ];
    $blocks['dropdown']['fields']["button_{$col}_color"] = [
        'field' => "button_{$col}_color",
        'display_name' => "Button {$col} Color",
        'partial' => 'voyager::formfields.color',
        'required' => 0,
        'placeholder' => '',
    ];
}

/*=====  End of Sectifor Drop Down Implementation  ======*/

/*===================================================================
=            Section for Black App banner                       =
===================================================================*/
/**
 *
 * 1) Black App Banner
 *
 */
$blocks['black_app_banner'] = [
    'name' => 'Black App Banner',
    'template' => 'voyager-page-blocks::blocks.black_app_banner',
    'fields' => [
        'background_image' => [
            'field' => 'background_image',
            'display_name' => 'Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'background_color' => [
            'field' => 'background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'title1' => [
            'field' => 'title1',
            'display_name' => 'Title 1',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'title1_color' => [
            'field' => 'title1_color',
            'display_name' => 'Title 1 Color (Default : #ffffff)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#ffffff',
        ],
        'title2' => [
            'field' => 'title2',
            'display_name' => 'Title 2',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_3' => [
            'field' => "br_4",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'title2_color' => [
            'field' => 'title2_color',
            'display_name' => 'Title 2 Color (Default : #ffffff)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#ffffff',
        ],
        'br_4' => [
            'field' => 'br_3',
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'paragraph' =>[
            'field' => 'paragraph',
            'display_name' => 'Paragrapgh',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'paragraph_color' => [
            'field' => 'paragraph_color',
            'display_name' => 'Paragraph Color (Default : #ffffff)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#ffffff',
        ],
        'br_3' => [
            'field' => "br_4",
            'display_name' => 'Line Break',
            'partial' =>'break',
        ],
        'br_5' => [
            'field' => 'br_3',
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'button_text' => [
            'field' => 'button_text',
            'display_name' => 'Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'link' => [
            'field' => 'link',
            'display_name' => 'Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_4' => [
            'field' => 'br_3',
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'image1' => [
            'field' => 'image1',
            'display_name' => 'Link Image 1',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'image2' => [
            'field' => 'image2',
            'display_name' => 'Link image 2',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],

    ],
];

/*======================================================
=            Section of form Implementation            =
======================================================*/
/**
 *
 * 1) Form Implementation
 *
 */
$blocks['package_form'] = [
    'name' => 'Package Form',
    'template' => 'voyager-page-blocks::blocks.package_form',
    'fields' => [
        'section_background_image' => [
            'field' => 'section_background_image',
            'display_name' => 'Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => 'section_padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_padding_bottom' => [
            'field' => 'section_padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'container_option' => [
            'field' => 'container_option',
            'display_name' => 'Container Options',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'container',
                'container-fluid' => 'container-fluid'
            ],
            'placeholder' => 0,
        ],
        'form_type' => [
            'field' => 'form_type',
            'display_name' => 'Form Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                0 => 'IDD Form',
                1 => 'Data Roaming',
            ],
            'placeholder' => 0,
        ],
        'form_position' => [
            'field' => 'form_position',
            'display_name' => 'Select Form Position',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                '1' => 'Left',
                '2' => 'Right'
            ],
            'placeholder' => 0,
        ],
        'text' => [
            'field' => 'text',
            'display_name' => 'Text',
            'partial' => 'voyager::formfields.rich_text_box',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/*=====  End of Sectiof form Implementation  ======*/

/*=========================================
=            Section for Deals            =
=========================================*/
$blocks['deals'] = [
    'name' => 'Deals',
    'template' => 'voyager-page-blocks::blocks.deals',
    'fields' => [
        'section_background_image' => [
            'field' => 'section_background_image',
            'display_name' => 'Background Image',
            'partial' => 'voyager::formfields.image',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => 'section_padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_padding_bottom' => [
            'field' => 'section_padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'container_option' => [
            'field' => 'container_option',
            'display_name' => 'Container Options',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 1,
            'options' => [
                'container' => 'container',
                'container-fluid' => 'container-fluid'
            ],
            'placeholder' => 0,
        ],
        'deals_type' => [
            'field' => 'deals_type',
            'display_name' => 'Deal Type',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 1,
            'options' => [
                'default-plan-items' => 'Default Plan Items',
                'black-plan-items' => 'Black Plan Items',
            ],
            'placeholder' => 0,
        ],
        'short_code' => [
            'field' => 'short_code',
            'display_name' => 'Add Short Code for Rendring (eg. Shortcode from Deals Screen)',
            'partial' => 'voyager::formfields.text',
            'required' => 1,
            'placeholder' => '',
        ]
    ],
];
/*=====  End of Section for Deals  ======*/

/*==========================================
=            Section for Others            =
==========================================*/
/**
 *
 * 1) Plans Navigation Menu
 *
 */
$blocks['plan_nav'] = [
    'name' => 'Plan Navigation Bar',
    'template' => 'voyager-page-blocks::blocks.plan_nav',
    'fields' => [
        'first_button_text' => [
            'field' => 'first_button_text',
            'display_name' => 'First Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'first_button_link' => [
            'field' => 'first_button_link',
            'display_name' => 'First Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'second_button_text' => [
            'field' => 'second_button_text',
            'display_name' => 'Second Button Text',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'second_button_link' => [
            'field' => 'second_button_link',
            'display_name' => 'Second Button Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
    ],
];

/**
 *
 * 2) Section For XOX Fast I Frame
 *
 */
$blocks['i_frame'] = [
    'name' => 'IFrame for XOX Fast',
    'template' => 'voyager-page-blocks::blocks.i_frame',
    'fields' => [
        'section_background_color' => [
            'field' => 'section_background_color',
            'display_name' => 'Background Color of Whole Section (Default : #212529)',
            'partial' => 'voyager::formfields.color',
            'required' => 0,
            'placeholder' => '#212529',
        ],
        'container_option' => [
            'field' => 'container_option',
            'display_name' => 'Container Options',
            'partial' => 'voyager::formfields.select_dropdown',
            'required' => 0,
            'options' => [
                'container' => 'container',
                'container-fluid' => 'container-fluid',
                'unset' => 'Unset'
            ],
            'placeholder' => 0,
        ],
        'i_frame' => [
            'field' => 'i_frame',
            'display_name' => 'Link',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_1' => [
            'field' => "br_1",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
        'section_padding_top' => [
            'field' => 'section_padding_top',
            'display_name' => 'Padding Top (In pixel, like default = 10px, )',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'section_padding_bottom' => [
            'field' => 'section_padding_bottom',
            'display_name' => 'Padding Bottom (In pixel, like default = 10px)',
            'partial' => 'voyager::formfields.text',
            'required' => 0,
            'placeholder' => '',
        ],
        'br_2' => [
            'field' => "br_2",
            'display_name' => 'Line Break',
            'partial' => 'break',
        ],
    ],
];
/*=====  End of Section for Others  ======*/

return $blocks;

<?php

if (! is_dir('resources/badgeparts')) {
    mkdir('resources/badgeparts', 0777, true);
}

fetch([
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_basic_1.png'                  => 'resources/badgeparts/badgepart_base_basic_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_basic_2.png'                  => 'resources/badgeparts/badgepart_base_basic_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_basic_3.png'                  => 'resources/badgeparts/badgepart_base_basic_3.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_basic_4.png'                  => 'resources/badgeparts/badgepart_base_basic_4.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_basic_5.png'                  => 'resources/badgeparts/badgepart_base_basic_5.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_advanced_1.png'               => 'resources/badgeparts/badgepart_base_advanced_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_advanced_2.png'               => 'resources/badgeparts/badgepart_base_advanced_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_advanced_3.png'               => 'resources/badgeparts/badgepart_base_advanced_3.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_advanced_4.png'               => 'resources/badgeparts/badgepart_base_advanced_4.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_gold_1_part2.png'             => 'resources/badgeparts/badgepart_base_gold_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_gold_1_part1.png'             => 'resources/badgeparts/badgepart_base_gold_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_gold_2_part2.png'             => 'resources/badgeparts/badgepart_base_gold_2_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_gold_2_part1.png'             => 'resources/badgeparts/badgepart_base_gold_2_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_pin_part2.png'                => 'resources/badgeparts/badgepart_base_pin_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_pin_part1.png'                => 'resources/badgeparts/badgepart_base_pin_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_gradient_1.png'               => 'resources/badgeparts/badgepart_base_gradient_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_gradient_2.png'               => 'resources/badgeparts/badgepart_base_gradient_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_circles_1.png'                => 'resources/badgeparts/badgepart_base_circles_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_circles_2.png'                => 'resources/badgeparts/badgepart_base_circles_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_ornament_1_part2.png'         => 'resources/badgeparts/badgepart_base_ornament_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_ornament_1_part1.png'         => 'resources/badgeparts/badgepart_base_ornament_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_ornament_2_part2.png'         => 'resources/badgeparts/badgepart_base_ornament_2_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_ornament_2_part1.png'         => 'resources/badgeparts/badgepart_base_ornament_2_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_misc_1_part2.png'             => 'resources/badgeparts/badgepart_base_misc_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_misc_1_part1.png'             => 'resources/badgeparts/badgepart_base_misc_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_misc_2.png'                   => 'resources/badgeparts/badgepart_base_misc_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_beams_part2.png'              => 'resources/badgeparts/badgepart_base_beams_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_beams_part1.png'              => 'resources/badgeparts/badgepart_base_beams_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_ring.png'                     => 'resources/badgeparts/badgepart_base_ring.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_simplestar_part2.png'         => 'resources/badgeparts/badgepart_base_simplestar_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_simplestar_part1.png'         => 'resources/badgeparts/badgepart_base_simplestar_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_spiral.png'                   => 'resources/badgeparts/badgepart_base_spiral.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_book.png'                     => 'resources/badgeparts/badgepart_base_book.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_egg.png'                      => 'resources/badgeparts/badgepart_base_egg.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_ornament.png'                 => 'resources/badgeparts/badgepart_base_ornament.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_shield_part2.png'             => 'resources/badgeparts/badgepart_base_shield_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_base_shield_part1.png'             => 'resources/badgeparts/badgepart_base_shield_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_background_1.png'           => 'resources/badgeparts/badgepart_symbol_background_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_background_2.png'           => 'resources/badgeparts/badgepart_symbol_background_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_background_3_part2.png'     => 'resources/badgeparts/badgepart_symbol_background_3_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_background_3_part1.png'     => 'resources/badgeparts/badgepart_symbol_background_3_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_ball_1_part2.png'           => 'resources/badgeparts/badgepart_symbol_ball_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_ball_1_part1.png'           => 'resources/badgeparts/badgepart_symbol_ball_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_ball_2_part2.png'           => 'resources/badgeparts/badgepart_symbol_ball_2_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_ball_2_part1.png'           => 'resources/badgeparts/badgepart_symbol_ball_2_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bobba.png'                  => 'resources/badgeparts/badgepart_symbol_bobba.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bomb_part2.png'             => 'resources/badgeparts/badgepart_symbol_bomb_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bomb_part1.png'             => 'resources/badgeparts/badgepart_symbol_bomb_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bow.png'                    => 'resources/badgeparts/badgepart_symbol_bow.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_box_1.png'                  => 'resources/badgeparts/badgepart_symbol_box_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_box_2.png'                  => 'resources/badgeparts/badgepart_symbol_box_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bunting_1.png'              => 'resources/badgeparts/badgepart_symbol_bunting_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bunting_2.png'              => 'resources/badgeparts/badgepart_symbol_bunting_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_butterfly_part2.png'        => 'resources/badgeparts/badgepart_symbol_butterfly_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_butterfly_part1.png'        => 'resources/badgeparts/badgepart_symbol_butterfly_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_cowskull_part2.png'         => 'resources/badgeparts/badgepart_symbol_cowskull_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_cowskull_part1.png'         => 'resources/badgeparts/badgepart_symbol_cowskull_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_cross.png'                  => 'resources/badgeparts/badgepart_symbol_cross.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diamond.png'                => 'resources/badgeparts/badgepart_symbol_diamond.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diploma_part2.png'          => 'resources/badgeparts/badgepart_symbol_diploma_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diploma_part1.png'          => 'resources/badgeparts/badgepart_symbol_diploma_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_eyeball_part2.png'          => 'resources/badgeparts/badgepart_symbol_eyeball_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_eyeball_part1.png'          => 'resources/badgeparts/badgepart_symbol_eyeball_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_fist.png'                   => 'resources/badgeparts/badgepart_symbol_fist.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flame_1.png'                => 'resources/badgeparts/badgepart_symbol_flame_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flame_2.png'                => 'resources/badgeparts/badgepart_symbol_flame_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flash.png'                  => 'resources/badgeparts/badgepart_symbol_flash.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flower_1_part2.png'         => 'resources/badgeparts/badgepart_symbol_flower_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flower_1_part1.png'         => 'resources/badgeparts/badgepart_symbol_flower_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flower_2.png'               => 'resources/badgeparts/badgepart_symbol_flower_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flower_3.png'               => 'resources/badgeparts/badgepart_symbol_flower_3.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flower_4.png'               => 'resources/badgeparts/badgepart_symbol_flower_4.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_football.png'               => 'resources/badgeparts/badgepart_symbol_football.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_heart_1_part2.png'          => 'resources/badgeparts/badgepart_symbol_heart_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_heart_1_part1.png'          => 'resources/badgeparts/badgepart_symbol_heart_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_heart_2_part2.png'          => 'resources/badgeparts/badgepart_symbol_heart_2_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_heart_2_part1.png'          => 'resources/badgeparts/badgepart_symbol_heart_2_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_jingjang_part2.png'         => 'resources/badgeparts/badgepart_symbol_jingjang_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_jingjang_part1.png'         => 'resources/badgeparts/badgepart_symbol_jingjang_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_lips_part2.png'             => 'resources/badgeparts/badgepart_symbol_lips_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_lips_part1.png'             => 'resources/badgeparts/badgepart_symbol_lips_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_note.png'                   => 'resources/badgeparts/badgepart_symbol_note.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_peace.png'                  => 'resources/badgeparts/badgepart_symbol_peace.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_planet_part2.png'           => 'resources/badgeparts/badgepart_symbol_planet_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_planet_part1.png'           => 'resources/badgeparts/badgepart_symbol_planet_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_rainbow_part2.png'          => 'resources/badgeparts/badgepart_symbol_rainbow_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_rainbow_part1.png'          => 'resources/badgeparts/badgepart_symbol_rainbow_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_rosete.png'                 => 'resources/badgeparts/badgepart_symbol_rosete.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_shape.png'                  => 'resources/badgeparts/badgepart_symbol_shape.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_star_1.png'                 => 'resources/badgeparts/badgepart_symbol_star_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_star_2.png'                 => 'resources/badgeparts/badgepart_symbol_star_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sword_1_part2.png'          => 'resources/badgeparts/badgepart_symbol_sword_1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sword_1_part1.png'          => 'resources/badgeparts/badgepart_symbol_sword_1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sword_2_part2.png'          => 'resources/badgeparts/badgepart_symbol_sword_2_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sword_2_part1.png'          => 'resources/badgeparts/badgepart_symbol_sword_2_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sword_3_part2.png'          => 'resources/badgeparts/badgepart_symbol_sword_3_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sword_3_part1.png'          => 'resources/badgeparts/badgepart_symbol_sword_3_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_wings_1.png'                => 'resources/badgeparts/badgepart_symbol_wings_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_wings_2.png'                => 'resources/badgeparts/badgepart_symbol_wings_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_arrow_down.png'             => 'resources/badgeparts/badgepart_symbol_arrow_down.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_arrow_left.png'             => 'resources/badgeparts/badgepart_symbol_arrow_left.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_arrow_right.png'            => 'resources/badgeparts/badgepart_symbol_arrow_right.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_arrow_up.png'               => 'resources/badgeparts/badgepart_symbol_arrow_up.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_arrowbig_up.png'            => 'resources/badgeparts/badgepart_symbol_arrowbig_up.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_axe_part2.png'              => 'resources/badgeparts/badgepart_symbol_axe_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_axe_part1.png'              => 'resources/badgeparts/badgepart_symbol_axe_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bug_part2.png'              => 'resources/badgeparts/badgepart_symbol_bug_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bug_part1.png'              => 'resources/badgeparts/badgepart_symbol_bug_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_capsbig_part2.png'          => 'resources/badgeparts/badgepart_symbol_capsbig_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_capsbig_part1.png'          => 'resources/badgeparts/badgepart_symbol_capsbig_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_capssmall_part2.png'        => 'resources/badgeparts/badgepart_symbol_capssmall_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_capssmall_part1.png'        => 'resources/badgeparts/badgepart_symbol_capssmall_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_cloud.png'                  => 'resources/badgeparts/badgepart_symbol_cloud.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_crown_part2.png'            => 'resources/badgeparts/badgepart_symbol_crown_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_crown_part1.png'            => 'resources/badgeparts/badgepart_symbol_crown_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diamsmall2.png'             => 'resources/badgeparts/badgepart_symbol_diamsmall2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diamsmall.png'              => 'resources/badgeparts/badgepart_symbol_diamsmall.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_drop.png'                   => 'resources/badgeparts/badgepart_symbol_drop.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_fingersheavy.png'           => 'resources/badgeparts/badgepart_symbol_fingersheavy.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_fingersv.png'               => 'resources/badgeparts/badgepart_symbol_fingersv.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gtr_part2.png'              => 'resources/badgeparts/badgepart_symbol_gtr_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gtr_part1.png'              => 'resources/badgeparts/badgepart_symbol_gtr_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_hat.png'                    => 'resources/badgeparts/badgepart_symbol_hat.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_oval_part2.png'             => 'resources/badgeparts/badgepart_symbol_oval_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_oval_part1.png'             => 'resources/badgeparts/badgepart_symbol_oval_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_pawprint.png'               => 'resources/badgeparts/badgepart_symbol_pawprint.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_screw.png'                  => 'resources/badgeparts/badgepart_symbol_screw.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stickL_part2.png'           => 'resources/badgeparts/badgepart_symbol_stickL_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stickL_part1.png'           => 'resources/badgeparts/badgepart_symbol_stickL_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stickR_part2.png'           => 'resources/badgeparts/badgepart_symbol_stickR_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stickR_part1.png'           => 'resources/badgeparts/badgepart_symbol_stickR_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_alligator.png'              => 'resources/badgeparts/badgepart_symbol_alligator.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_americanfootball_part2.png' => 'resources/badgeparts/badgepart_symbol_americanfootball_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_americanfootball_part1.png' => 'resources/badgeparts/badgepart_symbol_americanfootball_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_award_part2.png'            => 'resources/badgeparts/badgepart_symbol_award_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_award_part1.png'            => 'resources/badgeparts/badgepart_symbol_award_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bananapeel.png'             => 'resources/badgeparts/badgepart_symbol_bananapeel.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_battleball.png'             => 'resources/badgeparts/badgepart_symbol_battleball.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_biohazard.png'              => 'resources/badgeparts/badgepart_symbol_biohazard.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bird.png'                   => 'resources/badgeparts/badgepart_symbol_bird.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_bishop.png'                 => 'resources/badgeparts/badgepart_symbol_bishop.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_coalion.png'                => 'resources/badgeparts/badgepart_symbol_coalion.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_cocoamug.png'               => 'resources/badgeparts/badgepart_symbol_cocoamug.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_dashflag.png'               => 'resources/badgeparts/badgepart_symbol_dashflag.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diamondring_part2.png'      => 'resources/badgeparts/badgepart_symbol_diamondring_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_diamondring_part1.png'      => 'resources/badgeparts/badgepart_symbol_diamondring_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_discoball_part2.png'        => 'resources/badgeparts/badgepart_symbol_discoball_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_discoball_part1.png'        => 'resources/badgeparts/badgepart_symbol_discoball_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_dog.png'                    => 'resources/badgeparts/badgepart_symbol_dog.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_electricguitarh_part2.png'  => 'resources/badgeparts/badgepart_symbol_electricguitarh_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_electricguitarh_part1.png'  => 'resources/badgeparts/badgepart_symbol_electricguitarh_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_electricguitarv_part2.png'  => 'resources/badgeparts/badgepart_symbol_electricguitarv_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_electricguitarv_part1.png'  => 'resources/badgeparts/badgepart_symbol_electricguitarv_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_film.png'                   => 'resources/badgeparts/badgepart_symbol_film.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flame_part2.png'            => 'resources/badgeparts/badgepart_symbol_flame_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_flame_part1.png'            => 'resources/badgeparts/badgepart_symbol_flame_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gamepad.png'                => 'resources/badgeparts/badgepart_symbol_gamepad.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gem1_part2.png'             => 'resources/badgeparts/badgepart_symbol_gem1_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gem1_part1.png'             => 'resources/badgeparts/badgepart_symbol_gem1_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gem2_part2.png'             => 'resources/badgeparts/badgepart_symbol_gem2_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gem2_part1.png'             => 'resources/badgeparts/badgepart_symbol_gem2_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gem3_part2.png'             => 'resources/badgeparts/badgepart_symbol_gem3_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_gem3_part1.png'             => 'resources/badgeparts/badgepart_symbol_gem3_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_hawk.png'                   => 'resources/badgeparts/badgepart_symbol_hawk.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_hearts_down.png'            => 'resources/badgeparts/badgepart_symbol_hearts_down.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_hearts_up.png'              => 'resources/badgeparts/badgepart_symbol_hearts_up.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_horseshoe.png'              => 'resources/badgeparts/badgepart_symbol_horseshoe.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_inksplatter.png'            => 'resources/badgeparts/badgepart_symbol_inksplatter.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_leaf.png'                   => 'resources/badgeparts/badgepart_symbol_leaf.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_micstand.png'               => 'resources/badgeparts/badgepart_symbol_micstand.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_mirror_part2.png'           => 'resources/badgeparts/badgepart_symbol_mirror_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_mirror_part1.png'           => 'resources/badgeparts/badgepart_symbol_mirror_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_monkeywrench.png'           => 'resources/badgeparts/badgepart_symbol_monkeywrench.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_note1.png'                  => 'resources/badgeparts/badgepart_symbol_note1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_note2.png'                  => 'resources/badgeparts/badgepart_symbol_note2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_note3.png'                  => 'resources/badgeparts/badgepart_symbol_note3.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_nursecross.png'             => 'resources/badgeparts/badgepart_symbol_nursecross.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_pencil_part2.png'           => 'resources/badgeparts/badgepart_symbol_pencil_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_pencil_part1.png'           => 'resources/badgeparts/badgepart_symbol_pencil_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_queen.png'                  => 'resources/badgeparts/badgepart_symbol_queen.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_rock.png'                   => 'resources/badgeparts/badgepart_symbol_rock.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_rook.png'                   => 'resources/badgeparts/badgepart_symbol_rook.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_skate.png'                  => 'resources/badgeparts/badgepart_symbol_skate.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_smallring_part2.png'        => 'resources/badgeparts/badgepart_symbol_smallring_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_smallring_part1.png'        => 'resources/badgeparts/badgepart_symbol_smallring_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_snowstorm_part2.png'        => 'resources/badgeparts/badgepart_symbol_snowstorm_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_snowstorm_part1.png'        => 'resources/badgeparts/badgepart_symbol_snowstorm_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_sphere.png'                 => 'resources/badgeparts/badgepart_symbol_sphere.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_spraycan_part2.png'         => 'resources/badgeparts/badgepart_symbol_spraycan_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_spraycan_part1.png'         => 'resources/badgeparts/badgepart_symbol_spraycan_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stars1.png'                 => 'resources/badgeparts/badgepart_symbol_stars1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stars2.png'                 => 'resources/badgeparts/badgepart_symbol_stars2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stars3.png'                 => 'resources/badgeparts/badgepart_symbol_stars3.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stars4.png'                 => 'resources/badgeparts/badgepart_symbol_stars4.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_stars5.png'                 => 'resources/badgeparts/badgepart_symbol_stars5.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_waterdrop_part2.png'        => 'resources/badgeparts/badgepart_symbol_waterdrop_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_waterdrop_part1.png'        => 'resources/badgeparts/badgepart_symbol_waterdrop_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_wolverine.png'              => 'resources/badgeparts/badgepart_symbol_wolverine.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_0.png'                      => 'resources/badgeparts/badgepart_symbol_0.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_1.png'                      => 'resources/badgeparts/badgepart_symbol_1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_2.png'                      => 'resources/badgeparts/badgepart_symbol_2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_3.png'                      => 'resources/badgeparts/badgepart_symbol_3.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_4.png'                      => 'resources/badgeparts/badgepart_symbol_4.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_5.png'                      => 'resources/badgeparts/badgepart_symbol_5.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_6.png'                      => 'resources/badgeparts/badgepart_symbol_6.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_7.png'                      => 'resources/badgeparts/badgepart_symbol_7.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_8.png'                      => 'resources/badgeparts/badgepart_symbol_8.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_9.png'                      => 'resources/badgeparts/badgepart_symbol_9.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_a.png'                      => 'resources/badgeparts/badgepart_symbol_a.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_b.png'                      => 'resources/badgeparts/badgepart_symbol_b.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_c.png'                      => 'resources/badgeparts/badgepart_symbol_c.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_d.png'                      => 'resources/badgeparts/badgepart_symbol_d.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_e.png'                      => 'resources/badgeparts/badgepart_symbol_e.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_f.png'                      => 'resources/badgeparts/badgepart_symbol_f.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_g.png'                      => 'resources/badgeparts/badgepart_symbol_g.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_h.png'                      => 'resources/badgeparts/badgepart_symbol_h.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_i.png'                      => 'resources/badgeparts/badgepart_symbol_i.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_j.png'                      => 'resources/badgeparts/badgepart_symbol_j.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_k.png'                      => 'resources/badgeparts/badgepart_symbol_k.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_l.png'                      => 'resources/badgeparts/badgepart_symbol_l.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_m.png'                      => 'resources/badgeparts/badgepart_symbol_m.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_n.png'                      => 'resources/badgeparts/badgepart_symbol_n.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_o.png'                      => 'resources/badgeparts/badgepart_symbol_o.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_p.png'                      => 'resources/badgeparts/badgepart_symbol_p.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_q.png'                      => 'resources/badgeparts/badgepart_symbol_q.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_r.png'                      => 'resources/badgeparts/badgepart_symbol_r.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_s.png'                      => 'resources/badgeparts/badgepart_symbol_s.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_t.png'                      => 'resources/badgeparts/badgepart_symbol_t.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_u.png'                      => 'resources/badgeparts/badgepart_symbol_u.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_v.png'                      => 'resources/badgeparts/badgepart_symbol_v.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_w.png'                      => 'resources/badgeparts/badgepart_symbol_w.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_x.png'                      => 'resources/badgeparts/badgepart_symbol_x.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_y.png'                      => 'resources/badgeparts/badgepart_symbol_y.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_z.png'                      => 'resources/badgeparts/badgepart_symbol_z.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_pixel_part2.png'            => 'resources/badgeparts/badgepart_symbol_pixel_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_pixel_part1.png'            => 'resources/badgeparts/badgepart_symbol_pixel_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_credit_part2.png'           => 'resources/badgeparts/badgepart_symbol_credit_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_credit_part1.png'           => 'resources/badgeparts/badgepart_symbol_credit_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_hc_part2.png'               => 'resources/badgeparts/badgepart_symbol_hc_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_hc_part1.png'               => 'resources/badgeparts/badgepart_symbol_hc_part1.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_vip_part2.png'              => 'resources/badgeparts/badgepart_symbol_vip_part2.png',
    'https://images.habbo.com/c_images/Badgeparts/badgepart_symbol_vip_part1.png'              => 'resources/badgeparts/badgepart_symbol_vip_part1.png',
]);

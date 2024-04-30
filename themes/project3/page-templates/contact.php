<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<div class="contact-page-wrapper">
    <div class="contact-page-content">
        <h1><?php the_title(); ?></h1>

        <div class="container">
            <div>
                <div class="contact-section">
                    <h2>Write On! Contact us!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quo commodi est deleniti
                        reprehenderit. Maiores molestiae rem aperiam nihil fugit temporibus, iure incidunt sequi unde
                        quia facere cumque, distinctio libero.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nobis perspiciatis modi sequi
                        odit totam minima quas facere, neque error ea eaque voluptatem, aliquid sunt expedita quia porro
                        voluptate eligendi?</p>
                </div>

                <div class="contact-section">
                    <h2>Privacy Guarantee</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sequi! Quas perferendis et dolor rem
                        explicabo laboriosam saepe quia dolorum harum quod. Sint velit culpa amet nesciunt numquam autem
                        harum.</p>
                </div>

                <div class="contact-section">
                    <h2>Change of Address</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates est, exercitationem quasi
                        illum velit voluptate repellat ipsam commodi esse dicta odit laboriosam perspiciatis animi iure
                        vero fugit, culpa nisi aperiam.</p>
                </div>
            </div>
            <div class="column-container">
                <div class="column">
                    <h2>Phone</h2>
                    <p><?php the_field('phone_number'); ?></p>
                </div>
                <div class="column">
                    <h2>Email</h2>
                    <p><?php the_field('email'); ?></p>
                </div>
                <div class="column">
                    <h2>Address</h2>
                    <p>Box 1270<br>Comox BC Canada<br>V9M 7Z8</p>
                </div>
            </div>

        </div>


    </div>
    <div class="contact_form_heading">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="contact_form">

        <?php echo do_shortcode('[contact-form-7 id="118e277" title="Contact form 2"]'); ?>
    </div>
    <?php get_footer(); ?>
<?php
/**
 * Template Name: Feed
 *
 * Description: 
 *
 *
 * @package WordPress
 * @subpackage foundations
 * @since foundations 1.0
 */

get_header(); ?>


  <div class="row">



 <!-- Nav Sidebar -->
        <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-6 columns push-3">

      <!-- Feed Entry -->
      <div class="row">
        <div class="small-3 large-2 columns "><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="small-9 large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>


          <h6>2 Comments</h6>
          <div class="row">
            <div class="small-3 large-2 columns"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="small-9 large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
          <div class="row">
            <div class="small-3 large-2 columns"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="small-9 large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->

      <hr />

      <!-- Feed Entry -->
      <div class="row">
        <div class="small-3 large-2 columns"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="small-9 large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->

      <hr />

      <!-- Feed Entry -->
      <div class="row">
        <div class="small-3 large-2 columns "><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="small-9 large-10 columns ">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>


          <h6>2 Comments</h6>
          <div class="row">
            <div class="small-3 large-2 columns"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="small-9 large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->

    </div>

    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 columns pull-6">
      <div class="panel">
        <a href="#"><img src="http://placehold.it/300x240&text=[img]" /></a>
        <h5><a href="#">Your Name</a></h5>
        
        <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
      <section class="section">
        <h5 class="title"><a href="#">Section 1</a></h5>
      </section>
      <section class="section">
        <h5 class="title"><a href="#">Section 2</a></h5>
      </section>
      <section class="section">
        <h5 class="title"><a href="#">Section 3</a></h5>
      </section>
      <section class="section">
        <h5 class="title"><a href="#">Section 4</a></h5>
      </section>
      <section class="section">
        <h5 class="title"><a href="#">Section 5</a></h5>
      </section>
      <section class="section">
        <h5 class="title"><a href="#">Section 6</a></h5>
      </section>
      </div>

      </div>
    </div>
 
 
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="large-3 columns hide-for-small">
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
    </aside>

  </div>


<!-- Footer -->
<?php get_footer(); ?>
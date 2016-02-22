<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<div class="site-content">
    <?php
    do_action('get_header');
    get_template_part('templates/header');
    ?>
    <?php include Wrapper\template_path(); ?>
    <?php
    do_action('get_footer');
    get_template_part('templates/footer');
   
    ?>
</div>
<div class="site-menu-mobile">
    <div class="menu-head">
        <button class="btn btn-close"><img src="<?php dist_img('close.png'); ?>"></button>
        <div class="btn btn-convert btn-convert2"><?php do_action('wpml_add_language_selector'); ?></div>
    </div>

    <?php
    if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
    endif;
    ?>
</div>
<?php wp_footer(); ?>

<script type="text/javascript">
    var colors = d3.scale.ordinal().range(['#336699 ','#336699 ','#ACD1E9','#ACD1E9','#ACD1E9']);
    var methodology = [
      {
        id: 'methodology',
        width: 791,
        height: 788,
        radius: Math.min( ( 800, 800 ) / 2 ),
        outer_radius: 390,
        inner_radius: 280,
        x: 205,
        dy: 50,
        rotate: 'rotate(325, 0,0)',
        'pie_data': [
          {
              label: "Partnering",
              id: "partnering",
              color: "#1D526C",
              value: 72 
          },
          {   
              label: "Structure",
              id: "structure",
              color: "#357289",
              value: 72
          },
          {   
              label: "Head Heart",
              id: "head-heart",
              color: "#29A7B5",
              value: 72
          },
          {   
              label: "Transformational",
              id: "transformational",
              color: "#70CACE",
              value: 72
          },
          {   
              label: "Tailored",
              id: "tailored",
              color: "#A1DAE5",
              value: 72
          }
        ]
      },
      {
        id: 'approach',
        width: 550,
        height: 550,
        radius: Math.min( ( 550, 550 ) / 2 ),
        outer_radius: 280,
        inner_radius: 180,
        x: 140,
        dy: 50,
        rotate: '',
        pie_data: [
          {
              label: "Consulting",
              id: "consulting",
              color: "#1D526C",
              value: 50 
          },
          {   
              label: "Facilitating",
              id: "facilitating",
              color: "#357289",
              value: 50
          },
          {   
              label: "Assessment",
              id: "assessment",
              color: "#29A7B5",
              value: 50
          },
          {   
              label: "Training",
              id: "training",
              color: "#70CACE",
              value: 50
          },
          {   
              label: "Coaching",
              id: "coaching",
              color: "#A1DAE5",
              value: 50
          }
        ]
      }
    ];


    var sv = d3.select('.methodology-wheel').append('svg');

    sv.attr('width', methodology[0].width)
      .attr('height', methodology[0].height);

    var pie = d3.layout.pie()
         .value(function(d) {
         return d.value;
      });


    for ( var m in methodology ) {
      var arc = 
        d3.svg.arc()
          .outerRadius( methodology[m].outer_radius )
          .innerRadius( methodology[m].inner_radius );

      var svg = sv.append('g').attr('transform', 'translate('+( methodology[0].width / 2)+','+( methodology[0].height / 2)+') '+ methodology[m].rotate);

      var g = svg.selectAll(".arc-" + m)
          .data(pie(methodology[m].pie_data))
          .enter().append("g")
          .attr("class", 'arc ' + methodology[m].id);

      g.on('mouseover', function() {
        var id = d3.select(this).select("path").attr("id");

        d3.selectAll(".approach-list").classed("active", false);
        d3.select("#approach-" + id).classed("active", true);

        console.log( "#approach-" + id );
        // d3.select(this.parentNode).select("path").style("fill", "#EBEFF0");
        // d3.select(this.parentNode).select("textpath").style("fill", "#98B6C2");
      })
      // .on("mouseout", function() {
      //   d3.select(this.parentNode).selectAll("path").style("fill", function(d,i) { return d.data.color; });
      //   d3.select(this.parentNode).selectAll("textpath").style("fill", "#FFF");
      // });

      g.append("path")
        .attr("id", function(d, i) { return d.data.id; })
        .attr("d", arc)
        .attr("stroke", "#FFF")
        .attr("stroke-width", "5")
        .style("fill", function(d,i) { return d.data.color; });


      g.append("g")
        .attr("transform", function(d) { return "translate(" + arc.centroid(d) + ")"; });

      g.append("text")
        .attr("id", function(d, i) { return methodology[m].id + "-text-" + i; })
        // .attr("transform", function(d){
        //     d.innerRadius = 0;
        //     d.outerRadius = methodology[0].outer_radius + 40;
        //     return "translate(" + arc.centroid(d) + ")";}
        // )
        .attr("x", ( methodology[0].outer_radius / 2 ) + 40 )
        .attr("dy", 50 ) 
        .attr("text-anchor", "middle")
        .attr("font-size", "25")
        .attr("style", "text-transform: uppercase;letter-spacing: .20em;")
        .append("textPath")
        .attr("fill", "#FFF")
        .attr("xlink:href", function(d, i) { return "#" + d.data.id })
        .text(function(d, i) { return d.data.label });
    }


    var g = sv.append("g");
        g.append("circle")
            .attr("id", "center-circle")
                    .attr("cx" , methodology[0].width / 2)
                    .attr("cy" , methodology[0].height / 2)
                    .attr("r" , 180)
                    .attr("fill","#FFF");

        var text = g.append("text")
        .attr("fill", "#3D7485")
        .attr("x", methodology[0].width / 2)
        .attr("dy", methodology[0].height / 2 ) 
        .attr("font-size", "44")
        .attr("style", "text-transform: uppercase;letter-spacing: .10em; font-weight:bold;")
        .attr("text-anchor", "middle")
        .attr("xlink:href", "#center-circle");

        text.append("tspan")
        .attr('x', methodology[0].width / 2)
        .attr('dy', ( methodology[0].height / 2 ) - 50 )
        .text("The")
        text.append("tspan")
        .attr('x', methodology[0].width / 2)
        .attr('dy', 50)
        .text("Leadership")
        text.append("tspan")
        .attr('x', methodology[0].width / 2)
        .attr('dy', 50)
        .text("Group Way");
    

    function angle(d) {
      var a = (d.startAngle + d.endAngle) * 90 / Math.PI - 90;
      return a > 90 ? a - 180 : a;
    }


    d3.selectAll(".methodology-links li").on("click", function() {
        var g = d3.select(this).selectAll("a").attr('id');
        d3.selectAll('g.arc:not(.' + g + ')').selectAll("path").style("fill", "#EBEFF0");
        d3.selectAll('g.arc:not(.' + g + ')').selectAll("textpath").style("fill", "#98B6C2");
        d3.selectAll('g.' + g).selectAll("path").style("fill", function(d,i) { return d.data.color; });
        d3.selectAll('g.' + g).selectAll("textpath").style("fill", "#FFF");

        var self = this;
        d3.selectAll(".methodology-links li").filter(function (x) {
            return self != this;
        }).attr("class", "");

        d3.select(this).attr("class", "active");
    });

    jQuery(document).ready(function() {
        jQuery(".methodology-links li.active").trigger('click');    
    })

    

</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>

(function(window, document, $) {
    'use strict';


    $(function() {
        $(".navbar-menu").sticky({topSpacing:0});

        $('body').on('click', '.navbar-toggle-menu', function() {
            $('.site-content').toggleClass('push-left');
            $('.site-menu-mobile').toggleClass('push-open');
            $('.navbar-toggle-menu').toggleClass('navbar-toggle-menu-none');
            $('body').toggleClass('no-scroll');
        });

        $('body').on('click', '.btn-close', function() {
            $('.site-content').removeClass('push-left');
            $('.site-menu-mobile').removeClass('push-open');
            $('.navbar-toggle-menu').removeClass('navbar-toggle-menu-none');
            $('body').removeClass('no-scroll');
        });

        $('a[href=#next-section]').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });



        var $grid = $( '.blog-post > .row' );

        $('.category-listings li').on('click', function(e) {
            e.preventDefault();
        
            var filter = $('a', this).data('filter');
            $grid.isotope({ filter: filter });

            return false;
        });

        var hashID = window.location.hash.substring(1);

        if ( hashID != undefined && hashID != '' ) {
            $grid.isotope({ filter: "." + hashID });
        } else {

            $('.blogdetails-category-list li:first-child').trigger('click');
        }


        $( ".methodology-links li a#approach" ).click(function() {
          $(this).closest('.methodology-content').removeClass('method-wheel');
          $(this).closest('.methodology-content').toggleClass('approach-wheel');
        });

        $( ".methodology-links li a#methodology" ).click(function() {
          $(this).closest('.methodology-content').removeClass('method-wheel');
          $(this).closest('.methodology-content').toggleClass('approach-wheel');
        });

    });

    $(window).load(function() { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'}).addClass('is-shown');
    });



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

      });

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
        .attr("x", ( methodology[m].outer_radius / 2 )  + 40 )
        .attr("dy", methodology[m].dy ) 
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
    });

    var $list       = $( '.the-leadership-team-list' ),
        $items      = $list.find( '.the-leadership-team-list-item' ),
        setHeights  = function()
        {
            $items.css( 'height', 'auto' );
 
            var perRow = Math.floor( $list.width() / $items.width() );
            if( perRow == null || perRow < 2 ) return true;
 
            for( var i = 0, j = $items.length; i < j; i += perRow )
            {
                var maxHeight   = 0,
                    $row        = $items.slice( i, i + perRow );
 
                $row.each( function()
                {
                    var itemHeight = parseInt( $( this ).outerHeight() );
                    if ( itemHeight > maxHeight ) maxHeight = itemHeight;
                });
                $row.css( 'height', maxHeight );
            }
        };
 
    setHeights();
    $( window ).on( 'resize', setHeights );



})(window, document, jQuery);



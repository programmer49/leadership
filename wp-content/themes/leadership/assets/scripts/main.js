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
        width: 400,
        height: 400,
        radius: Math.min( ( 400, 400 ) / 2 ),
        outer_radius: 150,
        inner_radius: 110,
        x: 205,
        dy: 50,
        rotate: 'rotate(325, 0,0)',
        'pie_data': [
          {
              label: "Partnering",
              id: "partnering",
              color: "#1D526C",
              value: 72,
              dx: 95,
              dy: 25,

          },
          {   
              label: "Structure",
              id: "structure",
              color: "#357289",
              value: 72,
              dx: 95,
              dy: 25,
          },
          {   
              label: "Head Heart",
              id: "head-heart",
              color: "#29A7B5",
              value: 72,
              dx: 300,
              dy: 25,
          },
          {   
              label: "Transformational",
              id: "transformational",
              color: "#70CACE",
              value: 72,
              dx: 300,
              dy: 25,
          },
          {   
              label: "Tailored",
              id: "tailored",
              color: "#A1DAE5",
              value: 72,
              dx: 95,
              dy: 25,
          }
        ]
      },
      {
        id: 'approach',
        width: 380,
        height: 380,
        radius: Math.min( ( 380, 380 ) / 2 ),
        outer_radius: 110,
        inner_radius: 70,
        x: 140,
        dy: 50,
        rotate: '',
        pie_data: [
          {
              label: "Consulting",
              id: "consulting",
              color: "#1D526C",
              value: 50,
              dx: 75,
              dy: 25,
          },
          {   
              label: "Facilitating",
              id: "facilitating",
              color: "#357289",
              value: 50,
              dx: 220,
              dy: 25,
          },
          {   
              label: "Assessment",
              id: "assessment",
              color: "#29A7B5",
              value: 50,
               dx: 220,
              dy: 25,
          },
          {   
              label: "Training",
              id: "training",
              color: "#70CACE",
              value: 50,
               dx: 220,
              dy: 25,
          },
          {   
              label: "Coaching",
              id: "coaching",
              color: "#A1DAE5",
              value: 50,
              dx: 75,
              dy: 25,
          }
        ]
      }
    ];
    var w = 500,
        h = 400;

    var sv = d3.select('.methodology-wheel').append('svg');
    sv.attr("viewBox", "0 0 "+ w +" " + h);

    var pie = d3.layout.pie()
         .value(function(d) {
         return d.value;
        });
    var arc;
    var svg;
    var g;

    for ( var m in methodology ) {
      arc = 
        d3.svg.arc()
          .outerRadius( methodology[m].outer_radius )
          .innerRadius( methodology[m].inner_radius );

      svg = sv.append('g').attr('transform', 'translate('+( w / 2)+','+( h / 2)+') '+ methodology[m].rotate);

      g = svg.selectAll(".arc-" + m)
          .data(pie(methodology[m].pie_data))
          .enter().append("g")
          .attr("class", 'arc ' + methodology[m].id);

      g.on('mouseover', function (d, i) {
  
          d3.select(this).select("path")
            .transition()
              .duration(500)
              .ease('elastic')
          .attr('transform', function (d) {
            var dist = 10;
            d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
            var x = Math.sin(d.midAngle) * dist;
            var y = -Math.cos(d.midAngle) * dist;
            return 'translate(' + x + ',' + y + ')';
          });


          var id = d3.select(this).select("path").attr("id");

            d3.selectAll(".approach-list").classed("active", false);
            d3.select("#approach-" + id).classed("active", true);
        })
        .on('mouseout', function (d, i) {
           var dist = 3;
            d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
            var x = Math.sin(d.midAngle) * dist;
            var y = -Math.cos(d.midAngle) * dist;


          d3.select(this).select("path")
            .transition()
              .duration(500)
              .ease('bounce')
              .attr('transform', 'translate(' + x + ',' + y + ')')
        });


      g.append("path")
        .attr("id", function(d, i) { return d.data.id; })
        .attr("d", arc)
        .attr('transform', function (d) {
            var dist = 3;
            d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
            var x = Math.sin(d.midAngle) * dist;
            var y = -Math.cos(d.midAngle) * dist;
            return 'translate(' + x + ',' + y + ')';
        })
        .style("fill", function(d,i) { return d.data.color; });



      g.append("text")
        .attr("id", function(d, i) { return d.data.id + "-text"; })
        .attr("dx", function(d, i) { return d.data.dx; } )
        .attr("dy", function(d, i) {return d.data.dy; } )
        .attr("text-anchor", "middle")
        .attr("font-size", "8")
        .attr("style", "text-transform: uppercase;letter-spacing: .20em;")
        .append("textPath")
        .attr("fill", "#FFF")
        .attr("xlink:href", function(d, i) { return "#" + d.data.id })
        .text(function(d, i) { return d.data.label });
    }


    g = sv.append("g");
        g.append("circle")
            .attr("id", "center-circle")
                    .attr("cx" , w / 2)
                    .attr("cy" , h / 2)
                    .attr("r" , 70)
                    .attr("fill","#FFF");

        var text = g.append("text")
        .attr("fill", "#3D7485")
        .attr("x", w / 2)
        .attr("dy", h / 2 ) 
        .attr("font-size", "15")
        .attr("style", "text-transform: uppercase;letter-spacing: .10em; font-weight:bold;font-family:ProximaNovaBold;")
        .attr("text-anchor", "middle")
        .attr("xlink:href", "#center-circle");

        text.append("tspan")
        .attr('x', w / 2)
        .attr('dy', ( h / 2 ) - 20 )
        .text("The")
        text.append("tspan")
        .attr('x', w / 2)
        .attr('dy', 20)
        .text("Leadership")
        text.append("tspan")
        .attr('x', w / 2)
        .attr('dy', 20)
        .text("Group Way");



    d3.selectAll(".methodology-links li").on("click", function() {
        g = d3.select(this).selectAll("a").attr('id');
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

})(window, document, jQuery);
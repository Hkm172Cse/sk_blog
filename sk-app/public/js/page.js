// Off Canvas Ja
(function($) {
  'use strict';
  $(function() {
    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.techics-sidebar-offcanvas').toggleClass('active')
    });
  });
})(jQuery);

// Hoverable Collapse
(function($) {
'use strict';
$(document).on('mouseenter mouseleave', '.techics-sidebar .nav-item', function(ev) {
    var body = $('body');
    var sidebarIconOnly = body.hasClass("techics-sidebar-icon-only");
    var sidebarFixed = body.hasClass("techics-sidebar-fixed");
    if (!('ontouchstart' in document.documentElement)) {
    if (sidebarIconOnly) {
        if (sidebarFixed) {
        if (ev.type === 'mouseenter') {
            body.removeClass('techics-sidebar-icon-only');
        }
        } else {
        var $menuItem = $(this);
        if (ev.type === 'mouseenter') {
            $menuItem.addClass('hover-open')
        } else {
            $menuItem.removeClass('hover-open')
        }
        }
    }
    }
});
})(jQuery);

// template js
(function($) {
    $(function() {
        var body = $('body');
        var contentWrapper = $('.content-wrapper');
        var scroller = $('.container-scroller');
        var footer = $('.footer');
        var sidebar = $('.sidebar');

        //Close other submenu in sidebar on opening any
        sidebar.on('show.bs.collapse', '.collapse', function() {
            sidebar.find('.collapse.show').collapse('hide');
        });


        //Change sidebar and content-wrapper height
        applyStyles();

        function applyStyles() {
            //Applying perfect scrollbar
            if (!body.hasClass("rtl")) {
                if ($('.techics-settings-panel .tab-content .tab-pane.scroll-wrapper').length) {
                    new PerfectScrollbar('.techics-settings-panel .tab-content .tab-pane.scroll-wrapper');
                }
                
                if (body.hasClass("sidebar-fixed")) {
                    if($('#sidebar').length) {
                        new PerfectScrollbar('#sidebar');
                    }
                }
            }
        }

        $('[data-toggle="minimize"]').on("click", function() {
        if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
            body.toggleClass('sidebar-hidden');
        } else {
            body.toggleClass('techics-sidebar-icon-only');
        }
        });

        //checkbox and radios
        $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

        //Horizontal menu in mobile
        $('[data-toggle="horizontal-menu-toggle"]').on("click", function() {
        $(".horizontal-menu .bottom-navbar").toggleClass("header-toggled");
        });
        // Horizontal menu navigation in mobile menu on click
        var navItemClicked = $('.horizontal-menu .page-navigation >.nav-item');
        navItemClicked.on("click", function(event) {
        if(window.matchMedia('(max-width: 991px)').matches) {
            if(!($(this).hasClass('show-submenu'))) {
            navItemClicked.removeClass('show-submenu');
            }
            $(this).toggleClass('show-submenu');
        }        
        })

        $(window).scroll(function() {
        if(window.matchMedia('(min-width: 992px)').matches) {
            var header = $('.horizontal-menu');
            if ($(window).scrollTop() >= 70) {
            $(header).addClass('fixed-on-scroll');
            } else {
            $(header).removeClass('fixed-on-scroll');
            }
        }
        });
    });
})(jQuery);

//   Settings js
(function($) {
    'use strict';
    $(function() {
      $(".nav-settings").on("click", function() {
        $("#techics-right-sidebar").toggleClass("open");
      });
      $(".techics-settings-close").on("click", function() {
        $("#techics-right-sidebar,#techics-theme-settings").removeClass("open");
      });
  
      $("#techics-settings-trigger").on("click" , function(){
        $("#techics-theme-settings").toggleClass("open");
      });
  
  
      //background constants
      var navbar_classes = "techics-navbar-dark techics-navbar-primary techics-navbar-secondary";
      var sidebar_classes = "techics-sidebar-light techics-sidebar-dark";
      var $body = $("body");
  
      //sidebar backgrounds
      $("#techics-sidebar-light-theme").on("click" , function(){
        $body.removeClass(sidebar_classes);
        $body.addClass("techics-sidebar-light");
        $(".techics-sidebar-bg-options").removeClass("selected");
        $(this).addClass("selected");
      });
      $("#techics-sidebar-dark-theme").on("click" , function(){
        $body.removeClass(sidebar_classes);
        $body.addClass("techics-sidebar-dark");
        $(".techics-sidebar-bg-options").removeClass("selected");
        $(this).addClass("selected");
      });
  
  
      //Navbar Backgrounds
      $(".tiles.primary").on("click" , function(){
        $(".techics-navbar").removeClass(navbar_classes);
        $(".techics-navbar").addClass("techics-navbar-primary");
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
      $(".tiles.secondary").on("click" , function(){
        $(".techics-navbar").removeClass(navbar_classes);
        $(".techics-navbar").addClass("techics-navbar-secondary");
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
      $(".tiles.dark").on("click" , function(){
        $(".techics-navbar").removeClass(navbar_classes);
        $(".techics-navbar").addClass("techics-navbar-dark");
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
      $(".tiles.default").on("click" , function(){
        $(".techics-navbar").removeClass(navbar_classes);
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
    });
  })(jQuery);

//   Todo list
(function($) {
    'use strict';
    $(function() {
      var todoListItem = $('.todo-list');
      var todoListInput = $('.todo-list-input');
      $('.todo-list-add-btn').on("click",function(event) {
        event.preventDefault();
  
        var item = $(this).prevAll('.todo-list-input').val();
  
        if (item) {
          todoListItem.append("<li><div class='form-check'><label class='form-check-label'><input class='checkbox' type='checkbox'/>" + item + "<i class='input-helper'></i></label></div><i class='remove mdi mdi-close-circle-outline'></i></li>");
          todoListInput.val("");
        }
  
      });
  
      todoListItem.on('change', '.checkbox', function() {
        if ($(this).attr('checked')) {
          $(this).removeAttr('checked');
        } else {
          $(this).attr('checked', 'checked');
        }
  
        $(this).closest("li").toggleClass('techics-completed');
  
      });
  
      todoListItem.on('click', '.remove', function() {
        $(this).parent().remove();
      });
  
    });
  })(jQuery);

  (function($) {
    'use strict';
    $(function() {
      $('.file-upload-browse').on('click', function() {
        var file = $(this).parent().parent().parent().find('.file-upload-default');
        file.trigger('click');
      });
      $('.file-upload-default').on('change', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      });
    });
  })(jQuery);




  // Extra Files

  $(function () {

    var data = {
        labels: ["2013", "2014", "2014", "2015", "2016", "2017"],
        datasets: [{
            label: '# of Votes',
            data: [10, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: false
        }]
    };

    var multiLineData = {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
                label: 'Dataset 1',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: [
                    '#587ce4'
                ],
                borderWidth: 2,
                fill: false
            },
            {
                label: 'Dataset 2',
                data: [5, 23, 7, 12, 42, 23],
                borderColor: [
                    '#ede190'
                ],
                borderWidth: 2,
                fill: false
            },
            {
                label: 'Dataset 3',
                data: [15, 10, 21, 32, 12, 33],
                borderColor: [
                    '#f44252'
                ],
                borderWidth: 2,
                fill: false
            }
        ]
    };
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        }

    };
    var doughnutPieData = {
        datasets: [{
            data: [30, 40, 30],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Pink',
            'Blue',
            'Yellow',
        ]
    };

    var doughnutPieOptions = {
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };

    // Get context with jQuery - using jQuery's .get() method.
    if ($("#barChart").length) {
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: data,
            options: options
        });
    }

    if ($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: data,
            options: options
        });
    }


    if ($("#pieChart").length) {
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }
});








// Sales overview
// -----------------------------------------------------------------------

var options_Sales_Overview = {
    series: [{
            name: "Pixel ",
            data: [9, 5, 3, 7, 5, 10, 3],
        },
        {
            name: "Ample ",
            data: [6, 3, 9, 5, 4, 6, 4],
        },
    ],
    chart: {
        fontFamily: "Poppins,sans-serif",
        type: "bar",
        height: 183,
        offsetY: 10,
        toolbar: {
            show: false,
        },
    },
    grid: {
        show: true,
        strokeDashArray: 3,
        borderColor: "rgba(0,0,0,.1)",
    },
    colors: ["#1e88e5", "#21c1d6"],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: "30%",
            endingShape: "flat",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 5,
        colors: ["transparent"],
    },
    xaxis: {
        type: "category",
        categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        axisTicks: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        labels: {
            style: {
                colors: "#a1aab2",
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                colors: "#a1aab2",
            },
        },
    },
    fill: {
        opacity: 1,
        colors: ["#dc3545", "#ffbec4"],
    },
    tooltip: {
        theme: "dark",
    },
    legend: {
        show: false,
    },
    responsive: [{
        breakpoint: 767,
        options: {
            stroke: {
                show: false,
                width: 5,
                colors: ["transparent"],
            },
        },
    }, ],
};

var chart_column_basic = new ApexCharts(
    document.querySelector("#sales-overview"),
    options_Sales_Overview
);
chart_column_basic.render();

///Monthly Seals//

var options = {
    series: [{
        name: 'Actual',
        responsive: true,
        data:  [{
                x: '1',
                y: 1292,
                goals: [{
                    name: 'Expected',
                    value: 1400,
                    strokeHeight: 5,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '2',
                y: 4432,
                goals: [{
                    name: 'Expected',
                    value: 5400,
                    strokeHeight: 5,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '3',
                y: 5423,
                goals: [{
                    name: 'Expected',
                    value: 5200,
                    strokeHeight: 5,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '4',
                y: 6653,
                goals: [{
                    name: 'Expected',
                    value: 6500,
                    strokeHeight: 5,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '5',
                y: 8133,
                goals: [{
                    name: 'Expected',
                    value: 6600,
                    strokeHeight: 13,
                    strokeWidth: 0,
                    strokeLineCap: 'round',
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '6',
                y: 7132,
                goals: [{
                    name: 'Expected',
                    value: 7500,
                    strokeHeight: 5,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '7',
                y: 7332,
                goals: [{
                    name: 'Expected',
                    value: 8700,
                    strokeHeight: 5,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '8',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '9',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '10',
                y: 4553,
                goals: [{
                    name: 'Expected',
                    value: 4800,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '11',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '12',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '13',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '14',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '15',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '16',
                y: 4663,
                goals: [{
                    name: 'Expected',
                    value: 4900,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },

            {
                x: '17',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '18',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '19',
                y: 6053,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '20',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '21',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '22',
                y: 3553,
                goals: [{
                    name: 'Expected',
                    value: 3300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '23',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '24',
                y: 4553,
                goals: [{
                    name: 'Expected',
                    value: 4200,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '25',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '26',
                y: 6553,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '27',
                y: 6500,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '28',
                y: 6513,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '29',
                y: 6523,
                goals: [{
                    name: 'Expected',
                    value: 7300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '30',
                y: 3233,
                goals: [{
                    name: 'Expected',
                    value: 3600,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            },
            {
                x: '31',
                y: 5543,
                goals: [{
                    name: 'Expected',
                    value: 5300,
                    strokeHeight: 2,
                    strokeDashArray: 2,
                    strokeColor: '#ffbec4'
                }]
            }

        ]
    }],
    chart: {
        height: 350,
        type: 'bar'
    },
    plotOptions: {
        bar: {
            columnWidth: '20%'
        }
    },
    colors: ['#dc3545'],
    dataLabels: {
        enabled: false
    },
    legend: {
        show: true,
        showForSingleSeries: true,
        customLegendItems: ['Actual', 'Expected'],
        markers: {
            fillColors: ['#dc3545', '#ffbec4']
        }
    }
};

var chart = new ApexCharts(document.querySelector("#monthlySals"), options);
chart.render();



//Pie Charts


var options = {
    series: [44, 55, 13, 33],
    chart: {
        width: 380,
        type: 'donut',
    },
    dataLabels: {
        enabled: false
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                show: false
            }
        }
    }],
    legend: {
        position: 'right',
        offsetY: 0,
        height: 230,
    }
};

var chart = new ApexCharts(document.querySelector("#pieChart"), options);
chart.render();


function appendData() {
    var arr = chart.w.globals.series.slice()
    arr.push(Math.floor(Math.random() * (100 - 1 + 1)) + 1)
    return arr;
}

function removeData() {
    var arr = chart.w.globals.series.slice()
    arr.pop()
    return arr;
}

function randomize() {
    return chart.w.globals.series.map(function () {
        return Math.floor(Math.random() * (100 - 1 + 1)) + 1
    })
}

function reset() {
    return options.series
}

document.querySelector("#randomize").addEventListener("click", function () {
    chart.updateSeries(randomize())
})

document.querySelector("#add").addEventListener("click", function () {
    chart.updateSeries(appendData())
})

document.querySelector("#remove").addEventListener("click", function () {
    chart.updateSeries(removeData())
})

document.querySelector("#reset").addEventListener("click", function () {
    chart.updateSeries(reset())
});




//trafic Sourse //


 


///Date Picker///

$(document).ready(function(){
  
  $(function () {
	$('#startDate').datepicker({
   format: 'dd/mm/yyyy' 
  });
  });
	
  
});
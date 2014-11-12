(function($){
  jQuery(document).ready(function() {

    $('.loading p').fadeOut('slow');

     // Relative Dates and Time using Moment.js ===========================================================================
    // http://momentjs.com/docs/#/displaying/format/
    function realTime(el){
      $(el).each(function(){
        var utc = $(this).text();
        var date = moment($(this).attr('title')).format('LLLL');
        moment(utc).format();

        var t = moment(utc).fromNow();
        moment.lang('en', {
          relativeTime : {
            future: "in %s",
            past:   "%s ago",
            s:  "seconds",
            m:  "a minute",
            mm: "%d minutes",
            h:  "1 hour",
            hh: "%d hours",
            d:  "1 day",
            dd: "%d days",
            M:  "1 month",
            MM: "%d months",
            y:  "a year",
            yy: "%d years"
          }
        });
        $(this).html(t);
        $(this).attr('title', date);
      });
    };
    realTime('.rel_time span');
    
  });

})(jQuery);

(function($){
    $(function(){
        var window_width = $(window).width();
        
        // Github Latest Commit
        if ($('.github-commit').length) { // Checks if widget div exists (Index only)
            $.ajax({
                url: "https://api.github.com/repos/Cadiducho/Cadiducho.com/commits/master",
                dataType: "json",
                success: function (data) {
                    var sha = data.sha,
                    date = jQuery.timeago(data.commit.author.date);
                    if (window_width < 1120) {
                        sha = sha.substring(0,7);
                    }
                    $('.github-commit').find('.date').html(date);
                    $('.github-commit').find('.sha').html(sha).attr('href', data.html_url);
                }
            });
        }
        
        $('.button-collapse').sideNav({menuWidth: 240, activationWidth: 1500}); //Quizás 1500 es una salvajada
  });
})(jQuery);

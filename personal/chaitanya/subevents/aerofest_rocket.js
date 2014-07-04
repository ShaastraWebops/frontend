            $(document).ready(function() {
                $('.send').click(function() {
                    setTimeout(function() {
                        $('#plate').removeClass('front');
                        $('#container').removeClass('beginning');
                        $('.curvable').addClass('curved');
                        setTimeout(function() {
                            $('#container').addClass('hover');
                            setTimeout(function() {
                                $('#container').addClass('fly_away_first');
                                setTimeout(function() {
                                    $('#container').addClass('fly_away');
                                    $('#aerofest').animate({ left: '0%' },"slow");
                                    setTimeout(function(){
                                        $('#plate').addClass('front');
                                        $('#container').removeClass('fly_away fly_away_first hover').addClass('beginning');
                                        $('.curvable').removeClass('curved');
                                    },610);                                    
                                }, 600);
                            }, 2000);
                        }, 2800);
                    }, 200);
                });
                
                $('#close_aerofest').click(function() {
                   $('#aerofest').fadeOut(1000); 
                });
                
            });




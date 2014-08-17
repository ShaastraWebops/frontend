

CKEDITOR.plugins.add( 'savebtn', {
    icons: 'savebtn',
    init: function( editor ) {
        editor.addCommand( 'savecontent', {

        	exec : function(editor){
                
                //get the text from ckeditor you want to save
        		var data = editor.getData();
                $editor_form = $(editor.element.$.form);
                $editor_form.find('#' + editor.name).text(data);

                //get the current url
	            var page = document.URL;

                //path to the ajaxloader gif
                loading_icon=CKEDITOR.basePath+'plugins/savebtn/icons/loader.gif';

                //css style for setting the standard save icon. We need this when the request is completed.
                normal_icon=$('.cke_button__savebtn_icon').css('background-image');

                //replace the standard save icon with the ajaxloader icon. We do this with css.
                $('.cke_button__savebtn_icon').css("background-image", "url("+loading_icon+")");

                //Now we are ready to post to the server...
                $.ajax({
                    url: $editor_form.attr('action'),//the url to post at... configured in config.js
                    type: 'POST', 
                    data: $editor_form.serialize(),//editor.name contains the id of the current editable html tag
                })
                .done(function(response) {
                    console.log(response);
                    if (response.msg == 'error')
                        alert('There\'s a problem and we cannot save your data ! Copy all the info so you dont lose it, and contact the webops team');
                    else
                        alert('Saved successfully !');

                })
                .fail(function() {
                    alert('There\'s an error, We cannot connect to the internet. Copy ALL your data and store in a Word document jsut to be safe. And then refresh and try again. Contact WebOps if issue persists.');
                })
                .always(function() {
                    $('.cke_button__savebtn_icon').css("background-image", normal_icon);
                });
                

        	} 
    });


//add the save button to the toolbar

        editor.ui.addButton( 'savebtn', {
            label: 'Save',
            command: 'savecontent'
           // toolbar: 'insert'
        });


    }
});
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="none">
        <title>Flickr Gallery</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/js-flickr-gallery.css">
        <script type="text/javascript" src="js/jquery-1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/js-flickr-gallery.js"></script>
    </head>

    <body>
        <div class="content">

            <section>
                <h1>Galleries</h1>
				<h2>HTML</h2>	
                <div data-tags="html" class="gallery component" data-toggle="jsfg" data-per-page="4"></div>
                <h2>CSS</h2>
                <div data-tags="css" class="gallery component" data-toggle="jsfg" data-per-page="4"></div>
                <div id="shows"></div>

                <div id="container"></div>
                
            </section>
            <br />
            
 


<script type="application/javascript">
var tagList = [];
$(function(){
    $(document).on('click','input[type=submit]',function(){
        $('#tags').append('<div> ' + $('#addtag').val() + '<a href="#" class="item">x</a></div>');
		$("#container").append('<h2>'+ $('#addtag').val() +'</h2><div data-tags="css" class="gallery component" data-toggle="jsfg" data-per-page="4"></div>');
    });
    $(document).on('click','.item',function(){
        $(this).parent().remove();
    });
});
</script>
<!-- we add to our tagList from the value of the following input -->    
<input type="text" value="tag" id="addtag" />
<!-- we call addTotags(); through the following button  -->    
<input type="submit" value="Add Tag" onClick="addTotags();">
<!-- The list of tags is displayed in the following div -->    
<div id="tags"></div>
<!-- -->              

        </div> 
    </body>
</html>

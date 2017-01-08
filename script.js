$(document).ready(function(){
    $(".project-media").click(function(){

    	// Display media in modal
    	if(this.id.toLowerCase().includes('png') === true) {

    		// Image
    		$(".modal-content").html('<img id="modal-media" src="media/' + this.id + '" style=""></img>');
    	} else if(this.id.toLowerCase().includes('webm') === true) {

    		// Webm
    		$(".modal-content").html('<video controls autoplay loop muted><source src="media/' + this.id + '" type="video/webm"></video>');
    	}


        $('#modal').css('display','block');
    });
});
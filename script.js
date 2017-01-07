$(document).ready(function(){
    $(".project-media").click(function(){
    	console.log(this.id);
    	var papa = "";


    	// Images
    	if(this.id.toLowerCase().includes('png') === true) {
    		// Image
    		console.log("jpg");
    		$(".modal-content").html('<img id="modal-media" src="media/' + this.id + '" style="width:100%"></img>');
    	} else if(this.id.toLowerCase().includes('webm') === true) {
    		console.log("web");
    		//$(".modal-content").html("hello");
    		$(".modal-content").html('<video controls autoplay loop muted><source src="media/' + this.id + '" type="video/webm"></video>');
    	} else {
    		console.log("none");
    	}
        //console.log(this.id);
        //$("#modal-media").attr("src", "media/" + this.id);
        $('#modal').css('display','block');
    });
});
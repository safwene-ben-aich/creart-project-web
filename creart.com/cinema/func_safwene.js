$(document).on('click','a',function(){

	

		var id=$(this).attr('id');
		$.post('afficher_commentaires.php',{id:id},function(data){
			$("#feedback"+id).html(data);
			$('#feedback'+id).toggle('show');
			$('#form'+id).toggle('show');



		//Afficher le formulaire & La récupération des variables

			
			$('#form'+id).submit(function(){

				var membre_commentaire= $('#membre_commentaire',this).val();
				var corps_commentaire= $('#corps_commentaire',this).val();

				$.post('post_commentaire.php',{

					id:id,
					membre_commentaire:membre_commentaire,
					corps_commentaire:corps_commentaire



				},function(data){

					$("#feedback"+id).html(data);

				});
				$('#corps_commentaire',this).attr('value',"");

				
				

				return false;

			});


	});


});

	$(document).ready(function() {
        	// Infinite Ajax Scroll configuration
            jQuery.ias({
                container : '.wrap_safwene', // main container where data goes to append
                item: '.item_safwene', // single items
                pagination: '.nav', // page navigation
                next: '.nav a', // next page selector
                loader: '<img src="../css/ajax-loader.gif"/>', // loading gif
                triggerPageThreshold: 3 // show load more if scroll more than this
            });
        });
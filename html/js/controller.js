$( document )
        .ready( function()
        {

        	//when category change

                $( '#tour-category' )
                        .on( 'change', function()
                        {

                                var target = ( this.value );

                                switch ( target )
                                {

                                        case "RF":

                                                for ( var i = 0; i < rafting.length; i++ )
                                                {

                                                        $( '<option/>' )
                                                                .val( rafting[ i ] )
                                                                .html( rafting[ i ] )
                                                                .appendTo( '#tour-select' );
                                                }

                                                break;

                                        case "SK":
                                                // code block
                                                break;

                                        case "CT":
                                                // code block
                                                break;

                                        case "MC":
                                                // code block
                                                break;

                                        default:
                                                alert( 'Please Pick Tour Category' );
                                }

                        } )



                //when book now clicked

	             $("#tour-book").click(function(event){
				        event.preventDefault();
				        
				        		  var tour     = $( "#tour-select"  ).val();
				        		  var adult    = $( "#tour-adult"   ).val();
				        		  var child    = $( "#tour-child"   ).val();
				        		  var nation   = $( "#tour-nation"  ).val();
				        		  var hotel    = $( "#tour-hotel"   ).val();
				        		  var contact  = $( "#tour-contact" ).val();
				        		  var date     = $( "#tour-date" ).val();

				        		  console.log(tour+' '+adult+' '+child+' '+nation+' '+hotel+' '+contact +' '+date);

				        });


} );
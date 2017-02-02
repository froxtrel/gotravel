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

                                                $('#tour-select').empty();

                                                for ( var i = 0; i < rafting.length; i++ )
                                                {

                                                        $( '<option/>' )
                                                                .val( raftingCode[ i ] )
                                                                .html( rafting[ i ] )
                                                                .appendTo( '#tour-select' );
                                                }

                                                break;

                                        case "SK":

                                                $('#tour-select').empty();
                                                
                                                for ( var i = 0; i < kayaking.length; i++ )
                                                {

                                                        $( '<option/>' )
                                                                .val( kayakingCode[ i ] )
                                                                .html( kayaking[ i ] )
                                                                .appendTo( '#tour-select' );
                                                }


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

          
});
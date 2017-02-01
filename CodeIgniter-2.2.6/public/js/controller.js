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

          
});
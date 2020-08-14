<?php
// Retrieve list of Pokemon from API.
function retrieveBlogs ( ) {
  // Retrieve response string from API endpoint.

  $responseString = file_get_contents( "./data/data.json" );
 
  //var_dump( $responseString ); // AWESOME! We're getting a result!
  // Convert response JSON string into a PHP array / object.
  if ( $responseString !== FALSE ) {
    // Convert the JSON string into a valid PHP object using json_decode().
    if ( ( $responseObj = json_decode( $responseString ) ) !== NULL ) {
      //var_dump( $responseObj );
      // Collect the array of results from the response object's "results" property.
     // $results = $responseObj->results;
     // var_dump( $responseObj );
      return $responseObj;
      

    } else { // Could not convert string to object (json_decode().)
      echo 'Could not interpret API response.';
    }
  } else { // Unable to get a response at all from our API endpoint.
    echo 'Unable to connect / retrieve data from API.';
  }
  return FALSE;
}

?>

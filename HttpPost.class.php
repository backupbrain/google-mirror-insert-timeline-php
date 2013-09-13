<?
// HttpPost.class.php

/*
 * Copyright (C) 2013 Tony Gaitatzis
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Author: Tony Gaitatzis - http://www.linkedin.com/in/tonygaitatzis
 * This code complements the online tutorial:
 * http://20missionglass.tumblr.com/post/61150784385/post-content-to-the-glass-timeline
 */

class HttpPost {
          public $url;
          public $headers;
          public $postString;
          public $httpResponse;

          public $ch;

          public function __construct($url) {
                   $this->url = $url;
                   $this->ch = curl_init( $this->url );
                   curl_setopt( $this->ch, CURLOPT_FOLLOWLOCATION, false );
                   curl_setopt( $this->ch, CURLOPT_HEADER, false );
                   curl_setopt( $this->ch, CURLOPT_RETURNTRANSFER, true );
          }


          public function __destruct() {
                    curl_close($this->ch);
          }    
          public function setHeaders( $headers ) {
                   curl_setopt( $this->ch, CURLOPT_HTTPHEADER, $headers );
          }
          public function setRawPostData( $params ) {
                   $this->postString = $params;
                   curl_setopt( $this->ch, CURLOPT_POST, true );
                   curl_setopt ( $this->ch, CURLOPT_POSTFIELDS, $this->postString );
          }
          public function setPostData( $params ) {
                   // http_build_query encodes URLs, which breaks POST data
                   $this->setRawPostData( urldecode(http_build_query( $params )) );
          }

          public function send() {
                   $this->httpResponse = curl_exec( $this->ch );
          }

          public function getHttpResponse() {
                    return $this->httpResponse;
          }
}

?>


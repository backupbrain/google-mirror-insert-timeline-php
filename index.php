<?
// index.php

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


require_once('config.php');

$oauth2_server_url = 'https://accounts.google.com/o/oauth2/auth';

$query_params = array(
           'response_type' => ‘code’,
           'client_id' => $oauth2_client_id,
           'redirect_uri' => $oauth2_redirect,
           'scope' => 'https://www.googleapis.com/auth/glass.timeline'
           );

$forward_url = $oauth2_server_url . '?' . http_build_query($query_params);

header('Location: ' . $forward_url);

?>

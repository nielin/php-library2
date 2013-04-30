<?php

//    Copyright 2012 Urban Airship
//
//    Licensed under the Apache License, Version 2.0 (the "License");
//    you may not use this file except in compliance with the License.
//    You may obtain a copy of the License at
//
//    http://www.apache.org/licenses/LICENSE-2.0
//
//    Unless required by applicable law or agreed to in writing, software
//    distributed under the License is distributed on an "AS IS" BASIS,
//    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//    See the License for the specific language governing permissions and
//    limitations under the License.

require_once "HTTP/Request2.php";

class RESTClient {

    public static function createBasicAuthRequest($method, $url, $user, $password){
        $request = new HTTP_Request2($url);
        $request->setMethod($method);
        // Defaults to basic auth, which is what we're looking for
        $request->setAuth($user, $password);
        return $request;
    }

}